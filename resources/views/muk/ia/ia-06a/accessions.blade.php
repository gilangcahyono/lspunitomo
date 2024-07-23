@extends('layouts.app', ['title' => 'IA 06A'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 06A <br> DPT – DAFTAR PERTANYAAN TERTULIS ESAI <br> <span class="uppercase">SKEMA {{ $scheme->name }}</span>
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ia.nav')

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="rounded-lg border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nim
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama
          </th>
        </tr>
      </thead>
      @foreach ($accessions as $accession)
        <tr class="rounded-lg border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            {{ $loop->iteration }}
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            <a class="hover:underline"
              href="{{ route('ia-06a.accessions', ['schemeId' => $scheme->id]) }}/accessions/{{ $accession->id }}">{{ $accession->nim }}</a>
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            {{ $accession->name }}
          </td>
        </tr>
      @endforeach
    </table>

  </div>
@endsection
