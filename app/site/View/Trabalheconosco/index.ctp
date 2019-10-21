    <main class="pagina-trabalhe-conosco contatos">
        <div class="container">
            <div class="bloco-titulos">
                <h1 class="titulo">Trabalhe conosco</h1>
                <h2 class="subtitulo">Envie seu currículo</h2>
            </div>
            
            <!--<div class="bloco-textos">
                <p></p>
            </div>-->

            <div class="pagina-conteudo bg">
                <div class="center">
                    <?php echo $this->Form->create("TrabalheConosco", array('url' => array('controller' => 'trabalheconosco', 'action' => 'index'), "class" => "form", 'enctype' => 'multipart/form-data')); ?>
                        <h2 class="subtitulo">Preencha o formulário abaixo</h2>

                        <div class="fields">
                            <div class="row">
                                <div class="field col grid-5">
                                    <input type="text" name='data[Curriculo][nome]' id='TrabalheConoscoNome' class="inputbox" placeholder="Qual o seu nome?" />
                                </div>

                                <div class="field col grid-4">
                                    <input type="email" name='data[Curriculo][email]' id='TrabalheConoscoEmail' class="inputbox" placeholder="Qual o seu e-mail?" />
                                </div>

                                <div class="field col grid-3">
                                    <input type="text" name='data[Curriculo][setor_pretendido]' id='RecursosSetor' class="inputbox" placeholder="Setor de interesse" />
                                </div>

                                <div class="field col grid-9">
                                    <input type="text" name='data[Curriculo][endereco]' id='TrabalheConoscoEndereco' class="inputbox" placeholder="Endereço completo" />
                                </div>

                                <div class="field col grid-3">
                                    <input type="tel" name='data[Curriculo][telefone]' id='TrabalheConoscoTelefone' class="inputbox" placeholder="Telefone" />
                                </div>

                                <div class="field col grid-12">
                                    <textarea name="data[Curriculo][mensagem]" id="TrabalheConoscoMensagem" class="inputbox textarea" placeholder="Por que trabalhar na Intelligence?"></textarea>
                                </div>

                                <div class="field col grid-12">
                                    <input type="file" name="data[Curriculo][curriculo]" placeholder="Nome" id="TrabalheConoscoArquivo" class="jfilestyle" required="required" accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf">
                                    <p>Arquivos Permitidos: DOC, DOCX, PDF</p>
                                </div>
                            </div>

                            <div class="col grid-12">
                                <div id="validacao">
                                    <div id="load">
                                        <img src="<?php echo $this->request->base ?>/images/backgrounds/loader.gif" />
                                    </div>
                                </div>
                            </div>
                            <div class="buttons col grid-12">
                                <button type="submit" class="button">Enviar</button>
                            </div>
                        </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </main>

<?php 
    echo $this->Html->script(array("https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js","js_trabalhe_conosco"));
?>