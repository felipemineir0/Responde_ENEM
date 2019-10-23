<section class="banner-top">
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
				<h1>Cadastro de Usuário</h1>
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
                <input name="data[CooperadoLogin][senha]" data-rule-minlength="3" data-rule-required="true" required="required" class="TxtSenha" placeholder="Digite sua senha" type="password" id="CooperadoLoginPassword">
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn-degrade">Entrar</button>
            <?php
            echo $this->form->end();
            ?>
            
        </div>
    </div>