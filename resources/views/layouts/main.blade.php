<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('styleCss')
  </head>
  <body>
    @include('partials.header')
 
    <main>
        <div class="container">
            @yield('mainContent')
        </div>
    </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>