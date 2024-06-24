@extends('layouts.app', ['title' => 'Asesor'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    Ubah Asesor
  </h1>

  <hr class="my-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  <form action="{{ route('assessors.update', ['assessor' => $assessor]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-5">
      <label for="nidn" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIDN <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="nidn" name="nidn" value="{{ $assessor->nidn }}"
        class="@error('nidn') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required maxlength="10" />

      @error('nidn')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="name" name="name" value="{{ $assessor->name }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('name')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="nik" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Induk KTP <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="nik" name="nik" value="{{ $assessor->nik }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('nik')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <ul
        class="@error('status') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror w-full items-center rounded-lg border bg-white text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white sm:flex">
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="men" type="radio" value="Laki-laki" name="gender" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $assessor->gender === 'Laki-laki' ? 'checked' : '' }} />
            <label for="men" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki
            </label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="woman" type="radio" value="Perempuan" name="gender" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $assessor->gender === 'Perempuan' ? 'checked' : '' }} />
            <label for="woman" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan
            </label>
          </div>
        </li>
      </ul>
      @error('status')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="birthPlace" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tempat Tanggal
        Lahir <span class="text-red-500 dark:text-pink-500">*</span></label>
      <div class="flex gap-2">
        <input type="text" id="birthPlace" name="birthPlace" value="{{ $assessor->birthPlace }}"
          class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required />
        <input type="date" id="birthDate" name="birthDate" value="{{ $assessor->birthDate }}"
          class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
          placeholder="Type here" required />
      </div>
      @error('birthDate')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="citizen" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Warga Negara <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="citizen" name="citizen" value="{{ $assessor->citizen }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('citizen')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="lastEducation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan
        Terakhir <span class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="lastEducation" name="lastEducation" value="{{ $assessor->lastEducation }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('lastEducation')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Alamat <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="address" name="address" value="{{ $assessor->address }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('address')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="neighbourhood" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">RT/RW <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="neighbourhood" name="neighbourhood" value="{{ $assessor->neighbourhood }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Contoh : 03/01" required />
      @error('neighbourhood')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="village" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Desa <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="village" name="village" value="{{ $assessor->village }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('village')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="district" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kecamatan <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="district" name="district" value="{{ $assessor->district }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('district')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="city" name="city" value="{{ $assessor->city }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('city')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="province" name="province" value="{{ $assessor->province }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('province')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="postalCode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kode Pos <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="postalCode" name="postalCode" value="{{ $assessor->postalCode }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('postalCode')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="{{ $assessor->department ? '' : 'hidden' }} mb-5">
      <label for="department" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program Studi
      </label>
      <input type="text" id="department" name="department" value="{{ $assessor->department }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" />
      @error('department')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="telephone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
      <input type="tel" id="telephone" name="telephone" value="{{ $assessor->telephone }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" />
      @error('telephone')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="mobile" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor HP <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="tel" id="mobile" name="mobile" value="{{ $assessor->mobile }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('mobile')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <input type="text" id="email" name="email" value="{{ $assessor->email }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('email')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="scheme" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Skema <span
          class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <select id="scheme_id" name="scheme_id" required
        class="@error('scheme_id') 
            border-red-500 dark:border-red-500 
            @else 
            border-gray-300 dark:border-gray-600
            @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500">
        <option selected hidden value="{{ $assessor->scheme->id }}">{{ $assessor->scheme->name }}</option>
        @foreach ($schemes as $scheme)
          <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
        @endforeach
      </select>
      @error('scheme')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="metRegistrationNumber" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nomor
        Registrasi MET <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="metRegistrationNumber" name="metRegistrationNumber"
        value="{{ $assessor->metRegistrationNumber }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('metRegistrationNumber')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="occupation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan <span
          class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="occupation" name="occupation" value="{{ $assessor->occupation }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('occupation')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="technicalCompetence" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kompetensi
        Teknis <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="text" id="technicalCompetence" name="technicalCompetence"
        value="{{ $assessor->technicalCompetence }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('technicalCompetence')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="tmtMet" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">TMT MET
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="tmtMet" name="tmtMet" value="{{ $assessor->tmtMet }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('tmtMet')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="expiredMet" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expired MET
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="expiredMet" name="expiredMet" value="{{ $assessor->expiredMet }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('expiredMet')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="rcc" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">RCC
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="rcc" name="rcc" value="{{ $assessor->rcc }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('rcc')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label for="expiredRcc" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expired expiredRcc
        <span class="text-red-500 dark:text-pink-500">*</span>
      </label>
      <input type="date" id="expiredRcc" name="expiredRcc" value="{{ $assessor->expiredRcc }}"
        class="@error('name') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300 dark:border-gray-600 
          @enderror block w-full rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-emerald-500 dark:focus:ring-emerald-500"
        placeholder="Type here" required />
      @error('expiredRcc')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-5">
      <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status <span
          class="text-red-500 dark:text-pink-500">*</span></label>
      <ul
        class="@error('status') 
          border-red-500 dark:border-red-500 
          @else 
          border-gray-300  dark:border-gray-600 
          @enderror w-full items-center rounded-lg border bg-white text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white sm:flex">
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="activeStatus" type="radio" value="Berlaku" name="statusMet" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $assessor->statusMet === 'Berlaku' ? 'checked' : '' }}>
            <label for="activeStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Berlaku</label>
          </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
          <div class="flex items-center ps-3">
            <input id="inactiveStatus" type="radio" value="Tidak Berlaku" name="statusMet" required
              class="h-4 w-4 border-gray-300 bg-gray-100 text-emerald-600 focus:ring-2 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-emerald-600 dark:focus:ring-offset-gray-700"
              {{ $assessor->statusMet === 'Tidak Berlaku' ? 'checked' : '' }}>
            <label for="inactiveStatus"
              class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak
              Berlaku</label>
          </div>
        </li>
      </ul>
      @error('status')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-5">
      <button type="submit"
        class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800 sm:w-auto">Simpan</button>
      <a href="{{ route('assessors.index') }}"
        class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Batal</a>
    </div>
  </form>
@endsection

@push('scripts')
  <script type="module">
    $('#searchNidn').click((e) => {
      e.preventDefault();
      document.location.href = "{{ route('assessors.create') }}?nidn=" + $('#nidn').val();
    });
  </script>
@endpush
