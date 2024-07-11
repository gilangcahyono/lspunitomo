@extends('layouts.app', ['title' => 'AK 04'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 04 <br> BANDING ASESMEN
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ak.nav')

  <div class="relative overflow-x-auto">
    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Nama Asesi : {{ $scheme->accessions[0]->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Nama Asesor : {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Tanggal Asesmen : 22/07/2002
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          Jawablah dengan Ya atau Tidak pertanyaan-pertanyaan berikut ini :
        </td>
        <td class="px-6 py-4">
          Ya
        </td>
        <td class="px-6 py-4">
          Tidak
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          Apakah Proses Banding telah dijelaskan kepada Anda?
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          Apakah Anda telah mendiskusikan Banding dengan Asesor?
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          Apakah Anda mau melibatkan “orang lain” membantu Anda dalam Proses Banding?
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
        <td class="px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Banding ini diajukan atas Keputusan Asesmen yang dibuat terhadap Skema Sertifikasi (Kualifikasi/Klaster/Okupasi)
          berikut : <br>
          Skema Sertifikasi : {{ $scheme->name }}
          <br>
          No. Skema Sertifikasi : {{ $scheme->code }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Banding ini diajukan atas alasan sebagai berikut :
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          Anda mempunyai hak mengajukan banding jika Anda menilai Proses Asesmen tidak sesuai SOP dan tidak memenuhi
          Prinsip Asesmen.
        </td>
      </tr>

    </table>
  </div>
@endsection
