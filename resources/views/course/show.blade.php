@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div col-6>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        {{--                    <th>Blok</th>--}}
                        <th>Cursus</th>
                        <th>EC</th>
                        <th>Toetsing</th>
                        <th>Weging</th>
                        <th>Cijfer</th>
                        <th>Onderdeel behaald</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->EC}}</td>
                        <?php $counter = 0; ?>
                        @foreach($assignments as $assignment)
                            @if ($assignment->course_id === $course->id)
                                @if($counter >= 1)
                                    <td></td>
                                    <td></td>
                                @endif
                                <td>{{$assignment->name}}</td>
                                <td>{{$assignment->weight . '%'}}</td>
                                <td>{{$assignment->grade}}</td>
                                <td>{{$assignment->passed}}</td>
                                <?php $counter++; ?>
                    </tr>
                    @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
