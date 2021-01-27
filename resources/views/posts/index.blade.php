
@extends('layouts.app')

@section('content')

<div class="">
Posty
    @foreach($posts as $post)
    <div class="offset-2 col-6">
        <div> {{ $post->caption }}</div>

            <div> <a href="#"><img src="/storage/{{ $post->image }}" class="w-100"> <a></div>
            

        </div>

    </div>
    @endforeach
</div>


@endsection