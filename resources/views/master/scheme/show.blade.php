@extends('layouts.app', ['title' => 'Skema'])

@section('content')
  <section class="mx-1 sm:mx-auto sm:w-full">

    <a href="{{ route('schemes.index') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" class="absolute mt-1 h-6 w-6 dark:text-white">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
      </svg></a>

    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Detail Skema
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <div class="mb-5">
      <label for="code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode
        Skema</label>
      <input type="text" id="code" name="code" value="{{ $scheme->code }}" disabled
        class="@error('code') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required maxlength="13" />
      @error('code')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Skema</label>
      <input type="text" id="name" name="name" value="{{ $scheme->name }}" disabled
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
      <label for="licenseNumber" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor
        Lisensi</label>
      <input type="text" id="licenseNumber" name="licenseNumber" value="{{ $scheme->licenseNumber }}" disabled
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('licenseNumber')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <div class="mb-2">
        <label for="faculty" class="text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
        <label for="department" class="text-sm font-medium text-gray-900 dark:text-white">/ Prodi</label>
      </div>
      <div class="flex gap-1">
        <select id="faculty" name="faculty" required disabled
          class="@error('faculty') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
          <option selected hidden value="">Fakultas</option>
          <option value="Teknik" {{ $scheme->faculty === 'Teknik' ? 'selected' : '' }}>Teknik</option>
          <option value="Ilmu Komunikasi" {{ $scheme->faculty === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi
          </option>
          <option value="Sastra" {{ $scheme->faculty === 'Sastra' ? 'selected' : '' }}>Sastra</option>
          <option value="Ekonomi dan Bisnis" {{ $scheme->faculty === 'Ekonomi dan Bisnis' ? 'selected' : '' }}>Ekonomi
            dan Bisnis</option>
        </select>
        <select id="department" name="department" required disabled
          class="@error('department') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
          <option selected hidden value="">Prodi</option>
          <option value="Teknik Informatika" {{ $scheme->department === 'Teknik Informatika' ? 'selected' : '' }}>
            Teknik
            Informatika</option>
          <option value="Teknik Sipil" {{ $scheme->department === 'Teknik Sipil' ? 'selected' : '' }}>Teknik
            Sipil</option>
          <option value="Ilmu Komunikasi" {{ $scheme->department === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu
            Komunikasi</option>
          <option value="Sastra Inggris" {{ $scheme->department === 'Sastra Inggris' ? 'selected' : '' }}>Sastra
            Inggris
          </option>
          <option value="Sastra Jepang" {{ $scheme->department === 'Sastra Jepang' ? 'selected' : '' }}>Sastra Jepang
          </option>
          <option value="Akuntansi" {{ $scheme->department === 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
          <option value="Manajemen" {{ $scheme->department === 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
        </select>
      </div>
      <div class="flex gap-1">
        @error('faculty')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        @error('department')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div class="mb-5">
      <label for="skkni" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">SKKNI</label>
      <textarea id="message" rows="4" name="skkni" required disabled
        class="@error('skkni') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Write your thoughts here...">{{ $scheme->skkni }}</textarea>
      @error('skkni')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status</label>
      <ul
        class="@error('status') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror w-full items-center rounded-lg border bg-white text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white sm:flex">
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="activeStatus" type="radio" value="Berlaku" name="status" required disabled
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $scheme->status === 'Berlaku' ? 'checked' : '' }}>
            <label for="activeStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Berlaku</label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="inactiveStatus" type="radio" value="Tidak Berlaku" name="status" required disabled
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $scheme->status === 'Tidak Berlaku' ? 'checked' : '' }}>
            <label for="inactiveStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak
              Berlaku</label>
          </div>
        </li>
      </ul>
      @error('status')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="type" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Skema</label>
      <select id="type" name="type" required disabled
        class="@error('type') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="">Jenis Skema</option>
        <option value="KKNI" {{ $scheme->type === 'KKNI' ? 'selected' : '' }}>KKNI</option>
        <option value="Okupasi" {{ $scheme->type === 'Okupasi' ? 'selected' : '' }}>Okupasi</option>
        <option value="Klaster" {{ $scheme->type === 'Klaster' ? 'selected' : '' }}>Klaster</option>
      </select>
      @error('type')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="basicRequirement" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Prasyarat
        Dasar</label>
      @foreach (explode(' zzz', $scheme->basicRequirements) as $basicRequirement)
        <textarea id="basicRequirement" rows="4" name="basicRequirements[]" required disabled
          class="@error('basicRequirement') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror mb-3 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Write your thoughts here...">{{ $basicRequirement }} </textarea>
      @endforeach
      @error('basicRequirement')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>

  </section>
@endsection
