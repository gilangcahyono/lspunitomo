@extends('layouts.app', ['title' => 'Asesor'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Tambah Asesor
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form action="{{ route('assessors.store') }}" method="POST">
    @csrf
    <div class="mb-5">
      <label for="nidn" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIDN <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <div class="flex items-center gap-2">
        <input type="text" id="nidn" name="nidn" value="{{ $lecture['nidn'] ?? old('nidn') }}" autofocus
          class="@error('nidn') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block max-w-sm rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required maxlength="10" />
        <button id="searchNidn" type="button"
          class="rounded-lg border border-emerald-700 bg-emerald-700 p-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
        @if (request('nidn'))
          <span class="text-red-500">{{ $lecture ? 'Dosen ditemukan 👏' : 'Dosen tidak ditemukan 😓' }}</span>
        @endif
      </div>
      @error('nidn')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="name" name="name" value="{{ $lecture['name'] ?? old('name') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('name')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="nik" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Induk KTP <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="nik" name="nik" value="{{ $lecture['nik'] ?? old('nik') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('nik')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <ul
        class="@error('status') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror w-full items-center rounded-lg border bg-white text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white sm:flex">
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="men" type="radio" value="Laki-laki" name="gender" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ ($lecture && $lecture['gender'] === 'Laki-laki' ? 'checked' : '' ?? old('gender') === 'Laki-laki') ? 'checked' : '' }} />
            <label for="men" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki
            </label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="woman" type="radio" value="Perempuan" name="gender" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ ($lecture && $lecture['gender'] === 'Perempuan' ? 'checked' : '' ?? old('gender') === 'Perempuan') ? 'checked' : '' }} />
            <label for="woman" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan
            </label>
          </div>
        </li>
      </ul>
      @error('status')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="birthPlace" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tempat Tanggal
        Lahir <span class="text-red-500 dark:text-pink-500">*</span></label>
      <div class="flex gap-2">
        <input type="text" id="birthPlace" name="birthPlace" value="{{ $lecture['birthPlace'] ?? old('birthPlace') }}"
          class="@error('birthPlace') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
        <input type="date" id="birthDate" name="birthDate" value="{{ $lecture['birthDate'] ?? old('birthPlace') }}"
          class="@error('birthDate') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required />
      </div>
      @error('birthDate')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="citizen" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Warga Negara <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="citizen" name="citizen" value="{{ $lecture['citizen'] ?? old('citizen') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('citizen')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
        Terakhir <span class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="lastEducation" name="lastEducation"
        value="{{ $lecture['lastEducation'] ?? old('lastEducation') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('lastEducation')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="address" name="address" value="{{ $lecture['address'] ?? old('address') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('address')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="neighbourhood" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">RT/RW <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="neighbourhood" name="neighbourhood"
        value="{{ $lecture['neighbourhood'] ?? old('neighbourhood') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Contoh : 03/01" required {{ $lecture ? 'readonly' : '' }} />
      @error('neighbourhood')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="village" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Desa <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="village" name="village" value="{{ $lecture['village'] ?? old('village') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('village')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="district" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kecamatan <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="district" name="district" value="{{ $lecture['district'] ?? old('district') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('district')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="city" name="city" value="{{ $lecture['city'] ?? old('city') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('city')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="province" name="province" value="{{ $lecture['province'] ?? old('province') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('province')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="postalCode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Pos <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="postalCode" name="postalCode"
        value="{{ $lecture['postalCode'] ?? old('postalCode') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('postalCode')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="{{ request('nidn') ? '' : 'hidden' }} mb-5">
      <label for="department" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program Studi
      </label>
      <input type="text" id="department" name="department"
        value="{{ $lecture['department'] ?? old('department') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" {{ $lecture ? 'readonly' : '' }} />
      @error('department')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="telephone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
      <input type="tel" id="telephone" name="telephone" value="{{ $lecture['telephone'] ?? old('telephone') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" {{ $lecture ? 'readonly' : '' }} />
      @error('telephone')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="mobile" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor HP <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="tel" id="mobile" name="mobile" value="{{ $lecture['mobile'] ?? old('mobile') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('mobile')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="email" name="email" value="{{ $lecture['email'] ?? old('email') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required {{ $lecture ? 'readonly' : '' }} />
      @error('email')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="scheme" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema <span
          class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <select id="scheme_id" name="scheme_id" required
        class="@error('scheme_id') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="">Pilih Skema</option>
        @foreach ($schemes as $scheme)
          <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
        @endforeach
      </select>
      @error('scheme')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="metRegistrationNumber" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor
        Registrasi MET <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="metRegistrationNumber" name="metRegistrationNumber"
        value="{{ old('metRegistrationNumber') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('metRegistrationNumber')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="occupation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan <span
          class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('occupation')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="technicalCompetence" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kompetensi
        Teknis <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="technicalCompetence" name="technicalCompetence"
        value="{{ old('technicalCompetence') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('technicalCompetence')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="tmtMet" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">TMT MET
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="tmtMet" name="tmtMet" value="{{ old('tmtMet') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('tmtMet')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="expiredMet" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expired MET
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="expiredMet" name="expiredMet" value="{{ old('expiredMet') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('expiredMet')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="rcc" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">RCC
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="rcc" name="rcc" value="{{ old('rcc') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('rcc')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="expiredRcc" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expired expiredRcc
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="expiredRcc" name="expiredRcc" value="{{ old('expiredRcc') }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('expiredRcc')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <ul
        class="@error('status') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror w-full items-center rounded-lg border bg-white text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white sm:flex">
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="activeStatus" type="radio" value="Berlaku" name="statusMet" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ old('statusMet') === 'Berlaku' ? 'checked' : '' }}>
            <label for="activeStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Berlaku</label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="inactiveStatus" type="radio" value="Tidak Berlaku" name="statusMet" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ old('statusMet') === 'Tidak Berlaku' ? 'checked' : '' }}>
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
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Tambahkan</button>
      <a href="{{ route('assessors.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection

@push('scripts')
  <script type="module">
    $('#searchNidn').click((e) => {
      e.preventDefault();
      document.location.href = "{{ route('assessors.create') }}?nidn=" + $('#nidn').val();
    });
  </script>
@endpush
