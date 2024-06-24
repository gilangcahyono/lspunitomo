$(document).ready(function () {
    $("#sidebarMinimizeBtn").click(function (e) {
        e.preventDefault();
        $("#logo-sidebar").toggleClass("sm:translate-x-0");
        $("main").toggleClass("sm:ml-[17rem]");
        $("#sidebarMinimizeBtn").toggleClass("-right-12");
        $("#sidebarMinimizeIcon").toggleClass("hidden");
        $("#sidebarMaximizeIcon").toggleClass("hidden");
    });
});
