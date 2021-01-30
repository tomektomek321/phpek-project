@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-5 pt-3 px-4">
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
                        <div id="example" class="nic1" followUser="{{ Auth::user() }}">

                        </div>
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
                                                <div class="flex justify-between items-center p-3 text-white">
                                                    <h3>{{ $post->caption }}</h3>
                                                    <a href="/p/{{ $post->id }}" class="btn btn-outline-light btn-sm">view post..</a>
                                                    <!-- <div class="flex flex-row items-center"> <img src="https://i.imgur.com/aq39RMA.jpg" class="rounded-full" width="40">
                                                        <div class="flex flex-row items-center ml-2"> <span class="font-bold  mr-1">Mautic War</span> <small class="h-1 w-1 bg-gray-300 rounded-full mr-1 mt-1"></small> <a href="#" class="text-blue-600 text-sm hover:text-blue-800">Follow</a> </div>
                                                    </div> -->
                                                    <div class="pr-2"> <i class="fa fa-ellipsis-h text-blue-600 hover:cursor-pointer hover:text-gray-600"></i> </div>
                                                </div>
                                                <div style=" height: 420px " class="h-420px">
                                                    <img src="/storage/{{ $post->image }}" class="w-100">
                                                </div>
                                                <!-- <div class="p-4 flex justify-between items-center">
                                                    <div class="flex flex-row items-center"> <i class="fa fa-heart-o mr-2 fa-1x hover:text-gray-600"></i> <i class="fa fa-comment-o mr-2 fa-1x hover:text-gray-600"></i> <i class="fa fa-send-o mr-2 fa-1x hover:text-gray-600"></i> </div>
                                                    <div> <i class="fa fa-bookmark-o fa-1x hover:text-gray-600"></i> </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--
                                <a href="/p/{{ $post->id }}">
                            -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
