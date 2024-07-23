<div
  class="mb-1.5 border-b border-gray-200 text-center text-sm font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400">
  <ul class="-mb-px flex flex-wrap">
    <li class="me-2">
      <a href="{{ route('mapa-01.index') }}"
        class="{{ request()->is('muk/mapa-01*') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">MAPA
        01</a>
    </li>
    <li class="me-2">
      <a href="{{ route('mapa-02.index') }}"
        class="{{ request()->is('muk/mapa-02*') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">MAPA
        02</a>
    </li>
  </ul>
</div>
