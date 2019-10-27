<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Cooperado</span>
        </h1>
    </div>
</div>



<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('Cooperado', $this->FormAdmin->formConfigs);
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

        $("#CooperadoConfirmarSenha").blur(function () {
            $("#result_validacao").html(validaSenha());
        });
        $("#CooperadoNovaSenha").blur(function () {
            $("#result_validacao").html(validaSenha());
        });

        jQuery('#CooperadoAlterarSenhaForm').submit(function () {
            return validaForm();
        });

    });

    function validaSenha() {
        if ($("#CooperadoNovaSenha").val() != "" && $("#CooperadoConfirmarSenha").val() != "") {
            if ($("#CooperadoNovaSenha").val() != $("#CooperadoConfirmarSenha").val()) {
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



</script>