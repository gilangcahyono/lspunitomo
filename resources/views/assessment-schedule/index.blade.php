@extends('layouts.app', ['title' => 'Jadwal Uji Kompetensi'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Jadwal Uji Kompetensi
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

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
            @if (request('scheme_id') && $schedules->count() > 0)
              <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Ditemukan Skema : {{ $schedules[0]->accessions[0]->scheme->name }}
              </p>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>

  @if ($schedules->count() > 0)
    <div class="mt-1 flex flex-col">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
          <div class="relative overflow-x-auto shadow-md">
            <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
              <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Skema
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Tanggal
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Waktu
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Ruangan
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Asesor
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($schedules as $schedule)
                  <tr
                    class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                      {{ $schedule->accessions[0]->scheme->name }}
                    </td>
                    <td class="px-6 py-4">
                      {{ date('d-m-Y', strtotime($schedule->schedule)) }}
                    </td>
                    <td class="px-6 py-4">
                      {{ date('H:i', strtotime($schedule->schedule)) }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $schedule->tuk }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $schedule->accessions[0]->assessor->name }}
                    </td>
                    <td class="px-6 py-4">
                      <button type="button" data-modal-target="edit-schedule-modal-{{ $schedule->id }}"
                        data-modal-toggle="edit-schedule-modal-{{ $schedule->id }}"
                        class="inline-flex items-center rounded-lg bg-yellow-400 px-3 py-2 text-center text-sm font-medium text-white hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-100 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                          </path>
                          <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </button>
                      @include('assessment-schedule.edit-schedule-modal')
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          {{-- <div id="accordion-collapse" data-accordion="collapse" class="mb-3">
          @foreach ($days as $day)
            <div class="mb-3">
              <h2 id="accordion-collapse-heading-{{ $loop->iteration }}">
                <button type="button"
                  class="flex w-full items-center justify-between gap-3 border border-gray-200 p-5 font-medium text-gray-800 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rtl:text-right dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-800 dark:focus:ring-gray-800"
                  data-accordion-target="#accordion-collapse-body-{{ $loop->iteration }}" aria-expanded="false"
                  aria-controls="accordion-collapse-body-{{ $loop->iteration }}">
                  <span>{{ date('l, j F', strtotime($day)) }}</span>
                  <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-{{ $loop->iteration }}" class="hidden"
                aria-labelledby="accordion-collapse-heading-{{ $loop->iteration }}">
                <div class="border border-gray-200 p-5 dark:border-gray-700">
                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                      <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                          <th scope="col" class="px-6 py-3">
                            Skema
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Waktu
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Ruangan
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Asesor
                          </th>
                          <th scope="col" class="px-6 py-3">
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($schedules as $schedule)
                          <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                              {{ $schedule->accessions[0]->scheme->name }}
                            </td>
                            <td class="px-6 py-4">
                              {{ date('H:i', strtotime($schedule->schedule)) }} - Selesai
                            </td>
                            <th scope="row" class="px-6 py-4">
                              {{ $schedule->tuk }}
                            </th>
                            <td class="px-6 py-4">
                              {{ $schedule->accessions[0]->assessor->name }}
                            </td>
                            <td class="px-6 py-4">
                              <button type="button"
                                class="inline-flex items-center rounded-lg bg-yellow-400 px-3 py-2 text-center text-sm font-medium text-white hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-100 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                  </path>
                                  <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
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
          @endforeach
        </div> --}}

        </div>
      </div>
    </div>
  @else
    <h1 class="whitespace-nowrap p-4 text-center text-base font-medium text-gray-900 dark:text-white">
      Data tidak ditemukan</h1>
  @endif
@endsection
