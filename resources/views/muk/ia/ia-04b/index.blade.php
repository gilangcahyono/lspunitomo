@extends('layouts.app', ['title' => 'AK 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 04B <br> PENILAIAN PROYEK SINGKAT ATAU KEGIATAN TERSTRUKTUR LAINNYA
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

    <div class="mb-3 border bg-white p-5 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Panduan Bagi Asesor</h2>
      <ul class="mb-3 w-full list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Lakukan penilaian pencapaian hasil proyek singkat atau kegiatan terstruktur lainnya melalui presentasi.
        </li>
        <li>
          Penilaian dilakukan sesuai dengan <b>FR IA 04A. DIT. Daftar Instruksi Terstruktur (Penjelasan Proyek Singkat/
            Kegiatan Terstruktur Lainnya)</b>
        </li>
        <li>
          Pertanyaan disampaikan oleh asesor setelah asesi melakukan presentasi proyek singkat/ kegiatan terstruktur
          lainnya.
        </li>
        <li>
          Pertanyaan dapat dikembangkan oleh asesor berdasarkan dokumen presentasi dan atau hasil presentasi
        </li>
        <li>
          Pertanyaan yang disampaikan untuk pemenuhan pencapaian 5 dimensi kompetensi.
        </li>
        <li>
          Isilah kolom lingkup penyajian proyek atau kegiatan terstruktur lainnya sesuai sektor/ sub-sektor/ profesi.
        </li>
        <li>
          Berikan keputusan pencapaian berdasarkan kesimpulan jawaban asesi.
        </li>
      </ul>
    </div>

    <table class="my-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white" rowspan="2"
            colspan="4">
            Aspek Penilaian
          </th>
          <th class="px-6 py-4 font-medium text-gray-900 dark:text-white" colspan="2">
            Pencapaian
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ya
          </th>
          <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">
            Tidak
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white" colspan="2">
            Lingkup Penyajian proyek atau
            kegiatan terstruktur lainnya
          </th>
          <th class="border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
            Daftar Pertanyaan
          </th>
          <th class="border px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white">
            Kesesuaian dengan standar kompetensi kerja (unit/elemen/KUK)
          </th>
          <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">

          </th>
          <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">

          </th>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Pertanyaan :
            <br><br>
            Tanggapan :
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
      </thead>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
          <b>Rekomendasi Asesor</b> <br>
          Asesi telah memenuhi/belum memenuhi pencapaian seluruh kriteria unjuk kerja, direkomendasikan: <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Kompeten
          </label>
          <br> <br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Belum Kompeten
          </label>
        </td>
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
