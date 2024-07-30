@extends('layouts.self-assessment', ['title' => 'Asesmen Mandiri'])

@section('content')
  <h1 class="mt-4 text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Assesmen Mandiri <br> Skema : {{ $candidate->scheme->name }}
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  {{-- <div class="border p-3 dark:border-gray-700">
    <table class="font-semibold text-gray-900 dark:text-white">
      <tr>
        <td>Nama</td>
        <td> &nbsp; : {{ $candidate->name }}</td>
      </tr>
      <tr>
        <td>No. Pendaftaran</td>
        <td> &nbsp; : {{ $candidate->registrationNumber }}</td>
      </tr>
      <tr>
        <td>Skema</td>
        <td> &nbsp; : {{ $candidate->scheme->name }}</td>
      </tr>
    </table>
  </div> --}}

  <div class="mb-3 border border-t p-3 dark:border-gray-700">
    <h3 class="mb-2 font-semibold text-gray-900 dark:text-white">Petunjuk :</h3>
    <ul class="list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
      <li>
        Baca setiap pertanyaan di kolom sebelah kiri.
      </li>
      <li>
        Beri tanda centang (✓) pada kotak jika anda yakin dapat melakukan tugas yang dijelaskan.
      </li>
      {{-- <li>
      Isi kolom di sebelah kanan dengan menuliskan bukti yang relevan anda miliki untuk menunjukan bahwa anda
      melakukan pekerjaan.
    </li> --}}
    </ul>
  </div>

  <form action="{{ route('self-assessments.store') }}" method="POST">
    @csrf
    <input type="hidden" readonly name="registrationNumber" value="{{ $candidate->registrationNumber }}">
    <input type="hidden" readonly name="nim" value="{{ $candidate->nim }}">
    <div class="relative mb-3 overflow-x-auto">
      @foreach ($candidate->scheme->units as $unit)
        <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
          <thead class="bg-emerald-700 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3" colspan="4">
                Unit Kompetensi - {{ $unit->name }}
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
              <th scope="row" class="w-full whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                Dapatkah saya . . . . . ?
              </th>
              <th class="border-x px-6 py-4 text-center dark:border-gray-700">
                K
              </th>
              <th class="border-r px-6 py-4 text-center dark:border-gray-700">
                BK
              </th>
              {{-- <th class="border-r px-6 py-4 text-center dark:border-gray-700">
                Bukti yang relevan
              </th> --}}
            </tr>
            @foreach ($unit->elements as $element)
              <tr
                class="{{ $elements && $elements[$element->id] == 'Belum Kompeten' ? 'bg-red-300 dark:bg-red-700 ' : '' }} border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                <td scope="row"
                  class="whitespace-nowrap border-e px-6 py-4 text-gray-900 dark:border-gray-700 dark:text-gray-300">
                  <p class="mb-1">{{ $loop->iteration }}. Elemen : {{ $element->name }}</p>
                  <p class="mb-1 ml-4">Kriteria Unjuk Kerja:</p>
                  @foreach ($element->kuks as $kuk)
                    <p class="mb-1 ml-6">{{ $loop->parent->iteration }}.{{ $loop->iteration }}. {{ $kuk->name }} ?
                    </p>
                  @endforeach
                </td>
                <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                  <input type="radio" name="{{ $element->id }}" id="competent" value="Kompeten" required
                    {{ $elements && $elements[$element->id] == 'Kompeten' ? 'checked' : '' }}>
                  <label for="competent" class="hidden">Kompeten</label>
                </td>
                <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                  <input type="radio" name="{{ $element->id }}" id="incompetent" class="text-red-600"
                    value="Belum Kompeten" required
                    {{ $elements && $elements[$element->id] == 'Belum Kompeten' ? 'checked' : '' }}>
                  <label for="incompetent" class="hidden">Belum Kompeten</label>
                </td>
                {{-- <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                  <input type="text" name="{{ $element->id }}" id="incompetent" required
                    {{ $elements && $elements[$element->id] == 'Belum Kompeten' ? 'checked' : '' }}>
                  <label for="incompetent" class="hidden">Belum Kompeten</label>
                </td> --}}
              </tr>
            @endforeach
          </tbody>
        </table>
      @endforeach
    </div>

    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
      class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Selesai
      dan Kirim</button>

    <div id="popup-modal" tabindex="-1"
      class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
      <div class="relative max-h-full w-full max-w-md p-4">
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
          <button type="button"
            class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="popup-modal">
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="p-4 text-center md:p-5">
            <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-200" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Sudahkan anda mengisi berkas diatas?
            </h3>
            <button data-modal-hide="popup-modal" type="submit"
              class="inline-flex items-center rounded-lg bg-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:focus:ring-emerald-800">
              Sudah
            </button>
            <button data-modal-hide="popup-modal" type="button"
              class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Belum</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection

@push('scripts')
  <script>
    // window.location.refresh();
    // $(':radio:not(:checked)').attr('disabled', true);

    // Fungsi untuk menghitung mundur waktu
  </script>
@endpush
