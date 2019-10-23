<main>
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
                        <?php if (!empty($usuario['Cooperado']['imagem'])) : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($usuario['Cooperado']["id"] . "/s_" . $usuario['Cooperado']["imagem"]); ?>" alt="<?php echo $usuario["nome"] ?>" width="50" height="50" />
                        <?php elseif ($usuario['Cooperado']['sexo'] == 'F') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php elseif ($usuario['Cooperado']['sexo'] == 'M') : ?>
                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="50" height="50" />
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                        <strong>Nome completo: <?php echo $usuario['Cooperado']['nome']; ?></strong><br>
                        <span class="text-muted">Usuário de login: <?php echo $usuario['Cooperado']['matricula']; ?></span>
                    </div>
                </div>
                <div class="row user-infos user3">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informações do usuário</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                        <?php if (!empty($usuario['Cooperado']['imagem'])) : ?>
                                            <img class="img-circle" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($usuario['Cooperado']["id"] . "/m_" . $usuario['Cooperado']["imagem"]); ?>" alt="<?php echo $usuario["nome"] ?>"/>
                                        <?php elseif ($usuario['Cooperado']['sexo'] == 'F') : ?>
                                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="50" height="50" />
                                        <?php elseif ($usuario['Cooperado']['sexo'] == 'M') : ?>
                                            <img class="img-circle" src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="50" height="50" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                        <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
                                    </div>
                                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                        <strong><?php echo $usuario['Cooperado']['nome']; ?></strong><br>
                                        <dl>
                                            <dt>User level:</dt>
                                            <dd>Administrator</dd>
                                            <dt>Registrado desde:</dt>
                                            <dd><?php echo $usuario['Cooperado']['created']; ?></dd>
                                            <dt>Topics</dt>
                                            <dd>15</dd>
                                            <dt>Warnings</dt>
                                            <dd>0</dd>
                                        </dl>
                                    </div>
                                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                        <strong><?php echo $usuario['Cooperado']['nome']; ?></strong><br>
                                        <table class="table table-user-information">
                                            <tbody>
                                                <tr>
                                                    <td>User level:</td>
                                                    <td>Administrator</td>
                                                </tr>
                                                <tr>
                                                    <td>Registrado desde:</td>
                                                    <td><?php echo $usuario['Cooperado']['created']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sexo: </td>
                                                    <td><?php if ($usuario['Cooperado']['sexo'] == 'F') : ?>Feminino
                                                        <?php elseif ($usuario['Cooperado']['sexo'] == 'M') : ?>Masculino
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Warnings</td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-sm btn-primary" type="button" data-toggle="tooltip">Enviar uma mensagem <i class="glyphicon glyphicon-envelope"></i></button>
                                <span class="pull-right">
                                    <?php  echo $this->Html->link("Editar dados <i class='glyphicon glyphicon-edit'></i>", array(
                                        "action" => "editar"), array("escape" => false, "class" => "btn btn-sm btn-warning"));
                                    ?>
                                    <?php  echo $this->Html->link("Sair <i class='glyphicon glyphicon-edit'></i>", array(
                                        "controller" => "areausuario", "action" => "sair"), array("escape" => false, "class" => "btn btn-sm btn-danger"));
                                    ?>
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>