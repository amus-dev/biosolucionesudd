<section class="accreditations">
    <div class="container">
        <h2 class="accreditations__title">Acreditaciones</h2>
        <div class="accreditations__slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $carousel_accreditations = get_field("carousel_accreditations"); ?>
                    <?php foreach ($carousel_accreditations as $slide) : ?>
                        <div class="swiper-slide">
                            <img src="<?= $slide["imagen"]["url"]; ?>" class="img-fluid accreditations__image" />
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <slide-accreditations></slide-accreditations>
        </div>
    </div>
</section>