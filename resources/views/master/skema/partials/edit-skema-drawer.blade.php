@foreach ($skemas as $skema)
  <div id="drawer-update-skema-default{{ $loop->iteration }}"
    class="fixed right-0 top-0 z-50 h-screen w-full max-w-md translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label"
      class="mb-6 inline-flex items-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400">Update
      Skema</h5>
    <button type="button" data-drawer-dismiss="drawer-update-skema-default{{ $loop->iteration }}"
      aria-controls="drawer-update-skema-default{{ $loop->iteration }}"
      class="absolute right-2.5 top-2.5 inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
      <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"></path>
      </svg>
      <span class="sr-only">Close menu</span>
    </button>
    <form action="#">
      <div class="space-y-4">
        <div>
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name</label>
          <input type="text" name="title" id="name"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-600 focus:ring-emerald-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            value="{{ $skema->name }}" placeholder="Type product name" required="">
        </div>
        <div>
          <label for="category" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Technology</label>
          <select id="category"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
            <option selected="">Flowbite</option>
            <option value="RE">React</option>
            <option value="AN">Angular</option>
            <option value="VU">Vue JS</option>
          </select>
        </div>
        <div>
          <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Price</label>
          <input type="number" name="price" id="price"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-600 focus:ring-emerald-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            value="2999" placeholder="$149" required="">
        </div>
        <div>
          <label for="description"
            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description</label>
          <textarea id="description" rows="4"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
            placeholder="Enter event description here">Start developing with an open-source library of over 450+ UI components, sections, and pages built with the utility classes from Tailwind CSS and designed in Figma.</textarea>
        </div>
        <div>
          <label for="discount" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Discount</label>
          <select id="discount"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
            <option selected="">No</option>
            <option value="5">5%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="30">30%</option>
            <option value="40">40%</option>
            <option value="50">50%</option>
          </select>
        </div>
      </div>
      <div class="bottom-0 left-0 mt-4 flex w-full justify-center space-x-4 pb-4 sm:absolute sm:mt-0 sm:px-4">
        <button type="submit"
          class="w-full justify-center rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          Update
        </button>
        <button type="button"
          class="inline-flex w-full items-center justify-center rounded-lg border border-red-600 px-5 py-2.5 text-center text-sm font-medium text-red-600 hover:bg-red-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:bg-red-600 dark:hover:text-white dark:focus:ring-red-900">
          <svg aria-hidden="true" class="-ml-1 mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          Delete
        </button>
      </div>
    </form>
  </div>
@endforeach
