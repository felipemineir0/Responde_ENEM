<div class="btn-group" style="margin-top: -5px;">
    <button type="button" class="btn btn-success" style="height: 40px;">Entrar</button>
    <button type="button" class="btn btn-success dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 40px;">
        <span class="sr-only">Entrar</span>
    </button>
    <div class="dropdown-menu">
        <?php echo $this->Html->link("Fazer login", array(
                "controller" => "areausuario", "action" => "login"), array("escape" => false, "class" => "dropdown-item")); ?>
        <div class="dropdown-divider"></div>
        <?php echo $this->Html->link("Criar conta", array(
                "controller" => "areausuario", "action" => "registro"), array("escape" => false, "class" => "dropdown-item")); ?>
    </div>
</div>
<style>
a:link, a:visited, a:active {color: #000000;font-weight: 400;}
</style>