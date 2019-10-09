<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></span>
        </h1>
        <?php echo "\t\t\t <?php echo \$this->Html->link('<i class=\'icon-plus\'></i><span> Adicionar</span>', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg', 'title' => 'Adicionar novo Registro', 'style' => 'float: right; margin: 18px 0 0 0;', 'escape' => false)); ?>"; ?>

    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                    <div class=''>
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;' >
                            <thead>
                                <tr>
                                    <?php foreach ($fields as $field): ?>
                                        <th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                                    <?php endforeach; ?>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                                echo "\t<tr>\n";
                                foreach ($fields as $field) {
                                    $isKey = false;
                                    if (!empty($associations['belongsTo'])) {
                                        foreach ($associations['belongsTo'] as $alias => $details) {
                                            if ($field === $details['foreignKey']) {
                                                $isKey = true;
                                                echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                                                break;
                                            }
                                        }
                                    }
                                    if ($isKey !== true) {
                                        echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                                    }
                                }

                                echo "\t\t<td>\n";
                                echo "\t\t<div class=\"text-center\">\n";
                                //echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); \n";
                                echo "\t\t\t <?php echo \$this->Html->link('<i class=\'icon-pencil\'></i> Editar', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-warning btn-xs has-tooltip','title'=> 'Editar','data-original-title' => 'Editar','data-placement' => 'top','escape' => false)) . '&nbsp;'; \n";
                                echo "\t\t\t echo \$this->Form->postLink('<i class=\'icon-remove\'></i>', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false, 'class' => 'btn btn-danger btn-xs alert-delete has-tooltip', 'title' => 'Excluir', 'data-original-title' => 'Excluir', 'data-placement' => 'top', ), __('Tem certeza que deseja excluir? %s', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); \n?>";


                                echo "\t\t</div>\n";
                                echo "\t\t</td>\n";
                                echo "\t</tr>\n";


                                echo "<?php endforeach; ?>\n";
                                ?>
                            </tbody>
                        </table>
                        <?php echo "<?php  echo \$this->element('paginacao'); ?>\n"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>