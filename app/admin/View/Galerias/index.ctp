<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-dollar'></i>
            <span><?php echo __('Produtos'); ?></span>
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
                                    <th><?php echo $this->Paginator->sort('descricao'); ?></th>
                                    <th><?php echo $this->Paginator->sort('embalagem'); ?></th>
                                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($galerias as $galeria): ?>
                                   <tr>
                                      <td><?php echo h($galeria['Galeria']['id']); ?>&nbsp;</td>
                                      <td><?php echo h($galeria['Galeria']['nome']); ?>&nbsp;</td>
                                      <td><?php echo h($galeria['Galeria']['descricao']); ?>&nbsp;</td>
                                      <td><?php echo h($galeria['Galeria']['embalagem']); ?>&nbsp;</td>
                                      <td><?php echo h($galeria['Galeria']['modified']); ?>&nbsp;</td>
                                      <td>
                                          <div class="text-center">
                                            <?php 
                                            /*echo $this->Html->link("<i class='icon-pencil'></i> Albuns", array("controller" => "albuns", 'action' => 'index', 2, $galeria['Galeria']['id']), array(
                                                    "class" => "btn btn-primary btn-xs has-tooltip",
                                                    "title" => "Albuns",
                                                    "data-original-title" => "Albuns",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;" . "&nbsp;";*/
                                            echo $this->Html->link('<i class=\'icon-pencil\'></i> Editar', array('action' => 'edit', $galeria['Galeria']['id']), array('class' => 'btn btn-warning btn-xs has-tooltip','title'=> 'Editar','data-original-title' => 'Editar','data-placement' => 'top','escape' => false)) . '&nbsp;'; 
                                            echo $this->Form->postLink('<i class=\'icon-remove\'></i>', array('action' => 'delete', $galeria['Galeria']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs alert-delete has-tooltip', 'title' => 'Excluir', 'data-original-title' => 'Excluir', 'data-placement' => 'top', ), __('Tem certeza que deseja excluir? %s', $galeria['Galeria']['id'])); 
                                            ?>		</div>
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