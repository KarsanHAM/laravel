@extends('layout')
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>Edit current article</h1>
                <form method="POST" action="/blog/{{$post->id}}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>

                        <div>
                            <input class="input @if ($errors->has('title')){{'alert alert-danger'}}@endif" type="text"
                                   name="title" id="title" value="{{$post->title}}">
                            @if ($errors->has('title'))
                                <p class="alert alert-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>

                        <div>
                            <input class="input @if ($errors->has('excerpt')){{'alert alert-danger'}}@endif" type="text"
                                   name="excerpt" id="excerpt" value="{{$post->excerpt}}">
                            @if ($errors->has('excerpt'))
                                <p class="alert alert-danger">{{$errors->first('excerpt')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>

                        <div>
                            <input class="input @if($errors->has('body')){{'alert alert-danger'}}@endif" type="text"
                                   name="body" id="body" value="{{$post->body}}">
                            @if ($errors->has('body'))
                                <p class="alert alert-danger"> {{$errors->first('body')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="button-blue" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
