@extends('layouts.auth', ['title' => 'Login'])

@section('content')
  <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
    <a href="{{ route('home') }}" class="mx-auto mb-1 block h-16 w-16">
      <img src="{{ asset('logo.png') }}" alt="LSP Logo" class="w-full">
      {{-- <svg class="mx-auto block h-[40px] w-[40px] text-gray-800 dark:text-white" aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z" />
    </svg> --}}
    </a>
    <h1 class="mb-6 text-center text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
      Login to your account
    </h1>
    <div
      class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
      <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
        {{-- <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
          Login
        </h1> --}}
        @if (session()->has('loginError'))
          <div id="alert-2"
            class="mb-4 flex items-center rounded-lg bg-red-50 p-4 text-red-800 dark:bg-gray-900 dark:text-red-400"
            role="alert">
            <svg class="hidden h-4 w-4 flex-shrink-0 sm:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              {{ session('loginError') }}
            </div>
            <button type="button"
              class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
              data-dismiss-target="#alert-2" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
            </button>
          </div>
        @endif
        <form class="xspace-y-4 xmd:space-y-6" method="POST">
          @csrf
          <div class="relative mb-7">
            <input type="text" id="username" name="username"
              class="border-1 peer block w-full appearance-none rounded-lg border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-emerald-500"
              placeholder=" " required value="{{ old('username') }}" />
            <label for="username"
              class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-emerald-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:bg-gray-800 dark:text-gray-400 peer-focus:dark:text-emerald-500">Username</label>
            @error('username')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="relative mb-7">
            <input type="password" id="password" name="password"
              class="border-1 peer block w-full appearance-none rounded-lg border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-emerald-500"
              placeholder="" required />
            <label for="password"
              class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-emerald-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:bg-gray-800 dark:text-gray-400 peer-focus:dark:text-emerald-500">Password</label>
            @error('password')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          {{-- <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex h-5 items-center">
                <input id="remember" aria-describedby="remember" type="checkbox"
                  class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-emerald-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-emerald-600"
                  required="">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm font-medium text-emerald-600 hover:underline dark:text-emerald-500">Forgot
              password?</a>
          </div> --}}
          <div class="relative">
            <button type="submit"
              class="w-full rounded-lg bg-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Masuk</button>
          </div>
          {{-- <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex h-5 items-center">
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                  Belum punya akun ? <a href="{{ route('register') }}"
                    class="font-medium text-emerald-600 hover:underline dark:text-emerald-500">Daftar</a>
                </p>

                <input id="remember" aria-describedby="remember" type="checkbox"
                  class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-emerald-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-emerald-600"
                  required="">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
              </div>
            </div>
            <button type="button" class="text-sm font-medium text-emerald-600 hover:underline dark:text-emerald-500">Lupa
              password?</button>
          </div> --}}

        </form>
      </div>
    </div>
  </div>
@endsection
