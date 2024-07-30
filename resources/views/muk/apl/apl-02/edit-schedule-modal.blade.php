<div id="edit-schedule-modal-{{ $candidate->id }}" tabindex="-1" aria-hidden="true"
  class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-md p-4">
    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
      <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Ubah jadwal Asesmen Mandiri
        </h3>
        <button type="button"
          class="end-2.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="edit-schedule-modal-{{ $candidate->id }}">
          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <div class="p-4 md:p-5">
        <fieldset>
          <input type="hidden" name="accession" id="accession" value="{{ $candidate->id }}">
          <input type="date" name="selfAssessmentSchedule" id="selfAssessmentSchedule"
            class="mb-3 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-emerald-500 focus:ring-emerald-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
            required />
          <button type="button" id="rescheduleBtn"
            class="w-full rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Simpan</button>
        </fieldset>
      </div>
    </div>
  </div>
</div>

<script type="module">
  $('#rescheduleBtn').on('click', function() {
    const accession = $('#accession').val();
    const schedule = $('#selfAssessmentSchedule').val();
    axios({
      method: 'post',
      url: `/muk/reschedule-self-assessments`,
      data: {
        id: accession,
        selfAssessmentSchedule: schedule,
      }
    }).then((result) => {
      // console.log(result);
      alert('Jadwal ujian berhasil diperbarui!');
      window.location.reload();
    }).catch((error) => {
      console.log(error);
    })
  });
</script>
