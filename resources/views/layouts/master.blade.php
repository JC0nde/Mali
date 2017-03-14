<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mon site</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
     window.Laravel = {!! json_encode([
                          'csrfToken' => csrf_token(),
                          ]) !!};
    </script>

  </head>
  <body class="home">
    <div id="app">

      @include ('layouts.nav')

      @yield ('content')

      @include ('layouts.footer')

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

  </body>
</html>
