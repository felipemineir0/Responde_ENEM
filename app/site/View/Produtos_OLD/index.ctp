<main>
    <section class="banner-top" style="background: url(img/topo-produtos.jpg) center top no-repeat;">
        <div class="container">
            <div class="col-lg-10 col-md-10 col-sm-10 cel-auto title-produtos">
                <h1>Produtos</h1>                  
            </div>
        </div>
    </section>

    <section class="menu-linhas">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 cel-auto">
                <nav>
                    <ul>
                        <li><a href=""><b>linha</b> institucional</a></li>
                        <li class="active"><a href=""><b>linha</b> automotiva</a></li>
                        <li><a href=""><b>linha</b> doméstica</a></li>
                        <li><a href=""><b>linha</b> ordenha</a></li>
                        <li><a href=""><b>linha</b> lavanderia</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="listagem-produtos">

        <div class="container">
            <div class="row">
                <!-- INICIO LINHA PRODUTOS -->
                <?php foreach($galerias as $galeria):?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-prod">
                    <div class="image-prod">
                        <img src="<?php echo $this->request->base ?>/upload/galerias/<?php echo $galeria['Galeria']['id'] ?>/278x174-<?php echo $galeria['Galeria']['imagem'] ?>" alt="<?php echo $galeria['Galeria']['nome'];?>" />
                    </div>
                    
                    <div class="barra-zebrada"></div>

                    <h2><?php echo $galeria['Galeria']['nome'];?></h2>
                    <p><b><?php echo $galeria['Galeria']['descricao'];?></b><br/>
                    <?php echo $galeria['Galeria']['texto'];?><br/><br/>
                    <b>Embalagem:</b> <?php echo $galeria['Galeria']['embalagem'];?>
                    </p>
                </div>
                <?php endforeach;?>
                <!-- FINAL LINHA PRODUTOS -->
            </div>


            <div class="row paginacao-prods">
                <ul>
                    <li class="active"><a href="">01</a></li>
                    <li><a href="">02</a></li>
                    <li><a href="">03</a></li>
                    <li><a href="">04</a></li>
                    <li><a href="">05</a></li>
                </ul>
            </div>
        </div>
        
    </section>

    <section>
        <div class="container">    
           <div class="col-lg-10 col-md-10 col-sm-10 cel-auto redes-sociais interna purple">
              <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>  
              
              <h3>Siga a gente! Tem muita novidade em nossas redes sociais.</h3> 
            </div>
        </div>
    </section>
</main>