<?php $carousel_accreditations = get_field("carousel_accreditations"); ?>
<?php if (!empty($carousel_accreditations)) : ?>
    <section class="accreditations">
        <div class="container">
            <h2 class="accreditations__title">Acreditaciones</h2>
            <div class="accreditations__slide">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($carousel_accreditations as $slide) : ?>
                            <div class="swiper-slide">
                                <img src="<?= $slide["imagen"]["url"]; ?>" class="img-fluid accreditations__image" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <slide-accreditations></slide-accreditations>
            </div>
        </div>
    </section>
<?php endif; ?>