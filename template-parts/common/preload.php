<div class="loader" id="preload">
     <?php $logo = get_field("logo", "option"); ?>
     <img loading="lazy" src="<?= $logo["sizes"]["medium"]; ?>" alt="Logo Biosoluciones Cargando" class="img-fluid preload__logo">
     <preload-functions></preload-functions>
</div>