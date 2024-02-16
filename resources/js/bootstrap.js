import axios from "axios";
// import Alpine from "alpinejs";
import jQuery from "jquery";
import "flowbite";

// Setup axios
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Setup AlpineJS
// window.Alpine = Alpine;
// Alpine.start();

// Setup jQuery
window.$ = window.jQuery = jQuery;
