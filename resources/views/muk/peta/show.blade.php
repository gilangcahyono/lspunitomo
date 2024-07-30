@extends('layouts.app', ['title' => 'Peta Kelompok Pekerjaan'])

@section('content')
  <a href="/peta">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="absolute mt-1 h-6 w-6 dark:text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
    </svg>
  </a>

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    PETA KELOMPOK PEKERJAAN <br>
    SKEMA <span class="uppercase">{{ $scheme->name }}</span>
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="relative overflow-x-auto">

    <form action="{{ route('peta.store') }}" method="POST">
      @csrf

      @foreach ($scheme->jobGroups as $jobGroup)
        <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <th class="border px-6 py-4 dark:border-gray-700" colspan="10">
              Kelompok Pekerjaan : {{ $jobGroup->name }}
            </th>
          </tr>

          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700" colspan="10">
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
                    <textarea id="tpd" name="jobGroups[{{ $jobGroup->id }}][tpd]"
                      class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">{{ $jobGroup->tpd }}</textarea>
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <textarea id="pmo" name="jobGroups[{{ $jobGroup->id }}][pmo]"
                      class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">{{ $jobGroup->pmo }}</textarea>
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <textarea id="dit" name="jobGroups[{{ $jobGroup->id }}][dit]"
                      class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">{{ $jobGroup->dit }}</textarea>
                  </td>
                </tr>
              </table>
            </td>
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
            <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="4">
              Jenis Bukti Tambahan
            </th>
            {{-- <th class="border px-6 py-4 dark:border-gray-700" colspan="3">
              Jenis Bukti Tidak Langsung
            </th> --}}
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
            {{-- <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
              Portofolio
            </th>
            <th class="border px-6 py-4 dark:border-gray-700">
              CRP
            </th> --}}
          </tr>
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            {{-- <th class="border px-6 py-4 dark:border-gray-700">
              No
            </th> --}}
            {{-- <th class="border px-6 py-4 dark:border-gray-700">
              Nama Dokumen
            </th> --}}
            {{-- <th class="border px-6 py-4 dark:border-gray-700">
              Nama Dokumen
            </th> --}}
          </tr>

          @foreach ($jobGroup->units as $unit)
            <input type="hidden" name="units[{{ $unit->id }}][id]" value="{{ $unit->id }}">
            <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
              <td class="border px-6 py-4 dark:border-gray-700">
                {{ $loop->iteration }}. {{ $unit->id }}. {{ $unit->name }}
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <textarea name="units[{{ $unit->id }}][criticalAspect]"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">{{ $unit->criticalAspect }}</textarea>
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <input type="text" id="elementAndKuk" name="units[{{ $unit->id }}][elementAndKuk]"
                  value="{{ $unit->elementAndKuk }}"
                  class="block max-w-sm rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500" />
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <input name="units[{{ $unit->id }}][dpt]" type="checkbox" value="{{ true }}"
                  {{ $unit->dpt ? 'checked' : '' }}
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <input name="units[{{ $unit->id }}][dpl]" type="checkbox" value="{{ true }}"
                  {{ $unit->dpl ? 'checked' : '' }}
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <input name="units[{{ $unit->id }}][pw]" type="checkbox" value="{{ true }}"
                  {{ $unit->pw ? 'checked' : '' }}
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              </td>
              <td class="border px-6 py-4 dark:border-gray-700">
                <input name="units[{{ $unit->id }}][vpk]" type="checkbox" value="{{ true }}"
                  {{ $unit->vpk ? 'checked' : '' }}
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              </td>
              {{-- <td class="border px-6 py-4 dark:border-gray-700">

              </td>
              <td class="border px-6 py-4 dark:border-gray-700">

              </td>
              <td class="border px-6 py-4 dark:border-gray-700">

              </td> --}}
            </tr>
          @endforeach

        </table>
      @endforeach

      <button type="submit"
        class="mb-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>

    </form>

  </div>
@endsection
