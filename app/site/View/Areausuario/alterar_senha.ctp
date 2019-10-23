<main>
	<section class="banner-top">
		<div class="container">
			<div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
				<h1>Trocar a Senha</h1>
			</div>
		</div>
	</section>
	
<section class="formulario-contato" style="margin-top: -60px;">
  	<div class="container-fluid">
      	<div class="container">

           	<div class="col-lg-11 col-md-11 col-sm-11 cel-auto formulario-contato-top">
                <?php echo $this->Form->create('Cooperado', $this->FormSite->formConfigs); ?>

                    <div class="row">
                            <?php
                            echo $this->Form->input('senha_anterior', array("placeholder" => 'Senha atual', "type" => "password"));
                            echo $this->Form->input('nova_senha', array("placeholder" => 'Nova senha', "type" => "password"));
                            echo $this->Form->input('confirmar_senha', array("placeholder" => 'Confirmar senha', "type" => "password"));
                            ?>
                    </div>

                    <div class="row">
                        <div class='col-md-10 col-md-offset-2'>
                          <button type="submit">salvar <i class="fas fa-chevron-circle-right"></i></button>
                          <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn')); ?>
                      	</div>
                    </div>
                <?php echo $this->Form->end(); ?>
        	</div>
      	</div>
  	</div>
</section>
</main>

<?php echo $this->Html->script(array("registro" ,"jquery.maskedinput.min")); ?>