@extends('layouts.app', ['title' => 'Peta Kelompok Pekerjaan'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    PETA KELOMPOK PEKERJAAN
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="10">
          Skema : {{ $scheme->name }}
        </th>
      </tr>

      @foreach ($scheme->jobGroups as $jobGroup)
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="10">
            Kelompok Pekerjaan : {{ $jobGroup->name }}
          </th>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="10">
            <div class="mb-2">Jenis Bukti Langsung</div>
            <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
              <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
                  Observasi Langsung
                </th>
                <th class="border px-6 py-4 dark:border-gray-700">
                  Instruksi Terstruktur
                </th>
              </tr>
              <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                <th class="border px-6 py-4 dark:border-gray-700">
                  Skenario TPD
                </th>
                <th class="border px-6 py-4 dark:border-gray-700">
                  PMO
                </th>
                <th class="border px-6 py-4 dark:border-gray-700">
                  Skenerio DIT
                </th>
              </tr>
              <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                <td class="border px-6 py-4 dark:border-gray-700">
                  <textarea id="message" rows="4"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"></textarea>
                </td>
                <td class="border px-6 py-4 dark:border-gray-700">
                  <textarea id="message" rows="4"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"></textarea>
                </td>
                <td class="border px-6 py-4 dark:border-gray-700">
                  <textarea id="message" rows="4"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"></textarea>
                </td>
              </tr>
            </table>
          </th>
        </tr>

        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Unit
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Aspek Kritis
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="3">
            Elemen Kompetensi & KUK
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
            Jenis Bukti Tambahan
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" colspan="3">
            Jenis Bukti Tidak Langsung
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            DPT
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            DPL
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            PW
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            VPK
          </th>
          <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
            Portofolio
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            CRP
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama Dokumen
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama Dokumen
          </th>
        </tr>

        @foreach ($jobGroup->units as $unit)
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $loop->iteration }}. {{ $unit->name }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <textarea id="message" rows="4" cols="500"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"></textarea>
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              <input type="text" id="first_name"
                class="block max-w-sm rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
                required />
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
        @endforeach
      @endforeach

    </table>

    <button type="button"
      class="mb-2 me-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>

  </div>
@endsection
