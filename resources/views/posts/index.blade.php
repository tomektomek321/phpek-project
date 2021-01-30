
@extends('layouts.app')

@section('content')
<h2 class="flex text-center pb-3">Latest Posts</h2>
<div class="container">
<div class="row">

    @foreach($posts as $post)
    <div class="mx-auto col-9">
        <div class="py-40 bg-gray-300 mb-3">
            <div class="h-screen px-2">
                <div class="max-w-md mx-auto bg-dark shadow-lg p-3 rounded-md overflow-hidden md:max-w-md">
                    <div class="md:flex">
                        <div class="w-full text-blue-600">
                            <div class="flex justify-between items-center p-3 text-white">
                                <h5>{{ $post->caption }}</h5>
                                <h3>{{ $post->user->username }}
                                    <a href="/profile/{{ $post->user->id }}" class="btn btn-outline-light btn-sm">view profile..</a>
                                </h3>
                                <!-- <div class="flex flex-row items-center"> <img src="https://i.imgur.com/aq39RMA.jpg" class="rounded-full" width="40">
                                    <div class="flex flex-row items-center ml-2"> <span class="font-bold  mr-1">Mautic War</span> <small class="h-1 w-1 bg-gray-300 rounded-full mr-1 mt-1"></small> <a href="#" class="text-blue-600 text-sm hover:text-blue-800">Follow</a> </div>
                                </div> -->
                                <div class="pr-2"> <i class="fa fa-ellipsis-h text-blue-600 hover:cursor-pointer hover:text-gray-600"></i> </div>
                            </div>
                            <div style=" height: 420px " class="pb-2 h-420px">
                                <img src="/storage/{{ $post->image }}" class="w-100 h-100" style="object-fit: cover;">
                            </div>

                            <!-- <div class="p-4 flex justify-between items-center">
                                <div class="flex flex-row items-center"> <i class="fa fa-heart-o mr-2 fa-1x hover:text-gray-600"></i> <i class="fa fa-comment-o mr-2 fa-1x hover:text-gray-600"></i> <i class="fa fa-send-o mr-2 fa-1x hover:text-gray-600"></i> </div>
                                <div> <i class="fa fa-bookmark-o fa-1x hover:text-gray-600"></i> </div>
                            </div> -->
                        </div>

                    </div>
                    <div class="bg-dark">
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