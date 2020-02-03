<!DOCTYPE html>
<html>
<!-- Header -->
@include('partials.head')
<body>
<!-- Navbar -->
@include ('partials.nav');
  <!-- Name of the page -->
  <div class="container">
    <div class="row">
        <div class="col-12 text-center">
        <h1>Profiel</h1>
      </div>
    </div>
    <!-- Header picture of me below name of the page -->
    <div class="row mt-5">
      <div class="col-12 text-center">
        <img src="images/3.png" width=250 alt="Me next to fountain">
      </div>
    </div>
    <!-- List with characteristics -->
    <div class="row mt-5">
      <div class="col-xl-6 col-12 allcols">
        <ul>
          <h3> Characteristieken:</h3>
          <li>Mijn top 3 persoonlijke eigenschappen:
            <ul>
              <li>Bereikbaar</li>
              <li>Sociaal</li>
              <li>Begrijpend</li>
            </ul>
          <li>Andere kenmerkende eigenschappen van mij zijn:
            <ul>
              <li> Heeft een extreem actief geheugen</li>
              <li> Denkt graag hardop</li>
              <li> Dagdroomt veel </li>
              <li> Snel afgeleid</li>
            </ul>
          </li>
          <li>Dingen waar ik gepassioneerd over ben:
            <ul>
              <li> Streamen</li>
              <li> Skateboarden</li>
              <li> Muziek </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- List of quick facts about me inluding a table -->
      <div class="col-xl-6 col-12 allcols">
        <h3>Een paar snelle feitjes over mij:</h3>
        <ul>
          <li> Uit verveling ben ik voor een goed doel gaan streamen dit zijn de resultaten:
            <table class="table table-bordered table-striped table-hover">
              <thead class="thead-dark">
                <tr>
                  <td>Naam van goed doel</td>
                  <td>Dollars opgehaald</td>
                </tr>
              </thead>
              <tr>
                <td><a href="https://tiltify.com/@karsanham/ham-for-the-children-of-st-judes">St.jude's children
                    hospital</a></td>
                <td>$238.05</td>
              </tr>
              <tr>
                <td><a href="https://tiltify.com/@karsanham/karsanham-environmental-defense-fund">Environmental defense
                    fund</a></td>
                <td>$86.00</td>
              </tr>
              <tr>
                <td><a href="https://tiltify.com/@karsanham/prayforsudan">International Rescue Committee</a></td>
                <td>$10.00</td>
              </tr>
              <tfoot>
                <td>Totaal aantal Dollars opgehaald</td>
                <td>$334.05</td>
              </tfoot>
            </table>
          </li>
          <li> Ik ben altijd aanspreekbaar over muziek <a
              href="https://open.spotify.com/playlist/5Ebbfph39x3MYp8AiIwmbb?si=wh6SxjpYSTCJ7R2BB-kCaw"
              target="_blank">Hier is mijn playlist!</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
        <div class="col-6 allcols">
    <ul>
        <h3>Blog</h3>
        <li>
            @foreach($articles as $article)
            <ul>
                <h4><a href="profiel/{{$article->id}}">{{$article->title}}</a></h4>
                <li>{{$article->excerpt}}</li>
            </ul>
            @endforeach
        </li>
    </ul>
        </div>
    </div>
  </div>
</body>
<!-- Footer -->
@include ('partials.footer');
</html>
