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
                <div class="questoes form">
                    <?php echo $this->Form->create('Questao', $this->FormAdmin->formConfigs); ?>
                    <?php
                    echo $this->Form->input('materias_tipo_id' , array('empty' => 'Selecione um tipo de máteria'));
                    echo $this->Form->input('topicos_tipo_id', array('empty' => 'Selecione um tipo de tópico'));
                    echo $this->Form->input('prova_aplicada' , array('placeholder' => 'Qual o ano de aplicação?'));
                    echo $this->Form->input('introducao', array('class' => 'ckeditor'));
                    echo $this->Form->input('texto', array('class' => 'ckeditor'));
                    echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                    echo $this->Form->input('pergunta', array('placeholder' => 'Digite a pergunta da questão'));
                    echo $this->Form->input('alternativa_A', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_B', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_C', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_D', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_E', array('class' => 'ckeditor'));
                    echo $this->Form->input('alternativa_resposta_id', array('options' => array('1' => 'Alternativa A', '2' => 'Alternativa B',
                                            '3' => 'Alternativa C', '4' => 'Alternativa D', '5' => 'Alternativa E')));
                    echo $this->Form->input('link_estudo', array('placeholder' => 'Exemplo: https://www.google.com/'));
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