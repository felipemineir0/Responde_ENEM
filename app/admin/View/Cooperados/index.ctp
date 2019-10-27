<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo __('Usuários Clientes'); ?></span>
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
                                    <th><?php echo $this->Paginator->sort('matricula'); ?></th>
                                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                                    <th><?php echo $this->Paginator->sort('telefone'); ?></th>
                                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cooperados as $cooperado): ?>
                                   <tr>
                                      <td><?php echo h($cooperado['Cooperado']['id']); ?>&nbsp;</td>
                                      <td><?php echo h($cooperado['Cooperado']['nome']); ?>&nbsp;</td>
                                      <td><?php echo h($cooperado['Cooperado']['matricula']); ?>&nbsp;</td>
                                      <td><?php echo h($cooperado['Cooperado']['email']); ?>&nbsp;</td>
                                      <td><?php echo formataTelefone($cooperado['Cooperado']['telefone']); ?>&nbsp;</td>
                                      <td><?php $data = str_replace("/", "-", $cooperado['Cooperado']["created"]); echo date('d-m-Y', strtotime($data)); ?>&nbsp;</td>
                                      <td>
                                          <div class="text-center">
                                            <?php 
                                            echo $this->Html->link('<i class=\'icon-pencil\'></i> Ver/Editar', array('action' => 'edit', $cooperado['Cooperado']['id']), array('class' => 'btn btn-warning btn-xs has-tooltip','title'=> 'Editar','data-original-title' => 'Editar','data-placement' => 'top','escape' => false)) . '&nbsp;'; 
                                            ?>		
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
<?php
function formataTelefone($phone)
{
    $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
    $matches = [];
    preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
    if ($matches) {
        return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
    }
}
?>