@extends ('layout')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-12">
        <h1>New Post</h1>
            <form method="POST" action="/blog">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>

                    <div>
                        <textarea class="input @if ($errors->has('title')){{"alert-danger"}}@endif" type="text" name="title" id="title"></textarea>
                        @if ($errors->has('title'))
                            <p class="alert alert-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>

                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>

                    <div>
                        <textarea class="input @if ($errors->has('excerpt')){{'alert alert-danger'}}@endif" type="text" name="excerpt" id="excerpt"></textarea>
                        @if ($errors->has('excerpt'))
                            <p class="alert alert-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="body">Body</label>

                    <div>
                        <textarea class="input @if ($errors->has('body')){{'alert alert-danger'}}@endif" type="text" name="body" id="body"></textarea>
                        @if ($errors->has('body'))
                        <p class="alert alert-danger">{{$errors->first('body')}}</p>
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
