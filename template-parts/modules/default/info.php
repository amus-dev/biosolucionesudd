<section class="boxServices">
     <div class="container">
          <?php $content = get_field('services'); ?>
          <div class="row">
               <div class="col-12 col-md-6">
                    <img src="<?= $content['cover_image']['url']; ?>" class="img-fluid boxServices__image" />
               </div>
               <div class="col-12 col-md-6">
                    <div class="boxServices__content">
                         <h1 class="boxServices__content-title"><?= $content['title']; ?></h1>
                         <p class="boxServices__content-description"><?= $content['description']; ?></p>
                    </div>
               </div>
          </div>
     </div>
</section>