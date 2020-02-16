@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div col-6>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
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
                        <td>{{$assignment->name}}</td>
                        <td>{{$assignment->weight . '%'}}</td>
                        <td>{{$assignment->grade}}</td>
                        <td>{{$assignment->passed}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
