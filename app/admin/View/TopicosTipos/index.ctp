<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-book'></i>
            <span><?php echo __('Tipos de Tópicos'); ?></span>
        </h1>
        			 <?php echo $this->Html->link('<i class=\'icon-plus\'></i><span> Adicionar</span>', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg', 'title' => 'Adicionar novo Registro', 'style' => 'float: right; margin: 18px 0 0 0;', 'escape' => false)); ?>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                    <div class=''>
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;' >
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                    <th><?php echo $this->Paginator->sort('link_de_estudo'); ?></th>
                                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($topicosTipos as $topicosTipo): ?>
                                    <tr>
                                        <td><?php echo h($topicosTipo['TopicosTipo']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($topicosTipo['TopicosTipo']['nome']); ?>&nbsp;</td>
                                        <td><?php echo h($topicosTipo['TopicosTipo']['link_de_estudo']); ?>&nbsp;</td>
                                        <td><?php echo date("d-m-Y", strtotime($topicosTipo['TopicosTipo']['created'])); ?>&nbsp;</td>
                                        <td><?php echo date("d-m-Y", strtotime($topicosTipo['TopicosTipo']['modified'])); ?>&nbsp;</td>
                                        <td>
                                        <div class="text-center">
                                            <?php echo $this->Html->link('<i class=\'icon-pencil\'></i> Editar', array('action' => 'edit', $topicosTipo['TopicosTipo']['id']), array('class' => 'btn btn-warning btn-xs has-tooltip','title'=> 'Editar','data-original-title' => 'Editar','data-placement' => 'top','escape' => false)) . '&nbsp;'; 
                                            echo $this->Form->postLink('<i class=\'icon-remove\'></i>', array('action' => 'delete', $topicosTipo['TopicosTipo']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs alert-delete has-tooltip', 'title' => 'Excluir', 'data-original-title' => 'Excluir', 'data-placement' => 'top', ), __('Tem certeza que deseja excluir? %s', $topicosTipo['TopicosTipo']['id'])); ?>
                                        </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php  echo $this->element('paginacao'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>