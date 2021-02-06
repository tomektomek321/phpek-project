@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-5">
        <div class="col-md-10 mx-auto">
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-5 pb-4 cover bg-dark">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3">
                            <img src="{{ $user->profile->profileImage() }}" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            @can('update', $user->profile)
                                <a href="/profile/{{ Auth::user()->id }}/edit" class="btn btn-outline-light btn-sm btn-block">Edit profile</a>
                            @endcan
                        </div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0">{{ $user->username }}</h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{ $user->profile->title }}</p>
                        </div>
                        @if($user->profile->id != Auth::user()->id)
                        <div id="example" class="nic1" followUser="{{ Auth::user() }}"></div>
                        @endif
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{ $postsCount }}</h5>
                            <small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{ $followersCount }}</h5>
                            <small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">{{ $followingCount }}</h5>
                            <small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                        </li>
                    </ul>
                </div>
                <div class="py-4 px-4">
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="mb-0">Recent posts</h5>
                        <!-- <a href="#" class="btn btn-link text-muted">Show all</a> -->
                    </div>
                    <div class="row">
                        @foreach($user->posts as $post)
                            <div class="py-40 bg-gray-300 mb-2">
                                <div class="h-screen px-2">
                                    <div class="max-w-md mx-auto bg-dark shadow-lg p-3 rounded-md overflow-hidden md:max-w-md">
                                        <div class="md:flex">
                                            <div class="w-full text-blue-600">
                                                <div class="d-flex justify-content-between items-center p-3 text-white">
                                                    <div><h3>{{ $post->caption }}</h3></div>
                                                    @if($user->profile->id == Auth::user()->id)
                                                        <div class="text-blue-600 text-sm hover:text-blue-800">
                                                            <form action="/p/{{ $post->user->id }}" enctype="multipart/form-data"  method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-warning">Delete</button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div style=" height: 420px; overflow:hidden" class="imgContainer h-420px">
                                                    <img src="/storage/{{ $post->image }}" class="w-100">
                                                </div>
                                                <div class="bg-dark mt-3">
                                                    <a href="/p/{{ $post->id }}" class="btn btn-outline-light btn-sm btn-block">view post..</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
