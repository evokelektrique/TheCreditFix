<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>
<div class="container py-5 my-5">

  <div class="row row-cols-auto gx-lg-5 gy-5">
    <!-- Card -->
    <div class="col-12 col-lg-3 d-flex d-lg-block justify-content-center justify-content-lg-start">
      <div class="position-relative" style="background-image: url(<?= get_template_directory_uri() ?>/public/images/credit_card_mockup_horizontal.png);background-position: center;background-repeat: no-repeat;background-size: cover; height: 190px; width: 316px;">
        <p class="m-2 p-1 position-absolute top-0 start-0 fw-bold">The Credit Fix</p>

        <div class="position-absolute bottom-0 start-0 m-2 p-1">
          <div class="d-flex align-items-center justify-content-between mb-2">
            <p class="m-0 p-0 fs-5"><?= carbon_get_post_meta($product->get_id(), "credit_card_bank") ?></p>
            <p class="m-0 p-0 fs-5"><?= carbon_get_post_meta($product->get_id(), "credit_card_expire_date") ?></p>
          </div>

          <p class="m-0 p-0 fs-5 fw-bold font-monospace"><?= carbon_get_post_meta($product->get_id(), "credit_card_card_number") ?></p>
        </div>
      </div>
    </div>

    <!-- Information -->
    <div class="col-12 col-lg-5">

      <!-- Title -->
      <h1 class="fw-bold fs-xl-4 mb-2"><?= get_the_title() ?></h1>

      <!-- Raiting -->
      <div class="d-flex gap-2 align-items-start">
        <!-- Star -->
        <div>
          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.8694 2.77884L12.2627 5.56551C12.4527 5.95342 12.9594 6.3255 13.3869 6.39675L15.9123 6.81634C17.5273 7.0855 17.9073 8.25717 16.7436 9.413L14.7802 11.3763C14.4477 11.7088 14.2656 12.3501 14.3686 12.8093L14.9306 15.2397C15.374 17.1634 14.3527 17.9076 12.6506 16.9022L10.2836 15.5009C9.85606 15.2476 9.15147 15.2476 8.71606 15.5009L6.34897 16.9022C4.65481 17.9076 3.62564 17.1555 4.06897 15.2397L4.63106 12.8093C4.73397 12.3501 4.55189 11.7088 4.21939 11.3763L2.25606 9.413C1.10022 8.25717 1.47231 7.0855 3.08731 6.81634L5.61272 6.39675C6.03231 6.3255 6.53897 5.95342 6.72897 5.56551L8.12231 2.77884C8.88231 1.26675 10.1173 1.26675 10.8694 2.77884Z" fill="#F9A23B" />
          </svg>
        </div>

        <p>4.9 Ratings</p>
        <span>•</span>
        <p>3.2K Reviews</p>
      </div>

      <!-- Tabs -->
      <div>
        <ul class="nav nav-pills mb-3 pb-1" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="btn btn-transparent px-4 text-white border-0 rounded-0 active" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About Items</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="btn btn-transparent px-4 text-white border-0 rounded-0" id="pills-why-tab" data-bs-toggle="pill" data-bs-target="#pills-why" type="button" role="tab" aria-controls="pills-why" aria-selected="true">Why Tradelines</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="btn btn-transparent px-4 text-white border-0 rounded-0" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="true">Reviews</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Opened</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_opened") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Payment Status</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_payment_status") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Utilization</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_payment_utilization") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Age</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_age") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Limit</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_limit") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Price</span>
              <span class="fs-4 fw-bold">
                $<?= $product->get_price(); ?>/month
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Availability</span>
              <span class="fs-4 fw-bold">
                <?= $product->get_stock_quantity(); ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Expected Reporting Timeline</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_report_by") ?>
              </span>
            </div>

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span class="fs-4">Avg Reviewer Increase</span>
              <span class="fs-4 fw-bold">
                <?= carbon_get_post_meta($product->get_id(), "credit_card_avg_reviewer_increase") ?>
              </span>
            </div>

            <!-- Description -->
            <div>
              <?= get_the_content() ?>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-why" role="tabpanel" aria-labelledby="pills-why-tab"><?= carbon_get_theme_option("why_tradelines") ?></div>
          <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab"><?php comments_template() ?></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4">
      <div class="bg-dark-100 rounded border border-dark-300 p-3">
        <p class="mb-3 pb-4 fs-2">Set Order</p>

        <div class="d-flex align-items-center justify-content-between mb-3 pb-1">
          <span class="fs-3">Total Price:</span>
          <span><b class="fw-bold fs-xl-6">$<?= $product->get_price(); ?></b><small class="fs-3">/month</small></span>
        </div>

        <div class="d-flex flex-md-row flex-column gap-3 justify-content-between">
          <a href="<?= site_url("checkout?add-to-cart={$product->get_id()}&quantity=1") ?>" class="btn btn-info text-white fw-bold fs-3 py-2 px-3 w-100">Purchase</a>
          <a href="#" class="btn btn-outline-grey-200 fs-3 py-2 px-3 w-100">Chat to sales</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Why swtich -->
  <div class="container py-5 my-5">
    <div class="mb-5 pb-3">
      <p class="fw-bold text-orange fs-3 mb-2 pb-1">Why switch?</p>
      <p class="fw-bold mb-3 pb-1 fs-xl-4">Get your finances right</p>
      <p class="fs-1 m-0">We offer the best accounting and expense tracking for ambitious businesses.</p>
    </div>

    <div class="row gx-md-4 gy-4">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="bg-dark-100 rounded p-4">
          <div class="pb-3 mb-3">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="48" height="48" rx="10" fill="#7F56D9" />
              <path d="M14 19L22.1649 24.7154C22.8261 25.1783 23.1567 25.4097 23.5163 25.4993C23.8339 25.5785 24.1661 25.5785 24.4837 25.4993C24.8433 25.4097 25.1739 25.1783 25.8351 24.7154L34 19M18.8 32H29.2C30.8802 32 31.7202 32 32.362 31.673C32.9265 31.3854 33.3854 30.9265 33.673 30.362C34 29.7202 34 28.8802 34 27.2V20.8C34 19.1198 34 18.2798 33.673 17.638C33.3854 17.0735 32.9265 16.6146 32.362 16.327C31.7202 16 30.8802 16 29.2 16H18.8C17.1198 16 16.2798 16 15.638 16.327C15.0735 16.6146 14.6146 17.0735 14.327 17.638C14 18.2798 14 19.1198 14 20.8V27.2C14 28.8802 14 29.7202 14.327 30.362C14.6146 30.9265 15.0735 31.3854 15.638 31.673C16.2798 32 17.1198 32 18.8 32Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>

          <div class="">
            <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("switch_feature_one_title") ?></p>
            <p class="mb-3 pb-1 fs-3"><?= carbon_get_theme_option("switch_feature_one_description") ?></p>
            <a href="<?= carbon_get_theme_option("switch_feature_one_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
              <span>
                View integration
              </span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="bg-dark-100 rounded p-4">
          <div class="pb-3 mb-3">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="48" height="48" rx="10" fill="#7F56D9" />
              <path d="M25 14L16.0934 24.6879C15.7446 25.1064 15.5702 25.3157 15.5676 25.4925C15.5652 25.6461 15.6337 25.7923 15.7532 25.8889C15.8907 26 16.1632 26 16.708 26H24L23 34L31.9065 23.3121C32.2553 22.8936 32.4297 22.6843 32.4324 22.5075C32.4347 22.3539 32.3663 22.2077 32.2467 22.1111C32.1092 22 31.8368 22 31.292 22H24L25 14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>

          <div class="">
            <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("switch_feature_two_title") ?></p>
            <p class="mb-3 pb-1 fs-3"><?= carbon_get_theme_option("switch_feature_two_description") ?></p>
            <a href="<?= carbon_get_theme_option("switch_feature_two_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
              <span>
                View integration
              </span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="bg-dark-100 rounded p-4">
          <div class="pb-3 mb-3">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="48" height="48" rx="10" fill="#7F56D9" />
              <path d="M23 15H19.8C18.1198 15 17.2798 15 16.638 15.327C16.0735 15.6146 15.6146 16.0735 15.327 16.638C15 17.2798 15 18.1198 15 19.8V28.2C15 29.8802 15 30.7202 15.327 31.362C15.6146 31.9265 16.0735 32.3854 16.638 32.673C17.2798 33 18.1198 33 19.8 33H28.2C29.8802 33 30.7202 33 31.362 32.673C31.9265 32.3854 32.3854 31.9265 32.673 31.362C33 30.7202 33 29.8802 33 28.2V25M24 20H28V24M27.5 15.5V14M31.4393 16.5607L32.5 15.5M32.5103 20.5H34.0103M15 25.3471C15.6519 25.4478 16.3199 25.5 17 25.5C21.3864 25.5 25.2653 23.3276 27.6197 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>

          <div class="">
            <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("switch_feature_three_title") ?></p>
            <p class="mb-3 pb-1 fs-3"><?= carbon_get_theme_option("switch_feature_three_description") ?></p>
            <a href="<?= carbon_get_theme_option("switch_feature_three_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
              <span>
                View integration
              </span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="bg-dark-100 rounded p-4">
          <div class="pb-3 mb-3">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="48" height="48" rx="10" fill="#7F56D9" />
              <path d="M20.9996 26C20.9996 26 22.3121 27.5 24.4996 27.5C26.6871 27.5 27.9996 26 27.9996 26M27.2496 21H27.2596M21.7496 21H21.7596M24.4996 32C29.194 32 32.9996 28.1944 32.9996 23.5C32.9996 18.8056 29.194 15 24.4996 15C19.8052 15 15.9996 18.8056 15.9996 23.5C15.9996 24.45 16.1555 25.3636 16.443 26.2166C16.5512 26.5376 16.6053 26.6981 16.6151 26.8214C16.6247 26.9432 16.6174 27.0286 16.5873 27.1469C16.5568 27.2668 16.4894 27.3915 16.3547 27.6408L14.7191 30.6684C14.4857 31.1002 14.3691 31.3161 14.3952 31.4828C14.4179 31.6279 14.5034 31.7557 14.6288 31.8322C14.7728 31.9201 15.0169 31.8948 15.5052 31.8444L20.6262 31.315C20.7813 31.299 20.8588 31.291 20.9295 31.2937C20.999 31.2963 21.0481 31.3029 21.1159 31.3185C21.1848 31.3344 21.2714 31.3678 21.4448 31.4345C22.3928 31.7998 23.4228 32 24.4996 32ZM27.7496 21C27.7496 21.2761 27.5258 21.5 27.2496 21.5C26.9735 21.5 26.7496 21.2761 26.7496 21C26.7496 20.7239 26.9735 20.5 27.2496 20.5C27.5258 20.5 27.7496 20.7239 27.7496 21ZM22.2496 21C22.2496 21.2761 22.0258 21.5 21.7496 21.5C21.4735 21.5 21.2496 21.2761 21.2496 21C21.2496 20.7239 21.4735 20.5 21.7496 20.5C22.0258 20.5 22.2496 20.7239 22.2496 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>

          <div class="">
            <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("switch_feature_four_title") ?></p>
            <p class="mb-3 pb-1 fs-3"><?= carbon_get_theme_option("switch_feature_four_description") ?></p>
            <a href="<?= carbon_get_theme_option("switch_feature_four_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
              <span>
                View integration
              </span>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Testimonial -->
