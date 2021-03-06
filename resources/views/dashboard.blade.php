<!DOCTYPE html>
<html lang="en">
<!-- Header -->
@include('partials.head')
<body>
<!-- Navbar -->
@include ('partials.nav')
<!-- Page name -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Mijn dashboard</h1>
        </div>
    </div>
    <!-- NBSA Progress bar -->
    <div class="row mt-5 text-center">
        <div class="col-xl-6 col-12 mx-auto text-center">
            <h3></h3>
            <div class="dollartimes-pb" style="font-family: arial; width: 300px; box-sizing: border-box; clear:both;">
                <div class="dollartimes-pb-title" style="font-size:16px; overflow: hidden;">NBSA Grens</div>
                <div>
                    <div class="dollartimes-pb-frame" title="EC0 / 0% towards goal"
                         style="border-radius: 5px; background-color: #ffffff;padding: 0px;border: 1px solid #000; height: 30px; margin: 2px 0 1px;">
                        <div class="dollartimes-pb-fill"
                             style="width:0%; height: 100%; margin-top: 0px; background: repeating-linear-gradient(-45deg, rgba(154,157,163,1), rgba(154,157,163,1) 8px, rgba(154,157,163,0.8) 8px, rgba(154,157,163,0.8) 16px);">
                            &nbsp;
                        </div>
                    </div>
                    <span class="dollartimes-pb-caption" style="float: left; font-size: 12px;">EC0</span>
                    <span class="dollartimes-pb-caption" style="float: right; font-size: 12px;">EC45</span>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div col-xl-6>
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
                Hey dit werkt niet
                @foreach($courses as $course)
                    <td><a href="dashboard/courses/{{$course->id}}">{{$course->name}}</a><a
                            href="dashboard/courses/{{$course->id}}/edit"><i class="fas fa-pencil-alt"
                                                                             style="font-size: 15px;color: blue"></i></a>
                        <form method="POST" action="{{route('course.destroy', $course->id)}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn" value="&#128465;" type="submit" style="width:50px">
                        </form>
                    </td>
                    <td>{{$course->EC}}</td>
                    @php($counter = 0)
                    @foreach($assignments as $assignment)
                        @if ($assignment->course_id === $course->id)
                            @if($counter >= 1)
                                <td></td>
                                <td></td>
                            @endif
                            <td><a href="dashboard/assignments/{{$assignment->id}}">{{$assignment->name}}</a><a
                                    href="dashboard/assignments/{{$assignment->id}}/edit"><i
                                        class="fas fa-pencil-alt"
                                        style="font-size: 15px;color: blue"></i></a>
                                <form method="POST" action="{{route('assignment.destroy', $assignment->id)}}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn" value="&#128465;" type="submit" style="width:50px">
                                </form>
                            </td>
                            <td>{{$assignment->weight . '%'}}</td>
                            <td>{{$assignment->grade}}</td>
                            @if($counter === 0)
                                @if($course->passed === true)
                                    <td>&#10004;</td>
                                @else
                                    <td>&#10060;</td>
                                    @endif
                                    @endif
                                    @php($counter++)
                                    </tr>
                                @endif
                                @endforeach
                                @endforeach
            </table>
            <a class="button-green" href="/dashboard/assignments/create">Create Assignment</a>
            <a class="button-green" href="/dashboard/courses/create">Create Course</a>
        </div>
    </div>
    <!-- List of usefull links -->
    <div class="row mt-5">
        <div class="col-xl-6 col-12 allcols">
            <ul>Studiewijzer(Relevant Links):
                <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/OER-HZ-2019-2020-Ba.pdf">Het Onderwijs en
                        Examenregelement (OER)</a></li>
                <li><a
                        href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/9.-HBO-ICT-vt-Uitvoeringsregeling-HZ-2018%E2%80%932019.pdf">Uitvoeringsregelement
                        HBO-ICT</a></li>
                <li><a href="https://learn.hz.nl/my/">Learn omgeving</a></li>
                <li><a
                        href="https://teams.microsoft.com/_#/school/conversations/Algemeen?threadId=19:827654897ab746089c081f24aff1c984@thread.skype&ctx=channel">Teams
                        omgeving algemeen HBO-ICT</a></li>
                <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus"> Studievoortgang</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT">Github van HBO-ICT</a></li>
        </div>
    </div>
    </ul>
</div>
</body>
<!-- Footer -->
@include ('partials.footer')
</html>
