<section class="row grid-12 titulo">
    <div class="container">
        <h1 class='text-uppercase'>Informações do Cliente</h1>        
        <a href="<?php echo $this->request->base ?>/areausuario/sair" class="btn-degrade btn-sair">sair</a>
    </div>
</section>

<div class='row grid-12 bg-bege'>
    <div class='container'>
            <?php foreach ($cooperados as $cooperado) { ?>
            <div class='noticia'>
                <p><?php echo($cooperado["Cooperado"]["titulo_link"]); ?></p>
                <a href="<?php echo($cooperado["Cooperado"]["link_cliente"]); ?>" target="_blank">
                    <p><?php echo($cooperado["Cooperado"]["link_cliente"]); ?></p>
                </a>
            </div>
            <?php }  ?>

    </div>
</div>


<?php //echo $this->Html->css('light-theme'); ?>

<style type="text/css">
.bg-bege {
    background: #333333;
    padding-top: 35px !important;
    padding-bottom: 70px !important;
    margin-left: 0 !important;
}
.titulo {
    margin-top:60px;
}
.titulo h1 {
    font-family: 'ubuntubold';
    font-size:36px;
    color:#333333;
    float: left;
    font-variant: all-petite-caps;
    font-weight: 900;
    margin-bottom: 0;
}
.titulo h1.tituloDiferente {
    margin-top: -11px;
}
.titulo h1 span {
    font-size:12px;
}
.noticia {
    margin-bottom:50px;
}
.noticia span {
    font-family: 'ubuntubold';
    font-size:14px;
    color: #261b18;
}
.noticia h3 {
    font-size:16px;
    color:#261b18;
    margin-top:5px;
}
.btn-sair {
    float: right;
    padding: 10px 20px;
    text-transform: uppercase;
    font-family: 'ubuntubold';
    color: #225D27;
    margin-top: 15px;
    margin-bottom: 10px;
    border: 1px solid #EEE;
}
.btn-degrade {
    background: rgb(223, 223, 223);
    background: -moz-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -webkit-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -o-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: -ms-linear-gradient(90deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    background: linear-gradient(180deg, rgb(223, 223, 223) 0%, rgb(255, 255, 255) 100%);
    border: 1px solid #FFF;
    color: #ff0404;
}
</style>