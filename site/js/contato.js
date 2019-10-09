$(function () {
    jQuery('#ContatoIndexForm').submit(function () {
        if (validaForm())
        {
            var dados = jQuery(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: jQuery(this).attr("action"),
                data: dados,
                success: function (data)
                {

                    if ($.trim(data) == "true") {
                        $("#result_validacao").html("Mensagem enviada com sucesso!");
                        jQuery('#ContatoIndexForm')[0].reset();
                    } else {
                        $("#result_validacao").html("Houve algum erro no envio.<br />" + data);
                    }


                }
            });
        }
        return false;
    });

    $('#ContatoTelefone').mask("(99) 9999-9999?9").ready(function (event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if (phone.length > 11) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });

    $('#ContatoTelefone').focusout(function () {
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if (phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    }).trigger('focusout');
});

function validaForm()
{
    var ret = true;
    var msg_validacao = "<ol style='color:red'>";
    // $.validateEmail($('#ContatoEmail').val());
    if ($('#ContatoEmail').val() != "") {
        if (!$.validateEmail($('#ContatoEmail').val())) {
            msg_validacao += "<li>Digite um e-mail válido.</li>";
            ret = false;
        }
    }
    else {
        msg_validacao += "<li>Preencha o e-mail.</li>";
        ret = false;
    }
    if ($("#ContatoNome").val() == "") {
        msg_validacao += "<li>Preencha o seu nome.</li>";
        ret = false;
    }

    if ($("#ContatoCidade").val() == "") {
        msg_validacao += "<li>Preencha a cidade.</li>";
        ret = false;
    }

    if ($("#ContatoMensagem").val() == "") {
        msg_validacao += "<li>Preencha sua mensagem.</li>";
        ret = false;
    }

    msg_validacao += "</ol>";
    $("#result_validacao").html(msg_validacao);
    return ret;
}

$.validateEmail = function (email)
{
    er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
    if (er.exec(email))
        return true;
    else
        return false;
};