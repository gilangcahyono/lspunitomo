<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>@yield('title') - LSP Universitas Dr. Soetomo</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="{{ asset('js/checkTheme.js') }}"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @yield('content')

  <script src="{{ asset('js/themeToggle.js') }}"></script>
</body>

</html>
