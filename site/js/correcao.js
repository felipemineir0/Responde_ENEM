$('#SIMULADO-form').submit(function(e) {
    var correta = 1;
    e.preventDefault();
    $('.v').removeClass('resposta-correta')
    $('input:checked').each(function(index) {
        fieldset = $(this).parent().parent().parent().parent().parent()
        //fieldset.find('p').remove()
        

        if ($(this).data('correct') == 'falsa') {
            var letra_correcao = fieldset.find('.qtablela').data('correta')
            var letra = letra_correcao
            if (letra == 1) { msgLetra = "A"; }
            else if (letra == 2) { msgLetra = "B"; }
            else if (letra == 3) { msgLetra = "C"; }
            else if (letra == 4) { msgLetra = "D"; }
            else if (letra == 5) { msgLetra = "E"; }
            fieldset.find('.v').addClass('resposta-correta');
            console.log(fieldset.find('.v'))
            fieldset.append('<span class="incorrect"> Você errou essa.</span>' +
                '<p> Resposta certa é letra ' + '<span class="incorrectFeedback">' + msgLetra + '</span> <br><br> Estude sobre o conteudo pelo link <a class="incorrectFeedback" target="_blank" href="https://youtu.be/YJjBDwFakh8">https://youtu.be/YJjBDwFakh8</a> </p>')
        } else {
            var respostas_corretas = correta++;
            fieldset.append(respostas_corretas + '<span class="correct"> Boa! Está correto!</span>')
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