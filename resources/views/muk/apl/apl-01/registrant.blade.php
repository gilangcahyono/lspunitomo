@extends('layouts.app', ['title' => 'APL 01'])

@section('content')
  <a href="{{ route('assessment.registrants') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke-width="1.5" stroke="currentColor" class="absolute mt-1 h-6 w-6 dark:text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
    </svg></a>

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Detail Pendaftar
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form action="{{ route('assessment.registrants.review', ['accession' => $registrant]) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="hidden" name="nim" value="{{ $registrant->nim }}">
    <div class="relative mb-4 overflow-x-auto">
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" colspan="2" class="px-6 py-3">
              Data Diri Mahasiswa
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Nama
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->name }}
            </td>
          </tr>
          {{-- <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Perguruan Tinggi Asal
          </th>
          <td class="w-full px-6 py-4">
            : Universitas Dr. Soetomo Surabaya
          </td>
        </tr> --}}
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              NIM
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->nim }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Semester
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->semester }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Fakultas / Prodi
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->faculty }} / {{ $registrant->department }}
            </td>
          </tr>
        </tbody>
      </table>

      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" colspan="2" class="px-6 py-3">
              Data Diri Peserta
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              NIK
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->nik }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Tempat Lahir
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->birthPlace }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Tanggal Lahir
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->birthDate }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Jenis Kelamin
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->gender }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Alamat
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->address }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Kota / Kabupaten
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->city }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Provinsi
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->province }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Nomor HP (Aktif WhatsApp)
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->mobile }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Email
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->email }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Pendidikan Terakhir
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->lastEducation }}
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Pekerjaan
            </th>
            <td class="w-full px-6 py-4">
              : Mahasiswa
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Skema yang dipilih
            </th>
            <td class="w-full px-6 py-4">
              : {{ $registrant->scheme->name }}
            </td>
          </tr>
        </tbody>
      </table>

      {{-- <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" colspan="2" class="px-6 py-3">
            Data Diri Peserta
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Pendaftaran
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->registrationNumber }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Skema
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->scheme->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIM
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nim }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->name }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fakultas / Prodi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->faculty }}/{{ $registrant->department }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Semester
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->semester }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jenis Kelamin
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->gender }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            NIK
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->nik }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->address }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->postalCode }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kota / Kabupaten
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->city }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Provinsi
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->province }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Pendidikan Terakhir
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->lastEducation }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->email }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor HP
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->mobile }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->telephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nama Perusahaan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->company ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Jabatan
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->position ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Alamat Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeAddress ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Kode Pos Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officePostalCode ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Fax
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->fax ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Email Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeEmail ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Nomor Telepon Kantor
          </th>
          <td class="w-full px-6 py-4">
            : {{ $registrant->officeTelephone ?? 'Tidak ada' }}
          </td>
        </tr>
        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
          <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            Ijazah
          </th>
          <td class="w-full px-6 py-4">:
            <button data-modal-target="-modal-{{ $registrant->ijazah }}"
              data-modal-toggle="-modal-{{ $registrant->ijazah }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ijazah }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ijazah }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ijazah) }}"
                      class="w-full" alt="{{ $registrant->ijazah }}">
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
            <button data-modal-target="-modal-{{ $registrant->transkrip }}"
              data-modal-toggle="-modal-{{ $registrant->transkrip }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->transkrip }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->transkrip }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->transkrip) }}"
                      class="w-full" alt="{{ $registrant->transkrip }}">
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
            <button data-modal-target="-modal-{{ $registrant->ijazahCard }}"
              data-modal-toggle="-modal-{{ $registrant->ijazahCard }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->ijazahCard }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP/KTM</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->ijazahCard }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ijazahCard) }}"
                      class="w-full" alt="{{ $registrant->ijazahCard }}">
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
            <button data-modal-target="-modal-{{ $registrant->foto }}"
              data-modal-toggle="-modal-{{ $registrant->foto }}"
              class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
              type="button">
              Lihat
            </button>
            <div id="-modal-{{ $registrant->foto }}" tabindex="-1"
              class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
              <div class="relative max-h-full w-full max-w-7xl">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                  <div class="space-y-4 p-4 md:p-5">
                    <div class="flex justify-between">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Foto</h3>
                      <button type="button" data-modal-hide="-modal-{{ $registrant->foto }}">
                        <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                          viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                    <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->foto) }}"
                      class="w-full" alt="{{ $registrant->foto }}">
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table> --}}

      <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-emerald-600 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" colspan="2" class="px-6 py-3">
              Upload Dokumen
            </th>
            <th scope="col" colspan="1" class="px-6 py-3 text-center">
              Kembalikan
            </th>
          </tr>
        </thead>
        <tbody>

          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Ijazah Terakhir
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->ijazah }}"
                data-modal-toggle="-modal-{{ $registrant->ijazah }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->ijazah }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ijazah Terakhir</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->ijazah }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ijazah) }}"
                        class="w-full" alt="{{ $registrant->ijazah }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="1" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[ijazah]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Transkrip Nilai Terakhir
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->transkrip }}"
                data-modal-toggle="-modal-{{ $registrant->transkrip }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->transkrip }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Transkrip Nilai Terakhir</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->transkrip }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->transkrip) }}"
                        class="w-full" alt="{{ $registrant->transkrip }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="2" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[transkrip]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              KTP
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->ktp }}"
                data-modal-toggle="-modal-{{ $registrant->ktp }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->ktp }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTP</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->ktp }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ktp) }}"
                        class="w-full" alt="{{ $registrant->ktp }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="3" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[ktp]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              KTM
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->ktm }}"
                data-modal-toggle="-modal-{{ $registrant->ktm }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->ktm }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">KTM</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->ktm }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ asset('/storage/uploaded/assessment-registration/' . $registrant->ktm) }}"
                        class="w-full" alt="{{ $registrant->ktm }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="4" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[ktm]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Pas Foto
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->foto }}"
                data-modal-toggle="-modal-{{ $registrant->foto }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->foto }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pas Foto</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->foto }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->foto) }}"
                        class="w-full" alt="{{ $registrant->foto }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="5" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[foto]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              CV (Curriculum Vitae)
            </th>
            <td class="w-full px-6 py-4">:
              <button data-modal-target="-modal-{{ $registrant->cv }}"
                data-modal-toggle="-modal-{{ $registrant->cv }}"
                class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                type="button">
                Lihat
              </button>
              <div id="-modal-{{ $registrant->cv }}" tabindex="-1"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                <div class="relative max-h-full w-full max-w-7xl">
                  <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <div class="space-y-4 p-4 md:p-5">
                      <div class="flex justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">CV (Curriculum Vitae)</h3>
                        <button type="button" data-modal-hide="-modal-{{ $registrant->cv }}">
                          <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                      <img src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->cv) }}"
                        class="w-full" alt="{{ $registrant->cv }}">
                    </div>
                  </div>
                </div>
              </div>
            </td>
            {{-- <td class="px-6 py-4">
              <input type="radio" name="6" id="acc" required
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
              <label for="acc" class="hidden">Terima</label>
            </td> --}}
            <td class="px-6 py-4 text-center">
              <input type="checkbox" name="files[cv]" id="deny" value="{{ null }}"
                {{ $registrant->verified ? 'disabled' : '' }}
                class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
              <label for="deny" class="hidden">Tolak</label>
            </td>
          </tr>
          @if ($registrant->supportingCertificate)
            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
              <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                Sertifikat Pendukung Skema
              </th>
              <td class="w-full px-6 py-4">:
                <button data-modal-target="-modal-{{ $registrant->supportingCertificate }}"
                  data-modal-toggle="-modal-{{ $registrant->supportingCertificate }}"
                  class="rounded-lg border border-gray-300 bg-white px-5 py-1 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                  type="button">
                  Lihat
                </button>
                <div id="-modal-{{ $registrant->supportingCertificate }}" tabindex="-1"
                  class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
                  <div class="relative max-h-full w-full max-w-7xl">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                      <div class="space-y-4 p-4 md:p-5">
                        <div class="flex justify-between">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Sertifikat Pendukung Skema</h3>
                          <button type="button" data-modal-hide="-modal-{{ $registrant->supportingCertificate }}">
                            <svg class="h-8 w-8 text-gray-800 dark:text-white" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                              viewBox="0 0 24 24">
                              <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                        <img
                          src="{{ url('/storage/uploaded/assessment-registration/' . $registrant->supportingCertificate) }}"
                          class="w-full" alt="{{ $registrant->supportingCertificate }}">
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              {{-- <td class="px-6 py-4">
                <input type="radio" name="7" id="acc" required
                  {{ $registrant->verified ? 'disabled' : '' }}
                  class="h-4 w-4 border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                <label for="acc" class="hidden">Terima</label>
              </td> --}}
              <td class="px-6 py-4 text-center">
                <input type="checkbox" name="files[supportingCertificate]" id="deny" value="{{ null }}"
                  {{ $registrant->verified ? 'disabled' : '' }}
                  class="h-4 w-4 border-gray-300 bg-gray-100 text-red-600 focus:ring-2 focus:ring-red-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-red-600">
                <label for="deny" class="hidden">Tolak</label>
              </td>
            </tr>
          @endif

        </tbody>
      </table>
    </div>

    @if (!$registrant->verified)
      <button type="submit"
        class="mb-2 me-2 rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
        Proses
      </button>
      {{-- <button type="submit" id="returnBtn"
        class="mb-2 me-2 hidden rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Kembalikan</button> --}}
    @endif
    {{-- <button data-modal-target="accept-modal" data-modal-toggle="accept-modal"
    class="mb-2 me-2 rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
    type="button">
    Terima
  </button> --}}

    {{-- <form action="{{ route('assesment.registrants.deny', ['accession' => $registrant]) }}" method="POST"
    class="inline">
    @method('DELETE')
    @csrf
    <button type="submit" onclick="return confirm('Are you sure?')"
      class="mb-2 me-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
  </form> --}}

    {{-- <div id="accept-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
    <div class="relative max-h-full w-full max-w-md p-4">
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
        <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Pilih asesor dan jadwal asesmen mandiri
          </h3>
          <button type="button"
            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="accept-modal">
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <form class="p-4 md:p-5" action="{{ route('assesment.registrants.accept', ['accession' => $registrant]) }}"
          method="POST">
          @method('PUT')
          @csrf
          <div class="mb-4 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
              <label for="assessor_id"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Asesor</label>
              <select id="assessor_id" name="assessor_id" required {{ $registrant->verified ? 'disabled' : '' }}
                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
                <option selected disabled hidden value="">Pilih asesor</option>
                @foreach ($assessors as $assessor)
                  <option value="{{ $assessor->id }}">{{ $assessor->name }}</option>
                @endforeach
              </select>

            </div>
            <div class="col-span-2 sm:col-span-1">
              <label for="selfAssessmentSchedule"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jadwal</label>
              <input type="datetime-local" name="selfAssessmentSchedule" id="selfAssessmentSchedule"
                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                required {{ $registrant->verified ? 'disabled' : '' }}>
            </div>
          </div>
          <button type="submit"
            class="mb-2 me-2 w-full rounded-lg border border-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-emerald-700 hover:bg-emerald-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-emerald-500 dark:text-emerald-500 dark:hover:bg-emerald-600 dark:hover:text-white dark:focus:ring-emerald-800">Simpan</button>
        </form>
      </div>
    </div>
  </div> --}}
  </form>
@endsection

{{-- @push('scripts')
  <script type="module">
    $(document).ready(function() {

      $('#assessor_id').keydown((e) => {
        if (e.keyCode !== 8 && e.keyCode !== 13) {
          e.preventDefault();
          return false;
        }
      });

      $('#submit-btn').click(function(e) {
        e.preventDefault();
        $('form').submit();
      });
    });
  </script>
@endpush --}}
