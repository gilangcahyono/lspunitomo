@extends('layouts.app')

@section('title')
  {{ 'Pendaftaran' }}
@endsection

@section('content')
  <section class="mx-1 sm:mx-auto sm:w-full">
    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Assesmen Mandiri
      <br>
      Skema : Pemrograman Web
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <div class="mb-3 flex justify-between">
      <div class="">
        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Petunjuk:</h2>
        <ul class="max-w-3xl list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
          <li>
            Baca setiap pertanyaan di kolom sebelah kiri.
          </li>
          <li>
            Beri tanda centang (✓) pada kotak jika anda yakin dapat melakukan tugas yang dijelaskan.
          </li>
          {{-- <li>
            Isi kolom di sebelah kanan dengan menuliskan bukti yang relevan anda miliki untuk menunjukan bahwa anda
            melakukan pekerjaan.
          </li> --}}
        </ul>
      </div>
      <div class="">
        <h3 class="font-semibold text-gray-900 dark:text-white">Nama : Gilang Cahyono</h3>
        <h3 class="font-semibold text-gray-900 dark:text-white">No.Pendaftaran : 87235283758</h3>
      </div>
    </div>

    <div class="relative overflow-x-auto">
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3" colspan="3">
              Unit Kompetensi - Membangun relasi Sosial
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Dapatkah saya . . . . . ?
            </th>
            <th class="px-6 py-4 text-center">
              K
            </th>
            <th class="px-6 py-4 text-center">
              BK
            </th>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              1.1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
            <td class="border-e px-6 py-4 text-center dark:border-gray-700" rowspan="3">
              <input type="radio" name="isCompetent1" id="competent">
              <label for="competent" class="hidden">Kompeten</label>
            </td>
            <td class="border-e px-6 py-4 text-center dark:border-gray-700" rowspan="3">
              <input type="radio" name="isCompetent1" id="incompetent">
              <label for="incompetent" class="hidden">Tidak Kompeten</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              1.2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              1.3.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              2.1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
            <td class="border-e px-6 py-4 text-center dark:border-gray-700" rowspan="3">
              <input type="radio" name="isCompetent2" id="competent">
              <label for="competent" class="hidden">Kompeten</label>
            </td>
            <td class="border-e px-6 py-4 text-center dark:border-gray-700" rowspan="3">
              <input type="radio" name="isCompetent2" id="incompetent">
              <label for="incompetent" class="hidden">Tidak Kompeten</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              2.2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border-e px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
              2.3.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae.?
            </th>
          </tr>
        </tbody>
      </table>
    </div>

  </section>
@endsection
