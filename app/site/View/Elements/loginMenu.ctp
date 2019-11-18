<li class='dropdown dark user-menu'>
    <?php if (empty($objsessao)) { ?>
        <a class='dropdown-toggle login-menu' data-toggle='dropdown' href='#'>Entrar</a>
        <div class="dropdown-menu">
            <?php
                echo $this->Form->create("CooperadoLogin", array('url' => array('controller' => 'areausuario', 'action' => 'login'), 'type' => 'post', 'class' => "px-4 py-3 form form-login"));
                ?>
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Usúario</label>
                <input type="text" name="data[CooperadoLogin][matricula]" data-rule-minlength="6" data-rule-maxlength="10" data-rule-required="true" required="required" class="form-control" placeholder="Digite seu usuário" id="CooperadoLoginMatricula">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="data[CooperadoLogin][senha]" data-rule-minlength="6" data-rule-maxlength="10" data-rule-required="true" required="required" class="form-control" placeholder="Digite sua senha" id="CooperadoLoginPassword">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <?php echo $this->form->end(); ?>
            <div class="dropdown-divider"></div>
            <a class="test dropdown-item" href="<?php echo $this->request->base ?>/areausuario/registro" style="color: #45c766;font-family: Ubuntu !important;font-size: 15px !important;border-radius: 0 !important;}">Cadastre-se!</a>
        </div>
    <?php } else { ?>
        
        <div class="btn-group" style="margin-top: -5px;">
            <button type="button" class="btn btn-success" style="height: 40px;">
                <?php if (!empty($objsessao['Cooperado']['imagem'])) : ?>
                    <img class="img-circle mini" src="<?php echo $this->webroot; ?>/upload/cooperados/<?php echo ($objsessao['Cooperado']["id"] . "/" . $objsessao['Cooperado']["imagem"]); ?>" />
                <?php elseif ($objsessao['Cooperado']['sexo'] == 'F') : ?>
                    <img src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $objsessao['Cooperado']["nome"] ?>" width="23" height="23" />
                <?php elseif ($objsessao['Cooperado']['sexo'] == 'M') : ?>
                    <img src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $objsessao['Cooperado']["nome"] ?>" width="23" height="23" />
                <?php endif; ?>

                <span class='user-name'>
                    <?php echo strstr($objsessao['Cooperado']['nome'], ' ', true); ?>
                </span>
            </button>
            <button type="button" class="btn btn-success dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 40px;">
                <span class="sr-only">Entrar</span>
            </button>
            <div class="dropdown-menu">
                <?php echo $this->Html->link("Minha página", array(
                        "controller" => "areausuario", "action" => "index", $objsessao['Cooperado']["id"]
                    ), array("escape" => false, "class" => "dropdown-item menuLogin")); ?>
                <?php echo $this->Html->link("Editar dados", array(
                        "controller" => "areausuario", "action" => "editar", $objsessao['Cooperado']["id"]
                    ), array("escape" => false, "class" => "dropdown-item menuLogin")); ?>
                <?php echo $this->Html->link("Alterar senha", array(
                        "controller" => "areausuario", "action" => "alterar_senha", $objsessao['Cooperado']["id"]
                    ), array("escape" => false, "class" => "dropdown-item menuLogin")); ?>
                <div class="dropdown-divider"></div>
                <?php if (!empty($objsessao['Cooperado']["email"])) {
                        echo $this->Html->link("Sair", array(
                            "controller" => "areausuario", "action" => "sair"
                        ), array("escape" => false, "class" => "dropdown-item menuLogin"));
                    } ?>
            </div>
        </div>
    <?php } ?>
</li>

<style>
a:link, a:visited, a:active {color: #000000;font-weight: 400;}
a.dropdown-item.menuLogin {font-size: 14px !important;color: #313131 !important;font-weight: 400 !important;border-radius: 0 !important;}
a.dropdown-item.menuLogin {}
</style>