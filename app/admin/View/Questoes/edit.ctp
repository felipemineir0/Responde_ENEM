<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-briefcase'></i>
            <span><?php echo __('Editar Questão'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="questoes form">
                    <?php echo $this->Form->create('Questao', $this->FormAdmin->formConfigs); ?>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('materias_tipo_id');
                    echo $this->Form->input('topicos_tipo_id', array('empty' => ''));
                    echo $this->Form->input('prova_aplicada');
                    echo $this->Form->input('introducao', array('class' => 'ckeditor'));
                    echo $this->Form->input('texto', array('class' => 'ckeditor'));
                    echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                    ?>
                    <?php if ($this->request->data["Questao"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('../../site/upload/questoes/' . $this->request->data["Questao"]["id"] . '/s_' . $this->request->data["Questao"]["imagem"]); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php
                    echo $this->Form->input('pergunta');
                    echo $this->Form->input('alternativa_1', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_2', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_3', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_4', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_5', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_resposta_id', array('options' => array('1' => 'Alternativa 1', '2' => 'Alternativa 2',
                                            '3' => 'Alternativa 3', '4' => 'Alternativa 4', '5' => 'Alternativa 5')));
                    echo $this->Form->input('link_estudo');
                    echo $this->Form->input('ativo', array('options' => array(1 => "Sim", 2 => "Não")));
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