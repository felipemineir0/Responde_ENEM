<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Usuário</span>
        </h1>
    </div>
</div>



<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('User', $this->FormAdmin->formConfigs);
                echo $this->Form->input('id');
                echo $this->Form->input('senha_anterior', array("placeholder" => 'Senha atual', "type" => "password"));
                echo $this->Form->input('nova_senha', array("placeholder" => 'Nova senha', "type" => "password"));
                echo $this->Form->input('confirmar_senha', array("placeholder" => 'Confirmar senha', "type" => "password"));
                ?>
                <div id="result_validacao" style="color: red;" ></div>
                <div class='form-actions form-actions-padding-sm'>

                    <div class='row'>

                        <div class='col-md-10 col-md-offset-2'>
                            <div id="result_validacao" style="color: red;" ></div>
                            <button class='btn btn-primary BtnSubmit' type='submit'>
                                <i class='icon-save'></i>
                                Salvar
                            </button>
                            <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn'));
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>

</div>
<script>
    $(function () {

        $("#UserConfirmarSenha").blur(function () {
            $("#result_validacao").html(validaSenha());
        });
        $("#UserNovaSenha").blur(function () {
            $("#result_validacao").html(validaSenha());
        });

        jQuery('#UserAlterarSenhaForm').submit(function () {
            return validaForm();
        });


    });

    function validaSenha() {
        if ($("#UserNovaSenha").val() != "" && $("#UserConfirmarSenha").val() != "") {
            if ($("#UserNovaSenha").val() != $("#UserConfirmarSenha").val()) {
                //$("#result_validacao").html("Senhas não correspodem");
                return "Senhas não correspodem";
            }
            else {
                $("#result_validacao").html("");
                return "";
            }
        }
        else
            return false;

    }

    function validaForm()
    {
        var ret = true;
        var msg_validacao = "<ol style='color:red'>";

        if (validaSenha() != "")
        {
            msg_validacao += "<li>Senhas não correspodem.</li>";
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

    function validaData(valor) {
        var date = valor;
        var ardt = new Array;
        var ExpReg = new RegExp("(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/[12][0-9]{3}");
        ardt = date.split("/");
        erro = false;
        if (date.search(ExpReg) == -1) {
            erro = true;
        }
        else if (((ardt[1] == 4) || (ardt[1] == 6) || (ardt[1] == 9) || (ardt[1] == 11)) && (ardt[0] > 30))
            erro = true;
        else if (ardt[1] == 2) {
            if ((ardt[0] > 28) && ((ardt[2] % 4) != 0))
                erro = true;
            if ((ardt[0] > 29) && ((ardt[2] % 4) == 0))
                erro = true;
        }
        if (erro) {
            return false;
        }
        return true;
    }


    function validaEmail() {
        jQuery.ajax({
            type: "POST",
            url: _baseUrlIdioma + "/alumnis/valida_email",
            data: {"AlumniEmail": $("#AlumniEmail").val()},
            success: function (data)
            {
                if ($.trim(data) != "") {
                    $("#result_validacao_email").html("E-mail já cadastrado.");
                    return false;
                }
                else {
                    $("#result_validacao_email").html("");
                    return false;
                }


            }
        });
    }
</script>