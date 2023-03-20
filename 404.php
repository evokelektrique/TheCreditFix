<?php get_header(); ?>

<div class="container py-5 my-5">
  <div class="row align-items-center gx-lg-4 gy-5">
    <div class="col-12 col-lg-6">
      <p class="text-orange fs-3 fw-bold mb-2 pb-1">404 error</p>
      <p class="fw-bold fs-xl-2 mb-4">Page not found...</p>
      <p class="fs-1 mb-5">Sorry, the page you are looking for doesn't exist or has been moved. Try searching our site:</p>

      <a href="<?= site_url("/") ?>" class="py-2 px-3 fw-bold btn btn-info text-white fs-3">Go to Homepage</a>
    </div>

    <div class="col-12 col-lg-6 text-center text-lg-end">
      <img src="<?= get_template_directory_uri() ?>/public/images/illustration.png" alt="" class="mw-100">
    </div>
  </div>
</div>

<?php get_footer(); ?>
