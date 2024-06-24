@extends('layouts.app', ['title' => 'KUK'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Ubah KUK
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form class="w-full" action="{{ route('kuks.update', ['kuk' => $kuk]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama KUK</label>
      <input type="text" id="name" name="name" value="{{ $kuk->name }}"
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
      <label for="element_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Elemen</label>
      <select id="element_id" name="element_id" required
        class="@error('element_id') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="{{ $kuk->element_id }}">{{ $kuk->element->name }}</option>
        @foreach ($elements as $element)
          <option value="{{ $element->id }}">{{ $element->name }}</option>
        @endforeach
      </select>
      @error('element_id')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Tambahkan</button>
      <a href="{{ route('kuks.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection
