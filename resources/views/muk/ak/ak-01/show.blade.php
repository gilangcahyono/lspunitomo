@extends('layouts.app', ['title' => 'AK 01'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 01 <br> PERSETUJUAN ASESMEN DAN KERAHASIAAN
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ak.nav')

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" colspan="3">
          <h2 class="font-bold text-gray-500 dark:text-gray-400">Persetujuan Asesmen ini untuk menjamin bahwa
            Asesi
            telah diberi arahan secara rinci tentang perencanaan dan proses asesmen</h2>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
          Skema Sertifikasi (KKNI/Okupasi/Klaster)
        </td>
        <td class="px-6 py-4">
          Judul
        </td>
        <td class="px-6 py-4">
          : {{ $scheme->name }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
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
          Bukti yang akan dikumpulkan
        </td>
        <td class="w-full px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Verifikasi
            Portofolio</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Reviu
            Produk</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Observasi
            Langsung</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Kegiatan
            Terstruktur</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Pertanyaan
            Lisan</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Pertanyaan
            Tertulis</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil Pertanyaan
            Wawancara</label>
          <br><br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Lainnya ……</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
          Pelaksanaan asesmen disepakati pada:
        </td>
        <td class="px-6 py-4">
          Hari/Tanggal
        </td>
        <td class="px-6 py-4">
          : {!! explode(' ', $accession->assessmentSchedule->schedule)[0] !!}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          Waktu
        </td>
        <td class="px-6 py-4">
          : {!! explode(' ', $accession->assessmentSchedule->schedule)[1] !!}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4">
          TUK
        </td>
        <td class="px-6 py-4">
          : {{ $accession->assessmentSchedule->tuk }}
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          <h4 class="text-base font-bold">Asesi:</h4>
          <p>Bahwa saya telah mendapatkan penjelasan terkait hak dan prosedur banding asesmen dari asesor.</p>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          <h4 class="text-base font-bold">Asesor:</h4>
          <p>Menyatakan tidak akan membuka hasil pekerjaan yang saya peroleh karena penugasan saya sebagai Asesor dalam
            pekerjaan Asesmen kepada siapapun atau organisasi apapun selain kepada pihak yang berwenang sehubungan dengan
            kewajiban saya sebagai Asesor yang ditugaskan oleh LSP.</p>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="px-6 py-4" colspan="3">
          <h4 class="text-base font-bold">Asesi:</h4>
          <p>Saya setuju mengikuti asesmen dengan pemahaman bahwa informasi yang dikumpulkan hanya digunakan untuk
            pengembangan profesional dan hanya dapat diakses oleh orang tertentu saja.</p>
        </td>
      </tr>

    </table>

    <a href="{{ route('ak-01.export', ['accessionId' => $accession->id]) }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>

  </div>
@endsection
