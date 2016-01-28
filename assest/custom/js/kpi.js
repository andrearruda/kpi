$(function() {
    $('input[type=\'checkbox\']').bootstrapSwitch();

    $('input[type=\'checkbox\']').on('switchChange.bootstrapSwitch', function(event,  state) {

        $('input[type=\'checkbox\'].actived').addClass('not_actived').removeClass('actived');
        $(this).addClass('actived').removeClass('not_actived');

        $.ajax({
            type: "POST",
            data: ({active : this.checked}),
            url: $(this).data('url'),
            dataType: "json",
            beforeSend: function(){
                $('input[type=\'checkbox\'].not_actived').bootstrapSwitch('state', false);
            },
            complete: function(){
            },
            success: function(json) {
                $('input[type=\'checkbox\'].actived').bootstrapSwitch('state', true);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });

    });
});