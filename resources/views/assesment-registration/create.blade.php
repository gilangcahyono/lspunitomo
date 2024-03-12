@extends('layouts.app', ['title' => 'Pendaftaran Uji Kompetensi'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Pendaftaran Uji Kompetensi Mandiri Tahun Ajaran 2023 Periode Gasal
  </h1>
  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">
  <form action="{{ route('assesment-registration.store') }}" method="POST" enctype="multipart/form-data" class="mt">
    @csrf
    <div class="sm:columns-2">
      <div class="mb-5">
        <label for="nim" class="mb-2 block text-sm font-medium text-gray-900 after:ms-1 dark:text-white">Nomor
          Induk
          Mahasiswa (NIM) <span class="text-red-500 dark:text-pink-500">*</span></label>
        <input type="text" name="nim" id="nim"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required readonly value="{{ getUserActive()['nim'] }}">
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
        <div class="mb-2">
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
          {{-- <select id="faculty" name="faculty" required readonly
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
            <option selected hidden value="{{ getUserActive()['faculty'] }}">{{ getUserActive()['faculty'] }}</option>
            <option value="Teknik" {{ old('faculty') === 'Teknik' ? 'selected' : '' }}>Teknik</option>
            <option value="Ilmu Komunikasi" {{ old('faculty') === 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi
            </option>
            <option value="Sastra" {{ old('faculty') === 'Sastra' ? 'selected' : '' }}>Sastra</option>
            <option value="Ekonomi dan Bisnis" {{ old('faculty') === 'Ekonomi dan Bisnis' ? 'selected' : '' }}>Ekonomi
              dan Bisnis</option>
          </select>
          <select id="department" name="department" required readonly
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
            <option selected value="{{ getUserActive()['department'] }}">{{ getUserActive()['department'] }}
            </option>
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
          </select> --}}
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
      <div class="mb-5">
        <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
          Terakhir <span class="text-red-500 dark:text-pink-500">*</span></label>
        <input type="text" name="lastEducation" id="lastEducation"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required readonly value="{{ getUserActive()['lastEducation'] }}">
        @error('lastEducation')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="occupation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan <span
            class="text-red-500 dark:text-pink-500">*</span></label>
        <input type="text" name="occupation" id="occupation"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required readonly value="{{ getUserActive()['occupation'] }}">
        @error('occupation')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="scheme" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema
          Kompetensi <span class="text-red-500 dark:text-pink-500">*</span></label>
        <select id="scheme" name="scheme" required
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
          <option selected disabled hidden value="">Pilih Skema</option>
          @foreach ($schemes as $scheme)
            <option value="{{ $scheme->code }}">{{ $scheme->name }}</option>
          @endforeach
        </select>
        @error('scheme')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5 break-after-column">
        <label for="phoneNumber" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No WhatsApp <span
            class="text-red-500 dark:text-pink-500">*</span>
        </label>
        <input type="tel" name="phoneNumber" id="phoneNumber" value="{{ old('phoneNumber') }}"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
        @error('phoneNumber')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      {{-- <div class="mb-5 break-after-column">
        <label for="paymentStatus" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status
          Pembayaran <span class="text-red-500 dark:text-pink-500">*</span></label>
        <input type="text" name="paymentStatus" id="paymentStatus"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div> --}}
      <div class="relative mb-5">
        <label class="block text-sm font-medium text-gray-900 dark:text-white" for="ijazah">Ijazah
          Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
          <figure class="mt-2 max-w-lg cursor-pointer">
            <img id="ijazahPreview" class="h-72 w-full rounded-lg object-cover"
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
        <label class="block text-sm font-medium text-gray-900 dark:text-white" for="transkrip">Transkrip
          Terakhir <span class="text-red-500 dark:text-pink-500">*</span>
          <figure class="mt-2 max-w-lg cursor-pointer">
            <img id="transkripPreview" class="h-72 w-full rounded-lg object-cover"
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
        <label class="block text-sm font-medium text-gray-900 dark:text-white" for="idCard">KTP/KTM <span
            class="text-red-500 dark:text-pink-500">*</span>
          <figure class="mt-2 max-w-lg cursor-pointer">
            <img id="idCardPreview" class="h-72 w-full rounded-lg object-cover"
              src="{{ asset('assets\img\dafault-img-registration.jpg') }}" alt="Foto KTP">
            <figcaption class="mt-2 text-center text-sm text-gray-500 dark:text-gray-400">PNG or JPG (MAX. 1MB).
            </figcaption>
          </figure>
        </label>
        <input
          class="absolute top-0 w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 opacity-0 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="idCard" name="idCard" type="file" accept="image/png, image/jpeg" required>
        @error('idCard')
          <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="relative mb-5">
        <label class="text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto (Backgound
          Merah) <span class="text-red-500 dark:text-pink-500">*</span>
          <figure class="mt-2 max-w-lg cursor-pointer">
            <img id="fotoPreview" class="h-72 w-full rounded-lg object-cover"
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
    </div>
    {{-- <div class="mb-2">
      <label class="mb-2 flex items-center text-sm font-medium text-gray-300 dark:text-white">
        |
        <hr class="w-full dark:bg-gray-700">|
      </label> --}}
    <button type="submit"
      class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Daftar</button>
    {{-- </div> --}}
  </form>
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

    $("#idCard").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#idCardPreview").attr("src", imgURL);
    });

    $("#foto").change(function(e) {
      const imgURL = URL.createObjectURL(e.target.files[0]);
      $("#fotoPreview").attr("src", imgURL);
    });
  </script>
@endpush
