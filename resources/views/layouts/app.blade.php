<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('/logo.png') }}" type="image/x-icon">
  <title>{{ $title }} - {{ config('app.name') }}</title>
  <script src="{{ asset('assets/js/checkTheme.js') }}"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="{{ asset('assets/js/showLoader.js') }}" type="module"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @include('layouts.partials.navbar')

  @cannot('nobody')
    @include('layouts.partials.sidebar')
    <main class="mt-16 p-4 transition-all sm:ml-[17rem]">
      <div class="mx-1 sm:mx-auto sm:w-full">
        @yield('content')
      </div>
    </main>
  @else
    <div class="container mx-auto">
      <div class="mt-16 p-4">
        <div class="mx-1 sm:mx-auto sm:w-full">
          @yield('content')
        </div>
      </div>
    </div>
  @endcannot
  {{-- <div class="-right-12 rounded-bl-none rounded-tl-none"></div> --}}

  {{-- @include('layouts.partials.footer') --}}

  @include('sweetalert::alert')
  <script src="{{ asset('assets/js/sidebarMinimize.js') }}" type="module"></script>

  {{-- <script type="module">
    $(document).ready(function() {
      $("#sidebarMinimizeBtn").click(function(e) {
        e.preventDefault();
        $("#sidebarMinimizeBtn").toggleClass("-right-12");
        $("#sidebarMinimizeBtn").toggleClass("rounded-tl-none rounded-bl-none");
        $("#sidebarMinimizeIcon").toggleClass("hidden");
        $("#sidebarMaximizeIcon").toggleClass("hidden");
        $("#logo-sidebar").toggleClass("sm:translate-x-0");
        $("main").toggleClass("sm:ml-[17rem]");
      });
    });
  </script> --}}

  @stack('scripts')

</body>

</html>
