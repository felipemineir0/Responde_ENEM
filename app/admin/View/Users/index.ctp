<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Usuários Admin</span>
        </h1>
        <?php echo $this->Html->link("<i class='icon-plus'></i><span>Adicionar</span>", array('action' => 'add'), array("class" => "btn btn-primary btn-lg", "title" => "Adicionar novo Registro", "style" => "float: right; margin: 18px 0 0 0;", "escape" => false)); ?>

    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                    <div class="">
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;' >
                            <thead>
                                <tr>
                                    <th class='text-center'><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                                    <th width="10%" class='text-center'><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th width="10%" class='text-center'><?php echo "Ações"; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($user['User']['nome']); ?>&nbsp;</td>
                                        <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                        <td class='text-center'>
                                            <span class='label label-success'>Ativo</span>
                                        </td>
                                        <td>
                                            <div class='text-center'>

                                                <?php
                                                echo $this->Html->link("<i class='icon-key'></i>", array('action' => 'alterar_senha', $user['User']['id']), array(
                                                    "class" => "btn btn-primary btn-xs has-tooltip",
                                                    "title" => "Editar",
                                                    "data-original-title" => "Alterar senha",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                                echo $this->Html->link("<i class='icon-pencil'></i>", array('action' => 'edit', $user['User']['id']), array(
                                                    "class" => "btn btn-warning btn-xs has-tooltip",
                                                    "title" => "Editar",
                                                    "data-original-title" => "Editar",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                                echo $this->Form->postLink("<i class='icon-remove'></i>", array('action' => 'delete', $user['User']['id']), array("escape" => false,
                                                    "class" => "btn btn-danger btn-xs alert-delete has-tooltip",
                                                    "title" => "Excluir",
                                                    "data-original-title" => "Excluir",
                                                    "data-placement" => "top",
                                                        ), __('Tem certeza que deseja excluir? %s?', $user['User']['nome']));
                                                ?>
                                            </div>
                                        </td>
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        <?php echo $this->element('paginacao'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>       
<script src="js/code.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#Admin').addClass('active');
        $(".alert-delete").live("click", function (e) {
            var id = $.trim($(this).attr('rel'));
            bootbox.dialog({
                message: "Tem certeza?",
                title: "Excluir",
                buttons: {
                    success: {
                        label: "Sim",
                        className: "btn-success",
                        callback: function () {
                            window.location = '../../controllers/Admin/excluir.php?id=' + id;
                        }
                    },
                    danger: {
                        label: "Não",
                        className: "btn-danger",
                        callback: function () {
                            console.log(e);
                        }
                    }
                }
            });
            return false;
        });
        $(".alert-dismissable").fadeOut(8000, function () {
            $(this).remove();
        });
    });
</script>