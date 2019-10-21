    <main class="pagina-envie-depoimento contatos">
        <div class="container">
            <div class="bloco-titulos">
                <h1 class="titulo">Envie seu depoimento</h1>
                <h2 class="subtitulo">Opine sobre a intelligence</h2>
            </div>
            
            <!--<div class="bloco-textos">
                <p></p>
            </div>-->

            <div class="pagina-conteudo bg">
                <div class="center">
                    <?php echo $this->Form->create("Depoimentos", array('url' => array('controller' => 'depoimento', 'action' => 'index'), "class" => "form", 'enctype' => 'multipart/form-data')); ?>
                        <h2 class="subtitulo">Preencha o formulário abaixo</h2>

                        <div class="fields">
                            <div class="row">
                                <div class="field col grid-12">
                                    <input type="text" name="data[Depoimento][nome]" id="DepoimentosNome" class="inputbox" placeholder="Qual o seu nome?" />
                                </div>

                                <div class="field col grid-6">
                                    <input type="email" name="data[Depoimento][email]" id="DepoimentosEmail" class="inputbox" placeholder="Qual o seu e-mail?" />
                                </div>

                                <div class="field col grid-6">
                                    <input type="tel" name="data[Depoimento][telefone]" id="DepoimentosTelefone" class="inputbox" placeholder="Telefone" />
                                </div>

                                <div class="field col grid-12">
                                    <textarea name="data[Depoimento][texto]" id="DepoimentosTexto" class="inputbox textarea" placeholder="O que você deseja falar?"></textarea>
                                </div>
                            </div>

                            <div class="grid-12">
                                <div id="validacao">
                                    <div id="load"></div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="button">Enviar</button>
                            </div>
                            
                        </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </main>

<?php 
    echo $this->Html->script(array("https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js","depoimentos"));
?>