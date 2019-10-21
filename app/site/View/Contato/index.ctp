<main>

<section class="banner-top">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
            <h1>Fale conosco</h1>
        </div>
    </div>
</section>
<section class="text-contatos">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
                <h2>Ficou com alguma dúvida sobre o Responde <b>ENEM</b>??</h2>
                <h3>Nós envie um formulário de contato, e responderemos o mais rápido possivel.</h3>
            </div>
        </div>
    </section>
	
<section class="formulario-contato" style="margin-top: -60px;">

  	<div class="container-fluid">
      	<div class="container">

           	<div class="col-lg-11 col-md-11 col-sm-11 cel-auto formulario-contato-top">
                <?php echo $this->Form->create("Contato", array('url' => array('controller' => 'contato', 'action' => 'index'), "class" => "form"));?>

                    <div class="row">
	                    <div class="col-lg-12 col-md-12 col-sm-12">
	                        <label>nome</label>
	                        <input type="text" name='data[Contato][nome]' id='ContatoNome' class="form-control" />
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-lg-6 col-md-6 col-sm-6 form-padding-right-20">
	                        <label>e-mail</label>
	                        <input type="email" name='data[Contato][email]' id='ContatoEmail' class="form-control" />
	                    </div>
	                    <div class="col-lg-6 col-md-6 col-sm-6 telefone form-padding-left-20">
	                        <label>telefone</label>
	                        <input type="text" name='data[Contato][telefone]' id='ContatoTelefone' class="form-control" />
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-lg-12 col-md-12 col-sm-12">
	                        <label>Mensagem</label>
	                        <textarea name='data[Contato][mensagem]'></textarea>
	                    </div>
                    </div>

                    <div class="row">
                    	<div class="col-lg-10 col-md-12 col-sm-12">
				            <div id="result_validacao"></div>
				        </div>
                      	<div class="col-lg-2 col-md-12 col-sm-12">
                        	<button type="submit">enviar <i class="fas fa-chevron-circle-right"></i></button>
                      	</div>
                    </div>
                <?php echo $this->Form->end(); ?>
        	</div>
      	</div>
  	</div>
</section>
</main>

<?php echo $this->Html->script(array("contato" ,"jquery.maskedinput.min")); ?>