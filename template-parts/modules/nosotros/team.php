<section class="team">
    <?php $our_team = get_field("our_team"); ?>
    <?php foreach ($our_team["equipo"] as $index => $team) : ?>
        <div class="team__row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="team__title"><?= $team["title"]; ?></h2>
                    </div>
                    <?php foreach ($team["members"] as $member) : ?>
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                            <div class="team__card">
                                <div class="card__image" style="background-image: url(<?= $member["imagen"]["sizes"]["large"]; ?>);"></div>
                                <div class="card__body">
                                    <p class="card__name"><?= $member["nombre"]; ?></p>
                                    <p class="card__position"><?= $member["cargo"]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>