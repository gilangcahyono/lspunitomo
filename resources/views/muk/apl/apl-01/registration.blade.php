@extends('layouts.app', ['title' => 'Pendaftaran Uji Kompetensi'])

@section('content')
  @can('nobody')
    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Pendaftaran Uji Kompetensi Mandiri Tahun Ajaran {{ $registration->periode }} Periode {{ $registration->semester }}
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <form
      action="{{ $registrant ? route('assessment.registration.improve', ['accession' => $registrant]) : route('assessment.registration.store') }}"
      method="POST" enctype="multipart/form-data" class="relative mb-4 max-w-7xl">

      @if ($registrant)
        @method('PUT')
        <input type="hidden" name="nim" value="{{ getUserActive()['nim'] }}">
      @endif

      @csrf

      @if (!$registrant)
        <div class="sm:columns-2">
          <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="name" id="name"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['name'] }}">
            @error('name')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="nim" class="mb-2 block text-sm font-medium text-gray-900 after:ms-1 dark:text-white">Nomor
              Induk
              Mahasiswa (NIM) <span class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="nim" id="nim"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ auth()->user()->username }}">
            @error('nim')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="semester" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Semester <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="number" name="semester" id="semester"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['semester'] }}">
            @error('semester')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <div class="mb-1">
              <label for="faculty" class="text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
              <label for="department" class="text-sm font-medium text-gray-900 dark:text-white">/ Prodi <span
                  class="text-red-500 dark:text-pink-500">*</span></label>
            </div>
            <div class="flex gap-1">
              <input type="text" name="faculty" id="faculty"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
                placeholder="Type here" required readonly value="{{ getUserActive()['faculty'] }}">
              <input type="text" name="department" id="department"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
                placeholder="Type here" required readonly value="{{ getUserActive()['department'] }}">
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
            <label for="nik" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Induk KTP <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="nik" id="nik"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['nik'] }}">
            @error('nik')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <div class="mb-1">
              <label for="birthPlace" class="text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
              <label for="birthDate" class="text-sm font-medium text-gray-900 dark:text-white">/ Tanggal Lahir <span
                  class="text-red-500 dark:text-pink-500">*</span></label>
            </div>
            <div class="flex gap-1">
              <input type="text" name="birthPlace" id="birthPlace"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
                placeholder="Type here" required readonly value="{{ getUserActive()['birthPlace'] }}">
              <input type="text" name="birthDate" id="birthDate"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
                placeholder="Type here" required readonly value="{{ getUserActive()['birthDate'] }}">
            </div>
            <div class="flex gap-1">
              @error('birthPlace')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
              @enderror
              @error('birthDate')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="mb-5">
            <label for="gender" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="gender" id="gender"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['gender'] }}">
            @error('gender')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat KTP <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="address" id="address"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['address'] }}">
            @error('address')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          {{-- <div class="mb-5">
          <label for="postalCode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Pos <span
              class="text-red-500 dark:text-pink-500">*</span></label>
          <input type="text" name="postalCode" id="postalCode"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here" required readonly value="{{ getUserActive()['postalCode'] }}">
          @error('postalCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div> --}}
          <div class="mb-5">
            <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kabupaten / Kota
              <span class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="city" id="city"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['city'] }}">
            @error('city')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi <span
                class="text-red-500 dark:text-pink-500">*</span></label>
            <input type="text" name="province" id="province"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required readonly value="{{ getUserActive()['province'] }}">
            @error('province')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="mobile" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No HP (Aktif
              WhatsApp) <span class="text-red-500 dark:text-pink-500">*</span>
            </label>
            <input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required>
            @error('mobile')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email <span
                class="text-red-500 dark:text-pink-500">*</span>
            </label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Type here" required>
            @error('email')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
              terakhir <span class="text-red-500 dark:text-pink-500">*</span></label>
            <select id="lastEducation" name="lastEducation" required
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
              <option selected hidden value="">Pilih</option>
              <option value="SMA/SMK">SMA/SMK</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select>
            @error('lastEducation')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="scheme_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema
              Kompetensi <span class="text-red-500 dark:text-pink-500">*</span></label>
            <select id="scheme_id" name="scheme_id" required
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
              <option selected hidden value="">Pilih Skema</option>
              @foreach ($schemes as $scheme)
                <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
              @endforeach
              <option value="000">Lainnya...</option>
            </select>
            @error('scheme_id')
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
          </div>

          {{-- <div class="mb-5">
          <label for="telephone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No Telepon
          </label>
          <input type="tel" name="telephone" id="telephone" value="{{ old('telephone') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('telephone')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="officeTelephone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No Telepon
            Kantor
          </label>
          <input type="tel" name="officeTelephone" id="officeTelephone" value="{{ old('officeTelephone') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('officeTelephone')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="company" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan
          </label>
          <input type="text" name="company" id="company" value="{{ old('company') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('company')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="position" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jabatan
          </label>
          <input type="text" name="position" id="position" value="{{ old('position') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('position')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="officeAddress" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat Kantor
          </label>
          <input type="text" name="officeAddress" id="officeAddress" value="{{ old('officeAddress') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('officeAddress')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="officePostalCode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Pos
            Kantor
          </label>
          <input type="text" name="officePostalCode" id="officePostalCode" value="{{ old('officePostalCode') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('officePostalCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="fax" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Fax
          </label>
          <input type="text" name="fax" id="fax" value="{{ old('fax') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('fax')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="officeEmail" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email Kantor
          </label>
          <input type="email" name="officeEmail" id="officeEmail" value="{{ old('officeEmail') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here">
          @error('officeEmail')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div> --}}
        </div>
      @endif

      <div class="{{ $registrant ? 'sm:flex gap-3' : 'sm:columns-4' }}">
        <div class="{{ $registrant && $registrant->ijazah ? 'hidden' : '' }} relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ijazah">Ijazah
            Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ijazahPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->ijazah ? url('/storage/uploaded/assessment-registration/' . $registrant->ijazah) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Foto Ijazah">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->ijazah ? 'readonly' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ijazah" name="{{ $registrant ? 'files[ijazah]' : 'ijazah' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('ijazah')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->transkrip ? 'hidden' : '' }} relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="transkrip">Transkrip Nilai
            Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="transkripPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->transkrip ? url('/storage/uploaded/assessment-registration/' . $registrant->transkrip) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Foto Transkrip">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->transkrip ? 'readonly' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="transkrip" name="{{ $registrant ? 'files[transkrip]' : 'transkrip' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('transkrip')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->ktm ? 'hidden' : '' }} relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ktm">KTM <span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ktmPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->ktm ? url('/storage/uploaded/assessment-registration/' . $registrant->ktm) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Foto KTM">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->ktm ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ktm" name="{{ $registrant ? 'files[ktm]' : 'ktm' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('ktm')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->ktp ? 'hidden' : '' }} relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ktp">KTP <span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ktpPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->ktp ? url('/storage/uploaded/assessment-registration/' . $registrant->ktp) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Foto KTP">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->ktp ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ktp" name="{{ $registrant ? 'files[ktp]' : 'ktp' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('ktp')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->foto ? 'hidden' : '' }} relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="foto">Pas Foto 3x4 (backgound
            merah formal rapi) <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="fotoPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->foto ? url('/storage/uploaded/assessment-registration/' . $registrant->foto) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Pas Foto">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->foto ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="foto" name="{{ $registrant ? 'files[foto]' : 'foto' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('foto')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->proofPayment ? 'hidden' : '' }} relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="proofPayment">Bukti Transfer
            Pembayaran <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="proofPaymentPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->proofPayment ? url('/storage/uploaded/assessment-registration/' . $registrant->proofPayment) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Bukti Transfer Pembayaran">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->proofPayment ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="proofPayment" name="{{ $registrant ? 'files[proofPayment]' : 'proofPayment' }}" type="file"
            accept="image/png, image/jpeg" required>
          @error('proofPayment')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->cv ? 'hidden' : '' }} relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="cv">CV (Curriculum Vitae) <span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="cvPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->cv ? url('/storage/uploaded/assessment-registration/' . $registrant->cv) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="CV (Curriculum Vitae) ">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->cv ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="cv" name="{{ $registrant ? 'files[cv]' : 'cv' }}" type="file" accept="image/png, image/jpeg"
            required>
          @error('cv')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="{{ $registrant && $registrant->supportingCertificate ? 'hidden' : '' }} relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="supportingCertificate">Sertifikat
            Pendukung Skema
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="supportingCertificatePreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ $registrant && $registrant->supportingCertificate ? url('/storage/uploaded/assessment-registration/' . $registrant->supportingCertificate) : asset('assets\img\dafault-img-registration.jpg') }}"
                alt="Sertifikat Pendukung Skema">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input {{ $registrant && $registrant->supportingCertificate ? 'disabled' : '' }}
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="supportingCertificate"
            name="{{ $registrant ? 'files[supportingCertificate]' : 'supportingCertificate' }}" type="file"
            accept="image/png, image/jpeg">
          @error('supportingCertificate')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <button type="submit"
        class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Daftar</button>
    </form>
  @endcan
@endsection

@push('scripts')
  <script type="module">
    $("#ijazah").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#ijazahPreview").attr("src", imgURL);
    });

    $("#transkrip").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#transkripPreview").attr("src", imgURL);
    });

    $("#ktm").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#ktmPreview").attr("src", imgURL);
    });

    $("#ktp").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#ktpPreview").attr("src", imgURL);
    });

    $("#foto").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#fotoPreview").attr("src", imgURL);
    });

    $("#proofPayment").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#proofPaymentPreview").attr("src", imgURL);
    });

    $("#cv").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#cvPreview").attr("src", imgURL);
    });

    $("#supportingCertificate").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#supportingCertificatePreview").attr("src", imgURL);
    });

    $('#scheme_id').change(function(e) {
      if (e.target.value === '000') {
        $('#scheme_id').children().remove();
        $('#scheme_id').append(`<option selected hidden value="{{ old('scheme_id') ? old('scheme_id') : '' }}">
              {{ old('scheme_id') ? old('scheme_id') : 'Pilih Skema' }}</option>
        @foreach ($allSchemes as $scheme)
          <option value="{{ $scheme->id }}">({{ $scheme->department }}) {{ $scheme->name }}</option>
        @endforeach`);
      }
    })
  </script>
@endpush
