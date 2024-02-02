@extends('layouts.app')

@section('title')
  {{ 'Pendaftaran' }}
@endsection

@section('content')
  <section class="mx-1 sm:mx-auto sm:w-full">
    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Pendaftaran Uji Kompetensi Mandiri
      <br>
      Tahun Ajaran 2023 Periode Gasal
    </h1>
    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">
    <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data" class="mt sm:columns-2">

      @csrf

      <div class="mb-5">
        <label for="nim" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Induk
          Mahasiswa (NIM)</label>
        <input type="text" name="nim" id="nim"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
        <input type="text" name="name" id="name"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="lesson" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program Sudi</label>
        <input type="text" name="lesson" id="lesson"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="faculty" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
        <input type="text" name="faculty" id="faculty"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="semester" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Semester</label>
        <input type="text" name="semester" id="semester"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="nik" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Induk KTP</label>
        <input type="text" name="nik" id="nik"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat KTP</label>
        <input type="text" name="address" id="address"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="c" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kabupaten/Kota</label>
        <input type="text" name="c" id="c"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
        <input type="text" name="province" id="province"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
          Terakhir</label>
        <input type="text" name="lastEducation" id="lastEducation"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="occupation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan
        </label>
        <input type="text" name="occupation" id="occupation"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label for="skema" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema
          Kompetensi</label>
        <select id="skema" name="skema"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
          <option selected>Pilih Skema</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>
      </div>
      <div class="mb-5">
        <label for="phoneNumber" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">No WhatsApp
        </label>
        <input type="tel" name="phoneNumber" id="phoneNumber"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-5">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="ijazah">Ijazah
          Terakhir</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="ijazah" name="ijazah" type="file">
      </div>
      <div class="mb-5">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="ijazah">Transkrip
          Terakhir</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="ijazah" name="ijazah" type="file">
      </div>
      <div class="mb-5">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="ktp">KTP</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="ktp" name="ktp" type="file">
      </div>
      <div class="mb-5">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="ktm">KTM</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="ktm" name="ktm" type="file">
      </div>
      <div class="mb-5">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto (Backgound
          Merah)</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="foto" name="foto" type="file">
      </div>
      <div class="mb-5">
        <label for="paymentStatus" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status
          Pembayaran</label>
        <input type="text" name="paymentStatus" id="paymentStatus"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required>
      </div>
      <div class="mb-3">
        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
          Submit
        </label>
        <button type="submit"
          class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Daftar</button>
      </div>
    </form>
  </section>
@endsection
