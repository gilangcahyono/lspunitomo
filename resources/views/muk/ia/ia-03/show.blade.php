@extends('layouts.app', ['title' => 'AK 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 03 <br> PERTANYAAN UNTUK MENDUKUNG OBSERVASI
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

    <div class="mb-3 border bg-white p-3 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Panduan Bagi Asesor</h2>
      <ul class="mb-3 w-full list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Formulir ini di isi oleh asesor kompetensi dapat sebelum, pada saat atau setelah melakukan asesmen dengan metode
          observasi demonstrasi.
        </li>
        <li>
          Pertanyaan dibuat dengan tujuan untuk menggali, dapat berisi pertanyaan yang berkaitan dengan dimensi
          kompetensi,
          batasan variabel dan aspek kritis yang relevan dengan skenario tugas dan praktik demonstrasi.
        </li>
        <li>
          Jika pertanyaan disampaikan sebelum asesi melakukan praktik demonstrasi, maka pertanyaan dibuat berkaitan dengan
          aspek K3L, SOP, penggunaan peralatan dan perlengkapan.
        </li>
        <li>
          Jika setelah asesi melakukan praktik demonstrasi terdapat item pertanyaan pendukung observasi telah terpenuhi,
          maka pertanyaan tersebut tidak perlu ditanyakan lagi dan cukup memberi catatan bahwa sudah terpenuhi pada saat
          tugas praktek demonstrasi pada kolom tanggapan
        </li>
        <li>
          Jika pada saat observasi ada hal yang perlu dikonfirmasi sedangkan di instrumen daftar pertanyaan pendukung
          observasi tidak ada, maka asesor dapat memberikan pertanyaan dengan syarat pertanyaan harus berkaitan dengan
          tugas
          praktek demonstrasi. Jika dilakukan, asesor harus mencatat dalam instrumen pertanyaan pendukung observasi.
        </li>
        <li>
          Tanggapan asesi ditulis pada kolom tanggapan.
        </li>
      </ul>
    </div>
    @foreach ($scheme->jobGroups as $jobGroup)
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="{{ $jobGroup->units->count() + 1 }}">
            {{ $jobGroup->name }}
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

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white"
              rowspan="2" colspan="2">
              Pertanyaan
            </th>
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
              colspan="2">
              Pencapaian
            </th>
          </tr>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Ya
            </th>
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Tidak
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              1.
            </th>
            <td class="w-full border px-6 py-4 dark:border-gray-700">

            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
            </td>
          </tr>

          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row"
              class="whitespace-nowrap border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white"
              colspan="2">
              Tanggapan:
            </th>
            <td class="px-6 py-4">
              <input id="green-checkbox" type="checkbox" value=""
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
            <td class="px-6 py-4">
              <input id="green-checkbox" type="checkbox" value=""
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
          </tr>
        </tbody>

      </table>
    @endforeach

    <div class="mb-3 border bg-white p-3 dark:border-gray-700 dark:bg-gray-800">
      <p class="text-gray-600 dark:text-gray-400">Umpan Balik untuk asesi:</p>
    </div>

    <table class="my-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

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

    <a href="{{ route('ia-03.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
