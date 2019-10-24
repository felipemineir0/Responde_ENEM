<section class="banner-top">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
            <h1>Entrar</h1>
        </div>
    </div>
</section>

<section class="text-contatos">
    <div class="container">
        <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
            <h2>Faça login no Responde <b>ENEM</b></h2>
            <h3>E receba <b style="color:#45c766;">muito +</b> benefícios, como estatísticas personalizadas, histórico de simulados respondidos, link com indicação para estudos e muito mais.</h3>
        </div>
    </div>
</section>

<section>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3">
                    <div id="login-box" class="col-md-12">
                        <?php echo $this->Form->create("CooperadoLogin", array('url' => array('controller' => 'areausuario', 'action' => 'login'), 'type' => 'post', 'class' => "px-4 py-3 form form-login")); ?>
                        <div class="form-group">
                            <label for="username" class="text-info">Usuário:</label><br>
                            <input name="data[CooperadoLogin][matricula]" data-rule-minlength="3" data-rule-required="true" required="required" class="form-control" placeholder="Digite seu usuário" id="CooperadoLoginMatricula">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input name="data[CooperadoLogin][senha]" data-rule-minlength="3" data-rule-required="true" required="required" class="form-control" placeholder="Digite sua senha" type="password" id="CooperadoLoginPassword">
                        </div>
                        <div class="form-group">
                            <!-- <label for="remember-me" class="text-info"><span>Lembrar-me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <a id="register-link" href="<?php echo $this->webroot; ?>/areausuario/registro" style="float: right;margin-top: 5px;">Cadastre-se aqui</a>
                        </div>
                        <?php echo $this->form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
#login .container #login-row #login-column #login-box {margin-top: 30px; max-width: 600px;height: 230px; margin-bottom: 98px; border: 1px solid #9C9C9C;background-color: #EAEAEA;}
#login .container #login-row #login-column #login-box #login-form {padding: 20px;}
#login .container #login-row #login-column #login-box #login-form #register-link {margin-top: -85px;}
</style>