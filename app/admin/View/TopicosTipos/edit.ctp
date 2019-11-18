<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-book'></i>
            <span><?php echo __('Editar Tipo de Tópico'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="materiasTipo form">
                    <?php echo $this->Form->create('TopicosTipo', $this->FormAdmin->formConfigs); ?>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('nome', array('placeholder' => 'Digite o nome do tópico'));
                    echo $this->Form->input('link_de_estudo', array('placeholder' => 'https://www.youtube.com/'));
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