$('#SIMULADO-form').submit(function(e) {
    e.preventDefault();
    $('.v').removeClass('resposta-correta')
    $('input:checked').each(function(index) {
        fieldset = $(this).parent().parent().parent().parent().parent()
        fieldset.find('p').remove()

        if ($(this).data('correct') == 'falsa') {
            var letra_correcao = fieldset.find('.qtablela').data('correta')
            var letra = letra_correcao;
            if (letra == 1) {
                msgLetra = "A";   
            } else if (letra == 2) {
                msgLetra = "B";   
            } else if (letra == 3) {
                msgLetra = "C";
            } else if (letra == 4) {
                msgLetra = "D";
            } else if (letra == 5) {
                msgLetra = "E";
            }
            fieldset.find('.v').addClass('resposta-correta');
            console.log(fieldset.find('.v'))
            fieldset.append('<span class="incorrect"> Você errou essa.</span>' +
                '<p> Resposta certa é letra ' + '<span class="incorrectFeedback">' + msgLetra + '</span></p>')
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
        alert('Responda todas as questões (' + aviso + ')');
        return false;
    }
})

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}