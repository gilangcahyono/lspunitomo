@extends('layouts.app', ['title' => 'Asesi'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Asesi
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @can('admin')
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
              </div>
              @if (request('scheme_id') && $accessions[0])
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                  Ditemukan Skema : {{ $accessions[0]->scheme->name }}
                </p>
              @endif

            </form>
          </div>
          <button id="recommend-btn" type="button" disabled data-modal-target="set-schedule-modal"
            data-modal-toggle="set-schedule-modal"
            class="cursor-not-allowed rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
            Rekomendasikan
          </button>
        </div>
      </div>
    </div>
  @endcan

  <div class="flex flex-col">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
            <thead class="bg-gray-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  #
                </th>
                @can('admin')
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    <input type="checkbox" checked disabled
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-slate-600 focus:ring-2 focus:ring-slate-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-slate-600">
                  </td>
                @endcan
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  NIM
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Nama
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Skema
                </th>
                @can('admin')
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Asesor
                  </th>
                @endcan
              </tr>
            </thead>
            <tbody id="schemeList" class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
              <form id="recommend-form" action="{{ route('accessions.recommend') }}" method="POST">
                @method('PUT')
                @csrf
                @foreach ($accessions as $accession)
                  <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $loop->iteration + ($accessions->currentPage() - 1) * $accessions->perPage() }}
                    </td>
                    @can('admin')
                      <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                        <input id="check-{{ $accession->id }}" type="checkbox" name="accessions[]"
                          value="{{ $accession->id }}"
                          class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-emerald-600"
                          {{ $accession->assessed ? 'checked disabled' : '' }}>
                      </td>
                    @endcan
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $accession->nim }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $accession->name }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $accession->scheme->name }}</td>
                    @can('admin')
                      <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                        {{ $accession->assessor->name }}</td>
                    @endcan

                    {{-- <td class="whitespace-nowrap p-4 text-center">
                    @if ($accession->verified)
                      <button
                        class="inline-flex items-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                        Verified
                        <svg class="ms-2 h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    @else
                      <button disabled
                        class="inline-flex items-center rounded-lg bg-yellow-700 px-3 py-2 text-center text-sm font-medium text-white dark:bg-yellow-600">
                        Pending
                        <svg class="ms-2 h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    @endif
                  </td> --}}
                  </tr>
                @endforeach
                {{-- @include('master.accession.set-schedule-modal') --}}
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
        <option value="{{ $accessions->total() }}" {{ request('show') == $accessions->total() ? 'selected' : '' }}>All
        </option>
      </select>
    </div>
    <div class="mb-4 flex items-center sm:mb-0">
      {{-- <a href="{{ $schemes->toArray()['first_page_url'] }}"
        class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a> --}}
      {{-- <a href="{{ $schemes->toArray()['last_page_url'] }}"
        class="mr-2 inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a> --}}
      <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
          class="font-semibold text-gray-900 dark:text-white">{{ $accessions->firstItem() ?? $accessions->total() }}-{{ $accessions->lastItem() ?? $accessions->total() }}</span>
        of <span class="font-semibold text-gray-900 dark:text-white">{{ $accessions->total() }}</span></span>
    </div>
    <div class="flex items-center space-x-3">
      <a href="{{ $accessions->toArray()['first_page_url'] }}"
        class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
      <a href="{{ $accessions->previousPageUrl() }}"
        class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
        <svg class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
        Prev
      </a>
      <a href="{{ $accessions->nextPageUrl() }}"
        class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
        Next
        <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
      <a href="{{ $accessions->toArray()['last_page_url'] }}"
        class="mr-2 inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </div>
@endsection

@push('scripts')
  <script type="module">
    $(document).ready(function() {
      $('#show').on('change', (e) => {
        window.location.href =
          `{{ route('accessions.index') }}?show=${e.target.value}&search={{ request('search') }}&page={{ request('page') }}`;
      });

      $('input').click(function() {
        $('#recommend-btn').attr('disabled', false).removeClass('cursor-not-allowed');
      });

      $('#recommend-btn').click(function(e) {
        e.preventDefault();
        $('#recommend-form').submit();
      });
    });
  </script>
@endpush
