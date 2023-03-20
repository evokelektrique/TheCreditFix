<?php
wp_footer();
$is_homepage = is_page_template("templates/home.php") || is_shop();
$is_pricing = is_page_template("templates/pricing.php");
?>

<footer class="<?= ($is_homepage || $is_pricing) ? "mt-5 pt-5" : "mt-auto" ?>">
  <div class="bg-dark-100 py-5 <?= ($is_homepage || $is_pricing) ? "mt-5 pt-5 mt-lg-0 pt-lg-0" : "mt-auto" ?> position-relative">
    <?php if ($is_homepage) : ?>
      <div class="container position-absolute top-0 translate-middle start-50">
        <div class="bg-indigo rounded-3 p-5">
          <div class="p-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-4">
            <div>
              <p class="fw-bold fs-xl-4 mb-3">Start your 30-day free trial</p>
              <p class="fs-1 m-0">Join over 4,000+ startups already growing with Untitled.</p>
            </div>

            <div class="d-flex justify-content-between align-items-center flex-column flex-md-row gap-3">
              <a href="<?= carbon_get_theme_option("trial_learn_more_link") ?>" class="btn btn-white text-dark-200 fw-bold fs-3 py-2 px-3">Learn more</a>
              <a href="<?= carbon_get_theme_option("trial_get_started_link") ?>" class="btn btn-indigo-100 text-white fw-bold fs-3 py-2 px-3">Get started</a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($is_pricing) : ?>
      <div class="container position-absolute top-0 translate-middle start-50">
        <div class="bg-info rounded-3 p-5">
          <div class="p-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-4">
            <div>
              <p class="fw-bold fs-xl-4 mb-3">Start to Trade Credit cards</p>
              <p class="fs-1 m-0">Join over 4,000+ people already growing with CreditFix.</p>
            </div>

            <div class="d-flex justify-content-between align-items-center flex-column flex-md-row gap-3">
              <a href="<?= carbon_get_theme_option("trial_learn_more_link") ?>" class="btn btn-white text-dark-200 fw-bold fs-3 py-2 px-3">Learn more</a>
              <a href="<?= carbon_get_theme_option("trial_get_started_link") ?>" class="btn btn-info text-white fw-bold fs-3 py-2 px-3">Get started</a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="<?= ($is_homepage || $is_pricing) ? "mt-5 pt-5" : "" ?>">
      <div class="pt-3">
        <div class="container <?= ($is_homepage || $is_pricing) ? "mt-5 pt-5" : "" ?>">
          <div class="row">
            <div class="col-12 col-lg-3">
              <a href="<?= site_url() ?>">
                <img src="<?= get_template_directory_uri() ?>/public/images/full_logo.png" alt="" class="mb-3 pb-3">
              </a>
              <p class="text-light-200 fs-3"><?= bloginfo("description") ?></p>
            </div>
            <div class="col-12 col-lg-2 offset-lg-2">
              <p class="text-grey-200 mb-3 fw-bold fs-4">Product</p>

              <?php
              $theme_location = "footer_navigation_one";
              $locations = get_nav_menu_locations();
              $menu = get_term($locations[$theme_location], 'nav_menu');
              $menu_items = wp_get_nav_menu_items($menu->term_id);
              $menu_list = "";
              $menu_list .= '<ul class="list-unstyled">' . "\n";

              foreach ($menu_items as $menu_item) {
                $menu_list .= '<li class="mb-2 pb-1"><a class="fs-3 text-light-200 fw-bold text-decoration-none" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' . "\n";
                $menu_list .= '</li>' . "\n";
              }

              $menu_list .= '</ul>' . "\n";
              echo $menu_list;
              ?>
            </div>
            <div class="col-12 col-lg-2">
              <p class="text-grey-200 mb-3 fw-bold fs-4">Product</p>
              <?php
              $theme_location = "footer_navigation_two";
              $locations = get_nav_menu_locations();
              $menu = get_term($locations[$theme_location], 'nav_menu');
              $menu_items = wp_get_nav_menu_items($menu->term_id);
              $menu_list = "";
              $menu_list .= '<ul class="list-unstyled">' . "\n";

              foreach ($menu_items as $menu_item) {
                $menu_list .= '<li class="mb-2 pb-1"><a class="fs-3 text-light-200 fw-bold text-decoration-none" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' . "\n";
                $menu_list .= '</li>' . "\n";
              }

              $menu_list .= '</ul>' . "\n";
              echo $menu_list;
              ?>
            </div>
            <div class="col-12 col-lg-3">
              <p class="fw-bold text-white fs-4 mb-3">Stay up to date</p>
              <form action="" class="d-flex flex-row gap-3">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-info py-2 px-3 fs-2 fw-bold text-white">Subscribe</button>
              </form>
            </div>
          </div>

          <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-4 pt-3 mt-3 border-top border-dark-300">
            <span class="text-center text-lg-start">&copy; <?= date("Y") ?> CreditFix. All rights reserved.</span>
            <?php
            $theme_location = "footer_navigation_two";
            $locations = get_nav_menu_locations();
            $menu = get_term($locations[$theme_location], 'nav_menu');
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = "";
            $menu_list .= '<ul class="d-inline-flex gap-3 list-unstyled">' . "\n";

            foreach ($menu_items as $menu_item) {
              $menu_list .= '<li class="mb-2 pb-1"><a class="text-grey-200 fs-3 text-decoration-none d-inline-block" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>' . "\n";
              $menu_list .= '</li>' . "\n";
            }

            $menu_list .= '</ul>' . "\n";
            echo $menu_list;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/641894794247f20fefe6fc48/1gs007ulu';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
