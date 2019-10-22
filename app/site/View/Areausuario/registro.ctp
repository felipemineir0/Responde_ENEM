<main>
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
                <h2>Cadastre no Responde <b>ENEM</b></h2>
                <h3>E receba <b style="color:#45c766;">muito +</b> benefícios, como estatística, histórico de simulados respondidos, link com indicação para estudos e muito mais.</h3>
            </div>
        </div>
    </section>
	
<section class="formulario-contato" style="margin-top: -60px;">

  	<div class="container-fluid">
      	<div class="container">

           	<div class="col-lg-11 col-md-11 col-sm-11 cel-auto formulario-contato-top">
                <?php echo $this->Form->create("Registro", array('url' => array('controller' => 'areausuario', 'action' => 'index'), "class" => "form"));?>

                    <div class="row">
	                    <div class="col-lg-4 col-md-4 col-sm-4">
	                        <label>nome</label>
	                        <input type="text" name='data[Registro][nome]' id='ContatoNome' class="form-control" placeholder="Digite seu nome completo"/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
	                        <label>usuário</label>
	                        <input type="text" name='data[Registro][usuario]' id='ContatoUsuario' class="form-control" placeholder="Digite o usuário que será usado para fazer o login" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
	                        <label>e-mail</label>
	                        <input type="email" name='data[Registro][email]' id='ContatoEmail' class="form-control" placeholder="Digite um email válido"/>
                        </div>
                    </div>

                    <div class="row">
	                    <div class="col-lg-6 col-md-6 col-sm-6">
	                        <label>telefone(Opcional)</label>
	                        <input type="text" name='data[Registro][telefone]' id='ContatoTelefone' class="form-control" placeholder="Digite um telefone para contato" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <label for="onde">como nós encontrou?</label>
                            <select name='data[Registro][onde]' id='ContatoOnde' class="form-control">
                                <option selected></option>
                                <option>Indicação da escola</option>
                                <option>Indicação de amigos</option>
                                <option>Redes Sociais</option>
                                <option>Propagandas</option>
                            </select>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-lg-6 col-md-6 col-sm-6">
	                        <label>senha</label>
	                        <input type="password" name='data[Registro][senha]' id='ContatoSenha' class="form-control" placeholder="Digite uma senha" data-rule-minlength="6" data-rule-maxlength="10"/>
	                    </div>
	                    <div class="col-lg-6 col-md-6 col-sm-6">
	                        <label>confirmar senha</label>
	                        <input type="password" name='data[Registro][senhaconfirma]' id='ContatoSenhaConfirma' class="form-control" placeholder="Digite sua senha novamente" data-rule-minlength="6" data-rule-maxlength="10" />
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Gostaria de receber notícias/informações em seu email?
                        </label>
	                    </div>
                    </div>

                    <div class="row">
                    	<div class="col-lg-10 col-md-12 col-sm-12">
				            <div id="result_validacao"></div>
				        </div>
                      	<div class="col-lg-2 col-md-12 col-sm-12">
                        	<button type="submit">salvar <i class="fas fa-chevron-circle-right"></i></button>
                      	</div>
                    </div>
                <?php echo $this->Form->end(); ?>
        	</div>
      	</div>
  	</div>
</section>
</main>

<?php echo $this->Html->script(array("registro" ,"jquery.maskedinput.min")); ?>