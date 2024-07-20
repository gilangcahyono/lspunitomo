@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')

  @can('nobody')
    @if ($candidate && !$candidate->assessed)
      @if ($candidate->recommended && $candidate->assessment_schedule_id !== null)
        <div
          class="mb-4 flex flex-col items-center rounded-lg border border-yellow-300 bg-yellow-50 p-4 text-sm text-yellow-800 dark:border-yellow-800 dark:bg-gray-800 dark:text-yellow-400 sm:flex-row sm:items-start"
          role="alert">
          <svg class="mb-2 me-3 inline h-4 w-4 flex-shrink-0 sm:mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Informasi Penting!</span> Asesmen akan dilaksanakan pada:
            <div class="mb-4 mt-2 text-sm">
              <ul class="mt-2 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
                <li>
                  Tanggal : {{ date('d-m-Y', strtotime($candidate->assessmentSchedule->schedule)) }}
                </li>
                <li>
                  Pukul : {{ date('H:i', strtotime($candidate->assessmentSchedule->schedule)) }} - Selesai
                </li>
                <li>
                  Ruangan : {{ $candidate->assessmentSchedule->tuk }}
                </li>
              </ul>
            </div>
          </div>
        </div>
      @elseif ($errorReg && $errorReg->type === 'registration')
        <div id="alert-additional-content-1"
          class="mb-4 rounded-lg border border-red-300 bg-red-50 p-4 text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
          role="alert">
          <div class="flex flex-col items-center gap-1 sm:flex-row sm:gap-0">
            <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="flex w-full flex-col justify-between sm:flex-row">
              <h3 class="text-lg font-medium">Pendaftaran ditolak! 😭😭😭</h3>
            </div>
          </div>
          <div class="mb-4 mt-2 text-sm">
            Beberapa dokumen yang tidak sesuai. Mohon unggah ulang dokumen yang sesuai.
            {{-- <ul class="mt-2 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
                @foreach (json_decode($errorReg->errors) as $error)
                  <li>
                    {{ $error }}
                  </li>
                @endforeach
              </ul> --}}
          </div>
          <div class="flex">
            <a href="{{ route('assessment.registration') }}"
              class="me-2 inline-flex items-center rounded-lg bg-emerald-800 px-3 py-2 text-center text-xs font-medium text-white hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-emerald-200 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
              Upload ulang
            </a>
          </div>
        </div>
      @elseif (!$candidate->verified)
        <div
          class="flex flex-col items-center gap-1 rounded-lg border border-gray-300 bg-gray-50 p-4 text-sm text-gray-800 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 sm:flex-row sm:gap-0"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Data tersimpan!.</span> Tunggu proses verifikasi selesai.
          </div>
        </div>
      @elseif ($candidate->verified && $candidate->selfAssessmentSchedule === null)
        <div
          class="border-greengray-300 flex flex-col items-center gap-1 rounded-lg border bg-green-50 p-4 text-sm text-green-800 dark:border-green-600 dark:bg-gray-800 dark:text-green-300 sm:flex-row sm:gap-0"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Pendaftaran terverifikasi! 👏👏👏.</span> Tunggu jadwal asesmen mandiri.
          </div>
        </div>
      @elseif ($errorReg && $errorReg->type == 'self-assessment' && $errorReg->nim == $candidate->nim)
        <div id="alert-additional-content-1"
          class="mb-4 rounded-lg border border-red-300 bg-red-50 p-4 text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
          role="alert">
          <div class="flex flex-col items-center gap-1 sm:flex-row sm:gap-0">
            <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
            </svg>

            <span class="sr-only">Info</span>
            <div class="flex w-full flex-col justify-between sm:flex-row">
              <h3 class="text-lg font-medium">Asesmen tidak dapat dilanjutkan! 😭😭😭</h3>
            </div>
          </div>
          <div class="mb-4 mt-2 text-sm">
            Beberapa elemen belum kompeten. Mohon melakukan asesmen mandiri ulang.
            {{-- <ul class="mt-2 list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
              @foreach ($elementsRevisi as $error)
                <li>
                  Anda belum kompeten pada elemen {{ $error->name }}
                </li>
              @endforeach
            </ul> --}}
          </div>
          <div class="flex">
            <a href="{{ route('self-assessments.process', ['accession' => $candidate]) }}"
              class="me-2 inline-flex items-center rounded-lg bg-emerald-800 px-3 py-2 text-center text-xs font-medium text-white hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-emerald-200 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
              Asesmen mandiri ulang
            </a>
          </div>
        </div>
      @elseif (!lateSchedule($candidate->selfAssessmentSchedule) && $candidate->elementValue === null)
        <div id="alert-additional-content-1"
          class="rounded-lg border border-emerald-300 bg-emerald-50 p-4 text-emerald-800 dark:border-emerald-800 dark:bg-gray-800 dark:text-emerald-400"
          role="alert">
          <div class="flex flex-col items-center gap-1 sm:flex-row sm:gap-0">
            <svg class="me-2 h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
            </svg>

            <span class="sr-only">Info</span>
            <div class="flex w-full flex-col justify-between sm:flex-row">
              <h3 class="text-lg font-medium">Asesmen mandiri!</h3>
              <div id="countdown" class="text-sm font-medium">
                <span>Sisa waktu | </span>
                <span id="days">00</span> Hari <span id="hours">00</span> Jam
                <span id="minutes">00</span> Menit
                <span id="seconds">00</span> Detik
              </div>
            </div>
          </div>
          <div class="mb-4 mt-2 text-sm">
            Segera kerjakan asesmen mandiri sebelum waktu berakhir.
          </div>
          <div class="flex">
            <a href="{{ route('self-assessments.process', ['accession' => $candidate]) }}"
              class="me-2 inline-flex items-center rounded-lg bg-emerald-800 px-3 py-2 text-center text-xs font-medium text-white hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-emerald-200 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
              <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z"
                  clip-rule="evenodd" />
              </svg>
              Mulai
            </a>
          </div>
        </div>
      @elseif (lateSchedule($candidate->selfAssessmentSchedule) &&
              $candidate->elementValue === null &&
              $candidate->recommended === null)
        <div
          class="flex items-center rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Waktu habis!</span> Silahkan hubungi pihak LSP untuk
            penjadwalan ulang asesmen mandiri.
          </div>
        </div>
      @elseif ($candidate->elementValue !== null && $candidate->recommended === null)
        <div
          class="flex flex-col items-center gap-1 rounded-lg border border-gray-300 bg-gray-50 p-4 text-sm text-gray-800 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 sm:flex-row sm:gap-0"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Data tersimpan!</span> Tunggu hasil rekomendasi dari asesor.
          </div>
        </div>
      @elseif ($candidate->recommended)
        <div
          class="mb-4 flex flex-col items-center gap-1 rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800 dark:border-green-800 dark:bg-gray-800 dark:text-green-400 sm:flex-row sm:gap-0"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Selamat!</span> Anda direkomendasikan untuk menjadi asesi. Selalu periksa dashboard
            anda
            untuk informasi Jadwal Uji Kompetensi.
          </div>
        </div>
      @elseif (!$candidate->recommended)
        <div
          class="mb-4 flex items-center rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
          role="alert">
          <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Mohon maaf!</span> Anda belum bisa direkomendasikan sebagai asesi.
          </div>
        </div>
      @endif
    @else
      @if ($errorReg)
        @if ($errorReg->type === 'registration')
          <div id="alert-additional-content-1"
            class="mb-4 rounded-lg border border-red-300 bg-red-50 p-4 text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <div class="flex flex-col items-center gap-1 sm:flex-row sm:gap-0">
              <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div class="flex w-full flex-col justify-between sm:flex-row">
                <h3 class="text-lg font-medium">Pendaftaran ditolak! 😭😭😭</h3>
              </div>
            </div>
            <div class="mb-4 mt-2 text-sm">
              Beberapa dokumen yang tidak sesuai. Mohon melakukan pendaftaran ulang dengan mengunggah dokumen yang sesuai.
              {{-- <ul class="mt-2 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
                @foreach (json_decode($errorReg->errors) as $error)
                  <li>
                    {{ $error }}
                  </li>
                @endforeach
              </ul> --}}
            </div>
            <div class="flex">
              <a href="{{ route('assessment.registration') }}"
                class="me-2 inline-flex items-center rounded-lg bg-emerald-800 px-3 py-2 text-center text-xs font-medium text-white hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-emerald-200 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                Daftar ulang
              </a>
            </div>
          </div>
        @elseif ($errorReg->type === 'self-assessment')
          <div id="alert-additional-content-1"
            class="mb-4 rounded-lg border border-red-300 bg-red-50 p-4 text-red-800 dark:border-red-800 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <div class="flex flex-col items-center gap-1 sm:flex-row sm:gap-0">
              <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
              </svg>

              <span class="sr-only">Info</span>
              <div class="flex w-full flex-col justify-between sm:flex-row">
                <h3 class="text-lg font-medium">Asesmen tidak dapat dilanjutkan! 😭😭😭</h3>
              </div>
            </div>
            <div class="mb-4 mt-2 text-sm">
              Beberapa elemen belum kompeten. Mohon melakukan asesmen mandiri ulang.
              <ul class="mt-2 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
                @foreach (json_decode($errorReg->errors) as $error)
                  <li>
                    Pelajari lagi tentang elemen {{ $error }}
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="flex">
              <a href="{{ route('self-assessments.process', ['accession' => $candidate]) }}"
                class="me-2 inline-flex items-center rounded-lg bg-emerald-800 px-3 py-2 text-center text-xs font-medium text-white hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-emerald-200 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                Asesmen mandiri ulang
              </a>
            </div>
          </div>
        @endif
      @else
        <marquee class="mb-3 bg-blue-700 py-1 text-lg text-white dark:bg-blue-800" behavior="scroll" direction="left">
          {!! $registration
              ? '<a href="/assessment-registration"><span>Pendaftaran Sertifikasi Uji Kompetensi Telah Dibuka, </span><strong>Klik Untuk Mendaftar!</strong></a>'
              : '<span>Sertifikasi Uji Kompetensi Belum Dibuka, </span><strong>Tunggu Informasi Selanjutnya!</strong>' !!}
        </marquee>
      @endif
    @endif
  @elsecan('admin')
    <marquee class="bg-blue-700 py-1 text-lg text-white dark:bg-blue-800" behavior="scroll" direction="left">
      {!! $registration
          ? '<button data-modal-target="close-registration-modal" data-modal-toggle="close-registration-modal">Pendaftaran Sertifikasi Uji Kompetensi Sedang Dibuka, <strong>Klik Untuk Menutup Pendaftaran!</strong></button>'
          : '<button data-modal-target="open-registration-modal" data-modal-toggle="open-registration-modal">Sertifikasi Uji Kompetensi Sedang Tutup, <strong>Klik Untuk Membuka Pendaftaran!</strong></button>' !!}
    </marquee>
  @elsecan('assessor')
    @if ($candidate && $candidate->assessed)
      @if ($candidate->recommended && $candidate->assessment_schedule_id !== null)
        <div
          class="mb-4 flex flex-col items-center rounded-lg border border-yellow-300 bg-yellow-50 p-4 text-sm text-yellow-800 dark:border-yellow-800 dark:bg-gray-800 dark:text-yellow-400 sm:flex-row sm:items-start"
          role="alert">
          <svg class="mb-2 me-3 inline h-4 w-4 flex-shrink-0 sm:mt-0.5" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">Informasi Penting!</span> Asesmen akan dilaksanakan pada:
            <div class="mb-4 mt-2 text-sm">
              <ul class="mt-2 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
                <li>
                  Tanggal : {{ date('d-m-Y', strtotime($candidate->assessmentSchedule->schedule)) }}
                </li>
                <li>
                  Pukul : {{ date('H:i', strtotime($candidate->assessmentSchedule->schedule)) }} - Selesai
                </li>
                <li>
                  Ruangan : {{ $candidate->assessmentSchedule->tuk }}
                </li>
              </ul>
            </div>
          </div>
        </div>
      @endif
    @endif
  @endcan

  @include('muk.apl.apl-01.open-registration-modal')
  @include('muk.apl.apl-01.close-registration-modal')
