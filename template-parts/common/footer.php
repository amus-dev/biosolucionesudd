<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <?php $logo_footer = get_field('logo_footer', 'option'); ?>
                <a href="<?= get_site_url(); ?>">
                    <img src="<?= $logo_footer["sizes"]["large"]; ?>" alt="Logo Biosoluciones del Footer" class="img-fluid footer__logo">
                </a>
            </div>
            <?php $enlaces_utiles = get_field('enlaces_utiles', 'option'); ?>
            <div class="col-lg-3 col-12">
                <h4 class="footer__title">Enlaces Útiles</h4>
                <ul class="footer__menu">
                    <?php foreach ($enlaces_utiles as $item) : ?>
                        <li class="footer__menu-item">
                            <a href="<?= $item["url"]; ?>"><?= $item["texto"]; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <h4 class="footer__title">Contacto</h4>
                <ul class="footer__menu">
                    <li class="footer__menu-item ">
                        <i class="ico-pin"></i>
                        <a href="https://www.google.cl/maps/place/Universidad+del+Desarrollo/@-33.3716203,-70.5185299,17z/data=!4m13!1m7!3m6!1s0x9662cbfaea42cd05:0x8357a4a2ae6a002a!2sAv.+las+Condes+12438,+Lo+Barnechea,+Regi%C3%B3n+Metropolitana!3b1!8m2!3d-33.3716244!4d-70.5163602!3m4!1s0x9662cbfa812e2c53:0xef55f2228643aa4a!8m2!3d-33.3718975!4d-70.5160203" target="_blank" rel="noopener noreferrer">Av. Las Condes 12438, Lo Barnechea</a>
                    </li>
                    <li class="footer__menu-item">
                        <i class="ico-tel"></i>
                        <a href="tel:+56223279417">+56 2 2327 9417</a>
                    </li>
                    <li class="footer__menu-item">
                        <i class="ico-tel"></i>
                        <a href="tel:+56223279263">+56 2 2327 9263</a>
                    </li>
                    <li class="footer__menu-item">
                        <i class="ico-mail"></i>
                        <a href="mailto:contacto@biosoluciones.cl">contacto@biosoluciones.cl</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <h4 class="footer__title">Síguenos</h4>
                <ul class="footer__rrss">
                    <?php $redes_sociales = get_field('redes_sociales', 'option'); ?>
                    <?php foreach ($redes_sociales as $rrss) : ?>
                        <li class="footer__rrss-item ">
                            <a href="<?= $rrss["url"]; ?>" target="_blank" rel="noopener noreferrer">
                                <i class="ico-<?= $rrss["type"]; ?>"></i>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>