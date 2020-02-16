<!DOCTYPE html>
<html lang="en">
<!-- Header -->
@include('partials.head')
<body>
<!-- Navbar -->
@include ('partials.nav');
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
                            &nbsp;</div>
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
{{--                    <th>Blok</th>--}}
                    <th>Cursus</th>
                    <th>EC</th>
                    <th>Weging</th>
                    <th>EC</th>
                    <th>Cijfer</th>
                    <th>Onderdeel behaald</th>
                </tr>
                </thead>
                @foreach($courses as $course)
                    @foreach($assignments as $assignment)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->EC}}</td>
                        @if ($assignment->course_id === $course->id)
                        <td>{{$assignment->name}}</td>
                        <td>{{$assignment->weight}}</td>
                        <td>{{$assignment->grade}}</td>
                        <td>{{$assignment->passed}}</td>
                    </tr>
                        @else
                        <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        @endif
                        @endforeach
                    @endforeach
            </table>
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
                <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus"> Studievoortgang</a> </li>
                <li><a href="https://github.com/HZ-HBO-ICT">Github van HBO-ICT</a></li>
        </div>
    </div>
    </ul>
</div>
</body>
<!-- Footer -->
@include ('partials.footer');
</html>
