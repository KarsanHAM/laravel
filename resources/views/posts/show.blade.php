@extends('layout')
@section('content')
    <ul>
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
    </ul>
@endsection
