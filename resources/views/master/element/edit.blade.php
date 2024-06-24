@extends('layouts.app', ['title' => 'Elemen'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Ubah Elemen
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form class="w-full" action="{{ route('elements.update', ['element' => $element]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Elemen</label>
      <input type="text" id="name" name="name" value="{{ $element->name }}"
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
    <div class="mb-5">
      <label for="unit_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Unit</label>
      <select id="unit_id" name="unit_id" required
        class="@error('unit_id') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="{{ $element->unit_id }}">{{ $element->unit->name }}</option>
        @foreach ($units as $unit)
          <option value="{{ $unit->id }}">{{ $unit->name }}</option>
        @endforeach
      </select>
      @error('unit_id')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Simpan</button>
      <a href="{{ route('elements.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection
