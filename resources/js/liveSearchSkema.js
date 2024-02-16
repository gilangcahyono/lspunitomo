$("#search").on("keyup", (e) => {
    e.preventDefault();
    // console.log(e.target.value);
    axios
        .post(`${window.location.origin}/api/schemes`, {
            // _token: document
            //     .querySelector('meta[name="csrf-token"]')
            //     .getAttribute("content"),
            keyword: e.target.value,
        })
        .then((res) => {
            // console.log(res.data.data);
            tableSchemeRow(res.data.data);
        });
    // .catch((err) => {
    //     console.log(err);
    // });
});

function tableSchemeRow(schemes) {
    let htmlView = "";

    if (schemes.length <= 0) {
        htmlView += `<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white" colspan="6">Data tidak ditemukan</td>
        </tr>`;
    }

    schemes.forEach((scheme, idx) => {
        htmlView += `<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
            ${idx + 1}</td>
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
            ${scheme.code}</td>
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
            ${scheme.name}</td>
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
            ${scheme.type}</td>
            <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
            ${scheme.unit.length}</td>
            <td class="flex space-x-2 whitespace-nowrap p-4">
            <a href="{{ route('schemes.edit', ['scheme' => $scheme]) }}"
                class="inline-flex items-center rounded-lg bg-emerald-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd"
                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                    clip-rule="evenodd"></path>
                </svg>
            </a>
            <form action="{{ route('schemes.destroy', ['scheme' => $scheme]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"
                class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
                </button>
            </form>
            </td>
        </tr>`;

        $("#schemeList").html(htmlView);
    });
}
