@extends('layouts.app', ['title' => 'AK 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 02 <br> TPD - TUGAS PRAKTIK DEMONSTRASI
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
        <th class="px-6 py-4">
          : {{ $scheme->name }}
        </th>
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
          : {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="2">
          Nama Asesi
        </td>
        <td class="w-full px-6 py-4">
          : {{ $scheme->accessions[0]->name }}
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

    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">A. Petunjuk</h2>
    <ol class="mb-3 w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
      <li>
        Baca dan pelajari setiap instruksi kerja di bawah ini dengan cermat sebelum melaksanakan praktek
      </li>
      <li>
        Klarifikasi kepada asesor kompetensi apabila ada hal-hal yang belum jelas
      </li>
      <li>
        Laksanakan pekerjaan sesuai dengan urutan proses yang sudah ditetapkan
      </li>
      <li>
        Seluruh proses kerja mengacu kepada SOP/WI yang dipersyaratkan (Jika Ada)
      </li>
    </ol>

    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">B. Skenario Tugas Praktik Demonstrasi</h2>

    @foreach ($scheme->jobGroups as $jobGroup)
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="{{ $jobGroup->units->count() + 1 }}">
            Kelompok Pekerjaan {{ $loop->iteration }}
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Kode Unit
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Judul Unit
          </th>
        </tr>

        @foreach ($jobGroup->units as $unit)
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $loop->iteration }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $unit->code }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $unit->name }}
            </td>
          </tr>
        @endforeach
      </table>

      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-300">Skenario Tugas Praktik Demonstrasi:</h2>
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-300">Perlengkapan dan Peralatan:</h2>
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-300">Waktu:</h2>
    @endforeach

    <table class="mt-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
          Asesi
        </th>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Nama
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          {{ $scheme->accessions[0]->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
          Asesor
        </th>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Nama
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          No Reg
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          {{ $scheme->assessors[0]->metRegistrationNumber }}
        </td>
      </tr>

    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
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
    </table>

  </div>
@endsection
