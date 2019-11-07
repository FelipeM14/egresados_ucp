$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

});
