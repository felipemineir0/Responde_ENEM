<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-briefcase'></i>
            <span><?php echo __('Editar Questões'); ?></span>
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
                    echo $this->Form->input('id');
                    $arrayCount = array(0 => "0", 1 => "1", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7", 8 => "8", 9 => "9");
                    echo $this->Form->input('imoveis_tipo_id');
                    echo $this->Form->input('prova_aplicada');
                    echo $this->Form->input('introducao');
                    echo $this->Form->input('texto');
                    echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                    echo $this->Form->input('pergunta');
                    echo $this->Form->input('alternativa_1');
                    echo $this->Form->input('alternativa_2');
                    echo $this->Form->input('alternativa_3');
                    echo $this->Form->input('alternativa_4');
                    echo $this->Form->input('alternativa_5'); 
                    echo $this->Form->input('alternativa_resposta_id', array('options' => array(1 => 'Alternativa 1', 2 => 'Alternativa 2',
                                            3 => 'Alternativa 3', 4 => 'Alternativa 4', 5 => 'Alternativa 5')));
                    echo $this->Form->input('ativo', array('options' => array(1 => "Sim", 2 => "Não")));
                    ?>  
                    <?php if ($this->request->data["Imovel"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('../../site/upload/imoveis/' . $this->request->data["Imovel"]["id"] . '/s_' . $this->request->data["Imovel"]["imagem"]); ?>
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