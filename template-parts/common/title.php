<?php $banner = get_field("banner_clinico", $post->ID) ?>
<section class="title" style="background-image: url(<?= $banner["url"]; ?>)">
    <div class="container title__container">
        <h1 class="title__container-title"><?= the_title(); ?></h1>
    </div>
</section>