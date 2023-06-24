<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>
<body>
  <header>
    @yield('header')
  </header>

  <body>
    @yield('content')

    <!-- @yield('contact') -->
  </body>

  <footer>
    @yield('footer')
  </footer>
</html>