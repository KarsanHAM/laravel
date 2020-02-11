@extends('layout')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <ul>
                    @foreach($posts as $post)
                        <h2>
                            <a href="blog/{{$post->id}}">{{$post->title}}</a>
                        </h2>
                        <p> {!! $post->excerpt !!} </p>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
