<?php
$navbar_classes = "navbar navbar-expand-md navbar-dark bg-dark border-bottom border-dark-300 py-3";
global $is_support_page;
$is_support_page = false;
if (is_page_template('templates/support.php')) {
  $is_support_page = true;
  $navbar_classes = "navbar navbar-expand-md navbar-dark-100 bg-dark-100 text-white py-3";
}
?>
<nav class="<?= $navbar_classes ?>" role="navigation">
  <div class="container gap-3">
    <a class="navbar-brand m-0" href="<?= site_url() ?>">
      <img src="<?= get_template_directory_uri() ?>/public/images/full_logo.png" style="max-height: 32px;">
    </a>
    <div id="primary-navbar" class="collapse navbar-collapse justify-content-between">
      <?php
      wp_nav_menu(array(
        'theme_location'    => 'primary_navigation',
        'depth'             => 2,
        'container'         => false,
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'primary-navbar',
        'menu_class'        => 'nav navbar-nav gap-3',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ));
      ?>

      <div class="d-flex flex-column flex-md-row gap-2">
        <?php if (is_user_logged_in()) : ?>
          <a href="<?= get_permalink(get_option('woocommerce_myaccount_page_id')) ?>" class="btn btn-info text-white fw-bold">My account</a>
        <?php else : ?>
          <a href="<?= site_url("login") ?>" class="btn btn-transparent text-white">Log in</a>
          <a href="<?= site_url("register") ?>" class="btn btn-info text-white fw-bold">Sign up</a>
        <?php endif; ?>
      </div>
    </div>

    <button class="navbar-toggler position-absolute" style="top:16px; right: 16px" type="button" data-bs-toggle="collapse" data-bs-target="#primary-navbar" aria-controls="primary-navbar" aria-expanded="false" aria-label="'Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
