<main>
    <section class="banner-top" style="background: url(img/banner-top-1.png) center top no-repeat;">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
                <h1>Institucional</h1>                  
            </div>
        </div>
    </section>


    <section class="text-institucional">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
                <h2>A Indústria <b>Do Vale</b> foi fundada em 2008.</h2>
                <h3>Seu maior objetivo é desenvolver produtos de limpeza com alto padrão de qualidade.</h3>
                <p>Ao trabalhar com inovação nos processos de produção, matérias-primas de alta referência e com uma equipe capacitada, o produto final sempre será o que o consumidor mais deseja: qualidade e preço justo.</p>

                <p>A Do Vale possui uma diversificada linha de produtos para atender o mercado de forma ampla. Produzimos a mais completa gama de produtos na linha automotiva, doméstica, lavanderia e até na limpeza de complexos industriais, como usinas de leite.</p>

                <p>A preocupação com a excelência no atendimento aos clientes e parceiros, agindo com transparência e respeito, tem sido a mola mestra para chegarmos à credibilidade, maior patrimônio de nossa empresa.
                </p>
            </div>
        </div>
    </section>

    <section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <div class="container">    
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto redes-sociais interna">
            <a href="http://instagram.com/dovalelimpeza" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="http://facebook.com/dovalelimpeza" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>  
                <h3>Siga a gente! Tem muita novidade em nossas redes sociais.</h3> 
            </div>
        </div>
    </section>

    <section class="missao-visao">
        <div class="container">  
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-missao-visao">
                        <div class="box-missao-visao">
                            <h3>Nossa missão</h3>
                            <p>Fabricar soluções em forma de produtos de higiene e limpeza com qualidade garantida, eficiência e o melhor custo benefício para o consumidor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-missao-visao">
                        <div class="box-missao-visao">
                            <h3>Nossa visão</h3>
                            <p>Ser referência no segmento de produto de higiene e limpeza, superando continuamente os nossos padrões de excelência de fabricação e distribuição.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-missao-visao">
                        <div class="box-missao-visao">
                            <h3>Nossos valores</h3>
                            <p>Ética<br/>
                            Atitude<br/>
                            Inovação<br/>
                            Excelência<br/>
                            Dedicação
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-institucional">

        <div class="col-lg-8 col-md-8 col-sm-8 cel-auto">  
        <div id="play-pause">Play</div>


        <div class="videoplayer">    
            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/9ZfN87gSjvI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  -->
                <div class="vid-wrap">
                    <video class="player-video-home" id="videoHome">
                        <source width="560" height="315" src="<?php echo $this->request->base ?>/video/video.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                </div>
        </div>  


    <script>
    window.onload = function() {

    var video = document.getElementById("videoHome");

    var playButton = document.getElementById("play-pause");

    playButton.addEventListener("click", function() {
        if (video.paused == true) {
            video.play();

            $("#play-pause").css('background','none');
              
            } else {
                video.pause();
                $("#play-pause").css('background','url(img/btn-play.png) center top no-repeat');
            }
        });

    }

    </script>

    </section>
</main>