@extends('layouts.app', ['title' => 'AK 06'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 06 <br> MENINJAU PROSES ASESMEN
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
          : {{ $assessor->name }}
        </td>
      </tr>

    </table>

    <div class="mb-3 border bg-white p-3 dark:border-gray-700 dark:bg-gray-800">
      <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-300">Penjelasan:</h2>
      <ul class="mb-3 w-full list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
        <li>
          Peninjauan dapat dilakukan oleh lead asesor atau asesor yang melaksanakan asesmen.
        </li>
        <li>
          Peninjauan dapat dilakukan secara terpadu dalam skema sertifikasi dan / atau peserta kelompok yang homogen.
        </li>
        <li>
          Isilah pemenuhan dimensi kompetensi dengan menuliskan jenis bukti dan instrumen yang digunakan pada saat asesmen
          sebagai bukti terpenuhinya dimensi kompetensi.
        </li>
      </ul>
    </div>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Nama Asesi
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="2">
            Rekomendasi
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" rowspan="2">
            Keterangan
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            K
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700">
            BK
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($accessions as $accession)
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">{{ $loop->iteration }}</td>
            <td class="border px-6 py-4 dark:border-gray-700">{{ $accession->name }}</td>
            <td class="border px-6 py-4 text-center dark:border-gray-700">
              <input type="checkbox"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
            <td class="border px-6 py-4 text-center dark:border-gray-700">
              <input type="checkbox"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
            </td>
            <td class="border px-6 py-4 dark:border-gray-700"></td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <h2 class="mb-2 mt-5 text-gray-500 dark:text-gray-400">Tuliskan Kode dan Judul Unit Kompetensi yang dinyatakan BK bila
      mengases satu skema</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">Aspek Negatif dan Positif dalam Asesemen</td>
      </tr>
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Pencatatan Penolakan Hasil Asesmen
        </td>
      </tr>
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          Saran Perbaikan : (Asesor/Personil Terkait)
        </td>
      </tr>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Asepek yang ditinjau <br>Prosedur asesmen:
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="5">
            Kesesuaian dengan prinsip asesmen
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Validitas
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Reliabel
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Fleksibel
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Adil
          </th>
        </tr>
      </thead>
      <tbody>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            • Rencana asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            • Persiapan asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            • Implementasi asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            • Keputusan asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            • Umpan balik asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <input id="1" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" colspan="5">
            Rekomendasi untuk peningkatan:
          </td>
        </tr>

      </tbody>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Asepek yang ditinjau
          </th>
          <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="5">
            Pemenuhan dimensi kompetensi
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Task Skills
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Task Management Skills
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Contingency Management Skills
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Job Role/ Environment Skills
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Transfer Skills
          </th>
        </tr>
      </thead>
      <tbody>

        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            <b>Konsistensi keputusan asesmen</b>
            Bukti dari berbagai asesmen diperiksa untuk konsistensi
            dimensi kompetensi

          </td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
          <td class="border px-6 py-4 dark:border-gray-700"></td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" colspan="6">
            Rekomendasi untuk peningkatan:
          </td>
        </tr>

      </tbody>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700">
          <b>Nama Asesor :</b> <br>
          Nama : {{ $assessor->name }}<br>
          No. Reg : {{ $assessor->metRegistrationNumber }}
        </td>
      </tr>
    </table>

    <a href="{{ route('ak-06.export', ['assessorId' => $assessor->id]) }}?schemeId={{ $scheme->id }}" target="_blank"
      class="focus:ring-primary-300 mb-2 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
      Cetak
    </a>
  </div>
@endsection
