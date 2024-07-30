@extends('layouts.app', ['title' => 'Asesmen Mandiri'])

@section('content')
  <div class="mb-4 border p-3 dark:border-gray-700">
    <table class="font-semibold text-gray-900 dark:text-white">
      {{-- <tr>
        <td>No. Pendaftaran</td>
        <td> &nbsp; : {{ $candidate->registrationNumber }}</td>
      </tr> --}}
      <tr>
        <td>Nama</td>
        <td> &nbsp; : {{ $candidate->name }}</td>
      </tr>
      <tr>
        <td>NIM</td>
        <td> &nbsp; : {{ $candidate->nim }}</td>
      </tr>
      <tr>
        <td>Skema</td>
        <td> &nbsp; : {{ $candidate->scheme->name }}</td>
      </tr>
      <tr>
        <td>Asesor</td>
        <td> &nbsp; : {{ $candidate->assessor->name }}</td>
      </tr>
      <tr>
        <td>Status</td>
        <td> &nbsp; :
          {{ $candidate->recommended === null ? 'Belum ditinjau 🤔' : (!$candidate->recommended ? 'Tidak direkomendasikan 😥' : 'Direkomendasikan 🥰') }}
        </td>
      </tr>
      <tr>
        <td>
          <a href="{{ route('apl-02.export', ['accession' => $candidate->id]) }}" target="_blank"
            class="focus:ring-primary-300 mt-3 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
            Cetak
          </a>
        </td>
      </tr>
    </table>
  </div>

  <div class="relative mb-3 overflow-x-auto">
    <form id="revisiForm" action="{{ route('self-assessments.review', ['accession' => $candidate]) }}" method="POST"
      class="inline">
      @method('PUT')
      @csrf
      <input type="hidden" readonly name="recommended" value="0">
      <input type="hidden" name="nim" value="{{ $candidate->nim }}">
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
              @if ($candidate->recommended === null)
                <th class="border-r px-6 py-4 text-center dark:border-gray-700">
                  Revisi
                </th>
              @endif
            </tr>
            @foreach ($unit->elements as $element)
              <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
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
                  <input type="radio" disabled name="{{ $element->id }}" id="competent"
                    {{ $elementValues[$element->id] == 'Kompeten' ? 'checked' : '' }}
                    value="{{ $elementValues[$element->id] ? 'Kompeten' : $elementValues[$element->id] }}" required>
                  <label for="competent" class="hidden">Kompeten</label>
                </td>
                <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                  <input type="radio" disabled name="{{ $element->id }}" id="incompetent" class="text-red-600"
                    {{ $elementValues[$element->id] == 'Belum Kompeten' ? 'checked' : '' }}
                    value="{{ $elementValues[$element->id] ? 'Belum Kompeten' : $elementValues[$element->id] }}"
                    required>
                  <label for="incompetent" class="hidden">Belum Kompeten</label>
                </td>
                @if ($candidate->recommended === null)
                  <td class="px-6 py-4 text-center">
                    <input type="checkbox" name="elements[]" value="{{ $element->id }}"
                      class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      @endforeach
    </form>
  </div>

  @if ($candidate->recommended === null)
    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
      class="mb-2 me-2 w-full rounded-lg border border-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-500 dark:hover:text-white dark:focus:ring-emerald-800">Tinjau</button>

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
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah asesmen dapat dilanjutkan ?
            </h3>
            <form action="{{ route('self-assessments.review', ['accession' => $candidate]) }}" method="POST"
              class="inline">
              @method('PUT')
              @csrf
              <input type="hidden" readonly name="recommended" value="{{ true }}">
              <button data-modal-hide="popup-modal" type="submit"
                class="inline-flex items-center rounded-lg bg-emerald-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:focus:ring-emerald-800">
                Lanjutkan
              </button>
            </form>
            {{-- <form action="{{ route('self-assessments.review', ['accession' => $candidate]) }}" method="POST"
              class="inline">
              @method('PUT')
              @csrf
              <input type="hidden" readonly name="recommended" value="0"> --}}
            <button type="button" id="revisiBtn"
              class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Kembalikan/Perbaikan</button>
            {{-- </form> --}}
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {
      $('#revisiBtn').click(function(e) {
        e.preventDefault();
        $('#revisiForm').submit();
      });
    });
  </script>
@endpush
