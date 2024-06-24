@extends('layouts.app', ['title' => 'Kelompok kerja'])

@section('content')
  <a href="{{ route('job-groups.index') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke-width="1.5" stroke="currentColor" class="absolute mt-1 h-6 w-6 dark:text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
    </svg></a>

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Detail Kelompok Kerja
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="mb-5">
    <label for="scheme" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema</label>
    <input type="text" id="scheme" scheme="scheme" value="{{ $jobGroup->scheme->name }}" disabled
      class="@error('scheme') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
      placeholder="Type here" required />

    @error('scheme')
      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-5">
    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Kelompok</label>
    <input type="text" id="name" name="name" value="{{ $jobGroup->name }}" disabled
      class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
      placeholder="Type here" required />

    @error('name')
      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-5">
    <label for="scheme_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Unit</label>
    <ul
      class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
      @if ($units->count() > 0)
        @foreach ($units as $unit)
          <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
              <span
                class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $unit->name }}</span>
            </div>
          </li>
        @endforeach
      @else
        <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
          <div class="flex items-center ps-3">
            <span class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Belum ada</span>
          </div>
        </li>
      @endif
    </ul>
  </div>
@endsection
