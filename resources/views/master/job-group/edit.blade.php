@extends('layouts.app', ['title' => 'Kelompok kerja'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Tambah Kelompok Kerja
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form action="{{ route('job-groups.update', ['job_group' => $jobGroup]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-5">
      <label for="scheme_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Skema</label>
      <select id="scheme_id" name="scheme_id" required
        class="@error('scheme_id') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="{{ $jobGroup->scheme->id }}">{{ $jobGroup->scheme->name }}</option>
        @foreach ($schemes as $scheme)
          <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
        @endforeach
      </select>
      @error('scheme_id')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Kelompok</label>
      <input type="text" id="name" name="name" value="{{ $jobGroup->name }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />

      @error('name')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="scheme_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Unit</label>
      <ul
        class="w-full rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
        @foreach ($units as $unit)
          <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
              <input id="{{ $unit->id }}" type="checkbox" value="{{ $unit->id }}" name="units[]"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
                {{ in_array($unit->id, $jobGroup->units->pluck('id')->toArray()) ? 'checked' : '' }}>
              <label for="{{ $unit->id }}"
                class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $unit->name }}</label>
            </div>
          </li>
        @endforeach
        @foreach ($jobGroup->units as $unit)
          <li class="hidden w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
              <input id="{{ $unit->id }}" type="checkbox" value="{{ $unit->id }}" name="oldUnits[]"
                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
                {{ in_array($unit->id, $jobGroup->units->pluck('id')->toArray()) ? 'checked' : '' }}>
              <label for="{{ $unit->id }}"
                class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $unit->name }}</label>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Simpan</button>
      <a href="{{ route('job-groups.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection

@push('scripts')
  <script type="module">
    $('#scheme_id').change((e) => {
      e.preventDefault();
      document.location.href = document.location.href + "?schemeId=" + $('#scheme_id').val();
    });
  </script>
@endpush
