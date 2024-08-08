@extends('layouts.app', ['title' => 'Unit'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Ubah Unit
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form class="w-full" action="{{ route('units.update', ['unit' => $unit]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-5">
      <label for="code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Unit</label>
      <input type="text" id="code" name="code" value="{{ $unit->code }}" autofocus
        class="@error('code') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('code')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Unit</label>
      <input type="text" id="name" name="name" value="{{ $unit->name }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('name')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    {{-- <div class="mb-5">
      <label for="scheme_code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Skema</label>
      <input type="text" id="scheme_code" name="scheme_code" value="{{ $unit->scheme_code }}" list="schemes"
        class="@error('scheme_code') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('scheme_code')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
      <datalist id="schemes">
        @foreach ($schemes as $scheme)
          <option value="{{ $scheme->code }}">{{ $scheme->name }}</option>
        @endforeach
      </datalist>
    </div> --}}
    <div class="mb-5">
      <label for="scheme_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema</label>
      <select id="scheme_id" name="scheme_id" required
        class="@error('scheme_id') 
        border-red-500 dark:border-red-500 
        @else 
        border-gray-300  dark:border-gray-600 
        @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="{{ $unit->scheme_id }}">{{ $unit->scheme->name }}</option>
        @foreach ($schemes as $scheme)
          <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
        @endforeach
      </select>
      @error('scheme_id')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Simpan</button>
      <a href="{{ route('units.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection
