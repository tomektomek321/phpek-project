<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{


    public function index($user)
    {

        //dd(\App\Models\User::find($user));
        
        $user = \App\Models\User::findOrFail($user);

        //echo auth()->user()->following->contains($user->id);

        $follows = (auth()->user()->following->contains($user->id) == 1) ? true : false;
        
        $postsCount = Cache::remember(
            'count.posts'.$user->id,
            now()->addSeconds(60),
            function() use($user) {
                return $user->posts->count();
        });
        
        $followersCount = Cache::remember(
            'followers.posts'.$user->id,
            now()->addSeconds(60),
            function() use($user) {
                return $user->profile->followers->count();
        });
        
        $followingCount = Cache::remember(
            'following.posts'.$user->id,
            now()->addSeconds(60),
            function() use($user) {
                return $user->following->count();
        });



        //print_r($user->posts[3]);
        
        return view('profiles.index', [
            'user' => $user,
            'follows' => $follows,
            'postsCount' => $postsCount,
            'followersCount' => $followersCount,
            'followingCount' => $followingCount,
        
        ]);

    }


    public function edit(\App\Models\User $user) {
        $this->authorize('update', $user->profile);


        //dd(request()->all());
        return view('profiles.edit', compact('user'));
    
    }


    public function update(\App\Models\User $user) {

        $this->authorize('update', $user->profile);
        
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        //dd(request()->all());

        if(request('image')) {
            $imgPath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imgPath}"))->fit(800, 800);
            $image->save();

            auth()->user()->profile->update(array_merge($data, ['image' => $imgPath]));
        } else {
            auth()->user()->profile->update($data);
        }



        return redirect("/profile/{$user->id}");
    
    }


}
