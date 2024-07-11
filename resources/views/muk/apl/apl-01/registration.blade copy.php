@extends('layouts.app', ['title' => 'Pendaftaran Uji Kompetensi'])

@section('content')
  @can('nobody')
    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Pendaftaran Uji Kompetensi Mandiri Tahun Ajaran {{ $registration->periode }} Periode {{ $registration->semester }}
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <form action="{{ route('assessment.registration.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="sm:columns-2">
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
          <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat KTP <span
              class="text-red-500 dark:text-pink-500">*</span></label>
          <input type="text" name="address" id="address"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here" required readonly value="{{ getUserActive()['address'] }}">
          @error('address')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="postalCode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Pos <span
              class="text-red-500 dark:text-pink-500">*</span></label>
          <input type="text" name="postalCode" id="postalCode"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here" required readonly value="{{ getUserActive()['postalCode'] }}">
          @error('postalCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kabupaten/Kota <span
              class="text-red-500 dark:text-pink-500">*</span></label>
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
        <div class="mb-5 break-after-column">
          <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
            Terakhir <span class="text-red-500 dark:text-pink-500">*</span></label>
          <input type="text" name="lastEducation" id="lastEducation" value="{{ old('lastEducation') }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Type here" required>
          @error('lastEducation')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="mobile" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No WhatsApp <span
              class="text-red-500 dark:text-pink-500">*</span>
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
        <div class="mb-5">
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
        </div>
      </div>
      <div class="sm:columns-4">
        <div class="relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ijazah">Ijazah
            Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ijazahPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Foto Ijazah">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ijazah" name="ijazah" type="file" accept="image/png, image/jpeg" required>
          @error('ijazah')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="transkrip">Transkrip Nilai
            Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="transkripPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Foto Transkrip">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="transkrip" name="transkrip" type="file" accept="image/png, image/jpeg" required>
          @error('transkrip')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ktm">KTM<span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ktmPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Foto KTM">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ktm" name="ktm" type="file" accept="image/png, image/jpeg" required>
          @error('ktm')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ktp">KTP<span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="mt-2 cursor-pointer">
              <img id="ktpPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Foto KTP">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="ktp" name="ktp" type="file" accept="image/png, image/jpeg" required>
          @error('ktp')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="foto">Pas Foto 3x4 (backgound
            merah formal rapi) <span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="fotoPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Pas Foto">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="foto" name="foto" type="file" accept="image/png, image/jpeg" required>
          @error('foto')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="proofPayment">Bukti Transfer
            Pembayaran<span class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="proofPaymentPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Bukti Transfer Pembayaran">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="proofPayment" name="proofPayment" type="file" accept="image/png, image/jpeg" required>
          @error('proofPayment')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="cv">CV (Curriculum Vitae) <span
              class="text-red-500 dark:text-pink-500">*</span>
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="cvPreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="CV (Curriculum Vitae) ">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="cv" name="cv" type="file" accept="image/png, image/jpeg" required>
          @error('cv')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="relative mb-5">
          <label class="text-sm font-medium text-gray-900 dark:text-white" for="supportingCertificate">Sertifikat
            Pendukung Skema
            <figure class="xmax-w-lg mt-2 cursor-pointer">
              <img id="supportingCertificatePreview" class="h-52 w-full rounded-lg object-cover"
                src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Sertifikat Pendukung Skema">
              <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
              </figcaption>
            </figure>
          </label>
          <input
            class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
            id="supportingCertificate" name="supportingCertificate" type="file" accept="image/png, image/jpeg">
          @error('supportingCertificate')
            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <button type="submit"
        class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Daftar</button>
    </form>
  @endcan
  
  <div class="relative mb-4 overflow-x-auto">
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Data Diri Mahasiswa
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->name }}
          </td>
        </tr>
        {{-- <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Perguruan Tinggi Asal
          </th>
          <td class="w-full px-6 py-4">
            : Universitas Dr. Soetomo Surabaya
          </td>
        </tr> --}}
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIM
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nim }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Semester
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->semester }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fakultas / Prodi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->faculty }}/{{ $registrant->department }}
          </td>
        </tr>
      </tbody>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Data Diri Peserta
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIK
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nik }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Tempat Lahir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->birthPlace }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Tanggal Lahir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->birthDate }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jenis Kelamin
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->gender }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->address }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kota / Kabupaten
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->city }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Provinsi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->province }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor HP (Aktif WhatsApp)
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->mobile }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->email }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pendidikan Terakhir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->lastEducation }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pekerjaan
          </th>
          <td class="w-full px-6 py-4">
            : Mahasiswa
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Skema yang dipilih
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->scheme->name }}
          </td>
        </tr>
      </tbody>
    </table>

    {{-- <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Data Diri Peserta
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Pendaftaran
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->registrationNumber }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Skema
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->scheme->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIM
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nim }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fakultas / Prodi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->faculty }}/{{ $registrant->department }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Semester
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->semester }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jenis Kelamin
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->gender }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIK
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nik }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->address }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->postalCode }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kota / Kabupaten
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->city }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Provinsi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->province }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pendidikan Terakhir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->lastEducation }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->email }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor HP
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->mobile }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->telephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama Perusahaan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->company ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jabatan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->position ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeAddress ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officePostalCode ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fax
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->fax ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeEmail ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeTelephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ijazah
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->ijazah }}"
              data-modal-toggle="-modal-{{ $registrant->ijazah }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ijazah }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ijazah }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ijazah) }}"
                      class="w-full" alt="{{ $registrant->ijazah }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Transkrip
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->transkrip }}"
              data-modal-toggle="-modal-{{ $registrant->transkrip }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->transkrip }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->transkrip }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->transkrip) }}"
                      class="w-full" alt="{{ $registrant->transkrip }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            KTP/KTM
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->idCard }}"
              data-modal-toggle="-modal-{{ $registrant->idCard }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->idCard }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP/KTM</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->idCard }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->idCard) }}"
                      class="w-full" alt="{{ $registrant->idCard }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Foto
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->foto }}"
              data-modal-toggle="-modal-{{ $registrant->foto }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->foto }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Foto</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->foto }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->foto) }}"
                      class="w-full" alt="{{ $registrant->foto }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table> --}}

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Upload Dokumen
          </th>
        </tr>
      </thead>
      <tbody>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ijazah Terakhir
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->ijazah }}"
              data-modal-toggle="-modal-{{ $registrant->ijazah }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ijazah }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah Terakhir</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ijazah }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ijazah) }}"
                      class="w-full" alt="{{ $registrant->ijazah }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Transkrip Nilai Terakhir
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->transkrip }}"
              data-modal-toggle="-modal-{{ $registrant->transkrip }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->transkrip }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip Nilai Terakhir</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->transkrip }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->transkrip) }}"
                      class="w-full" alt="{{ $registrant->transkrip }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            KTP
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->ktp }}"
              data-modal-toggle="-modal-{{ $registrant->ktp }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ktp }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ktp }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ktp) }}"
                      class="w-full" alt="{{ $registrant->ktp }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            KTM
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->ktm }}"
              data-modal-toggle="-modal-{{ $registrant->ktm }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ktm }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTM</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ktm }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ktm) }}"
                      class="w-full" alt="{{ $registrant->ktm }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pas Foto
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->foto }}"
              data-modal-toggle="-modal-{{ $registrant->foto }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->foto }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pas Foto</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->foto }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->foto) }}"
                      class="w-full" alt="{{ $registrant->foto }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            CV (Curriculum Vitae)
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->cv }}" data-modal-toggle="-modal-{{ $registrant->cv }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->cv }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">CV (Curriculum Vitae)</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->cv }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->cv) }}" class="w-full"
                      alt="{{ $registrant->cv }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Sertifikat Pendukung Skema
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->supportingCertificate }}"
              data-modal-toggle="-modal-{{ $registrant->supportingCertificate }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->supportingCertificate }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Sertifikat Pendukung Skema</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->supportingCertificate }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img
                      src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->supportingCertificate) }}"
                      class="w-full" alt="{{ $registrant->supportingCertificate }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
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
          <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
        @endforeach`);
      }
    })
  </script>
@endpush

