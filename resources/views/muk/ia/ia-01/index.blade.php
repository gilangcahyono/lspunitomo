@extends('layouts.app', ['title' => 'AK 07'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 01 <br> CL - CEKLIS OBSERVASI AKTIVITAS DI TEMPAT KERJA ATAU TEMPAT KERJA
    SIMULASI
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
              Lengkapi nama unit kompetensi, elemen, dan kriteria unjuk kerja sesuai kolom dalam tabel.
            </li>
            <li>
              Isilah standar industri atau tempat kerja
            </li>
            <li>
              Beri tanda centang () pada kolom “YA” jika Anda yakin asesi dapat melakukan/ mendemonstrasikan tugas sesuai
              KUK, atau centang () pada kolom “Tidak” bila sebaliknya.
            </li>
            <li>Penilaian Lanjut diisi bila hasil belum dapat disimpulkan, untuk itu gunakan metode lain
              sehingga keputusan dapat dibuat.
            </li>
            <li>Isilah kolom KUK sesuai dengan Unit Kompetensi/ SKKNI
            </li>
          </ul>
        </td>
      </tr>

    </table>

    @foreach ($scheme->jobGroups as $jobGroup)
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="{{ $jobGroup->units->count() + 1 }}">
            Kelompok Pekerjaan {{ $loop->iteration }}
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

      @foreach ($jobGroup->units as $unit)
        <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
              Unit Kompetensi {{ $unit->name }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              Kode
            </td>
            <td class="px-6 py-4">
              : {{ $unit->code }}
            </td>
          </tr>

          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              Judul
            </td>
            <td class="px-6 py-4">
              : {{ $unit->name }}
            </td>
          </tr>

        </table>

        <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
          <thead>
            <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
              <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                No
              </th>
              <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                Elemen
              </th>
              <th class="px-6 py-4" rowspan="2">
                Kriteria Unjuk Kerja
              </th>
              <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                Standar Industri atau Tempat Kerja
              </th>
              <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
                Pencapaian
              </th>
              <th class="px-6 py-4" rowspan="2">
                Penilaian Lanjut
              </th>
            </tr>
            <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
              <th class="border px-6 py-4 dark:border-gray-700">
                Ya
              </th>
              <th class="border px-6 py-4 dark:border-gray-700">
                Tidak
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($unit->elements as $element)
              <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                <td class="border px-6 py-4 dark:border-gray-700">
                  {{ $loop->iteration }}
                </td>
                <td class="border px-6 py-4 dark:border-gray-700">
                  {{ $element->name }}
                </td>
                <td class="border px-6 py-4 dark:border-gray-700">
                  @foreach ($element->kuks as $kuks)
                    <p>{{ $loop->iteration }}. {{ $kuks->name }}</p>
                  @endforeach
                </td>
                <th class="border px-6 py-4 dark:border-gray-700">

                </th>
                <th class="border px-6 py-4 dark:border-gray-700">
                  <input id="green-checkbox" type="checkbox" value=""
                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                </th>
                <th class="border px-6 py-4 dark:border-gray-700">
                  <input id="green-checkbox" type="checkbox" value=""
                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                </th>
                <th class="border px-6 py-4 dark:border-gray-700">

                </th>
              </tr>
            @endforeach

          </tbody>
        </table>
        @if ($loop->iteration == $jobGroup->units->count())
          <div class="mb-3 border bg-white p-3 dark:border-gray-700 dark:bg-gray-800">
            <p class="text-gray-600 dark:text-gray-400">Umpan Balik untuk asesi:</p>
          </div>
        @endif
      @endforeach
    @endforeach

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
          Rekomendasi: <br> <br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesi telah memenuhi
            pencapaian
            seluruh kriteria unjuk kerja,
            direkomendasikan <b>KOMPETEN</b>
          </label>
          <br> <br>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesi belum memenuhi
            pencapaian
            seluruh kriteria unjuk kerja,
            direkomendasikan <b>BELUM KOMPETEN</b>

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

    </table>

  </div>
@endsection
