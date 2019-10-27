<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='text/html;charset=utf-8' http-equiv='content-type'>
        <link href='img/meta_icons/favicon.png' rel='shortcut icon' type='image/x-icon'>
        <title>

            <?php echo $title_for_layout; ?>
            | Administração
        </title>
        <script type="text/javascript" src="<?php echo $this->webroot; ?>imgadmin/js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
            base_url = '<?php echo $this->webroot; ?>';
        </script> 

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
    <body class='<?php echo $this->Session->read('colorTheme'); ?>'>
        <?php echo $this->element('headTopo'); ?>

        <div id='wrapper'>
            <?php echo $this->element('topoContent'); ?>

            <section id='content'>
                <div class='container'>
                    <div class='row' id='content-wrapper'>

                        <?php echo $this->Session->flash(); ?>

                        <?php echo $this->fetch('content'); ?>

                    </div>
                    <footer id='footer'>
                        <div class='footer-wrapper'>
                            <div class='row'>
                                <div class='col-sm-6 text'>
                                    Responde ENEM © 2019</div>
                            </div>
                        </div>
                    </footer>  
                </div>
            </section>
        </div>
    </body>
</html>