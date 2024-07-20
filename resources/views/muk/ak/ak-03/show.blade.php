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

    <h2 class="mb-2 mt-5 text-gray-500 dark:text-gray-400">Umpan balik dari Asesi (diisi oleh Asesi setelah
      pengambilan keputusan):</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Komponen
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Hasil
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Catatan/Komentar Asesi
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
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Saya mendapatkan penjelasan yang cukup memadai mengenai proses
            asesmen/uji kompetensi</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Saya diberikan kesempatan untuk mempelajari standar kompetensi
            yang akan diujikan dan menilai diri sendiri terhadap pencapaiannya</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Asesor memberikan kesempatan untuk
            mendiskusikan/menegosiasikan metoda, instrumen dan sumber asesmen serta jadwal asesmen</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Asesor berusaha menggali seluruh bukti pendukung yang sesuai
            dengan latar belakang pelatihan dan pengalaman yang saya miliki</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Saya sepenuhnya diberikan kesempatan untuk mendemonstrasikan
            kompetensi yang saya miliki selama asesmen</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Saya mendapatkan penjelasan yang memadai mengenai keputusan
            asesmen</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Asesor memberikan umpan balik yang mendukung setelah asesmen
            serta tindak lanjutnya</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Asesor bersama saya mempelajari semua dokumen asesmen serta
            menandatanganinya</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Saya mendapatkan jaminan kerahasiaan hasil asesmen serta
            penjelasan penanganan dokumen asesmen</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">Asesor menggunakan keterampilan komunikasi yang efektif selama
            asesmen</td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" colspan="4">Catatan/komentar lainnya (apabila ada) : <br>
            <br> <br>
          </td>
        </tr>
      </tbody>
    </table>

    <a href="{{ route('ak-03.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>
  </div>
@endsection
