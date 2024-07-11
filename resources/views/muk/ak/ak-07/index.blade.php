@extends('layouts.app', ['title' => 'AK 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 07 <br> CEKLIS PENYESUAIAN YANG WAJAR DAN BERALASAN
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

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
          <h2 class="mb-2 text-base font-bold text-gray-500 dark:text-gray-400">Panduan Bagi Asesor</h2>
          <ul class="w-full list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
            <li>
              Formulir ini dapat digunakan (sebelum pra asesmen, saat pelaksanaan pra asesmen, setelah pra asesmen)* jika
              ada
              asesi yang mempunyai keterbatasan sesuai karakteristik yang dimilikinya sehinga diperlukan penyesuaian yang
              wajar
              dan beralasan, jika rencana asesmen dan perangkat asesmen tidak sesuai dengan acuan pembanding, potensi
              asesi dan
              konteks asesi , jika asesi merasa 32 keletihan, sakit, serta jika kondisi alam, listrik padam,……..
            </li>
            <li>
              Coretlah pada tanda * yang tidak sesuai.
            </li>
            <li>
              Berilah tanda √ pada kotak ‘☐ ‘ pada kolom potensi asesi
            </li>
            <li>Berilah tanda √ Ya atau Tidak pada tanda ** sesuai pilihan, jika jawaban Ya selanjutanya pada kolom
              keterangan
              berilah tanda √ di kotak ‘☐ ‘ yang tersedia, pilihan boleh lebih dari satu.</li>
          </ul>
        </td>
      </tr>

    </table>

    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="border dark:border-gray-700">
        <tr class="bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Mengidentifikasi Persyaratan Modifikasi dan Kontekstualisasi (karaktersitik asesi):
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
            Diperlukan penyesuaian
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Keterangan
          </th>
        </tr>
        <tr class="bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Ya
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Tidak
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            Keterbatasan asesi terhadap persyaratan bahasa, literasi, numerasi.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Memerlukan dukungan
              pembaca, penerjemah, pelayan, penulis. untuk merekam jawaban asesi.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Melakukan asesmen
              verbal (gunakan pertanyaan lisan/pertanyaan wawancara) dengan dilengkapi gambar diagram dan bentuk-benbentuk
              visual.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan Hasil
              produksi.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Mengunakan Ceklis
              observasi/demonstrasi.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan daftar
              instruksi terstruktur.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            2
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Penyediaan dukungan pembaca, penerjemah, pelayan, penulis.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              pertanyaan lisan dengan dilengkapi gambar diagram dan bentuk-bentuk visual.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              pertanyaan wawancara dengan dilengkapi gambar diagram dan bentuk-bentuk visual.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="7">
            3
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="7">
            Keterbatasan asesi terhadap persyaratan bahasa, literasi, numerasi.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="7">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="7">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Ceklis
              observasi/demonstrasi Demonstrasi.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              lisan.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              tertulis.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              wawancara.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Daftar instruksi
              terstruktur.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Ceklis verifikasi
              portofolio.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              dukungan operator komputer.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            4
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
            Pelaksanaan asesmen secara fleksibel karena alasan keletihan atau keperluan pengobatan.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan juru
              tulis.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              kamaramen perekam vidio/ataudio.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Memperbolehkan
              periode waktu yang lebih panjang untuk menyelesaikan tugas pekrejaan dalam asesmen.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Melakukan tugas
              pekerjaan dalam asesmen dengan waktu lebih pendek.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              instruksi-instruksi spesifik pada proyek yang dapat dilakukan pada berbagai tingkatan. </label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            5
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Penyediaan peralatan asesmen berupa braille, audio/video-tape.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              pertanyaan lisan.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              pertanyaan wawancara.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="6">
            6
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="6">
            Penyesuaian tempat fisik/lingkungan asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="6">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="6">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              lisan.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              tulis.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pertanyaan
              wawancara.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Ceklis Verifikasi
              portofolio.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Ceklis reviu
              produk.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Daftar instruksi
              terstruktur.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
            7
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
            Pertimbangan umur/usia lanjut/gender asesi.
            (Adanya perbedaan usia dengan asesor yang lebih muda).
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan studi
              kasus/daftar instruksi terstrukut </label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              instrumen asesmen dengan huruf normal jangan terlalu kecil.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan asesor
              dengan jenis kelamin yang sama dengan asesi.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              instrumen asesmen yang sama walaupun berbeda jenis kelamain (tidak boleh memberi tanda tambahan pada
              instrumen asesmen yang digunakan dengan tujuan untuk membedakan jenis kelamin).</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            8
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Pertimbangan budaya/tradisi/agama.
          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">

          </td>
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan studi
              kasus daftar instruksi terstrukut</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan asesor
              tanpa pertimbangan budaya/tradisi/agama.</label>
          </td>
        </tr>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="px-6 py-4">
            <input id="green-checkbox" type="checkbox" value=""
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Menggunakan
              instrumen asesmen yang sama walaupun berbeda budaya/tradisi/agama.</label>
          </td>
        </tr>

      </tbody>
    </table>

    <div class="my-3 border bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Hasil Penyesuaian yang wajar dan beralasan
        disepakati menggunakan : </h2>
      <ol class="w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Acuan Pembanding Asesmen: ( tuliskan nama acuan pembanding)
        </li>
        <li>
          Metode Asesmen: ( tuliskan nama acuan pembanding)
        </li>
        <li>
          Instrumen Asesmen: ( tuliskan nama formulir instrumen asesmen )
        </li>
      </ol>

    </div>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Asesor
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Asesi
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->accessions[0]->name }}
        </td>
      </tr>

    </table>

  </div>
@endsection
