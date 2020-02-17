@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div col-6>
                <h1>New Assignment</h1>
                <form method="POST" action="/dashboard/assignments">
                    @csrf

                    <div class="form-group">
                        <label for="course">Select Course</label>

                        <div>
                        <select id="course_id" name="course_id">
                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>

                        <div>
                            <textarea class="input @if ($errors->has('name')){{'alert alert-danger'}}@endif"
                                      type="text" name="name" id="name">{{ old('name') }}</textarea>
                            @if ($errors->has('name'))
                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>

                        <div>
                            <input class="input @if ($errors->has('weight')){{'alert alert-danger'}}@endif"
                                      type="number" name="weight" id="weight">{{ old('weight') }}
                            @if ($errors->has('weight'))
                                <p class="alert alert-danger">{{$errors->first('weight')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade</label>

                        <div>
                            <input class="input @if ($errors->has('grade')){{'alert alert-danger'}}@endif"
                                   type="number" name="grade" id="grade">{{ old('weight') }}
                            @if ($errors->has('grade'))
                                <p class="alert alert-danger">{{$errors->first('grade')}}</p>
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