<div class="py-5 my-5">
  <div class="bg-info py-5 my-5">
    <div class="container pt-5 my-5">

      <!-- Slider main container -->
      <div class="swiper swiper-testimonial pb-5">
        <div class="swiper-wrapper">
          <?php foreach (carbon_get_theme_option("tcf_testimonials") as $testimonial) : ?>
            <div class="swiper-slide text-center">
              <p class="fw-bold fs-xl-4 mb-3 pb-3">
                <?= $testimonial["testimonial_description"] ?>
              </p>

              <img src="<?= $testimonial["testimonial_image"] ?>" alt="" class="mb-3">

              <p class="fw-bold fs-2 mb-1"><?= $testimonial["testimonial_name"] ?></p>
              <p class="fs-3 mb-3"><?= $testimonial["testimonial_subject"] ?></p>

              <div class="d-flex justify-content-center">
                <?= $GLOBALS["tcf"]->cta_generate_stars(intval($testimonial["testimonial_stars"])); ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5 pb-3 text-center">
  <p class="fw-bold mb-3 pb-1 fs-xl-4">Frequently asked questions</p>
  <p class="fs-1 ">Everything you need to know about the product and billing.</p>
</div>

<div class="container mb-5 pb-3">
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php foreach (carbon_get_theme_option("tcf_faqs") as $key => $faq) : ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading-<?= $key ?>">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $key ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $key ?>">
            <?= $faq["title"] ?>
          </button>
        </h2>
        <div id="flush-collapse-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $key ?>" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"><?= $faq["description"] ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="container mb-5 pb-3 text-center text-lg-start">
  <p class="fw-bold mb-3 pb-1 fs-xl-4">Our Recommendation</p>
  <p class="fs-1 ">The latest industry news, interviews, technologies, and resources.</p>
</div>

<div class="container mb-5 pb-3 text-center">
  <div class="row row-cols-auto gx-lg-5 gy-4 mb-5 pb-3">
    <?php
    woocommerce_related_products(array(
      'posts_per_page' => 4,
      'columns'        => 4,
      'orderby'        => 'rand'
    ));
    ?>
  </div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