@endsection

@push('scripts')
  @if ($candidate && $candidate->verified)
    <script type="module">
      const countdown = (endDate) => {
        let days, hours, minutes, seconds;

        endDate = new Date(endDate).getTime();

        if (isNaN(endDate)) {
          return;
        }

        setInterval(calculate, 1000);

        function calculate() {
          let startDate = new Date();
          startDate = startDate.getTime();

          let timeRemaining = parseInt((endDate - startDate) / 1000);

          if (timeRemaining >= 0) {
            days = parseInt(timeRemaining / 86400);
            timeRemaining = timeRemaining % 86400;

            hours = parseInt(timeRemaining / 3600);
            timeRemaining = timeRemaining % 3600;

            minutes = parseInt(timeRemaining / 60);
            timeRemaining = timeRemaining % 60;

            seconds = parseInt(timeRemaining);

            // $("#days")
            document.getElementById("days").innerHTML = pad(
              days,
              2,
            );
            document.getElementById("hours").innerHTML = pad(
              hours,
              2,
            );
            document.getElementById("minutes").innerHTML = pad(
              minutes,
              2,
            );
            document.getElementById("seconds").innerHTML = pad(
              seconds,
              2,
            );
          } else {
            return;
          }
        }

        function pad(n, width) {
          let z = "0";
          n = n + "";
          return n.length >= width ?
            n :
            new Array(width - n.length + 1).join(z) + n;
        }
      }

      countdown(`{{ $candidate->selfAssessmentSchedule }}`);
    </script>
  @endif
@endpush

{{-- <div class="rounded-lg border-2 border-dashed border-gray-200 p-4 dark:border-gray-700">
    <div class="mb-4 grid grid-cols-3 gap-4">
      <div class="flex h-24 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-24 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-24 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
    </div>
    <div class="mb-4 flex h-48 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
        <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 1v16M1 9h16" />
        </svg>
      </p>
    </div>
    <div class="mb-4 grid grid-cols-2 gap-4">
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
    </div>
    <div class="mb-4 flex h-48 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
        <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 1v16M1 9h16" />
        </svg>
      </p>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
      <div class="flex h-28 items-center justify-center rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
          <svg class="h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 1v16M1 9h16" />
          </svg>
        </p>
      </div>
    </div>
  </div> --}}
