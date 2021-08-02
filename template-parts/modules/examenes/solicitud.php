<?php $solicitudFile = get_field("solicitud_examenes"); ?>
<?php if (!empty($solicitudFile)) : ?>
     <section class="solicitud">
          <div class="container">
               <a href="<?= $solicitudFile; ?>" target="_blank" rel="noopener noreferrer" class="solicitud__btn">Solicitud de exámenes</a>
          </div>
     </section>
<?php endif; ?>