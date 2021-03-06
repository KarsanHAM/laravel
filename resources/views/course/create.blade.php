@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div col-6>
                <h1>New Course</h1>
                <form method="POST" action="/dashboard/courses">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>

                        <div>
                        <textarea
                            class="input @if ($errors->has('name')){{"alert-danger"}}@endif"
                            id="name"
                            name="name"
                            type="text">{{ old('name') }}</textarea>

                            @if ($errors->has('name'))
                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="EC">EC</label>

                        <div>
                            <textarea class="input @if ($errors->has('EC')){{'alert alert-danger'}}@endif"
                                      type="text" name="EC" id="EC">{{ old('EC') }}</textarea>
                            @if ($errors->has('EC'))
                                <p class="alert alert-danger">{{$errors->first('EC')}}</p>
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
