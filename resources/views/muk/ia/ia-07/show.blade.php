@extends('layouts.app', ['title' => 'IA 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 07 <br> DPL – DAFTAR PERTANYAAN LISAN
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

    <div class="mb-3 border bg-white p-5 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Panduan Bagi Asesor</h2>
      <ul class="mb-3 w-full list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Pertanyaan lisan merupakan jenis bukti tambahan untuk mendukung bukti-bukti yang sudah ada.
        </li>
        <li>
          Buatlah pertanyaan lisan yang dapat mencakupi penguatan informasi berdasarkan KUK, batasan variabel,
          pengetahuan dan ketrampilan esensial, sikap dan aspek kritis.</b>
        </li>
        <li>
          Perkiraan jawaban dapat diisikan pada baris kunci jawaban.
        </li>
        <li>
          Tanggapan/penilaian dapat diisi dengan centang () pada kolom Asesi “Ya” atau ”Tidak”.
        </li>
        <li>
          Dibutuhkan jastifikasi profesional asesor untuk memutuskan hal ini.
        </li>
      </ul>
    </div>

    <table class="my-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-gray-400">
            Instruksi:
          </th>
          <td class="px-6 py-4 text-gray-900 dark:text-white">
            <ul class="mb-3 w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
              <li>
                Pertanyaan lisan merupakan jenis bukti tambahan untuk mendukung bukti-bukti yang sudah ada.
              </li>
              <li>
                Buatlah pertanyaan lisan yang dapat mencakupi penguatan informasi berdasarkan KUK, batasan variabel,
                pengetahuan dan ketrampilan esensial, sikap dan aspek kritis.</b>
              </li>
              <li>
                Perkiraan jawaban dapat diisikan pada baris kunci jawaban.
              </li>
              <li>
                Tanggapan/penilaian dapat diisi dengan centang () pada kolom Asesi “Ya” atau ”Tidak”.
              </li>
              <li>
                Dibutuhkan jastifikasi profesional asesor untuk memutuskan hal ini.
              </li>
            </ul>
          </td>
        </tr>
      </thead>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            No
          </th>
          <th class="w-full border px-6 py-4 text-center dark:border-gray-700" rowspan="2">
            Pertanyaan
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Pencapaian
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Ya
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Tidak
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Pertanyaan: <br>
          </td>

          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Kunci Jawaban: <br>
          </td>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Jawaban Asesi: <br>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Umpan balik untuk asesi
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          Aspek pengetahuan seluruh unit kompetensi yang diujikan (tercapai/ belum tercapai)*
          <br><br>
          Tuliskan unit/elemen/KUK jika belum tercapai: ….
        </td>
      </tr>

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
          {{ $accession->name }}
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
          {{ $accession->assessor->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          No. Reg
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          {{ $accession->assessor->metRegistrationNumber }}
        </td>
      </tr>

    </table>

    <a href="{{ route('ia-07.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
