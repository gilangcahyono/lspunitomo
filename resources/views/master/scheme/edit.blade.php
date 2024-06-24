@extends('layouts.app', ['title' => 'Skema'])

@section('content')
  <section class="mx-1 sm:mx-auto sm:w-full">

    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Ubah Skema
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <form class="max-w-s" action="{{ route('schemes.update', ['scheme' => $scheme]) }}" method="POST">
      @method('PUT')
      @csrf
      <div class="mb-5">
        <label for="code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode
          Skema</label>
        <input type="text" id="code" name="code" value="{{ $scheme->code }}"
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
        <input type="text" id="name" name="name" value="{{ $scheme->name }}"
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
        <input type="text" id="licenseNumber" name="licenseNumber" value="{{ $scheme->licenseNumber }}"
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
            <option value="Teknik" {{ $scheme->faculty === 'Teknik' ? 'selected' : '' }}>Teknik</option>
            <option value="Ilmu Komunikasi" {{ $scheme->faculty === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi
            </option>
            <option value="Sastra" {{ $scheme->faculty === 'Sastra' ? 'selected' : '' }}>Sastra</option>
            <option value="Ekonomi dan Bisnis" {{ $scheme->faculty === 'Ekonomi dan Bisnis' ? 'selected' : '' }}>Ekonomi
              dan Bisnis</option>
          </select>
          <select id="department" name="department" required
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
        <textarea id="message" rows="4" name="skkni" required
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
              <input id="activeStatus" type="radio" value="Berlaku" name="status" required
                class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
                {{ $scheme->status === 'Berlaku' ? 'checked' : '' }}>
              <label for="activeStatus"
                class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Berlaku</label>
            </div>
          </li>
          <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
            <div class="flex items-center ps-3">
              <input id="inactiveStatus" type="radio" value="Tidak Berlaku" name="status" required
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
        <select id="type" name="type" required
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
        @foreach (explode(' zzz ', $scheme->basicRequirements) as $basicRequirement)
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
              placeholder="Write your thoughts here...">{{ $basicRequirement }} </textarea>
          </div>
        @endforeach
        @foreach (explode(' zzz ', $scheme->basicRequirements) as $basicRequirement)
          <textarea name="oldBasicRequirements[]" class="hidden">{{ $basicRequirement }}</textarea>
        @endforeach
        @error('basicRequirement')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <button type="submit"
          class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Simpan</button>
        <a href="{{ route('schemes.index') }}"
          class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
      </div>
    </form>

  </section>
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
        e.preventDefault();
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
    });
  </script>
@endpush
