<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#" class="no-js">

<head>

    <title>Responde ENEM</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/logo.png">

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
        )
    );
    echo $this->Html->script(
        array(
            'bootstrap.min',
            '/slick/slick.min',
            'carrossel-theme',
            'jquery.mask.min'
        )
    );
    ?>

    <script type="text/javascript">
        var maskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            options = {
                onKeyPress: function(val, e, field, options) {
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
                <a href="<?php echo $this->request->base ?>"><img src="<?php echo $this->request->base ?>/img/logo.png" alt="" /></a>
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
                    <li>
                        <a href="<?php echo $this->request->base ?>">HOME</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->request->base ?>/institucional">INSTITUCIONAL</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->request->base ?>/simulado">SIMULADO</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->request->base ?>/contato">FALE CONOSCO</a>
                    </li>
                    <li>
                    <?php if (empty($objsessao)) : ?>
                        <a href="<?php echo $this->request->base ?>/areausuario/login">ENTRAR</a>
                        <?php else : ?>
                        <?php echo $this->Html->link("MINHA PÁGINA", array( "controller" => "areausuario", 
                        "action" => "index", $objsessao['Cooperado']["id"]), array("escape" => false)); ?>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </nav>
        <style>
        .navbar-collapse ul li .active {
    background-color: red;
    padding: 15px 12px;
    text-align: center;
    font-size: 16px;
    margin: 3px;
    border-radius: 5px;
        }</style>

        <div class="container-fluid top-fixed" id="topopage">
            <div class="container">
                <div class="row linha-logo-info">

                    <div class="col-lg-2 col-md-2 col-sm-2 logo-site">
                        <figure>
                            <a href="<?php echo $this->request->base ?>">
                                <img src="<?php echo $this->request->base ?>/img/logo.png" alt="" />
                            </a>
                        </figure>
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-10 menu-topo" style="margin-top: 25px;">
                        <nav>
                            <ul>
                                <li class="<?php if (($this->request->params["controller"] == 'home')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>">HOME</a>
                                </li>
                                <li class="<?php if (($this->request->params["controller"] == 'institucional')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/institucional">INSTITUCIONAL</a>
                                </li>
                                <li class="<?php if (($this->request->params["controller"] == 'simulado')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/simulado">SIMULADO</a>
                                </li>
                                <li class="<?php if (($this->request->params["controller"] == 'contato')) { echo 'active'; } ?>">
                                    <a href="<?php echo $this->request->base ?>/contato">FALE CONOSCO</a>
                                </li>
                                <?php echo $this->Element('loginMenu'); ?>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <style>
        .user-name {
            font-size: 14px;
        }

        [class^="icon-"],
        [class*=" icon-"] {
            display: inline;
            width: auto;
            height: auto;
            line-height: normal;
            vertical-align: baseline;
            background-image: none;
            background-position: 0% 0%;
            background-repeat: repeat;
            margin-top: 0;
        }

        [class^="icon-"],
        [class*=" icon-"] {
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            text-decoration: inherit;
            -webkit-font-smoothing: antialiased;
            *margin-right: .3em;
        }

        [class^="icon-"]:before,
        [class*=" icon-"]:before {
            text-decoration: inherit;
            display: inline-block;
            speak: none;
        }

        .icon-user:before {
            content: "\f007";
        }
    </style>
    <?php echo $this->fetch('content'); ?>

    <a href="#top" class="glyphicon">^</a>

    <footer class="footer-site">
        <div class="container">
            <div class="col-lg-11 col-md-11 col-sm-11 cel-auto">
                <div class="col-lg-3 col-md-3 col-sm-3 telefones-footer"></div>

                <div class="col-lg-6 col-md-6 col-sm-6 endereco-footer">
                    <span class="telefones-footer">
                        <img src="<?php echo $this->request->base ?>/img/WhatsApp.png" alt="" style="width: 26px;margin-top: -3px;margin-left: -33px;margin-right: 7px;" /><b>(34) 99163-5948</b></p>
                    </span>
                    <a class="logoCopyright" href="mailto:felipeborges@unipam.edu.br" target="_blank">
                        <p>Desenvolvido por FELIPE BORGES</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 logo-footer">
                    <figure>
                        <a href="<?php echo $this->request->base ?>">
                            <img src="<?php echo $this->request->base ?>/img/logo.png" alt="" />
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<style>
    a[href="#top"] {
        padding: 9px;
        position: fixed;
        top: 92%;
        right: 40px;
        display: none;
        z-index: 999;
        background: #fedc08;
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 35px;
        color: green;
        font-weight: bold;
    }

    a[href="#top"]:hover {
        text-decoration: none;
        opacity: 1;
    }
</style>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('a[href="#top"]').fadeIn();
            } else {
                $('a[href="#top"]').fadeOut();
            }
        });

        $('a[href="#top"]').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>