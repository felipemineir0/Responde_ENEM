<div class="btn-group" style="margin-top: -5px;">
    <button type="button" class="btn btn-success" style="height: 40px;">
        <?php if (!empty($usuario['Cooperado']['imagem'])) : ?>
            <img src="<?php echo $this->webroot; ?>/upload/areausuario/<?php echo ($usuario['Cooperado']["id"] . "/s_" . $usuario['Cooperado']["imagem"]); ?>" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="23" height="23" />
        <?php elseif ($usuario['Cooperado']['sexo'] == 'F') : ?>
            <img src="<?php echo $this->webroot; ?>/img/female.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="23" height="23" />
        <?php elseif ($usuario['Cooperado']['sexo'] == 'M') : ?>
            <img src="<?php echo $this->webroot; ?>/img/male.png" alt="<?php echo $usuario['Cooperado']["nome"] ?>" width="23" height="23" />
        <?php endif; ?>
        
        <span class='user-name'>
            <?php echo $usuario['Cooperado']['nome']; ?>
        </span>
    </button>
    <button type="button" class="btn btn-success dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 40px;">
        <span class="sr-only">Entrar</span>
    </button>
    <div class="dropdown-menu">
    <?php echo $this->Html->link("Minha página", array(
                "controller" => "areausuario", "action" => "index", $usuario['Cooperado']["id"]
            ), array("escape" => false, "class" => "dropdown-item")); ?>
        <?php echo $this->Html->link("Editar dados", array(
                "controller" => "areausuario", "action" => "editar", $usuario['Cooperado']["id"]
            ), array("escape" => false, "class" => "dropdown-item")); ?>
        <?php echo $this->Html->link("Alterar senha", array(
                "controller" => "areausuario", "action" => "alterar_senha", $usuario['Cooperado']["id"]
            ), array("escape" => false, "class" => "dropdown-item")); ?>
        <div class="dropdown-divider"></div>
        <?php if (!empty($usuario['Cooperado']["email"])) {
            echo $this->Html->link("Sair", array(
                "controller" => "areausuario", "action" => "sair"
            ), array("escape" => false, "class" => "dropdown-item"));
            } ?>
    </div>
</div>
<style>
a:link, a:visited, a:active {color: #000000;font-weight: 400;}
</style>