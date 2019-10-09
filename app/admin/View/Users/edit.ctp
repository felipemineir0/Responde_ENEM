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
                echo $this->Form->input('nome', array(
                    "data-rule-minlength" => '5',
                    "data-rule-required" => 'true',
                    "placeholder" => 'Nome'
                ));
                echo $this->Form->input('email', array(
                    "data-rule-email" => 'true',
                    "data-rule-required" => 'true',
                    "placeholder" => 'E-mail'
                ));

                //echo $this->Form->input('funcao');
                //echo $this->Form->input('tipo');
                echo $this->Form->input('status', array('options' => array(1 => "Ativo", 0 => "Inativo"), 'empty' => 'Selecione'));

                echo $this->Form->input("imagem", array('type' => 'file'));
                ?>
                <?php if ($this->request->data["User"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('/upload/users/' . $this->request->data["User"]["id"] . '/s_' . $this->request->data["User"]["imagem"]); ?>
                        </div>
                    </div>
                <?php } ?>
                <div class='form-actions form-actions-padding-sm'>
                    <div class='row'>
                        <div class='col-md-10 col-md-offset-2'>
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
                echo $this->Html->script(array(
                    '/imgadmin/js/ckeditor/ckeditor.js'
                        ), array('inline' => false));
                ?>

            </div>
        </div>
    </div>

</div>


<?php /*       <div class='form-group'>
  <label class='col-md-2 control-label' for='TxtFuncao'>Função</label>
  <div class='col-md-2 controls'>
  <input class='form-control' id='TxtFuncao' name='TxtFuncao' data-rule-minlength='3' data-rule-required='true' placeholder='Função' type='text' value="Programador">
  </div>
  </div>
  <div class='form-group'>
  <label class='col-sm-2 control-label' for='CboTipo'>Tipo</label>
  <div class='col-sm-2 controls'>
  <select class='form-control' data-rule-required='true' id='CboTipo' name='CboTipo'>
  <option value="1" selected>Programador</option>
  <option value="2" >Administrador</option>
  <option value="3" >Usuário</option>
  </select>
  </div>
  </div>
  <div class='form-group'>
  <label class='col-sm-2 control-label' for='CboStatus'>Status</label>
  <div class='col-sm-2 controls'>
  <select class='form-control' data-rule-required='true' id='CboStatus' name='CboStatus'>
  <option value="1" selected>Ativo</option>
  <option value="0" >Bloqueado</option>
  </select>
  </div>
  </div>
  <div class='form-group'>
  <label class='col-md-2 control-label' for='arquivo'>Imagem atual</label>
  <div class='col-md-5 controls'>
  <img src="/upload/usuarios/1/teste.jpg" alt="" />
  </div>
  </div>
  <div class='form-group'>
  <label class='col-md-2 control-label' for='arquivo'>Imagem</label>
  <div class='col-md-5 controls'>
  <input type='file' name='arquivo' data-rule-extension='true' value="Arquivo">
  </div>
  </div>
 * /*
 */ ?>
