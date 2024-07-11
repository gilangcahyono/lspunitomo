@extends('layouts.app', ['title' => 'MAPA 02'])

@section('content')
  <h1 class="text-center text-xl font-bold text-gray-900 dark:text-white sm:text-xl">
    MAPA 02 <br> PETA INSTRUMEN ASESSMEN HASIL PENDEKATAN ASESMEN DAN
    PERENCANAAN ASESMEN
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
            <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
              {{-- <thead>
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
              </thead> --}}
              <tbody>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    1
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.01. CL - Ceklis Observasi Aktivitas Di Tempat Kerja atau Tempat Kerja Simulasi
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    2
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.02. TPD - Tugas Praktik Demonstrasi
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    3
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.03. PMO - Pertanyaan Untuk Mendukung Observasi
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700" rowspan="2">
                    4
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    4. a FR.IA.04A. DIT - Daftar Instruksi Terstruktur
                    (Penjelasan Singkat Proyek Terkait Pekerjaan/ Kegiatan Terstruktur Lainnya)
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    4.b FR.IA.04B. DIT – Penilaian Proyek Singkat atau Kegiatan Terstruktur Lainnya
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    5
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.05. DPT - Daftar Pertanyaan Tertulis Pilihan Ganda
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    6
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.06. DPT – Daftar Pertanyaan Tertulis Pilihan Esai
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    7
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.07. DPL – Daftar Pertanyaan Lisan
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    8
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.08. CVP - Ceklis Verifikasi Portofolio
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    9
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.09. PW - Pertanyaan Wawancara
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    10
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.10. VPK - Verifikasi Pihak Ketiga
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                  <td class="border px-6 py-4 dark:border-gray-700">
                    11
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    FR.IA.11. CRP - Ceklis Reviu Produk
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                  <td class="border px-6 py-4 dark:border-gray-700">
                    <input id="green-checkbox" type="checkbox" value=""
                      class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-green-600">
                  </td>
                </tr>

              </tbody>
            </table>
          </td>
        </tr>
      @endforeach
    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Penyusun dan Validator</h2>
    <table class="mb-3 w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Penyusun
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          No. Reg
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->assessors[0]->metRegistrationNumber }}
        </td>
      </tr>

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          Nama Validator
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->assessors[0]->name }}
        </td>
      </tr>

      <tr class="mb-3 border bg-white dark:border-gray-700 dark:bg-gray-800">
        <th class="border px-6 py-4 dark:border-gray-700">
          No. Reg
        </th>
        <td class="border px-6 py-4 dark:border-gray-700">
          : {{ $scheme->assessors[0]->metRegistrationNumber }}
        </td>
      </tr>

    </table>

    <h2 class="mb-2 mt-5 font-bold text-gray-500 dark:text-gray-400">Keterangan:</h2>
    <ol class="w-full list-inside list-decimal space-y-1 text-gray-500 dark:text-gray-400">
      <li>
        Hasil pelatihan dan / atau pendidikan, dimana Kurikulum dan fasilitas praktek mampu telusur terhadap standar
        kompetensi.
      </li>
      <li>
        Hasil pelatihan dan / atau pendidikan, dimana kurikulum belum berbasis kompetensi.
      </li>
      <li>
        Pekerja berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya mampu telusur dengan
        standar kompetensi.
      </li>
      <li>
        Pekerja berpengalaman, dimana berasal dari industri/tempat kerja yang dalam operasionalnya belum berbasis
        kompetensi.
      </li>
      <li>Pelatihan / belajar mandiri atau otodidak</li>
    </ol>

  </div>
@endsection
