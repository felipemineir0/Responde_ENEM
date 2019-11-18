<main>
    <section class="banner-top">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
                <h1>Cadastro de Usuário</h1>
            </div>
        </div>
    </section>

    <section class="text-contatos">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
                <h2>Cadastre no Responde <b>ENEM</b></h2>
                <h3>E receba <b style="color:#45c766;">muito +</b> benefícios, como estatística, histórico de simulados respondidos, link com indicação para estudos e muito mais.</h3>
            </div>
        </div>
    </section>

    <section class="formulario-contato" style="margin-top: -60px;">
        <div class="container-fluid">
            <div class="container">

                <div class="col-lg-11 col-md-11 col-sm-11 cel-auto formulario-contato-top">
                    <?php echo $this->Form->create('Cooperado', $this->FormSite->formConfigs); ?>

                    <div class="row">
                        <?php
                        echo $this->Form->input('id', array('readonly' => 'readonly'));
                        echo $this->Form->input('nome', array("data-rule-minlength" => '6', "data-rule-required" => 'true', "placeholder" => 'Nome'));
                        echo $this->Form->input('matricula', array("data-rule-minlength" => '6', "data-rule-required" => 'true', "placeholder" => 'Usúario'));
                        echo $this->Form->input('email', array("data-rule-email" => 'true', "data-rule-required" => 'true', "placeholder" => 'E-mail'));
                        echo $this->Form->input('telefone', array("placeholder" => 'Telefone', "id" => 'CooperadoTelefone'));
                        echo $this->Form->input('sexo', array("data-rule-required" => 'true', 'options' => array(
                            '' => 'Qual seu sexo?', 'F' => 'Feminino', 'M' => 'Masculino'
                        )));
                        echo $this->Form->input('feedback', array("data-rule-required" => 'true', 'options' => array(
                            1 => 'Indicação da escola', 2 => 'Indicação de amigos' ,3 => 'Redes Sociais', 4 => 'Propagandas'
                        )));
                        echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                        ?>

                        <?php if (!empty($this->request->data['Cooperado']['imagem'] != "")) : ?>
                            <div class="form-group">
                            <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                            <div class="col-md-5 controls">
                                <?php echo $this->Html->image('../../site/upload/cooperados/' . $this->request->data["Cooperado"]["id"] . '/' . $this->request->data["Cooperado"]["imagem"]); ?>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input name="<?php $this->request->data["Cooperado"]["newsletter"]; ?>" id="<?php $this->request->data["Cooperado"]["newsletter"]; ?>" class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Gostaria de receber notícias/informações em seu email?
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12">
                            <div id="result_validacao"></div>
                        </div>
                        <div class='col-md-10 col-md-offset-2'>
                            <button type="submit">salvar <i class="fas fa-chevron-circle-right"></i></button>
                            <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn')); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<style>
.controls img {
    width: 50px;
}
</style>
<?php echo $this->Html->script(array("registro", "jquery.maskedinput.min")); ?>