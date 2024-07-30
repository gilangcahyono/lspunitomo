@extends('layouts.app', ['title' => 'Analisa Asesor'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Analisa Asesor
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="mt-1 flex flex-col">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="relative overflow-x-auto shadow-md">
          <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">
                  No
                </th>
                <th scope="col" class="px-6 py-3">
                  Skema
                </th>
                <th scope="col" class="px-6 py-3">
                  Nama
                </th>
                <th scope="col" class="px-6 py-3">
                  Jumlah Asesi
                </th>
                <th scope="col" class="px-6 py-3">
                  Status MET
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($assessors as $assessor)
                <tr
                  class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                  <td class="px-6 py-4">
                    {{ $loop->iteration }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $assessor->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $assessor->scheme->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $assessor->accessions_count }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $assessor->statusMet }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
