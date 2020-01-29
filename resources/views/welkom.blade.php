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
            <h1>Welkom op mijn portfolio!</h1>
        </div>
    </div>
    <!-- 2 Images at the top of the page -->
    <div class="row mt-5">
        <div class="col-xl-6 col-12 text-center">
            <img src="../../images/Me.png" width=250 alt="picture of Kars">
        </div>
        <div class="col-xl-6 col-12 text-center">
            <img src="../../images/mecouch.png" width=250 alt="picture of Kars">
        </div>
    </div>
    <!-- Content that describes why i fit on HBO -->
    <div class="row mt-5">
        <div class="col-xl-6 col-12 allcols">
            <h3>
                Het HBO niveau past bij mij omdat...
            </h3>
            <p>
                Ik heb mijn HAVO opleiding 3 jaar geleden afgemaakt en ben daarna in Den haag gaan studeren,
                International
                Media en Entertainment Management.
                Maar ik kwam er achter dat het niks voor mij was. Daarna ben ik gaan werken.
                Na enige tijd besefte ik dat ik meer kon dan de taken die me werden gegeven. Ik wilde me meer richten op
                en
                specialiseren in dingen die me interesseren.
                Daardoor weet ik dat ik klaar ben voor het HBO-niveau.
            </p>
        </div>
        <div class="col-xl-6 col-12 allcols">
            <h3>
                HBO-ICT past bij mijn persoonlijkheid omdat...
            </h3>
            <p>
                Problemen oplossen is altijd een van mijn favoriete dingen om te doen geweest.
                Dit heb ik onlangs weer ontdekt tijdens mijn werk. Het vorige, in combinatie met het feit dat ik van
                jongs af
                aan met computers bezig ben geweest,
                heeft tot de keuze geleid om nu HBO-ICT te gaan doen.
            </p>

        </div>
    </div>
</div>
</body>
<!-- Footer -->
@include ('partials.footer');
</html>
