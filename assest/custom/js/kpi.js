$(function() {
    $('input[name=\'my-checkbox-activated\'], input[name=\'my-checkbox-automated\']').bootstrapSwitch();

    $('input[name=\'my-checkbox-activated\']').on('switchChange.bootstrapSwitch init.bootstrapSwitch', function(event,  state) {

        $.ajax({
            type: "POST",
            data: ({active : this.checked}),
            url: $(this).data('url'),
            dataType: "json",
            beforeSend: function(){
                $(this).attr("disabled", true);
            },
            complete: function(){
                $(this).removeAttr("disabled");
            },
            success: function(json) {
                console.log(json);
            }

        });
    });
});
