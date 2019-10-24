<style>
#chartPorcentagem {min-width: 300px; max-width: 800px;height: 500px;margin: 1em auto;}
caption {padding-bottom: 15px;font-family: 'Verdana';font-size: 1.2em;color:#555;}
table {	font-family: 'Verdana';	font-size: 12pt;border-collapse: collapse;border: 1px solid #EBEBEB;margin: 2px auto; text-align: center; width: 100%;}
table tr:nth-child(odd) {background-color: #fff;}
table tr:nth-child(even) {background-color: #FCF9F9;}
th { font-weight: 600; padding: 10px;}
</style>

<main style="margin-bottom: 20px;">
    <section class="banner-top">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
                <h1>Área do Usuário</h1>
            </div>
        </div>
    </section>

    <section>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <div class="container">
            <div class="well col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row user-row">
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                        <?php if (!empty($cooperado['Cooperado']['imagem'])) : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($cooperado['Cooperado']["id"] . "/s_" . $cooperado['Cooperado']["imagem"]); ?>" alt="<?php echo $cooperado["nome"] ?>" width="50" height="50" />
                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'F') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                        <strong><?php echo $cooperado['Cooperado']['nome']; ?></strong><br>
                        <span class="text-muted">Área do Usuário</span>
                    </div>
                    <!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".user1">
                        <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                    </div> -->
                </div>
                <div class="row"><!-- user-infos user1 -->
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informações do usuário</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                        <?php if (!empty($cooperado['Cooperado']['imagem'])) : ?>
                                            <img class="img-circle img-top" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($cooperado['Cooperado']["id"] . "/m_" . $cooperado['Cooperado']["imagem"]); ?>" alt="<?php echo $cooperado["nome"] ?>" width="100%" height="auto" />
                                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'F') : ?>
                                            <img class="img-circle img-top" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="100%" height="auto" />
                                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>
                                            <img class="img-circle img-top" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="100%" height="auto" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
                                        <?php if (!empty($cooperado['Cooperado']['imagem'])) : ?>
                                            <img class="img-circle img-center" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($cooperado['Cooperado']["id"] . "/s_" . $cooperado['Cooperado']["imagem"]); ?>" alt="<?php echo $cooperado["nome"] ?>" width="70%" height="auto" />
                                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'F') : ?>
                                            <img class="img-circle img-center" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="70%" height="auto" />
                                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>
                                            <img class="img-circle img-center" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="70%" height="auto" />
                                        <?php endif; ?> </div>
                                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                        <dl>
                                            <dt>Nome Completo: <strong><?php echo ucfirst($cooperado['Cooperado']['nome']); ?></strong></dt>
                                            <dt>Login de Usuário: <span><?php echo $cooperado['Cooperado']['matricula']; ?></span></dt>
                                            <dt>Email: <span><?php echo $cooperado['Cooperado']['email']; ?></span></dt>
                                            <dt>Telefone: <span><?php echo formataTelefone($cooperado['Cooperado']['telefone']); ?></span></dt>
                                            <dt>Registrado desde: <span><?php echo date("d-m-Y", strtotime($cooperado['Cooperado']['created'])); ?></span></dt>
                                            <dt>Sexo: 
                                                <span>
                                                    <?php if ($cooperado['Cooperado']['sexo'] == 'F') : ?>Feminino
                                                    <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>Masculino
                                                    <?php endif; ?>
                                                </span>
                                            </dt>
                                            <dt>Simulados feito: <span>0</span></dt>
                                        </dl>
                                    </div>
                                    <div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
                                        <table class="table table-user-information">
                                            <tbody>
                                                <tr>
                                                    <td>Nome Completo: </td>
                                                    <td><?php echo ucfirst($cooperado['Cooperado']['nome']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Login de Usuário</td>
                                                    <td><?php echo $cooperado['Cooperado']['matricula']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email: </td>
                                                    <td><?php echo $cooperado['Cooperado']['email']; ?></td>
                                                </tr>
                                                <?php if ($cooperado['Cooperado']['telefone']) : ?>
                                                    <td>Telefone:</td>
                                                    <td><?php echo formataTelefone($cooperado['Cooperado']['telefone']); ?></td>
                                                <?php endif; ?>
                                                <tr>
                                                    <td>Registrado desde:</td>
                                                    <td><?php echo date("d-m-Y", strtotime($cooperado['Cooperado']['created'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sexo: </td>
                                                    <td><?php if ($cooperado['Cooperado']['sexo'] == 'F') : ?>Feminino
                                                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>Masculino
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Simulados feito : </td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer hidden-md hidden-lg" style="min-height: 111px;">
                                <?php echo $this->Html->link("Enviar uma mensagem <i class='glyphicon glyphicon-envelope'></i>", array(
                                    "controller" => "contato", "action" => "index", $cooperado['Cooperado']["id"]
                                ), array("escape" => false, "class" => "btn btn-sm btn-primary col-xs-12")); ?>
                                <span>
                                    <?php echo $this->Html->link("Editar dados <i class='glyphicon glyphicon-edit'></i>", array(
                                        "controller" => "areausuario", "action" => "editar", $cooperado['Cooperado']["id"]
                                    ), array("escape" => false, "class" => "btn btn-sm btn-warning col-xs-12")); ?>
                                    <?php echo $this->Html->link("Sair <i class='glyphicon glyphicon-remove'></i>", array(
                                        "controller" => "areausuario", "action" => "sair", $cooperado['Cooperado']["id"]
                                    ), array("escape" => false, "class" => "btn btn-sm btn-danger col-xs-12")); ?>
                                </span>
                            </div>
                            <div class="panel-footer hidden-xs hidden-sm">
                                <?php echo $this->Html->link("Enviar uma mensagem <i class='glyphicon glyphicon-envelope'></i>", array(
                                    "controller" => "contato", "action" => "index", $cooperado['Cooperado']["id"]
                                ), array("escape" => false, "class" => "btn btn-sm btn-primary")); ?>
                                <span class="pull-right">
                                    <?php echo $this->Html->link("Editar dados <i class='glyphicon glyphicon-edit'></i>", array(
                                        "controller" => "areausuario", "action" => "editar", $cooperado['Cooperado']["id"]
                                    ), array("escape" => false, "class" => "btn btn-sm btn-warning")); ?>
                                    <?php echo $this->Html->link("Sair <i class='glyphicon glyphicon-remove'></i>", array(
                                        "controller" => "areausuario", "action" => "sair", $cooperado['Cooperado']["id"]
                                    ), array("escape" => false, "class" => "btn btn-sm btn-danger")); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="well col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row user-row">
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                        <?php if (!empty($cooperado['Cooperado']['imagem'])) : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($cooperado['Cooperado']["id"] . "/s_" . $cooperado['Cooperado']["imagem"]); ?>" alt="<?php echo $cooperado["nome"] ?>" width="50" height="50" />
                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'F') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php elseif ($cooperado['Cooperado']['sexo'] == 'M') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $cooperado['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                        <strong><?php echo $cooperado['Cooperado']['nome']; ?></strong><br>
                        <span class="text-muted">Área de Simulados</span>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".user2">
                        <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                    </div>
                </div>
                <div class="row user-infos user2">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Simulados Feitos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"><?php echo $this->Element('charts1'); ?></div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"><?php echo $this->Element('charts2'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<script>
    $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if (idFor.is(':visible')) {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                } else {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<style>
.img-top {margin-top: 38px;}
.img-center {display: block;margin-left: auto;margin-right: auto;}
dt span{font-weight: 400;}
.user-row {margin-bottom: 14px;}
.user-row:last-child { margin-bottom: 0;}
.dropdown-user {margin: 13px 0; padding: 5px;height: 100%;}
.dropdown-user:hover {cursor: pointer;}
.table-user-information > tbody > tr {border-top: 1px solid rgb(221, 221, 221);}
.table-user-information > tbody > tr:first-child {border-top: 0;}
.table-user-information > tbody > tr > td {border-top: 0;}
</style>
<?php
function formataTelefone($numero)
{
    if (strlen($numero) == 11) {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, ') ', 3, 0);
        $novo = substr_replace($novo, '-', 10, 0);
    } elseif (strlen($numero) == 10) {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, ') ', 3, 0);
        $novo = substr_replace($novo, '-', 9, 0);
    }
    return $novo;
}
?>