<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('website.include.link')
    <title>@yield('title')</title>
  </head>
  <body>
    @include('website.include.header')
    @yield('content')
    @include('website.include.footer')
    @include('website.include.script')
  </body>
</html>
