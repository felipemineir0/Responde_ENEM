$('#SIMULADO-form').submit(function (e) {
    var correta = 0;
    var errada = 0;
    e.preventDefault();
    $('.v').removeClass('resposta-correta')
    $('input:checked').each(function (index) {
        fieldset = $(this).parent().parent().parent().parent().parent()

        if ($(this).data('correct') == 'falsa') {
            errada++;
            var letra_correcao = fieldset.find('.qtablela').data('correta');
            var link_estudo = fieldset.find('.qtablela').data('link_url');
            var link = '<span>Indicamos o seguinte link para estudo da questão: <a class="incorrectFeedback" target="_blank" href="' + link_estudo + '">' + link_estudo + '</a></span>';
            var letra = letra_correcao
            if (letra == 1) { msgLetra = "A"; }
            else if (letra == 2) { msgLetra = "B"; }
            else if (letra == 3) { msgLetra = "C"; }
            else if (letra == 4) { msgLetra = "D"; }
            else if (letra == 5) { msgLetra = "E"; }
            var respostaLetra = '<span class="incorrectFeedback">' + msgLetra + '</span></p>'

            fieldset.find('.v').addClass('resposta-correta');
            console.log(fieldset.find('.v'))
            fieldset.append('<span class="incorrect"> Você errou essa.</span>' + '<p> Resposta certa é letra ' 
            + respostaLetra
            + link )
        } else {
            correta++;
            fieldset.append('<span class="correct"> Boa! Está correto!</span>')
        }
    });

    document.getElementById("result_acertos").innerHTML = "Acertos: " + correta + " de 10 | ";
    document.getElementById("result_simulado").innerHTML = "Voce acertou " + ((10 * correta) / 100) * 100 + "% do simulado";

    var elementos = $('fieldset:not(:has(input[type=radio]:checked))');
    var aviso = elementos.map(function () {
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