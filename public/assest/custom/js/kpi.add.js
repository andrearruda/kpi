$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $('form input').on('keypress', function(e) {
        return e.which !== 13;
    });

    $('#wizard_comparativo').bootstrapWizard();
    $('#wizard_orcado_realizado').bootstrapWizard();
    window.prettyPrint && prettyPrint();
});

/*
$(document).ready(function() {
    $('.input-mask-period').mask("00/0000", {placeholder: "mm/aaaa"});
    $('.input-mask-money').mask("#.##0,00", {reverse: true});
    $('.input-mask-percentage').mask("S#", {
        translation: {
            'S': {
                pattern: /-/,
                optional: true
            }
        }
    });
});*/
