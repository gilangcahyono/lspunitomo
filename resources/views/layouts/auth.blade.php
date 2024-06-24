<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('/logo.png') }}" type="image/x-icon">
  <script src="{{ asset('assets/js/checkTheme.js') }}"></script>
  <title>{{ $title }} - {{ config('app.name') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @include('layouts.partials.loader')
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @yield('content')

</body>

</html>
