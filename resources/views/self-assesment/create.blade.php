@extends('layouts.app', ['title' => 'Asesmen Mandiri'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Assesmen Mandiri
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <div class="border p-3 dark:border-gray-700">
    <table class="font-semibold text-gray-900 dark:text-white">
      <tr>
        <td>Nama</td>
        <td> &nbsp; : Gilang Cahyono</td>
      </tr>
      <tr>
        <td>No. Pendaftaran</td>
        <td> &nbsp; : 87235283758</td>
      </tr>
      <tr>
        <td>Skema</td>
        <td> &nbsp; : {{ $scheme->name }}</td>
      </tr>
    </table>
  </div>
  <div class="mb-3 border border-t-0 p-3 dark:border-gray-700">
    <h3 class="mb-2 font-semibold text-gray-900 dark:text-white">Petunjuk :</h3>
    <ul class="list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400">
      <li>
        Baca setiap pertanyaan di kolom sebelah kiri.
      </li>
      <li>
        Beri tanda centang (✓) pada kotak jika anda yakin dapat melakukan tugas yang dijelaskan.
      </li>
      {{-- <li>
      Isi kolom di sebelah kanan dengan menuliskan bukti yang relevan anda miliki untuk menunjukan bahwa anda
      melakukan pekerjaan.
    </li> --}}
    </ul>
  </div>

  <div class="relative overflow-x-auto">
    @foreach ($scheme->unit as $unit)
      <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="bg-emerald-700 text-xs uppercase text-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3" colspan="3">
              Unit Kompetensi - {{ $unit->name }}
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
            <th scope="row" class="w-full whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
              Dapatkah saya . . . . . ?
            </th>
            <th class="border-x px-6 py-4 text-center dark:border-gray-700">
              K
            </th>
            <th class="border-r px-6 py-4 text-center dark:border-gray-700">
              BK
            </th>
          </tr>
          @foreach ($unit->element as $element)
            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
              <td scope="row"
                class="whitespace-nowrap border-e px-6 py-4 text-gray-900 dark:border-gray-700 dark:text-gray-300">
                <p class="mb-1">{{ $loop->iteration }}. Elemen : {{ $element->name }}</p>
                <p class="mb-1 ml-4">Kriteria Unjuk Kerja:</p>
                @foreach ($element->kuk as $kuk)
                  <p class="mb-1 ml-6">{{ $loop->parent->iteration }}.{{ $loop->iteration }}. {{ $kuk->name }} ?</p>
                @endforeach
              </td>
              <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                <input type="radio" name="isCompetent{{ $loop->iteration }}" id="competent">
                <label for="competent" class="hidden">Kompeten</label>
              </td>
              <td class="border-e px-6 py-4 text-center dark:border-gray-700">
                <input type="radio" name="isCompetent{{ $loop->iteration }}" id="incompetent">
                <label for="incompetent" class="hidden">Tidak Kompeten</label>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endforeach
  </div>
@endsection
