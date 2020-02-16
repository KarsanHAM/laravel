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
          <div class="col-6 allcols">
              <ul>
                  @foreach($posts as $post)
                          <h4><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></h4>
                          <p>{{$post->excerpt}}</p>
                  @endforeach
              </ul>
          </div>
    </div>
</div>
</body>
<!-- Footer -->
@include ('partials.footer');
</html>
