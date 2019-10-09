<main>
    <section class="banner-top" style="background: url(<?php echo $this->request->base ?>/img/topo-produtos.jpg) center top no-repeat;">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto title-produtos">
                <h1>Simulado</h1>                  
            </div>
        </div>
    </section>

    <section class="menu-linhas">
        <div class="container">
            <div class="col-lg-10 col-md-12 col-sm-12 cel-auto tipo">
                <div class="col-md-5">
                    <p >Escolha a matéria desejada para fazer o Simulado</p>
                </div>
                <?php echo $this->Form->create("Imovel", array('url' => array('controller' => '/imoveis', 'action' => 'index'),
                        'class' => "col-xs-12 col-sm-5 col-md-5"));
                ?>

                    <select class="formTransform col-xs-12 col-sm-12 col-md-12" name="CboOrganizar" id="CboOrganizar">
                        <option value="">Selecione uma matéria</option>
                        <?php foreach ($imoveisTipos as $tipo) { ?>
                        <option value="<?php echo $tipo["ImoveisTipo"]["slug"] ?>">Linha <?php echo $tipo["ImoveisTipo"]["nome"] ?></option>

                        <?php } ?>
                    </select>
                <?php echo $this->Form->end(); ?>
            </div>
            </div>
        </div>
    </section>

<!--https://www.confiraconcursos.com.br/simulados-e-questoes/simulado-para-web-designer.html-->
    <div class="container entry">
        <div class="row" id="theExam">
        <!-- INICIO QUESTÃO -->
        <?php $numQuestao = 1; foreach($imoveis as $imovel): $numQuestao ?>

        <form action="?action=markTest" method="post" name="QTL-form" id="QTL-form">
            <input type="hidden" value="36808" name="userAttemptID">
            <div id="questionDiv">
                <b class="greyTextsingle">Questão <?php echo $numQuestao; ?></b>
                <br>
                <div id="question">
                    <fieldset id="1">
                    <p>(<?php echo $imovel['Imovel']['prova_aplicada'];?>) <?php echo $imovel['Imovel']['introducao'];?></p>
                
                    <blockquote>
                        <p><?php echo $imovel['Imovel']['texto'];?></p>
                    </blockquote>
                    <p><?php echo $imovel['Imovel']['pergunta'];?></p>
                    
                    <table width="90%" class="qtablela">
                        <tbody>
                        <tr>
                            <td width="8" valign="top">
                                <input class="bolaradio" type="radio" id="8" name="questao<?php echo $imovel['Imovel']['id'];?>" value="A">
                            </td>
                                <td><label for="8"> A) <?php echo $imovel['Imovel']['alternativa_1'];?></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="8" valign="top">
                                <input class="bolaradio" type="radio" id="2" name="questao<?php echo $imovel['Imovel']['id'];?>" value="B">
                            </td>
                            <td>
                                <label for="2"> B) <?php echo $imovel['Imovel']['alternativa_2'];?></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="8" valign="top">
                                <input class="bolaradio" type="radio" id="3" name="questao<?php echo $imovel['Imovel']['id'];?>" value="C">
                            </td>
                            <td>
                                <label for="3"> C) <?php echo $imovel['Imovel']['alternativa_3'];?></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="8" valign="top">
                                <input class="bolaradio" type="radio" id="4" name="questao<?php echo $imovel['Imovel']['id'];?>" value="D">
                            </td>
                            <td>
                                <label for="4"> D) <?php echo $imovel['Imovel']['alternativa_4'];?></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="8" valign="top">
                                <input class="bolaradio" type="radio" id="5" name="questao<?php echo $imovel['Imovel']['id'];?>" value="E">
                            </td>
                            <td
                                ><label for="5"> E) <?php echo $imovel['Imovel']['alternativa_1'];?></label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </fieldset>
                    <br>
                    <br>
                    <hr>
                </div>
            </div>
        </form>
        <?php $numQuestao++; endforeach; ?>
        <!-- FINAL QUESTÃO -->
        <div class="formulario-contato" style="padding: 0 0;">
            <button type="submit">corrigir <i class="fas fa-chevron-circle-right"></i></button>
        </div>
        </div>
    </div>

    <section class="listagem-produtos">

        <!--<div class="container">
            <div class="row">
                <!-- INICIO LINHA PRODUTOS 
                <?php foreach($imoveis as $imovel):?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-prod">
                    <div class="image-prod">
                        <img src="<?php echo $this->request->base ?>/upload/imoveis/<?php echo $imovel['Imovel']['id'] ?>/278x174-<?php echo $imovel['Imovel']['imagem'] ?>" alt="<?php echo $imovel['Imovel']['nome'];?>" />
                    </div>
                    
                    <div class="barra-zebrada"></div>

                    <h2><?php echo $imovel['Imovel']['nome'];?></h2>
                    <p><b><?php echo $imovel['Imovel']['descricao'];?></b><br/>
                    <?php echo $imovel['Imovel']['texto'];?><br/><br/>
                    <b>Embalagem:</b> <?php echo $imovel['Imovel']['embalagem'];?>
                    </p>
                </div>
                <?php endforeach;?>
                <!-- FINAL LINHA PRODUTOS 
            </div>
            <?php echo $this->Element('paginacao'); ?>
        </div>-->
        
    </section>

    <section>
        <div class="container">    
           <div class="col-lg-10 col-md-10 col-sm-10 cel-auto redes-sociais interna purple">
              <a href="http://instagram.com/dovalelimpeza" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="http://facebook.com/dovalelimpeza" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>  
              
              <h3>Siga a gente! Tem muita novidade em nossas redes sociais.</h3> 
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    $(function () {
        $("#CboOrganizar").val(getParameterByName('tipo'));

        $("#CboOrganizar").change(function () {
            if ($(this).val() != "")
        window.location = "<?php echo $this->request->base ?>" + "/produtos/?tipo=" + $(this).val();
        //window.location = "<?php echo $this->request->base ?>" + "/imoveis/?tipo=" + $(this).val() + "&slug_status=" + $("#slug_status").val();
        })

    });
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
</script>