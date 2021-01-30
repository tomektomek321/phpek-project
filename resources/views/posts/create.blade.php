@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create  post</div>

                <div class="card-body">

                    <form action="/p" enctype="multipart/form-data"  method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>xxx</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postContent" class="col-md-4 col-form-label text-md-right">Post postContent</label>

                            <div class="col-md-6">
                                <textarea id="postContent" type="textarea" class="form-control @error('postContent') is-invalid @enderror" name="postContent" required autocomplete="postContent" autofocus>
                                    {{ old('postContent') }}
                                </textarea>

                                @error('postContent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>post content ?</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="form-control-label">Post image</label>

                            <input type="file" class="form-controll-file" id="image" name="image" >
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>xxx</strong>
                                </span>
                            @enderror
                        </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
