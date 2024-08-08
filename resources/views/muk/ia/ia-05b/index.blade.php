@extends('layouts.app', ['title' => 'IA 05B'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    IA 05B <br> LEMBAR KUNCI JAWABAN PERTANYAAN TERTULIS PILIHAN GANDA
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.ia.nav')

  <div class="relative overflow-x-auto">

    @foreach ($schemes as $scheme)
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <tr class="rounded-lg border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="flex justify-between border px-6 py-4 dark:border-gray-700">
            <a href="{{ route('ia-05b.show', ['schemeId' => $scheme->id]) }}">Skema {{ $scheme->name }}</a>
            <a href="{{ route('ia-05b.export', ['schemeId' => $scheme->id]) }}" target="_blank">Cetak</a>
          </th>
        </tr>
      </table>
    @endforeach

  </div>
@endsection
