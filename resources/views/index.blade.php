<!doctype html>
<html lang="en" class="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  <div class="container mx-auto my-2">

    <ul class="flex flex-wrap items-center justify-center text-gray-900 dark:text-white">
      <li>
        <a href="/login" class="me-4 hover:underline md:me-6">Login</a>
      </li>
      <li>
        <a href="/dashboard" class="me-4 hover:underline md:me-6">Dashboard</a>
      </li>
    </ul>

  </div>

</body>

</html>
