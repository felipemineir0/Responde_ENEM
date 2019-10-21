<section class="grid-12 titulo">
    <div class="container">
        <h1 class='text-uppercase tituloDiferente'>Cooperados</h1>        
    </div>
</section>
<div class='grid-12 bg-bege'>
    <div class="container">
        <div class='clearfix'></div>
        <?php
        echo $this->Form->create("CooperadoLogin", array('url' => array('controller' => 'areausuario', 'action' => 'login'),'type' => 'post','class' => "form form-login"));
        ?>

            <div class="grid-4">
                <label>Usuário</label>
                <input name="data[CooperadoLogin][matricula]" data-rule-minlength="3" data-rule-required="true" required="required" class="TxtLogin" placeholder="Digite seu usuário"  id="CooperadoLoginMatricula">
            </div>
            <div class="clearfix"></div>
            <div class="grid-4">
                <label>Senha</label>
                <input name="data[CooperadoLogin][password]" data-rule-minlength="3" data-rule-required="true" required="required" class="TxtSenha" placeholder="Digite sua senha" type="password" id="CooperadoLoginPassword">
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn-degrade">Entrar</button>
            <?php
            echo $this->form->end();
            ?>
            
        </div>
    </div>


<style type="text/css">
.form {
    margin-top: 50px;
}
.form div {
    margin: 40px auto;
}
.form input {
    border: 0;
    height: 35px;
    border-radius: 4px;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
}
.form button {
    margin: 0 auto;
}
.bg-bege {
    background: #333333;
    padding-top: 35px !important;
    padding-bottom: 70px !important;
    margin-left: 0 !important;
}
.titulo {
    margin-top: -70px;
}
.titulo h1 {
    font-family: 'ubuntubold';
    font-size:36px;
    color:#333333;
    float: left;
    font-variant: all-petite-caps;
    font-weight: 900;
    margin-bottom: 0;
}
.titulo h1.tituloDiferente {
    margin-top: -11px;
}
.titulo h1 span {
    font-size:12px;
}
.noticia {
    margin-bottom:50px;
}
.noticia span {
    font-family: 'ubuntubold';
    font-size:14px;
    color: #261b18;
}
.noticia h3 {
    font-size:16px;
    color:#261b18;
    margin-top:5px;
}
.btn-sair {
    float: right;
    padding: 10px 20px;
    text-transform: uppercase;
    font-family: 'ubuntubold';
    color: #225D27;
    margin-top: 15px;
    margin-bottom: 10px;
    border: 1px solid #EEE;
}
.btn-degrade {
    background: rgb(223, 223, 223);
    background: -moz-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -webkit-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -o-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -ms-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: linear-gradient(180deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    border: 1px solid #FFF;
    color: #ff0404;
}
</style>