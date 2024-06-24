@extends('layouts.app', ['title' => 'Skema'])

@section('content')
  {{-- <a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke-width="1.5" stroke="currentColor" class="absolute mt-1 h-6 w-6 dark:text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
    </svg></a> --}}

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Tambah Skema
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form action="{{ route('schemes.store') }}" method="POST">
    @csrf
    <div class="mb-5">
      <label for="code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode
        Skema</label>
      <input type="text" id="code" name="code" value="{{ old('code') }}" autofocus
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
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Skema</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}"
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
      <input type="text" id="licenseNumber" name="licenseNumber" value="{{ old('licenseNumber') }}"
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
        <select id="faculty" name="faculty" required
          class="@error('faculty') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
          <option selected hidden value="">Fakultas</option>
          <option value="Teknik" {{ old('faculty') === 'Teknik' ? 'selected' : '' }}>Teknik</option>
          <option value="Ilmu Komunikasi" {{ old('faculty') === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi
          </option>
          <option value="Sastra" {{ old('faculty') === 'Sastra' ? 'selected' : '' }}>Sastra</option>
          <option value="Ekonomi dan Bisnis" {{ old('faculty') === 'Ekonomi dan Bisnis' ? 'selected' : '' }}>Ekonomi dan
            Bisnis</option>
        </select>
        <select id="department" name="department" required
          class="@error('department') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
          <option selected hidden value="">Prodi</option>
          <option value="Teknik Informatika" {{ old('department') === 'Teknik Informatika' ? 'selected' : '' }}>Teknik
            Informatika</option>
          <option value="Teknik Sipil" {{ old('department') === 'Teknik Sipil' ? 'selected' : '' }}>Teknik
            Sipil</option>
          <option value="Ilmu Komunikasi" {{ old('department') === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu
            Komunikasi</option>
          <option value="Sastra Inggris" {{ old('department') === 'Sastra Inggris' ? 'selected' : '' }}>Sastra Inggris
          </option>
          <option value="Sastra Jepang" {{ old('department') === 'Sastra Jepang' ? 'selected' : '' }}>Sastra Jepang
          </option>
          <option value="Akuntansi" {{ old('department') === 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
          <option value="Manajemen" {{ old('department') === 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
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
      <textarea id="message" rows="4" name="skkni" required
        class="@error('skkni') 
        border-red-500 dark:border-red-500 
        @else 
        border-gray-300  dark:border-gray-600 
        @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Write your thoughts here...">{{ old('skkni') }}</textarea>
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
            <input id="activeStatus" type="radio" value="Berlaku" name="status" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ old('status') === 'Berlaku' ? 'checked' : '' }}>
            <label for="activeStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Berlaku</label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="inactiveStatus" type="radio" value="Tidak Berlaku" name="status" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ old('status') === 'Tidak Berlaku' ? 'checked' : '' }}>
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
      <select id="type" name="type" required
        class="@error('type') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="">Jenis Skema</option>
        <option value="KKNI" {{ old('type') === 'KKNI' ? 'selected' : '' }}>KKNI </option>
        <option value="Okupasi" {{ old('type') === 'Okupasi' ? 'selected' : '' }}>Okupasi</option>
        <option value="Klaster" {{ old('type') === 'Klaster' ? 'selected' : '' }}>Klaster</option>
      </select>
      @error('type')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div id="basicRequirementDiv" class="relative mb-5">
      <button type="button" id="basicRequirementBtn"
        class="absolute -bottom-4 left-1/2 z-[1] -translate-x-1/2 transform"><svg
          class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd"
            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
            clip-rule="evenodd" />
        </svg></button>
      <label for="basicRequirement" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Prasyarat
        Dasar</label>
      <div class="relative" id="textAreaDiv">
        <button type="button" id="basicRequirementRemoveBtn" class="absolute -right-3 -top-3"><svg
            class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <textarea id="basicRequirement" rows="4" name="basicRequirements[]" required
          class="@error('basicRequirement') 
        border-red-500 dark:border-red-500 
        @else 
        border-gray-300  dark:border-gray-600 
        @enderror mb-3 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Write your thoughts here..."></textarea>
      </div>
      @error('basicRequirement')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Tambahkan</button>
      <a href="{{ route('schemes.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {
      $('#basicRequirementDiv').on('click', '#basicRequirementRemoveBtn', function(e) {
        e.preventDefault();
        $(this).parent().remove();
        e.stopPropagation();
      });

      $('#basicRequirementBtn').click(function(e) {
        $('#basicRequirementDiv').append(`<div class="relative" id="textAreaDiv">
        <button type="button" id="basicRequirementRemoveBtn" class="absolute -right-3 -top-3"><svg
            class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <textarea id="basicRequirement" rows="4" name="basicRequirements[]" required
          class="@error('basicRequirement') 
        border-red-500 dark:border-red-500 
        @else 
        border-gray-300  dark:border-gray-600 
        @enderror mb-3 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Write your thoughts here...">{{ old('basicRequirement') }} </textarea>
      </div>`);
      });

      // $('[id=basicRequirementRemoveBtn]').click(function(e) {
      //   e.preventDefault();
      //   $(this).parent().remove();
      // });
    });
  </script>
@endpush
