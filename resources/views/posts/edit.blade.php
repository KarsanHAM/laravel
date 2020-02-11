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
                            <input class="input" type="text" name="title" id="title" value="{{$post->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>

                        <div>
                            <input class="input" type="text" name="excerpt" id="excerpt" value="{{$post->excerpt}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>

                        <div>
                            <input class="input" type="text" name="body" id="body" value="{{$post->body}}>
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
