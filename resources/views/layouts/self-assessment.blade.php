<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('/logo.png') }}" type="image/x-icon">
  <title>{{ $title }} - {{ config('app.name') }}</title>
  @include('layouts.partials.checkTheme')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  <div class="container mx-auto">
    @yield('content')
  </div>

  @include('sweetalert::alert')
  @stack('scripts')
</body>

</html>
