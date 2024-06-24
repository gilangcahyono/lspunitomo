@extends('layouts.app', ['title' => 'Asesi'])

@section('content')
  <div class="relative mb-4 overflow-x-auto">
    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Detail Pendaftar Asesmen Mandiri - Tahun ajaran {{ $accession->periodYear }} Semester
            {{ $accession->periodSemester }}
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Direkomendasikan pada
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->recommendedAt }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Pendaftaran
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->registrationNumber }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Skema
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->scheme->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Asesor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->assessor->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIM
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->nim }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fakultas/Prodi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->faculty }}/{{ $accession->department }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Semester
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->semester }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jenis Kelamin
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->gender }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIK
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->nik }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->address }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->postalCode }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kota/Kabupaten
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->city }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Provinsi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->province }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pendidikan Terakhir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->lastEducation }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->email }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor HP
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->mobile }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->telephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama Perusahaan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->company ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jabatan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->position ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->officeAddress ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->officePostalCode ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fax
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->fax ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->officeEmail ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $accession->officeTelephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ijazah
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $accession->ijazah }}"
              data-modal-toggle="-modal-{{ $accession->ijazah }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $accession->ijazah }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah</h3>
                      <button type="button" data-modal-hide="-modal-{{ $accession->ijazah }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $accession->ijazah) }}"
                      class="w-full" alt="{{ $accession->ijazah }}">
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
            <button data-modal-target="-modal-{{ $accession->transkrip }}"
              data-modal-toggle="-modal-{{ $accession->transkrip }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $accession->transkrip }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip</h3>
                      <button type="button" data-modal-hide="-modal-{{ $accession->transkrip }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $accession->transkrip) }}"
                      class="w-full" alt="{{ $accession->transkrip }}">
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
            <button data-modal-target="-modal-{{ $accession->idCard }}"
              data-modal-toggle="-modal-{{ $accession->idCard }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $accession->idCard }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP/KTM</h3>
                      <button type="button" data-modal-hide="-modal-{{ $accession->idCard }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $accession->idCard) }}"
                      class="w-full" alt="{{ $accession->idCard }}">
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
            <button data-modal-target="-modal-{{ $accession->foto }}"
              data-modal-toggle="-modal-{{ $accession->foto }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $accession->foto }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Foto</h3>
                      <button type="button" data-modal-hide="-modal-{{ $accession->foto }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $accession->foto) }}"
                      class="w-full" alt="{{ $accession->foto }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
