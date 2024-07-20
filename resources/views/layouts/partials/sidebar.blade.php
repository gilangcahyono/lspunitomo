<aside id="logo-sidebar"
  class="fixed left-0 top-0 z-40 h-screen w-[17rem] -translate-x-full border-r border-gray-200 bg-emerald-700 pt-20 transition-transform dark:border-gray-700 dark:bg-gray-800 sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full overflow-y-auto bg-emerald-700 px-3 pb-4 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">

      <li>
        <a href="{{ route('dashboard') }}"
          class="{{ url()->current() === route('dashboard') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          {{-- <svg
            class="{{ url()->current() === route('dashboard') ? 'sidebar-active' : '' }} h-5 w-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path
              d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
          </svg> --}}
          <span class="ms-3">Dashboard</span>
        </a>
      </li>

      @can('admin')
        <li>
          <a href="{{ route('schemes.index') }}"
            class="{{ url()->current() === route('schemes.index') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
            <span class="ms-3">Master Skema</span>
          </a>
        </li>
      @endcan

      {{-- @can('admin')
        <li>
          <button type="button"
            class="{{ request()->is('master/*') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Data Master</span>
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-example" class="hidden space-y-2 py-2">
            <li>
              <a href="{{ route('schemes.index') }}"
                class="{{ request()->is('master/schemes') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">Skema</a>
            </li>
            <li>
              <a href="{{ route('job-groups.index') }}"
                class="{{ request()->is('master/job-groups') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">Kelompok
                Kerja</a>
            </li>
            <li>
              <a href="{{ route('units.index') }}"
                class="{{ request()->is('master/units') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">Unit</a>
            </li>
            <li>
              <a href="{{ route('elements.index') }}"
                class="{{ request()->is('master/elements') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">Elemen</a>
            </li>
            <li>
              <a href="{{ route('kuks.index') }}"
                class="{{ request()->is('master/kuks') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">KUK</a>
            </li>
          </ul>
        </li>
      @endcan --}}

      <li>
        <button type="button"
          class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-muk" data-collapse-toggle="dropdown-muk">
          <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Materi Uji Kompetensi</span>
          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="dropdown-muk" class="hidden space-y-2 py-2">
          <li>
            <a href="/peta"
              class="{{ request()->is('peta') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">Peta
              Kelompok</a>
          </li>
          <li>
            <a href="{{ route('assessment.registrants') }}"
              class="{{ request()->is('assesment-registrants') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">APL</a>
          </li>
          <li>
            <a href="{{ route('mapa-01.index') }}"
              class="{{ request()->is('mapa-01') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">MAPA</a>
          </li>
          <li>
            <a href="{{ route('ak-01.index') }}"
              class="{{ request()->is('ak-01') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">AK</a>
          </li>
          <li>
            <a href="/ia-01"
              class="{{ request()->is('master/elements') ? 'sidebar-active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">IA</a>
          </li>
        </ul>
      </li>

      {{-- <li>
        <a href="{{ route('assessment.registrants') }}"
          class="{{ url()->current() === route('assessment.registrants') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">APL 01</span>
        </a>
      </li> --}}

      {{-- <li>
        <a href="{{ route('accession.candidates') }}"
          class="{{ url()->current() === route('accession.candidates') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">APL 02</span>
        </a>
      </li> --}}

      {{-- <li>
        <a href="#"
          class="{{ url()->current() === '' ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">MAPA 01</span>
        </a>
      </li> --}}

      {{-- <li>
        <a href="#"
          class="{{ url()->current() === '' ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">MAPA 02</span>
        </a>
      </li> --}}

      <li>
        <a href="{{ route('assessors.index') }}"
          class="{{ url()->current() === route('assessors.index') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">Asesor</span>
        </a>
      </li>

      <li>
        <a href="{{ route('accessions.index') }}"
          class="{{ url()->current() === route('accessions.index') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3">Asesi</span>
        </a>
      </li>

      {{-- <li>
        <button type="button"
          class="group flex w-full items-center rounded-lg p-2 text-base text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-muk" data-collapse-toggle="dropdown-muk">
          <svg
            class="h-5 w-5 flex-shrink-0 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
            <path
              d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Materi Uji Kompetensi</span>
          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="dropdown-muk" class="hidden space-y-2 py-2">
          @can('admin')
            <li>
              <a href="{{ route('assessment.registrants') }}"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">APL
                01</a>
            </li>
          @endcan
          <li>
            <a href="{{ route('accession.candidates') }}"
              class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">APL
              02</a>
          </li>
          <li>
            <a href="#"
              class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">MAPA
              01</a>
          </li>
          <li>
            <a href="#"
              class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">MAPA
              02</a>
          </li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="{{ route('assessment.registration') }}"
          class="{{ request()->is('assesment-registration') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="{{ request()->is('assesment-registration') ? 'sidebar-active' : '' }} h-5 w-5 flex-shrink-0 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path
              d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v2H7V2ZM5 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 4H8a1 1 0 0 1 0-2h5a1 1 0 0 1 0 2Zm0-4H8a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap">Pendaftaran</span>
        </a>
      </li> --}}

      {{-- <li>
        <a href="{{ route('self-assessments.room', ['username' => Auth::user()->username]) }}"
          class="{{ request()->is('self-assessment*') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="{{ request()->is('self-assessment*') ? 'sidebar-active' : '' }} h-5 w-5 flex-shrink-0 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
            <path
              d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
            <path
              d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap">Asesmen Mandiri</span>
          <span
            class="ms-3 inline-flex items-center justify-center rounded-full bg-gray-100 px-2 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Pro</span>
        </a>
      </li> --}}

      <li>
        <a href="{{ route('assessment-schedules.index') }}"
          class="{{ url()->current() === route('assessment-schedules.index') ? 'sidebar-active' : '' }} group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          {{-- <svg
            class="{{ url()->current() === route('assessment-schedules.index') ? 'sidebar-active' : '' }} h-5 w-5 flex-shrink-0 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
          </svg> --}}
          <span class="ms-3 flex-1 whitespace-nowrap">Jadwal Uji Kompetensi</span>
          {{-- <span
          class="ms-3 inline-flex items-center justify-center rounded-full bg-gray-100 px-2 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Pro</span> --}}
        </a>
      </li>

      {{-- <li>
        <a href="#"
          class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3 flex-1 whitespace-nowrap">Surveilence</span>
        </a>
      </li> --}}

      <li>
        <a href="#" target="_blank"
          class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3 flex-1 whitespace-nowrap">Analisa Asesor</span>
        </a>
      </li>

      {{-- <li>
        <a href="/coeg" target="_blank"
          class="group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700">
          <span class="ms-3 flex-1 whitespace-nowrap">Laporan</span>
        </a>
      </li> --}}

    </ul>
  </div>
</aside>
