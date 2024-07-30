@extends('layouts.app', ['title' => 'IA 06A'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 06A <br> DPT – DAFTAR PERTANYAAN TERTULIS ESAI
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ia.nav')

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
          : {{ $accession->assessor->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="2">
          Nama Asesi
        </td>
        <td class="w-full px-6 py-4">
          : {{ $accession->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="2">
          Tanggal
        </td>
        <td class="w-full px-6 py-4">
          : 22/07/2002
        </td>
      </tr>

    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Jawablah semua pertanyaan di bawah ini:
    </h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      @foreach ($scheme->units as $unit)
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            {{ $loop->iteration }}. {{ $unit->criticalAspect }}
          </td>
        </tr>
      @endforeach
    </table>

    {{-- <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Status
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No MET
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Penyusun
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            2
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Validator
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            2
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
      </tbody>
    </table> --}}

    <a href="{{ route('ia-06a.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
