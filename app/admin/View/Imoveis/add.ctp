<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-briefcase'></i>
            <span><?php echo __('Adicionar Questão'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="imoveis form">
                    <?php echo $this->Form->create('Imovel', $this->FormAdmin->formConfigs); ?>
                    <?php
                    $arrayCount = array(0 => "0", 1 => "1", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7", 8 => "8", 9 => "9");
                    echo $this->Form->input('prova_aplicada');
                    echo $this->Form->input('prova_aplicada');
                    echo $this->Form->input('introducao');
                    echo $this->Form->input('texto');
                    echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                    echo $this->Form->input('pergunta');
                    echo $this->Form->input('alternativa_1', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_2');
                    echo $this->Form->input('alternativa_3');
                    echo $this->Form->input('alternativa_4');
                    echo $this->Form->input('alternativa_5');
                    echo $this->Form->input('ativo', array('options' => array(1 => "Sim", 0 => "Não")));
                    ?>
                    <div class='form-actions form-actions-padding-sm'>
                        <div class='row'>
                            <div class='col-md-10 col-md-offset-2'>
                                <button class='btn btn-primary BtnSubmit' type='submit'>
                                    <i class='icon-save'></i>
                                    Salvar
                                </button>
                                <?php echo $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn')); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>