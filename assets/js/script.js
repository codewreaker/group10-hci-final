$(document).ready(function() {
    $("#side-nav-btn").sideNav();

    $("#add-form").click(function() {
        $("#info-layer").fadeToggle(100, function() {
            $("#hidden-layer").fadeToggle(100);
        });
        $("#add-form i").toggleClass("mdi-content-remove");
    });

    /* Script For Uploading Images into a Directory */


});
