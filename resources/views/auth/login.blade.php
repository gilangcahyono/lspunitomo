@extends('layouts.auth')

@section('title')
  {{ 'Login' }}
@endsection

@section('content')
  <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
    {{-- <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
      <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
      Flowbite
    </a> --}}
    <div
      class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
      <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
        <a href="/"><svg class="mx-auto block h-[40px] w-[40px] text-gray-800 dark:text-white" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z" />
          </svg></a>
        <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
          Login to your account
        </h1>
        <form class="space-y-4 md:space-y-6" action="/login" method="POST">
          @csrf
          <div class="relative">
            <input type="text" id="identity" name="identity"
              class="border-1 peer block w-full appearance-none rounded-lg border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-emerald-500"
              placeholder=" " required value="{{ old('identity') }}" />
            <label for="identity"
              class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-emerald-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:bg-gray-800 dark:text-gray-400 peer-focus:dark:text-emerald-500">Username</label>
          </div>
          <div class="relative">
            <input type="password" id="password" name="password"
              class="border-1 peer block w-full appearance-none rounded-lg border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-emerald-500"
              placeholder=" " required />
            <label for="password"
              class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-emerald-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:bg-gray-800 dark:text-gray-400 peer-focus:dark:text-emerald-500">Password</label>
          </div>
          {{-- <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-emerald-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-emerald-600 dark:ring-offset-gray-800" required="">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm font-medium text-emerald-600 hover:underline dark:text-emerald-500">Forgot password?</a>
          </div> --}}
          <button type="submit"
            class="w-full rounded-lg bg-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Login</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Don’t have an account yet ? <a href="{{ route('register') }}"
              class="font-medium text-emerald-600 hover:underline dark:text-emerald-500">Register</a>
          </p>
        </form>
      </div>
    </div>
  </div>
@endsection
