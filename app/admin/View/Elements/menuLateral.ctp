<ul class='nav nav-stacked'>
    <li id='Home'>
        <?php
        echo $this->Html->link("<i class='icon-home'></i>Home", array("controller" => "Home",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li class='sliderHome' id="sliderHome">
        <?php
        echo $this->Html->link("<i class='icon-picture'></i>Player Home", array("controller" => "destaques",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li class='questoes' id="questoes">
        <?php
        echo $this->Html->link("<i class='icon-book'></i>Cadastro de Questões", array("controller" => "questoes",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li class='materias' id="materia">
        <?php
        echo $this->Html->link("<i class='icon-book'></i>Cadastro Tipo de Matéria", array("controller" => "materiastipos",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li class='materias' id="materia">
        <?php
        echo $this->Html->link("<i class='icon-book'></i>Cadastro Tipo de Tópico", array("controller" => "topicostipos",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li id="cooperado">
        <?php
        echo $this->Html->link("<i class='icon-user'></i>Usuários Comum", array("controller" => "usuario_comum",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li id="users">
        <?php
        echo $this->Html->link("<i class='icon-user'></i>Usuários Admin", array("controller" => "Users",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
</ul>