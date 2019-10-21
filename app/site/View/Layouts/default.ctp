<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#" class="no-js">
<head>

    <title>Responde ENEM</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/logo.png" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <?php
        echo $this->Html->css(
            array(
                'all-animation',
                'bootstrap',
                'style',
                '/slick/slick-theme',
                '/slick/slick'
            ));
        echo $this->Html->script(
            array(
                'bootstrap.min',
                '/slick/slick.min',
                'carrossel-theme',
                'jquery.mask.min'
            ));
    ?>

    <script type="text/javascript">
        var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
          },
          options = {onKeyPress: function(val, e, field, options) {
                  field.mask(maskBehavior.apply({}, arguments), options);
              }
          };

        jQuery('.telefone input[type="text"]').mask(maskBehavior, options);
    </script>
</head>

<body>

    <header>

        <nav class="navbar navbar-default navbar-btns">
            <figure>
                <a href="<?php echo $this->request->base ?>"><img src="<?php echo $this->request->base ?>/img/logo.png" alt=""/></a>
            </figure>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>     
            </div>  

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul>
                    <li class="<?php if(($this->request->params["controller"] == 'home')) { echo 'active'; } ?> menuMobile">
                        <a href="<?php echo $this->request->base ?>">HOME</a>
                    </li>
                    <li class="<?php if(($this->request->params["controller"] == 'institucional')) { echo 'active'; } ?>">
                        <a href="<?php echo $this->request->base ?>/institucional">INSTITUCIONAL</a>
                    </li>
                    <li class="<?php if(($this->request->params["controller"] == 'simulado')) { echo 'active'; } ?>">
                        <a href="<?php echo $this->request->base ?>/simulado">SIMULADO</a>
                    </li>
                    <li class="<?php if(($this->request->params["controller"] == 'contato')) { echo 'active'; } ?>">
                        <a href="<?php echo $this->request->base ?>/contato">FALE CONOSCO</a>
                    </li>
                    <li class='dropdown dark user-menu'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <img src="<?php echo $this->webroot; ?>/upload/users/<?php echo($usuario["id"] . "/s_" . $usuario["imagem"]); ?>" alt="<?php echo $usuario["nome"] ?>" width="23" height="23" />

                            <span class='user-name'>
                                <?php echo($usuario["nome"]); ?>

                            </span>
                            <b class='caret'></b>
                        </a>
                        <ul class='dropdown-menu'>
                            <li>
                                <?php
                                echo $this->Html->link("<i class='icon-user'> Meus dados</i>", array("controller" => "users",
                                    "action" => "edit", $usuario["id"]
                                        ), array("escape" => false));
                                ?>

                            </li>
                            <li>
                                <?php
                                echo $this->Html->link("<i class='icon-key'> Alterar senha</i>", array("controller" => "users",
                                    "action" => "alterar_senha", $usuario["id"]
                                        ), array("escape" => false));
                                ?>

                            </li>
                            <li class='divider'></li>
                            <li>
                                <?php
                                if (!empty($usuario["email"])) {
                                    echo $this->Html->link("<i class='icon-signout'>Sair</i>", array("controller" => "users",
                                        "action" => "logout"
                                            ), array("escape" => false));
                                }
                                ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid top-fixed" id="topopage">
            <div class="container">
                <div class="row linha-logo-info">

                    <div class="col-lg-4 col-md-4 col-sm-4 logo-site">
                        <figure>
                            <a href="<?php echo $this->request->base ?>">
                                <img src="<?php echo $this->request->base ?>/img/logo.png" alt=""/>
                            </a>
                        </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 menu-topo">
                        <nav>
                            <ul>
                                <li class="<?php if(($this->request->params["controller"] == 'home')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>">HOME</a>
                                </li>
                                <li class="<?php if(($this->request->params["controller"] == 'institucional')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/institucional">INSTITUCIONAL</a>
                                </li>
                                <li class="<?php if(($this->request->params["controller"] == 'simulado')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/simulado">SIMULADO</a>
                                </li>
                                <li class="<?php if(($this->request->params["controller"] == 'contato')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/contato">FALE CONOSCO</a>
                                </li>
                                <!-- <li class='dropdown dark user-menu'>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                        <img src="<?php echo $this->webroot; ?>/upload/users/<?php echo($usuario["id"] . "/s_" . $usuario["imagem"]); ?>" alt="<?php echo $usuario["nome"] ?>" width="23" height="23" />

                                        <span class='user-name'>
                                            <?php echo($usuario["nome"]); ?>

                                        </span>
                                        <b class='caret'></b>
                                    </a>
                                    <ul class='dropdown-menu'>
                                        <li>
                                            <?php
                                            echo $this->Html->link("<i class='icon-user'> Meus dados</i>", array("controller" => "areausuario",
                                                "action" => "edit", 2
                                                    ), array("escape" => false));
                                            ?>

                                        </li>
                                        <li>
                                            <?php
                                            echo $this->Html->link("<i class='icon-key'> Alterar senha</i>", array("controller" => "areausuario",
                                                "action" => "alterar_senha", 2
                                                    ), array("escape" => false));
                                            ?>

                                        </li>
                                        <li class='divider'></li>
                                        <li>
                                            <?php
                                            if (!empty($usuario["email"])) {
                                                echo $this->Html->link("<i class='icon-signout'>Sair</i>", array("controller" => "areausuario",
                                                    "action" => "logout"
                                                        ), array("escape" => false));
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                    </div>     

                </div>
            </div>
        </div>
    </header>   

    <?php echo $this->fetch('content'); ?>
    
    <a href="#top" class="glyphicon">^</a>

    <footer class="footer-site">
        <div class="container">  
            <div class="col-lg-11 col-md-11 col-sm-11 cel-auto">
                <div class="col-lg-3 col-md-3 col-sm-3 telefones-footer"></div>

                <div class="col-lg-6 col-md-6 col-sm-6 endereco-footer">
                    <span class="telefones-footer">
                        <img src="<?php echo $this->request->base ?>/img/WhatsApp.png" alt="" style="width: 26px;margin-top: -3px;margin-left: -33px;margin-right: 7px;"/><b>(34) 99163-5948</b></p>
                    </span>
                    <a class="logoCopyright" href="mailto:felipeborges@unipam.edu.br" target="_blank"><p>Desenvolvido por FELIPE BORGES</p></a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 logo-footer">
                    <figure>
                    <a href="<?php echo $this->request->base ?>">
                        <img src="<?php echo $this->request->base ?>/img/logo.png" alt=""/>
                    </a>
                    </figure>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

<style>
    a[href="#top"]{
    padding: 9px; position: fixed; top: 92%; right: 40px; display: none; z-index: 999; background: #fedc08; width: 40px; height: 40px; text-align: center; font-size: 35px; color: green;    font-weight: bold;}
    a[href="#top"]:hover{ text-decoration:none;opacity: 1;}
</style>
<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('a[href="#top"]').fadeIn();
        } else {
            $('a[href="#top"]').fadeOut();
        }
    });

    $('a[href="#top"]').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>