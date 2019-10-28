<main>
    <section class="banner-top">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 title-produtos">
                <h1>Simulado</h1>
            </div>
        </div>
    </section>

    <section class="menu-linhas">
        <div class="container">
            <div class="col-lg-10 col-md-12 col-sm-12 cel-auto tipo">
                <div class="col-md-5">
                    <p>Escolha a matéria desejada para fazer o Simulado</p>
                </div>
                <?php echo $this->Form->create("Questao", array(
                    'url' => array('controller' => '/questoes', 'action' => 'index'),
                    'class' => "col-xs-12 col-sm-5 col-md-5"
                ));
                ?>

                <select class="formTransform col-xs-12 col-sm-12 col-md-12" name="CboOrganizar" id="CboOrganizar">
                    <option value="">Selecione uma matéria</option>
                    <?php foreach ($materiasTipos as $tipo) : ?>
                        <option value="<?php echo $tipo["MateriasTipo"]["slug"] ?>"><?php echo $tipo["MateriasTipo"]["nome"] ?></option>

                    <?php endforeach; ?>
                </select>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
        </div>
    </section>
    <!-- onclick="para();" -->
    <!--https://www.confiraconcursos.com.br/simulados-e-questoes/simulado-para-web-designer.html-->
    <div class="container entry">
        <div class="row" id="theExam">
            <!-- INICIO QUESTÃO -->
            <form action="?action=correcao" method="post" name="SIMULADO-form" id="SIMULADO-form" onsubmit='document.getElementById("corrigir").disabled=true'>
                <?php $numQuestao = 1;
                $letra = ['A', 'B', 'C', 'D', 'E'];
                foreach ($questoes as $questao) : ?>


                    <div id="questionDiv">
                        <b class="greyTextsingle">Questão <?php echo $numQuestao; ?></b>
                        <br>
                        <div id="question" class="question">
                            <fieldset id=<?php echo $numQuestao; ?>>
                                (<?php echo "ENEM " . $questao['Questao']['prova_aplicada']; ?>) <?php echo substr($questao['Questao']['introducao'], 3); ?>

                                <?php if (!empty($questao['Questao']['imagem'])) { ?>
                                    <div class="image-prod">
                                        <p><img src="<?php echo $this->request->base ?>/upload/questoes/<?php echo $questao['Questao']['id'] ?>/<?php echo $questao['Questao']['imagem'] ?>" alt="<?php echo $questao['Questao']['nome']; ?>" /></p>
                                    </div>
                                <?php } ?>

                                <?php if (!empty($questao['Questao']['texto'])) : ?>
                                    <blockquote>
                                        <?php echo $questao['Questao']['texto']; ?>
                                    </blockquote>
                                <?php endif; ?>

                                <?php if (!empty($questao['Questao']['pergunta'])) : ?>
                                    <p><?php echo $questao['Questao']['pergunta']; ?></p>
                                <?php endif; ?>

                                <table width="90%" class="qtablela" data-correta="<?php echo $questao['Questao']['alternativa_resposta_id'] ?>">
                                    <tbody style="margin-top: 15px;">
                                        <?php for ($inc = 1; $inc <= 5; $inc++) : ?>
                                            <tr class="<?php echo $inc == $questao['Questao']['alternativa_resposta_id'] ? 'v' : null ?>">
                                                <td width="8" valign="top">
                                                    <input id="<?php echo $questao['MateriasTipo']['nome']; ?>_<?php echo $questao['Questao']['id']; ?>_<?php echo $inc; ?>" name="questao_<?php echo $questao['Questao']['id']; ?>" class="bolaradio" type="radio" value="alternativa_<?php echo $inc; ?>" data-correct="<?php echo $inc == $questao['Questao']['alternativa_resposta_id'] ? 'correta' : 'falsa' ?>">
                                                </td>
                                                <td>
                                                    <label for="<?php echo $questao['MateriasTipo']['nome']; ?>_<?php echo $questao['Questao']['id']; ?>_<?php echo $inc; ?>"><?php echo $letra[$inc - 1]; ?>) <?php echo substr($questao['Questao']['alternativa_' . $inc], 3); ?></label>
                                                </td>
                                            </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </fieldset>
                            <br>
                            <hr>
                        </div>
                    </div>

                <?php $numQuestao++;
                endforeach; ?>
                <div class="formulario-contato" style="padding: 0 0;">
                    <div style="margin:2px;">Acertou 4 de 10 | Tempo de simulado: <input type="text" size="7" name="crono" title="Cronómetro" id="crono" value="crono">
                        <button type="submit" value="corrigir" id="corrigir">corrigir <i class="fas fa-arrow-alt-circle-right"></i></button>
                        <a href="<?php echo $this->request->base ?>/simulado">fazer novamente <i class="fas fa-undo"></i></a>
                    </div>
                </div>
            </form>
            <!-- FINAL QUESTÃO -->
            <h2 id="quizResults" style="margin-top: 25px;margin-bottom: 10px;line-height: 1em;font-family: Helvetica;font-weight: 400;">Você acertou 40% do simulado</h2>

        </div>
    </div>
    <section class="espacamento-questoes"></section>
</main>
<script>
    $(function() {
        $("#CboOrganizar").val(getParameterByName('tipo'));

        $("#CboOrganizar").change(function() {
            if ($(this).val() != "")
                window.location = "<?php echo $this->request->base ?>" + "/simulado/?tipo=" + $(this).val();
        })
    });
</script>
<?php echo $this->Html->script(array("cronometro", "correcao")); ?>