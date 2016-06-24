$(function() {
    $('input[type=\'checkbox\']').click(function(){
        $('input[type=\'checkbox\']').attr('disabled', true);
        $('input[type=\'checkbox\']').prop('checked', false);

        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            dataType: "json",
            beforeSend: function(){
            },
            complete: function(){
            },
            success: function(json) {
                $('input[type=\'checkbox\']').attr('disabled', false);
                $('.kpi_' + json.id + ' input').prop('checked', true);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });
    })
});