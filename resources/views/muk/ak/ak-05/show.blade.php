@extends('layouts.app', ['title' => 'AK 05'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 05 <br> LAPORAN ASESMEN
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ak.nav')

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
          Skema Sertifikasi (KKNI/Okupasi/Klaster)
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          Judul
        </td>
        <td class="px-6 py-4">
          : {{ $scheme->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Nomor
        </td>
        <td class="px-6 py-4">
          : {{ $scheme->code }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="2">
          TUK
        </td>
        <td class="w-full px-6 py-4">
          : Sewaktu/Tempat Kerja/Mandiri*
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="2">
          Nama Asesor
        </td>
        <td class="w-full px-6 py-4">
          : {{ $assessor->name }}
        </td>
      </tr>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Nama Asesi
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Rekomendasi
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" rowspan="2">
            Keterangan
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            K
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            BK
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($accessions as $accession)
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">{{ $loop->iteration }}</td>
            <td class="border px-6 py-4 dark:border-gray-700">{{ $accession->name }}</td>
            <td class="border px-6 py-4 text-center dark:border-gray-700">
              <input type="checkbox"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
            <td class="border px-6 py-4 text-center dark:border-gray-700">
              <input type="checkbox"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <h2 class="mb-2 mt-5 text-gray-500 dark:text-gray-400">Tuliskan Kode dan Judul Unit Kompetensi yang dinyatakan BK bila
      mengases satu skema</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">Aspek Negatif dan Positif dalam Asesemen</td>
      </tr>
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Pencatatan Penolakan Hasil Asesmen
        </td>
      </tr>
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Saran Perbaikan : (Asesor/Personil Terkait)
        </td>
      </tr>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          <b>Asesor :</b> <br>
          Nama : {{ $assessor->name }}<br>
          No. Reg : {{ $assessor->metRegistrationNumber }}
        </td>
      </tr>
    </table>

    <a href="{{ route('ak-05.export', ['assessorId' => $assessor->id]) }}?schemeId={{ $scheme->id }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>
  </div>
@endsection
