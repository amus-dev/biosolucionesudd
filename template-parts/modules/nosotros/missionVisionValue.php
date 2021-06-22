<section class="missionVisionValue">
    <?php $valores = get_field("valores"); ?>
    <?php foreach ($valores as $valor) : ?>
        <div class="missionVisionValue__contain">
            <div class="block__description">
                <h2 class="block__title"><?= $valor["title"] ?></h2>
                <p class="block__decription"><?= $valor["descripcion"] ?></p>
            </div>
            <div class="block__image">
                <img src="<?= $valor["imagen"]["sizes"]["large"] ?>" class="img-fluid" />
            </div>
        </div>
    <?php endforeach; ?>
</section>