@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-6">

            <a href="/profile/1">profile 1</a>

            <div class="card">
                <div class="card-header">Hej {{ $user->username }}: Edytujesz post !</div>

                <div class="card-body">
                    <div>{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                    <div> ====================================== </div>

                    <form action="/profile/{{$user->id}}" enctype="multipart/form-data"  method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">profile title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>xxx</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">profile description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>xxx</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="desciption" class="col-md-4 col-form-label text-md-right">profile url</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>xxx</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="image" class="form-control-label">Profile image</label>

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
                                    save/Update profile
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <div class="col-md-6">




        </div>

    </div>
</div>
@endsection
