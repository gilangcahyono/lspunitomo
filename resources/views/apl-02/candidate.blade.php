@extends('layouts.app', ['title' => 'APL 01'])

@section('content')
  <div class="relative mb-4 overflow-x-auto">
    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Detail Pendaftar Asesmen Mandiri - Tahun ajaran {{ $candidate->periodYear }} Semester
            {{ $candidate->periodSemester }}
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Terverifikasi pada
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->verifiedAt }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Pendaftaran
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->registrationNumber }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Skema
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->scheme->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIM
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->nim }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fakultas/Prodi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->faculty }}/{{ $candidate->department }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Semester
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->semester }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jenis Kelamin
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->gender }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIK
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->nik }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->address }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->postalCode }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kota/Kabupaten
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->city }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Provinsi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->province }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pendidikan Terakhir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->lastEducation }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->email }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor HP
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->mobile }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->telephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama Perusahaan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->company ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jabatan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->position ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->officeAddress ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->officePostalCode ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fax
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->fax ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->officeEmail ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->officeTelephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ijazah
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $candidate->ijazah }}"
              data-modal-toggle="-modal-{{ $candidate->ijazah }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $candidate->ijazah }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah</h3>
                      <button type="button" data-modal-hide="-modal-{{ $candidate->ijazah }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $candidate->ijazah) }}"
                      class="w-full" alt="{{ $candidate->ijazah }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Transkrip
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $candidate->transkrip }}"
              data-modal-toggle="-modal-{{ $candidate->transkrip }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $candidate->transkrip }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip</h3>
                      <button type="button" data-modal-hide="-modal-{{ $candidate->transkrip }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $candidate->transkrip) }}"
                      class="w-full" alt="{{ $candidate->transkrip }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            KTP/KTM
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $candidate->idCard }}"
              data-modal-toggle="-modal-{{ $candidate->idCard }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $candidate->idCard }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP/KTM</h3>
                      <button type="button" data-modal-hide="-modal-{{ $candidate->idCard }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $candidate->idCard) }}"
                      class="w-full" alt="{{ $candidate->idCard }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Foto
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $candidate->foto }}"
              data-modal-toggle="-modal-{{ $candidate->foto }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $candidate->foto }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Foto</h3>
                      <button type="button" data-modal-hide="-modal-{{ $candidate->foto }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $candidate->foto) }}"
                      class="w-full" alt="{{ $candidate->foto }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Asesor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->assessor->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jadwal Asesmen Mandiri
          </th>
          <td class="w-full px-6 py-4">
            : {{ $candidate->selfAssessmentSchedule }} s/d
            {{ date('Y-m-d H:i:s', strtotime('+1 day', strtotime($candidate->selfAssessmentSchedule))) }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Rekomendasi Asesmen
          </th>
          <td class="w-full px-6 py-4">
            @if (!$candidate->processed && $candidate->recommended === null && !lateSchedule($candidate->selfAssessmentSchedule))
              : Belum mengerjakan
            @elseif (!$candidate->processed && $candidate->recommended === null && lateSchedule($candidate->selfAssessmentSchedule))
              : Tidak mengerjakan
            @elseif ($candidate->processed && $candidate->recommended === null && $candidate->recommendedAt === null)
              : <a class="hover:underline"
                href="{{ route('self-assessments.result', ['accession' => $candidate]) }}">Belum ditinjau</a>
            @elseif ($candidate->processed && $candidate->recommended)
              : Dapat dilanjutkan
            @elseif ($candidate->processed && !$candidate->recommended && $candidate->recommendedAt === null)
              Tidak dapat dilanjutkan
            @endif
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
