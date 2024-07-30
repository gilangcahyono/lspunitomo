@extends('layouts.app', ['title' => 'VA'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    VA <br> MEMBERIKAN KONTRIBUSI DALAM VALIDASI ASESMEN
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="relative overflow-x-auto">

    <a href="{{ route('va.export', ['schemeId' => $scheme->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
