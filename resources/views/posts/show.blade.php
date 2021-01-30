
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="mx-auto col-9">
            <div class="py-40 bg-gray-300 mb-3">
                <div class="h-screen px-2">
                    <div class="max-w-md mx-auto bg-dark shadow-lg p-3 rounded-md overflow-hidden md:max-w-md">
                        <div class="md:flex">
                            <div class="w-full text-blue-600">
                                <div class="d-flex justify-content-between items-center p-3 text-white">
                                    <div><h3>{{ $post->caption }}</h3></div>
                                    <div>
                                        <h6>{{ $post->user->username }}</h6>
                                        <h6><a href="/profile/{{ $post->user->id }}" class="btn btn-outline-light btn-sm">view profile..</a></h6>
                                    </div>
                                </div>
                                <div style=" height: 420px " class="pb-2 h-420px">
                                    <img src="/storage/{{ $post->image }}" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <div class="bg-dark">
                            {{ $post->user->content }}
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-3">
                            <div class="d-flex flex-row icons d-flex align-items-center"> <i class="fa fa-heart"></i> <i class="fa fa-smile-o ml-2"></i> </div>
                            <div class="d-flex flex-row muted-color"> <span>2 comments</span> <span class="ml-2">Share</span> </div>
                        </div>

                        <div class="comments text-white">

                            <div class="d-flex flex-row my-2">
                                <img src="https://i.imgur.com/9AZ2QX1.jpg" width="40" class="rounded-image">
                                <div class="d-flex flex-column ml-2">
                                    <span class="name">Daniel Frozer</span>
                                    <small class="comment-text">I like this alot! thanks alot</small>
                                    <div class="d-flex flex-row align-items-center status">
                                        <small>Like</small>
                                        <small>Reply</small>
                                        <small>Translate</small>
                                        <small>18 mins</small>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row mb-2">
                                <img src="https://i.imgur.com/1YrCKa1.jpg" width="40" class="rounded-image">
                                <div class="d-flex flex-column ml-2">
                                    <span class="name">Elizabeth goodmen</span>
                                    <small class="comment-text">Thanks for sharing!</small>
                                    <div class="d-flex flex-row align-items-center status">
                                        <small>Like</small>
                                        <small>Reply</small>
                                        <small>Translate</small>
                                        <small>8 mins</small>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-input mt-3">
                                <input type="text" class="form-control">
                                <div class="fonts"> <i class="fa fa-camera"></i> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


