@extends('layouts.app')

@section('title')
  {{ 'KUK' }}
@endsection

@section('content')
  <section class="mx-1 sm:mx-auto sm:w-full">

    <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
      Data Master KUK
      <br>
      LSP Universitas Dr. Soetomo Surabaya
    </h1>

    <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

    <div
      class="border-b border-gray-200 text-center text-sm font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400">
      <ul class="-mb-px flex flex-wrap">
        <li class="me-2">
          <a href="{{ route('skemas.index') }}"
            class="{{ url()->current() === route('skemas.index') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Skema</a>
        </li>
        <li class="me-2">
          <a href="{{ route('units.index') }}"
            class="{{ url()->current() === route('units.index') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Unit</a>
        </li>
        <li class="me-2">
          <a href="{{ route('elements.index') }}"
            class="{{ url()->current() === route('elements.index') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">Elemen</a>
        </li>
        <li class="me-2">
          <a href="{{ route('kuks.index') }}"
            class="{{ url()->current() === route('kuks.index') ? 'border-emerald-600 p-4 text-emerald-600 dark:border-emerald-500 dark:text-emerald-500' : 'border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300' }} inline-block rounded-t-lg border-b-2">KUK</a>
        </li>
      </ul>
    </div>

    <div
      class="block items-center justify-between border-b border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex lg:mt-1.5">
      <div class="mb-1 w-full">
        <div class="block items-center justify-between dark:divide-gray-700 sm:flex md:divide-x md:divide-gray-100">
          <div class="mb-4 flex items-center sm:mb-0">
            <form class="sm:pr-3" action="#" method="GET">
              <label for="products-search" class="sr-only">Search</label>
              <div class="relative mt-1 w-48 sm:w-64 xl:w-96">
                <input type="text" name="email" id="products-search"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500 sm:text-sm"
                  placeholder="Cari KUK">
              </div>
            </form>
            {{-- <div class="flex w-full items-center sm:justify-end">
            <div class="flex space-x-1 pl-2">
              <a href="#"
                class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                  </path>
                </svg>
              </a>
            </div>
          </div> --}}
          </div>
          <button id="createProductButton"
            class="rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
            type="button" data-drawer-target="drawer-create-product-default"
            data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default"
            data-drawer-placement="right">
            Tambah KUK
          </button>
        </div>
      </div>
    </div>

    <div class="flex flex-col">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden shadow">
            <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
              <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    #
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Nama KUK
                  </th>
                  <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($kuks as $kuk)
                  <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $loop->iteration + ($kuks->currentPage() - 1) * $kuks->perPage() }}</td>
                    <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                      {{ $kuk->name }}</td>
                    <td class="space-x-2 whitespace-nowrap p-4">
                      <button type="button" id="updateProductButton" data-drawer-target="drawer-update-product-default"
                        data-drawer-show="drawer-update-product-default" aria-controls="drawer-update-product-default"
                        data-drawer-placement="right"
                        class="inline-flex items-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                          <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </button>
                      <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default"
                        data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default"
                        data-drawer-placement="right"
                        class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div
      class="sticky bottom-0 right-0 w-full items-center border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex sm:justify-between">
      <div class="mb-4 flex items-center sm:mb-0">
        {{-- <a href="#"
          class="inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
          <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="#"
          class="mr-2 inline-flex cursor-pointer justify-center rounded p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white">
          <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a> --}}
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
            class="font-semibold text-gray-900 dark:text-white">{{ $kuks->firstItem() }}-{{ $kuks->lastItem() }}</span>
          of <span class="font-semibold text-gray-900 dark:text-white">{{ $kuks->total() }}</span></span>
      </div>
      <div class="flex items-center space-x-3">
        <a href="{{ $kuks->previousPageUrl() }}"
          class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          <svg class="-ml-1 mr-1 h-5 w-5"" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
          </svg>
          Previous
        </a>
        <a href="{{ $kuks->nextPageUrl() }}"
          class="inline-flex flex-1 items-center justify-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
          Next
          <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>

    <!-- Edit Product Drawer -->
    <div id="drawer-update-product-default"
      class="fixed right-0 top-0 z-50 h-screen w-full max-w-xs translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800"
      tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
      <h5 id="drawer-label"
        class="mb-6 inline-flex items-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400">Update
        KUK</h5>
      <button type="button" data-drawer-dismiss="drawer-update-product-default"
        aria-controls="drawer-update-product-default"
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
              value="Education Dashboard" placeholder="Type product name" required="">
          </div>
          <div>
            <label for="category"
              class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Technology</label>
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

    <!-- Delete Product Drawer -->
    <div id="drawer-delete-product-default"
      class="fixed right-0 top-0 z-50 h-screen w-full max-w-md translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800"
      tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
      <h5 id="drawer-label"
        class="inline-flex items-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400">Delete item
      </h5>
      <button type="button" data-drawer-dismiss="drawer-delete-product-default"
        aria-controls="drawer-delete-product-default"
        class="absolute right-2.5 top-2.5 inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
      </button>
      <svg class="mb-4 mt-8 h-10 w-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
      <a href="#"
        class="mr-2 inline-flex items-center rounded-lg bg-red-600 px-3 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
        Yes, I'm sure
      </a>
      <a href="#"
        class="inline-flex items-center rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-emerald-300 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        data-drawer-hide="drawer-delete-product-default">
        No, cancel
      </a>
    </div>

    <!-- Add Product Drawer -->
    <div id="drawer-create-product-default"
      class="fixed right-0 top-0 z-50 h-screen w-full max-w-md translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800"
      tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
      <h5 id="drawer-label"
        class="mb-6 inline-flex items-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400">New
        Product</h5>
      <button type="button" data-drawer-dismiss="drawer-create-product-default"
        aria-controls="drawer-create-product-default"
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
              placeholder="Type product name" required="">
          </div>

          <div>
            <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="number" name="price" id="price"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-600 focus:ring-emerald-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="$2999" required="">
          </div>
          <div>
            <label for="category-create"
              class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Technology</label>
            <select id="category-create"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
              <option selected="">Select category</option>
              <option value="FL">Flowbite</option>
              <option value="RE">React</option>
              <option value="AN">Angular</option>
              <option value="VU">Vue</option>
            </select>
          </div>
          <div>
            <label for="description"
              class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" rows="4"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
              placeholder="Enter event description here"></textarea>
          </div>
          <div>
            <label for="discount-create"
              class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Discount</label>
            <select id="discount-create"
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
          <div class="bottom-0 left-0 flex w-full justify-center space-x-4 pb-4 md:absolute md:px-4">
            <button type="submit"
              class="w-full justify-center rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
              Add KUK
            </button>
            <button type="button" data-drawer-dismiss="drawer-create-product-default"
              aria-controls="drawer-create-product-default"
              class="inline-flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
              <svg aria-hidden="true" class="-ml-1 h-5 w-5 sm:mr-1" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
              Cancel
            </button>
          </div>
      </form>
    </div>

  </section>
@endsection
