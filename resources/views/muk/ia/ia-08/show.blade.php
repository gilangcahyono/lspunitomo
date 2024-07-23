@extends('layouts.app', ['title' => 'IA 08'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 08 <br> CVP - CEKLIS VERIFIKASI PORTOFOLIO
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
          Verifikasi portofolio dapat dilakukan untuk keseluruhan unit kompetensi dalam skema sertifikasi atau dilakukan
          untuk masing-masing kelompok pekerjaan dalam satu skema sertifikasi.
        </li>
        <li>
          Isilah bukti portofolio sesuai ketentuan bukti berkualitas dan relevan dengan standar kompetensi kerja
          sebagaimana yang telah disepakati pada rekaman asesmen mandiri.</b>
        </li>
        <li>
          Lakukan verifikasi portofolio berdasarkan aturan bukti.
        </li>
        <li>
          Berikan hasil verifikasi portofolio dengan memberi centang (√) pada kolom yang sesuai.
        </li>
        <li>
          Jika hasil verifikasi dokumen portofolio belum memenuhi aturan bukti maka asesor melanjutkan dengan metode
          tanya jawab pertanyaan wawancara dan/atau verifikasi pihak ketiga.
        </li>
      </ul>
    </div>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            No
          </th>
          <th class="w-full border px-6 py-4 text-center dark:border-gray-700" rowspan="3">
            Bukti Portfolio
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="8">
            Aturan Bukti
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Valid
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Asli
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Terkini
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Memadai
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Ya
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Tidak
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Ya
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Tidak
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Ya
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            Tidak
          </th>
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
          <td class="border px-6 py-4 dark:border-gray-700">
            1
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
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
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
      </tbody>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
            Sebagai tindak lanjut dari hasil verifikasi bukti, substansi materi di bawah ini (no elemen yg di cek list)
            harus diklarifikasi selama wawancara:
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Cek List
            </td>
          <th class="border px-6 py-4 dark:border-gray-700">
            No. Unit Kompetensi
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No. Elemen
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Materi/substansi wawancara/KUK
          </th>
        </tr>
      </thead>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
        </td>
        <td class="border px-6 py-4 dark:border-gray-700"></td>
        <td class="border px-6 py-4 dark:border-gray-700"></td>
        <td class="border px-6 py-4 dark:border-gray-700"></td>
      </tr>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
          Bukti tambahan diperlukan pada unit / elemen kompetensi sebagai berikut:
        </th>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
          Rekomendasi Asesor:
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesi telah memenuhi
            pencapaian seluruh kriteria unjuk kerja, direkomendasikan KOMPETEN</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesi belum memenuhi
            pencapaian seluruh kriteria unjuk kerja, direkomendasikan (OBSERVASI LANGSUNG/KEGIATAN
            TERSTRUKTUR*) pada: <br>
            Kelompok Pekerjaan Unit : ….. <br>
            Elemen: ….. <br>
            KUK : …….</label>

        </td>
      </tr>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
          Asesi:
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
          Asesor:
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
          {{ $scheme->assessors[0]->metRegistrationNumber }}
        </td>
      </tr>

    </table>

    <a href="{{ route('ia-08.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
