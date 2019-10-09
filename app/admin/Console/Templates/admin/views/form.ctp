<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="<?php echo $pluralVar; ?> form">
                    <?php echo "<?php echo \$this->Form->create('{$modelClass}', \$this->FormAdmin->formConfigs); ?>\n"; ?>
                    <?php
                    echo "\t<?php\n";
                    foreach ($fields as $field) {
                        if (strpos($action, 'add') !== false && $field === $primaryKey) {
                            continue;
                        } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            echo "\t\techo \$this->Form->input('{$field}');\n";
                        }
                    }
                    if (!empty($associations['hasAndBelongsToMany'])) {
                        foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                            echo "\t\techo \$this->Form->input('{$assocName}');\n";
                        }
                    }
                    echo "\t?>\n";
                    ?>
                    <div class='form-actions form-actions-padding-sm'>
                        <div class='row'>
                            <div class='col-md-10 col-md-offset-2'>
                                <button class='btn btn-primary BtnSubmit' type='submit'>
                                    <i class='icon-save'></i>
                                    Salvar
                                </button>
                                <?php echo "<?php echo \$this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn'));?>\n"; ?>
                            </div>
                        </div>
                    </div>
                    <?php echo "<?php echo \$this->Form->end(); ?>\n"; ?>
                </div>
            </div>
        </div>
    </div>
</div>