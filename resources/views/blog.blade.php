<!DOCTYPE html>
<html>
<!-- Header -->
@include('partials.head')
<body>
<!-- Navbar -->
@include('partials.nav')
<div class="container">
    <div class="row">
        <div class="col-12 mt-1 text-center">
            <h1>Blog</h1>
        </div>
    </div>
</div>
<div class="container">
     <div class="row">
          <div class="col-12 text-center">
              <li>
                  @foreach($articles as $article)
                      <ul>
                          <h4><a href="blog/{{$article->id}}">{{$article->title}}</a></h4>
                          <li>{{$article->excerpt}}</li>
                      </ul>
                  @endforeach
              </li>
          </div>
    </div>
</div>
</body>
<!-- Footer -->
@include ('partials.footer');
</html>
