<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>@yield('title') - {{ config('app.name') }}</title>
  <script src="{{ asset('js/checkTheme.js') }}"></script>
  @yield('assetshead')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @include('layouts.partials.navbar')

  @include('layouts.partials.sidebar')

  <div class="mt-16 p-4 sm:ml-[17rem]">
    <div class="mx-1 sm:mx-auto sm:w-full">
      @yield('content')
    </div>
  </div>

  @include('layouts.partials.footer')

  <script src="{{ asset('js/themeToggle.js') }}"></script>

  @yield('assetsfoot')

</body>

</html>
