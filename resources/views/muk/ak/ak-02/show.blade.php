@extends('layouts.app', ['title' => 'AK 04'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 02 <br> REKAMAN ASESMEN KOMPETENSI
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
          <p>Mulai : {!! explode(' ', $accession->assessmentSchedule->schedule)[0] !!}</p>
          <p>Selesai : {!! explode(' ', $accession->assessmentSchedule->schedule)[0] !!}</p>
        </td>
      </tr>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Asesor
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $accession->assessor->name }}
        </td>
      </tr>

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Asesi
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $accession->name }}
        </td>
      </tr>

    </table>

    {{-- <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Beri tanda centang (√) di kolom yang sesuai untuk
      mencerminkan bukti yang sesuai untuk setiap Unit Kompetensi.</h2> --}}
    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Unit Kompetensi
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Observasi Demonstrasi
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Portofolio
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Pernyataan Pihak Ketiga Pertanyaan Wawancara
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Pertanyaan Lisan
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Pertanyaan Tertulis
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Proyek Kerja
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Lainnya
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($scheme->units as $unit)
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $unit->name }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
          </tr>
        @endforeach
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Rekomendasi hasil asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" colspan="7">
            ☐ Kompeten / ☐ Belum kompeten
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            <b>Tindak lanjut yang dibutuhkan</b>
            (Masukkan pekerjaan tambahan dan asesmen yang diperlukan untuk mencapai kompetensi)
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" colspan="7"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Komentar/ Observasi oleh asesor
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" colspan="7"></td>
        </tr>
      </tbody>
    </table>

    <div class="my-3 border bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">LAMPIRAN DOKUMEN: : </h2>
      <ol class="w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Dokumen APL 01 peserta
        </li>
        <li>
          Dokumen APL 02 peserta
        </li>
        <li>
          Bukti-bukti berkualitas peserta
        </li>
        <li>
          Tinjauan proses asesmen
        </li>
      </ol>

    </div>

    <a href="{{ route('ak-02.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>
  </div>
@endsection
