@extends('layouts.app', ['title' => 'Asesmen Mandiri'])

@section('content')
  <div class="mb-3 dark:text-gray-300">{{ $candidate }}</div>
  @if (!$candidate->processed)
    <a href="{{ route('self-assessments.process', ['candidateAccession' => $candidate]) }}"
      class="mb-2 me-2 rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
      type="button">
      Mulai
    </a>
  @endif
@endsection
