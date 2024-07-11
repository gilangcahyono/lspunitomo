  <!-- Open Registration modal -->
  <div id="open-registration-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
    <div class="relative max-h-full w-full max-w-md p-4">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Buka Pendaftaran Sertifikasi
          </h3>
          <button type="button"
            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="open-registration-modal">
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form class="p-4 md:p-5" action="{{ route('open.registration') }}" method="POST">
          @csrf
          <div class="mb-4 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
              <label for="periode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tahun
                Ajaran</label>
              <input type="text" name="periode" id="periode"
                class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                placeholder="Contoh: 2021/2022" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
              <label for="semester"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Semester</label>
              <select id="semester" name="semester" required
                class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
                <option selected="" value="" disabled hidden>Pilih Semester</option>
                <option value="Gasal">Gasal</option>
                <option value="Genap">Genap</option>
              </select>
            </div>
          </div>
          <button type="submit"
            class="w-full items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Buka Pendaftaran
          </button>
        </form>
      </div>
    </div>
  </div>
