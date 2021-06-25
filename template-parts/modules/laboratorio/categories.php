<section class="categories">
     <div class="container">
          <div class="row">
               <?php $query = new WP_Query(); ?>
               <?php $all_wp_pages = $query->query(array('post_type' => 'page')); ?>
               <?php $postChilds = get_page_children($post->ID, $all_wp_pages); ?>
               <?php foreach ($postChilds as $postChild) : ?>
                    <div class="col-12 col-md-4">
                         <div class="categories__card">
                              <div class="categories__card-head">
                                   <img src="https://biosoluciones.cl/wp-content/uploads/2021/06/image-nosotros-cover.jpg" class="img-fluid">
                              </div>
                              <div class="categories__card-body">
                                   <h5 class="categories__card-title"><?= $postChild->post_title; ?></h5>
                                   <p class="categories__card-description"><?= $postChild->post_content; ?></p>
                                   <a href="<?= $postChild->guid; ?>" class="categories__card-btn">Ver más</a>
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
          </div>
     </div>
</section>