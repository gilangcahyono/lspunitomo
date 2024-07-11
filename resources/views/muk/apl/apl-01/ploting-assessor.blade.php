@extends('auth')

@section('content')
  <div id="accept-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
    <div class="relative max-h-full w-full max-w-md p-4">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Pilih asesor
          </h3>
          <button type="button"
            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="accept-modal">
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
          <div class="xgrid-cols-2 xgap-4 mb-4 grid">
            <div class="xcol-span-2 xsm:col-span-1">
              <label for="assessor_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Asesor</label>
              <select id="assessor_id" name="assessor_id" required
                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
                <option selected disabled hidden value="">Pilih asesor</option>
                @foreach ($assessors as $assessor)
                  <option value="{{ $assessor->id }}">({{ $assessor->scheme->department }}) {{ $assessor->name }} - (
                    jumlah asesi =
                    {{ $assessor->accessions->count() }} )</option>
                @endforeach
              </select>
            </div>
            {{-- <div class="col-span-2 sm:col-span-1">
          <label for="selfAssessmentSchedule"
            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jadwal</label>
          <input type="datetime-local" name="selfAssessmentSchedule" id="selfAssessmentSchedule"
            class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
            required>
        </div> --}}
          </div>
          <button type="submit"
            class="mb-2 me-2 w-full rounded-lg border border-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-600 dark:hover:text-white dark:focus:ring-emerald-800">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endsection
