@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div col-6>
                <h1>Edit course: {{$course->name}}</h1>
                <form method="POST" action="/dashboard/courses/{{$course->id}}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <div>
                        <textarea
                            class="input @if ($errors->has('name')){{"alert-danger"}}@endif"
                            id="name"
                            name="name"
                            type="text">{{ old('name') }}{{$course->name}}</textarea>

                            @if ($errors->has('name'))
                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="EC">EC</label>

                        <div>
                            <textarea class="input @if ($errors->has('EC')){{'alert alert-danger'}}@endif"
                                      type="text" name="EC" id="EC">{{ old('EC') }}{{$course->EC}}</textarea>
                            @if ($errors->has('EC'))
                                <p class="alert alert-danger">{{$errors->first('EC')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="button-blue" type="submit">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
