<div
  class="border-b border-gray-200 text-center text-sm font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400">
  <ul class="-mb-px flex flex-wrap">
    <li class="me-2">
      <a href="{{ route('schemes.index') }}"
        class="{{ request()->is('schemes') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Skema</a>
    </li>
    <li class="me-2">
      <a href="{{ route('job-groups.index') }}"
        class="{{ request()->is('job-groups') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Kelompok
        Pekerjaan</a>
    </li>
    <li class="me-2">
      <a href="{{ route('units.index') }}"
        class="{{ request()->is('units') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Unit</a>
    </li>
    <li class="me-2">
      <a href="{{ route('elements.index') }}"
        class="{{ request()->is('elements') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Elemen</a>
    </li>
    <li class="me-2">
      <a href="{{ route('kuks.index') }}"
        class="{{ request()->is('kuks') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">KUK</a>
    </li>
  </ul>
</div>
