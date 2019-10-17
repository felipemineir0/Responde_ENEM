$('#SIMULADO-form').submit(function(e) {
    e.preventDefault();
    $('.v').removeClass('resposta-correta')
    $('input:checked').each(function(index) {
        fieldset = $(this).parent().parent().parent().parent().parent()
        fieldset.find('p').remove()

        if ($(this).data('correct') == 'falsa') {
            var letra_correcao = fieldset.find('.qtablela').data('correta')

            fieldset.find('.v').addClass('resposta-correta');
            console.log(fieldset.find('.v'))
            fieldset.append('<span class="incorrect"> Você errou essa.</span>' +
                '<p> Resposta certa é letra ' + '<span class="incorrectFeedback">' + letra_correcao + '</span></p>')
        } else {
            fieldset.append('<span class="correct"> Boa! Está correto!</span>')
        }
    });

    var elementos = $('fieldset:not(:has(input[type=radio]:checked))');
    var aviso = elementos.map(function() {
        return $(this).attr('id');
    }).get().join(', ');
    if (aviso == '') {
        return true;
    } else {
        alert('Faltou responder as questões: (' + aviso + ')');
        return false;
    }
})

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}