$(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $('form input').on('keypress', function(e) {
        return e.which !== 13;
    });

    $('#wizard_comparativo').bootstrapWizard();
    $('#wizard_orcado_realizado').bootstrapWizard();
    window.prettyPrint && prettyPrint();
});

$(function() {
    $('.input-mask-period').mask("00/0000", {placeholder: "mm/aaaa"});
    $('.input-mask-money-milhoes').maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' milhões', affixesStay: false, allowNegative: true});
    $('.input-mask-money-mil').maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' mil', affixesStay: false, allowNegative: true});
    $('.input-mask-percentage').maskMoney({thousands:'', decimal:'.', allowZero:true, suffix: ' %', affixesStay: false, allowNegative: true});

    $('.input-mask-number-int').numericInput();
});
