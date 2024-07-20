@extends('layouts.app', ['title' => 'AK 05'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    AK 05 <br> LAPORAN ASESMEN <br> <span class="uppercase">SKEMA {{ $scheme->name }}</span>
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ak.nav')

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="rounded-lg border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No MET
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama
          </th>
        </tr>
      </thead>
      @foreach ($assessors as $assessor)
        <tr class="rounded-lg border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            {{ $loop->iteration }}
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <a class="hover:underline"
              href="{{ route('ak-05.assessors', ['schemeId' => $scheme->id]) }}/assessors/{{ $assessor->id }}">{{ $assessor->metRegistrationNumber }}</a>
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            {{ $assessor->name }}
          </td>
        </tr>
      @endforeach
    </table>

  </div>
@endsection
