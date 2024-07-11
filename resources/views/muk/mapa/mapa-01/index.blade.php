@extends('layouts.app', ['title' => 'MAPA 01'])

@section('content')

  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    MAPA 01 <br> MERENCANAKAN AKTIVITAS DAN PROSES ASESMEN
  </h1>

  <hr class="mt-5 h-px border-0 bg-gray-400 dark:bg-gray-700">

  @include('muk.mapa.nav')

  <div class="relative overflow-x-auto">

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Skema Sertifikasi (KKNI/Okupasi/Klaster)
          </th>
          <th class="px-6 py-4">
            Judul
          </th>
          <th class="px-6 py-4">
            : {{ $scheme->name }}
          </th>
        </tr>
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="px-6 py-4">
            Nomor
          </th>
          <th class="px-6 py-4">
            : {{ $scheme->code }}
          </th>
        </tr>
      </thead>
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
          1. Menentukan Pendekatan Asesmen
        </th>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="21">
          1.1.
        </td>
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
          Asesi
        </td>
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan
            dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
            kompetensi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan
            dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
            kompetensi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Hasil pelatihan dan
            / atau pendidikan, dimana kurikulum belum berbasis kompetensi.</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pekerja
            berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya mampu telusur dengan
            standar kompetensi.</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pelatihan / belajar
            mandiri atau otodidak.</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
          Tujuan Asesmen
        </td>
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Sertifikasi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pengakuan Kompetensi
            Terkini (PKT)</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Rekognisi
            Pembelajaran Lampau (RPL)</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">
            Lainnya</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="8">
          Konteks Asesmen
        </td>
        <td class="border px-6 py-4 dark:border-gray-700">
          Lingkungan
        </td>
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tempat kerja
            nyata</label>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tempat kerja
            simulasi</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="">
          Peluang untuk mengumpulkan bukti dalam
          sejumlah situasi
        </td>
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Tersedia</label>
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Terbatas</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
          Hubungan antara standar kompetensi dan:
        </td>
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Bukti untuk
            mendukung asesmen </label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Aktivitas kerja di
            tempat kerja Asesi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Kegiatan
            Pembelajaran</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="3">
          Siapa yang melakukan asesmen / RPL
        </td>
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Lembaga
            Sertifikasi</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Organisasi
            Pelatihan</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Asesor
            Perusahaan</label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="4">
          Konfirmasi dengan orang yang relevan</td>
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer
            sertifikasi LSP</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Master Asesor /
            Master Trainer / Lead Asesor Kompetensi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer Pelatihan
            Lembaga Training terakreditasi / Lembaga Training
            terdaftar
          </label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Manajer Manajer
            atau supervisor ditempat kerja
          </label>
        </td>
      </tr>

      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
          1.2.</td>
        <td class="border px-6 py-4 dark:border-gray-700" rowspan="5">
          Standar Industri atau Tempat Kerja</td>
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Standar
            Kompetensi</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Kriteria asesmen
            dari kurikulum pelatihan</label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Spesifikasi
            kinerja suatu perusahaan atau industri
          </label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Spesifikasi Produk
          </label>
        </td>
      </tr>
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <td class="flex items-center px-6 py-4" colspan="2">
          <input id="green-checkbox" type="checkbox" value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
          <label for="green-checkbox" class="font-sm ms-2 text-sm text-gray-900 dark:text-gray-400">Pedoman khusus
          </label>
        </td>
      </tr>

    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700" colspan="4">
          2. Mempersiapkan Rencana Asesmen
        </th>
      </tr>
      @foreach ($scheme->jobGroups as $jobGroup)
        <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" rowspan="{{ $jobGroup->units->count() + 1 }}">
            Kelompok Pekerjaan {{ $loop->iteration }}
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Kode Unit
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Judul Unit
          </th>
        </tr>

        @foreach ($jobGroup->units as $unit)
          <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $loop->iteration }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $unit->code }}
            </td>
            <td class="border px-6 py-4 dark:border-gray-700">
              {{ $unit->name }}
            </td>
          </tr>
        @endforeach

        <tr>
          <td colspan="4">
            <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
              <thead>
                <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                  <th class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                    Unit Kompetensi
                  </th>
                  <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                    <span class="font-bold">Bukti-Bukti</span> (Kinerja, Produk, Portofolio, dan / atau Pengetahuan)
                    diidentifikasi
                    berdasarkan Kriteria Unjuk Kerja dan Pendekatan Asesmen.
                  </td>
                  <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="3">
                    Jenis Bukti
                  </th>
                  <th class="border px-6 py-4 text-center dark:border-gray-700" colspan="6">
                    Metode dan Perangkat Asesmen
                    CL (Ceklis Observasi), DIT (Daftar Instruksi Terstruktur), DPL (Daftar Pertanyaan Lisan), DPT (Daftar
                    Pertanyaan
                    Tertulis), VPK (Verifikasi Pihak Ketiga), CVP (Ceklis Verifikasi Portofolio), CRP (Ceklis Reviu
                    Produk),
                    PW
                    (Pertanyaan Wawancara)
                  </th>
                </tr>
                <tr class="border bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    L
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    TL
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    T
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Obsevasi langsung
                    (kerja nyata/aktivitas waktu nyata di tempat kerja di kingkungan tempat kerja yang disimulasikan)
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Kegiatan Terstruktur
                    (latihan simulasi dan bermain peran, proyek, presentasi, lembar kegiatan)
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Tanya Jawab
                    (pertanyaan tertulis, wawancara, asesmen diri, tanya jawab lisan, angket, ujian lisan atau tertulis)
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Verifikasi Portfolio
                    (sampel pekerjaaan yang disusun oleh Asesi, produk dengan dokumentasi pendukung, bukti sejarah, jurnal
                    atau
                    buku catatan, informasi tentang pengalaman hidup)
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Reviu Produk
                    Produk hasil proyek, ciontoh hasil kerja/produk
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    Verifikasi Pihak Ketiga
                    (testimoni dan laporan dari atasan, bukti pelatihan, otentikasi pencapaian sebelumnya, wawancara
                    dengan
                    atasan, atau rekan kerja)
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($jobGroup->units as $unit)
                  <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                    <td class="border px-6 py-4 dark:border-gray-700">
                      {{ $loop->iteration }}. {{ $unit->name }}
                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                    <td class="border px-6 py-4 dark:border-gray-700">

                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </td>
        </tr>
      @endforeach
    </table>

    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700" colspan="2">
            3. Mengidentifikasi Persyaratan Modifikasi dan Kontekstualisasi
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            3.1. a. Karakteristik Kandidat:
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Ada / tidak ada* karakteristik khusus Kandidat Jika Ada, tuliskan
          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 ps-12 dark:border-gray-700">
            b. Kebutuhan kontekstualisasi terkait tempat kerja:
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Ada / tidak ada* kebutuhan kontekstualisasi Jika Ada, tuliskan
          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            3.2. Saran yang diberikan oleh paket pelatihan atau pengembang pelatihan
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Ada / tidak ada* saran Jika Ada, tuliskan
          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            3.3. Penyesuaian perangkat asesmen terkait kebutuhan kontekstualisasi
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Ada / tidak ada* penyesuaian perangkat Jika Ada, tuliskan
          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            3.4. Peluang untuk kegiatan asesmen terintegrasi dan mencatat setiap perubahan yang diperlukan untuk alat
            asesmen
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Ada / tidak ada* peluang Jika Ada, tuliskan
          </td>
        </tr>
      </tbody>
    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Konfirmasi dengan orang yang relevan</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Orang yang relevan
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Manajer sertifikasi LSP
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            Lambang Probo Sumirat S.Kom., M.Kom.
          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Master Asesor / Master Trainer / Lead Asesor Kompetensi
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Manajer pelatihan Lembaga Training terakreditasi / Lembaga Training terdaftar
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            Manajer atau supervisor ditempat kerja
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
      </tbody>
    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
      <thead>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <th class="border px-6 py-4 dark:border-gray-700">
            Status
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            Nama
          </th>
          <th class="border px-6 py-4 dark:border-gray-700">
            No MET
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Penyusun
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            2
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
            Validator
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">
            1
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
        <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
          <td class="border px-6 py-4 dark:border-gray-700">
            2
          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
          <td class="border px-6 py-4 dark:border-gray-700">

          </td>
        </tr>
      </tbody>
    </table>

  </div>
@endsection
