@extends('layouts.app', ['title' => 'Asesor'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Asesor
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div
    class="block items-center justify-between border-b border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex lg:mt-1.5">
    <div class="mb-1 w-full">
      <div class="block items-center justify-between dark:divide-gray-700 sm:flex md:divide-x md:divide-gray-100">
        <div class="mb-4 flex items-center sm:mb-0">
          <form class="max-w-lg sm:pr-3" method="GET">
            <label for="search" class="sr-only">Search</label>
            <div class="mt-1 flex w-48 sm:w-64 xl:w-96">
              <input type="text" name="search" id="search" value="{{ request('search') }}" autocomplete="off"
                list="assessorLists"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500 sm:text-sm"
                placeholder="Cari Asesor">
              <datalist id="assessorLists">
                @foreach ($assessorLists as $assessor)
                  <option value="{{ $assessor->name }}"></option>
                @endforeach
              </datalist>
            </div>
          </form>
        </div>
        <a href="{{ route('assessors.create') }}"
          class="rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          Tambah Asesor
        </a>
      </div>
    </div>
  </div>
  @if ($assessors->count() > 0)
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
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    No. Reg Met
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Kompetensi Teknis
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    TMT MET
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Expired MET
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    RCC
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Expired RCC
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Status MET
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody id="schemeList" class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($assessors as $assessor)
                  <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $loop->iteration + ($assessors->currentPage() - 1) * $assessors->perPage() }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      <a class="hover:underline"
                        href="{{ route('assessors.show', ['assessor' => $assessor]) }}">{{ $assessor->metRegistrationNumber }}
                      </a>
                    </td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->technicalCompetence }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->tmtMet }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->expiredMet }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->rcc }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->expiredRcc }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $assessor->statusMet }}</td>
                    <td class="flex space-x-2 whitespace-nowrap p-4">
                      <a href="{{ route('assessors.edit', ['assessor' => $assessor]) }}"
                        class="inline-flex items-center rounded-lg bg-yellow-400 px-3 py-2 text-center text-sm font-medium text-white hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-100 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                          <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </a>
                      <button data-modal-target="delete-confirm-modal" data-modal-toggle="delete-confirm-modal"
                        class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                        type="button">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </td>
                  </tr>
                @endforeach
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
            class="font-semibold text-gray-900 dark:text-white">{{ $assessors->firstItem() ?? $assessors->total() }}-{{ $assessors->lastItem() ?? $assessors->total() }}</span>
          of <span class="font-semibold text-gray-900 dark:text-white">{{ $assessors->total() }}</span></span>
      </div>
      <div class="flex items-center space-x-3">
        <a href="{{ $assessors->toArray()['first_page_url'] }}"
          class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
          <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="{{ $assessors->previousPageUrl() }}"
          class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          <svg class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
          </svg>
          Prev
        </a>
        <a href="{{ $assessors->nextPageUrl() }}"
          class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          Next
          <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="{{ $assessors->toArray()['last_page_url'] }}"
          class="mr-2 inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
          <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>

    @include('master.assessor.delete-confirm-modal')
  @else
    <h1 class="whitespace-nowrap p-4 text-center text-base font-medium text-gray-900 dark:text-white">
      Data tidak ditemukan</h1>
  @endif
@endsection

@push('scripts')
  <script type="module">
    $('#show').on('change', (e) => {
      window.location.href =
        `{{ route('assessors.index') }}?show=${e.target.value}&search={{ request('search') }}&page={{ request('page') }}`;
    });
  </script>
@endpush
