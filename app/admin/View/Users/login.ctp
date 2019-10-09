<!DOCTYPE html>
<html>
    <head>
        <title>Entrar | Administração</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
        <link href='assets/images/meta_icons/favicon.png' rel='shortcut icon' type='image/x-icon'>
        <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
        <link href='assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
        <link href='assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
        <link href='assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
        <link href='assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
        <!-- / START - page related stylesheets [optional] -->

        <!-- / END - page related stylesheets [optional] -->
        <?php
        echo $this->Html->meta('meta_icons/favicon');

        echo $this->Html->css(
                array(
                    'bootstrap/bootstrap',
                    'light-theme',
                    'theme-colors.css',
                    'demo',
                    'plugins/select2/select2',
                    'plugins/bootstrap_colorpicker/bootstrap-colorpicker.css',
                    'plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css',
                    'plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css',
                    'plugins/bootstrap_switch/bootstrap-switch.css',
                    'plugins/common/bootstrap-wysihtml5.css',
        ));
        echo $this->Html->script(
                array(
                    'jquery/jquery.min',
                    'jquery/jquery.mobile.custom.min.js',
                    'jquery/jquery-migrate.min.js',
                    'jquery/jquery-ui.min.js',
                    'plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js',
                    'bootstrap/bootstrap.js',
                    'plugins/modernizr/modernizr.min.js',
                    'plugins/retina/retina.js',
                    'theme.js',
                    'demo.js',
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>   

    </head>
    <body class='contrast-sea-blue login contrast-background'>
        <div class='middle-container'>
            <div class='middle-row'>
                <div class='middle-wrapper'>
                    <div class='login-container'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-sm-4 col-sm-offset-4'>
                                    <div class='text-center'>
                                        <img src="<?php echo $this->webroot; ?>/img/logo.png" title="Han Brazil" alt="Responde Enem" style="width: 150px;"" />
                                    </div>
                                    <div class="form-group">
                                        <div class="controls with-icon-over-input text-center">
                                            <p class="text-danger">
                                                <b><?php echo $this->Session->flash('auth'); ?></b>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                    echo $this->Form->create('User', array('role' => 'form', "inputDefaults" => array(
                                            "before" => '<div class="form-group">',
                                            "between" => '<div class="controls with-icon-over-input text-center">',
                                            "after" => "</div></div>",
                                            "class" => "form-control",
                                            'label' => array("class" => 'col-md-2 control-label')),
                                        "class" => "validate-form",
                                            )
                                    );
                                    ?>
                                    <?php
                                    echo $this->Form->input('email', array(
                                        "before" => '<div class="form-group">',
                                        "between" => '<div class="controls with-icon-over-input text-center">',
                                        "after" => "<i class='icon-user text-muted'></i></div></div>",
                                        "class" => 'form-control',
                                        "data-rule-required" => "true",
                                        "data-rule-email" => 'true',
                                        "placeholder" => "E-mail",
                                        'label' => array(
                                            'text' => false,
                                        ),
                                    ));
                                    echo $this->Form->input('password', array(
                                        "before" => '<div class="form-group">',
                                        "between" => '<div class="controls with-icon-over-input text-center">',
                                        "after" => "<i class='icon-lock text-muted'></i></div></div>",
                                        "class" => 'form-control',
                                        "data-rule-required" => "true",
                                        "placeholder" => "Senha",
                                        'label' => array(
                                            'text' => false,
                                        ),
                                    ));
                                    echo $this->Form->input('Entrar', array(
                                        "type" => 'button',
                                        "class" => "btn btn-block",
                                        "label" => array(
                                            'class' => '',
                                            'text' => ''
                                        ),
                                    ));
                                    ?>
                                    <?php echo $this->Form->end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>