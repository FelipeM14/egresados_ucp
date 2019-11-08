$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('input[type=checkbox][class=cb-selector]').click(function() {
        let cb = $(this),
            name = cb.attr('data-for');

        if(name == null)
            return false;
        $('input[type=checkbox][name^='+name+']')
            .prop('checked', cb.prop('checked'))
            .click(function() {
                if(!$(this).prop('checked'))
                    cb.prop('checked', false);
            });
    });


});
