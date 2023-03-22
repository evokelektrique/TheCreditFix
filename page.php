<?php get_header(); ?>

<div class="container py-5 my-5">

  <div class="text-center mb-4">
    <h1 class="mb-4 fs-xl-4 fw-bold text-center"><?= get_the_title() ?></h1>

    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
  </div>

  <div>
    <?php the_content(); ?>
  </div>

</div>

<?php get_footer(); ?>
