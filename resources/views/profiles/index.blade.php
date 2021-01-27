@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!--@can('update', $user->profile->image )  @endcan --> 
        <a href="/profile/1">profile 1</a> ////   <a href="/p/create">Dodaj post</a>
            <div class="card">

                <div class="card-header">Hej {{ $user->username }}</div>
                
                <div class="card-header">
                    <div id="example" data-user="{{ $user->id }}" data-follows="{{ $follows }}"></div>
                </div>

                <div class="card-header">
                    foto: 
                    <img style="width:300px; height:300px" src="{{ $user->profile->profileImage() }}"> 
                </div>

                <div class="card-header">{{ $postsCount }} posts</div>
                <div class="card-header">{{ $followersCount }} followers</div>
                <div class="card-header">{{ $followingCount }} following</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    <div>{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>

                    @can('update', $user->profile)
                    <div><h4><a href="/profile/{{ $user->id }}/edit">Edit profile</a></h4></div>

                    @endcan

                    <div>
                        <a>
                            <button class="btn btn-warning">Czesc</button> 
                        </a>
                    </div>



                </div>

            </div>
        </div>
        <div class="col-md-6">


                @foreach($user->posts as $post)
                    <div>
                        <div> {{ $post->caption }}</div>

                        <div> <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"> <a></div>
                        

                    </div>
                @endforeach



        </div>
    </div>
</div>
@endsection
