<section class="banner-home">
    <?php foreach($destaques as $destaque) { ?>
    <div class="slider-banner" style="background: url(upload/destaques/<?php echo $destaque["Destaque"]["id"]; ?>/1400x570-<?php echo($destaque["Destaque"]["imagem"]); ?>) center top no-repeat;">
    </div>
    <?php } ?>
</section>