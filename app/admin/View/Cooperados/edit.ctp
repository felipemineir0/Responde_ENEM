<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo __('Usuário Cliente'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="cooperados form">
                    <?php echo $this->Form->create('Cooperado', $this->FormAdmin->formConfigs); ?>
                    <?php
                    echo $this->Form->input('id', array('readonly' => 'readonly'));
                    echo $this->Form->input('nome', array('readonly' => 'readonly'));
                    echo $this->Form->input('matricula', array('readonly' => 'readonly'));
                    echo $this->Form->input('email', array('readonly' => 'readonly'));
                    echo $this->Form->input('telefone', array('readonly' => 'readonly'));
                    echo $this->Form->input('feedback', array('readonly' => 'readonly', 'options' => array(
                        1 => "Indicação da Escola", 2 => "Indicação de Amigos", 3 => "Redes Sociais", 4 => "Propagandas")));
                    //echo $this->Form->input('newsletter');
                    echo $this->Form->input('ativo', array('options' => array(1 => "Ativo", 0 => "Banido")));
                    ?>
                    <div class='form-actions form-actions-padding-sm'>
                        <div class='row'>
                            <div class='col-md-10 col-md-offset-2'>
                                <button class='btn btn-primary BtnSubmit' type='submit'>
                                    <i class='icon-save'></i>
                                    Salvar
                                </button>
                                <?php echo $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn'));?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>