<!DOCTYPE html>
<html>
<!-- Header -->
@include('partials.head')
<body>
<!-- Navbar -->
@include ('partials.nav');
@yield('content');
<!-- Footer -->
@include ('partials.footer');
</html>
