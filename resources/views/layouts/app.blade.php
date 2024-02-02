<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
  <link rel="shortcut icon" href="https://bnsp.go.id/images/images/aMS0sHwOngpc94F3izoBdtQDUZI5PmqG.png"
    type="image/x-icon">
  <title>@yield('title') - {{ config('app.name') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script>
    if (
      localStorage.getItem("color-theme") === "dark" ||
      (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
    } else {
      document.documentElement.classList.remove("dark");
    }
  </script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @include('partials.navbar')

  @include('partials.sidebar')

  <div class="mt-16 p-4 sm:ml-[17rem]">
    @yield('content')
  </div>

  {{-- @include('partials.footer') --}}

</body>

</html>
