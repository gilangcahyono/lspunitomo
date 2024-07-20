@extends('layouts.app', ['title' => 'APL 01'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    APL 01 <br> PERMOHONAN SERTIFIKASI KOMPETENSI
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.apl.apl-01.nav')

  <div
    class="block items-center justify-between border-b border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex lg:mt-1.5">
    <div class="mb-1 w-full">
      <div class="block items-center justify-between dark:divide-gray-700 sm:flex md:divide-x md:divide-gray-100">
        <div class="mb-4 flex items-center sm:mb-0">
          <form class="w-full sm:pr-3" method="GET">
            <div class="flex gap-2">
              <select name="scheme_id"
                class="block w-64 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
                <option selected value="" disabled>Cari Skema</option>
                @foreach ($schemes as $scheme)
                  <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
                @endforeach
              </select>
              <button type="submit"
                class="rounded-lg border border-emerald-700 bg-emerald-700 p-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
              </button>
              {{-- <a href="{{ route('assessment.registrants.export') }}" --}}
              {{-- <a href="#"
                class="focus:ring-primary-300 inline-flex w-1/2 items-center justify-center rounded-lg border border-gray-300 bg-white px-3 py-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                    clip-rule="evenodd"></path>
                </svg>
                Export
              </a> --}}
            </div>
            @if (request('scheme_id') && $registrants[0])
              <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Ditemukan Skema : {{ $registrants[0]->scheme->name }}
              </p>
            @endif
          </form>
        </div>

        <button id="plotingBtn" type="button" disabled
          class="cursor-not-allowed rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          Plot Asesor
        </button>
      </div>
    </div>
  </div>

  <div class="mt-1 flex flex-col">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
            <thead class="bg-gray-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  #
                </th>
                <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                  <input type="checkbox" checked disabled
                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-slate-600 focus:ring-2 focus:ring-slate-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-slate-600">
                </td>
                {{-- <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  No. Pendaftaran
                </th> --}}
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  NIM
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Nama
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Skema
                </th>
                <th scope="col" class="p-4 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody id="schemeList" class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
              <form id="plotingForm" action="{{ route('assessment.registrants.ploting') }}" method="GET">
                @foreach ($registrants as $registrant)
                  <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $loop->iteration + ($registrants->currentPage() - 1) * $registrants->perPage() }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      <input id="check-{{ $registrant->id }}" type="checkbox" name="registrants[]"
                        value="{{ $registrant->id }}"
                        class="{{ $registrant->assessor_id !== null ? 'text-gray-600' : 'text-emerald-600' }} h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-emerald-600"
                        {{ $registrant->assessor_id !== null ? 'checked disabled' : '' }}>
                      <input type="hidden" name="scheme_id" value="{{ $registrant->scheme->id }}">
                    </td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $registrant->nim }}
                    </td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $registrant->name }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $registrant->scheme->name }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      @if (
                          $registrant->ijazah === null ||
                              $registrant->transkrip === null ||
                              $registrant->ktp === null ||
                              $registrant->ktm === null ||
                              $registrant->proofPayment === null ||
                              $registrant->cv === null ||
                              $registrant->foto === null)
                        <span
                          class="mb-2 me-2 flex items-center justify-center gap-1 rounded-lg border border-yellow-700 px-2 py-2 text-center text-sm font-medium text-yellow-700 hover:bg-yellow-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:border-yellow-500 dark:text-yellow-500 dark:hover:bg-yellow-600 dark:hover:text-white dark:focus:ring-yellow-800">Perbaikan
                        </span>
                      @else
                        <a class="mb-2 me-2 flex items-center justify-center gap-1 rounded-lg border border-yellow-700 px-2 py-2 text-center text-sm font-medium text-yellow-700 hover:bg-yellow-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:border-yellow-500 dark:text-yellow-500 dark:hover:bg-yellow-600 dark:hover:text-white dark:focus:ring-yellow-800"
                          href="{{ route('assessment.registrants.detail', ['accession' => $registrant]) }}">
                          <span>View</span>
                          <svg class="{{ !$registrant->verified ? 'hidden' : '' }} h-4 w-4 text-gray-800 dark:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                              clip-rule="evenodd" />
                          </svg>
                        </a>
                      @endif

                  </tr>
                @endforeach
              </form>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div
    class="sticky bottom-0 right-0 w-full items-center border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex sm:justify-between">
    <div class="mb-4 flex items-center gap-1 sm:mb-0">
      <label class="text-sm font-medium text-gray-900 dark:text-white">Show</label>
      <select id="show" name="show"
        class="rounded-lg border border-gray-300 bg-gray-50 p-1 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        {{-- <option value="5" {{ request('show') == 5 ? 'selected' : '' }}>5</option> --}}
        <option value="10" {{ request('show') == 10 ? 'selected' : '' }}>10</option>
        <option value="25" {{ request('show') == 25 ? 'selected' : '' }}>25</option>
        <option value="50" {{ request('show') == 50 ? 'selected' : '' }}>50</option>
        <option value="{{ $registrants->total() }}" {{ request('show') == $registrants->total() ? 'selected' : '' }}>
          All</option>
      </select>
    </div>
    <div class="mb-4 flex items-center sm:mb-0">
      <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
          class="font-semibold text-gray-900 dark:text-white">{{ $registrants->firstItem() ?? $registrants->total() }}-{{ $registrants->lastItem() ?? $registrants->total() }}</span>
        of <span class="font-semibold text-gray-900 dark:text-white">{{ $registrants->total() }}</span></span>
    </div>
    <div class="flex items-center space-x-3">
      <a href="{{ $registrants->toArray()['first_page_url'] }}"
        class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
      <a href="{{ $registrants->previousPageUrl() }}"
        class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
        <svg class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
        Prev
      </a>
      <a href="{{ $registrants->nextPageUrl() }}"
        class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
        Next
        <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
      <a href="{{ $registrants->toArray()['last_page_url'] }}"
        class="mr-2 inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </div>

  @include('muk.apl.apl-01.plot-assessor-modal')
  {{-- @include('apl-01.open-registration-modal')
  @include('apl-01.close-registration-modal') --}}
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {

      $('#show').on('change', (e) => {
        window.location.href =
          `{{ route('assessment.registrants') }}?show=${e.target.value}&scheme_id={{ request('scheme_id') }}&page={{ request('page') }}`;
      });

      $('input').click(function() {
        $('#plotingBtn').attr('disabled', false).removeClass('cursor-not-allowed');
      });

      $('#plotingBtn').click(function(e) {
        e.preventDefault();
        $('#plotingForm').submit();
      });

    });
  </script>
@endpush
