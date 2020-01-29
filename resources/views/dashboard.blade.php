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
        <!-- Studiewijzer Table -->
        <div class="col-xl-6 col-12">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>Blok</th>
                    <th>Cursus</th>
                    <th>Toets</th>
                    <th>Weging</th>
                    <th>EC</th>
                    <th>Cijfer</th>
                    <th>Onderdeel behaald</th>
                </tr>
                </thead>
                <tr>
                    <td>B1</td>
                    <td>Opleidings- en beroepsorientatie</td>
                    <td>Eindgesprek</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <!-- Place to put grades in table -->
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <!-- Place to check if class has been passed -->
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Computer science basics</td>
                    <td>Theorietentamen</td>
                    <td>100%</td>
                    <td>7.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Programming basics</td>
                    <td>Casustoets</td>
                    <td>100%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>B2</td>
                    <td>Professional skills 1</td>
                    <td>Presentatie</td>
                    <td>33%</td>
                    <td>2.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Verslag</td>
                    <td>33%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Functioneringsgesprek</td>
                    <td>33%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>HZ Personality</td>
                    <td>Portfolio</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Object-oriented programming</td>
                    <td>Casustoets</td>
                    <td>50%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Object-oriented programming</td>
                    <td>Groepsproject</td>
                    <td>50%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>B3</td>
                    <td>Professional skills 2</td>
                    <td>Agile functioneren</td>
                    <td>50%</td>
                    <td>2.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Engels opdrachten</td>
                    <td>25%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Engels werkstuk</td>
                    <td>25%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Professionele werkplek</td>
                    <td>Eindgesprek</td>
                    <td>100%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Framework development 1</td>
                    <td>Casustoets</td>
                    <td>100%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Framework project 1</td>
                    <td>Requirementsverslag</td>
                    <td>50%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Projectresultaat</td>
                    <td>50%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>B4</td>
                    <td>Professional skills 3</td>
                    <td>Agile functioneren</td>
                    <td>50%</td>
                    <td>2.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Engels opdrachten</td>
                    <td>25%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Engels werkstuk</td>
                    <td>25%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>IT Personality 1</td>
                    <td>Portfolio</td>
                    <td>100%</td>
                    <td>2.5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Framework development 2</td>
                    <td>Opdrachten</td>
                    <td>100%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Framework project 2</td>
                    <td>Code reviews</td>
                    <td>50%</td>
                    <td>5</td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Projectresultaat</td>
                    <td>50%</td>
                    <td></td>
                    <td>
                        <form>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
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
