
@extends('layouts.app')

@section('content')
<h2 class="flex text-center pb-3">Latest Posts</h2>
<div class="container">
<div class="row">

    @foreach($posts as $post)
    <div class="mx-auto col-10">
        <div class="py-40 bg-gray-300 mb-3">
            <div class="h-screen">
                <div class="max-w-md mx-auto bg-dark shadow-lg p-3 rounded-md overflow-hidden md:max-w-md">
                    <div class="md:flex">
                        <div class="w-full text-blue-600">
                            <div class="d-flex justify-content-between items-center p-3 text-white">
                                <div><h5>{{ $post->caption }}</h5></div>
                                <div>
                                    <h3>{{ $post->user->username }}</h3>
                                    @if($post->user_id != Auth::user()->id)
                                        <a href="/profile/{{ $post->user->id }}" class="btn btn-outline-light btn-sm">view profile..</a>
                                    @endif
                                </div>
                            </div>
                            <div style=" height: 420px " class="pb-2 h-420px imgContainer">
                                <img src="/storage/{{ $post->image }}" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                        </div>

                    </div>
                    <div class="bg-dark pt-2">
                        <a href="/p/{{ $post->id }}" class="btn btn-outline-light btn-sm btn-block">view post..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>


@endsection