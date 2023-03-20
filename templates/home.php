<?php

/**
 * Template Name: Home
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Hero -->
<div class="position-relative py-5 p-lg-0">
  <div class="container" id="home-hero">
    <img src="<?= get_template_directory_uri() ?>/public/images/cards.png" alt="" class="mw-100 position-absolute end-0 bottom-0 d-none d-lg-block" style="z-index: 1;">
    <div class="home-hero-right-side blue-to-white-grandient top-0 end-0 h-100 d-none d-lg-block"></div>

    <div class="row align-items-center h-100">
      <div class="col-12 col-lg-6 position-relative" style="z-index: 1;">
        <p class="fw-bold fs-xl-2 mb-4">Smart business <br>credit cards</p>
        <p class="fs-1 mb-5">Powerful, self-serve product and growth analytics<br> to help you convert, engage, and retain more.</p>

        FORM
      </div>
    </div>
  </div>
</div>

<!-- Companies -->
<div class="bg-dark-100 mb-5 pb-5">
  <div class="container text-center">
    <div class="py-1">
      <div class="py-2">
        <div class="py-5">
          <p class="fs-3 mb-3 pb-3">Join 4,000+ companies already growing</p>

          <div class="row row-cols-auto align-items-center justify-content-center gx-0 gy-5 gx-lg-5">
            <?php foreach (carbon_get_theme_option("tcf_companies") as $company) : ?>
              <div class="col-12 col-lg-2">
                <img src="<?= $company["company_image"] ?>" class="mw-100">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Features -->
<div class="my-5 py-5">
  <div class="container mb-5 pb-3">
    <p class="text-orange mb-2 pb-1 fw-bold fs-3">Features</p>
    <p class="fw-bold fs-xl-4 mb-3 pb-1">Stop leaving money on the table</p>
    <p class="fs-1 m-0">Spend smarter, lower your bills, get cashback on everything you buy,<br> and unlock credit to grow your business.</p>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">

        <!-- List features -->
        <div>

          <!-- Feature -->
          <div class="d-flex flex-row justify-content-start align-items-start gap-3 mb-5">
            <div>
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4" y="4" width="48" height="48" rx="24" fill="#F4EBFF" />
                <path d="M22.0944 27.2288C22.0322 26.8282 22 26.4179 22 26C22 21.5817 25.6052 18 30.0526 18C34.4999 18 38.1052 21.5817 38.1052 26C38.1052 26.9981 37.9213 27.9535 37.5852 28.8345C37.5154 29.0175 37.4804 29.109 37.4646 29.1804C37.4489 29.2512 37.4428 29.301 37.4411 29.3735C37.4394 29.4466 37.4493 29.5272 37.4692 29.6883L37.8717 32.9585C37.9153 33.3125 37.9371 33.4895 37.8782 33.6182C37.8266 33.731 37.735 33.8205 37.6211 33.8695C37.4911 33.9254 37.3146 33.8995 36.9617 33.8478L33.7765 33.3809C33.6101 33.3565 33.527 33.3443 33.4512 33.3448C33.3763 33.3452 33.3245 33.3507 33.2511 33.3661C33.177 33.3817 33.0823 33.4172 32.893 33.4881C32.0097 33.819 31.0524 34 30.0526 34C29.6344 34 29.2237 33.9683 28.8227 33.9073M23.6316 38C26.5965 38 29 35.5376 29 32.5C29 29.4624 26.5965 27 23.6316 27C20.6667 27 18.2632 29.4624 18.2632 32.5C18.2632 33.1106 18.3603 33.6979 18.5395 34.2467C18.6153 34.4787 18.6532 34.5947 18.6657 34.6739C18.6786 34.7567 18.6809 34.8031 18.6761 34.8867C18.6714 34.9668 18.6514 35.0573 18.6113 35.2383L18 38L20.9948 37.591C21.1583 37.5687 21.24 37.5575 21.3114 37.558C21.3865 37.5585 21.4264 37.5626 21.5001 37.5773C21.5701 37.5912 21.6742 37.6279 21.8823 37.7014C22.4306 37.8949 23.0191 38 23.6316 38Z" stroke="#7F56D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <rect x="4" y="4" width="48" height="48" rx="24" stroke="#F9F5FF" stroke-width="8" />
              </svg>
            </div>

            <div>
              <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("feature_one_title") ?></p>
              <p class="fs-3 mb-3 pb-1"><?= carbon_get_theme_option("feature_one_description") ?></p>

              <a href="<?= carbon_get_theme_option("feature_one_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
                <span>
                  Learn more
                </span>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>

          <!-- Feature -->
          <div class="d-flex flex-row justify-content-start align-items-start gap-3 mb-5">
            <div>
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4" y="4" width="48" height="48" rx="24" fill="#F4EBFF" />
                <path d="M24.5 30.6667C24.5 31.9553 25.5447 33 26.8333 33H29C30.3807 33 31.5 31.8807 31.5 30.5C31.5 29.1193 30.3807 28 29 28H27C25.6193 28 24.5 26.8807 24.5 25.5C24.5 24.1193 25.6193 23 27 23H29.1667C30.4553 23 31.5 24.0447 31.5 25.3333M28 21.5V23M28 33V34.5M38 28C38 33.5228 33.5228 38 28 38C22.4772 38 18 33.5228 18 28C18 22.4772 22.4772 18 28 18C33.5228 18 38 22.4772 38 28Z" stroke="#7F56D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <rect x="4" y="4" width="48" height="48" rx="24" stroke="#F9F5FF" stroke-width="8" />
              </svg>
            </div>

            <div>
              <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("feature_two_title") ?></p>
              <p class="fs-3 mb-3 pb-1"><?= carbon_get_theme_option("feature_two_description") ?></p>

              <a href="<?= carbon_get_theme_option("feature_two_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
                <span>
                  Learn more
                </span>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>

          <!-- Feature -->
          <div class="d-flex flex-row justify-content-start align-items-start gap-3 mb-5">
            <div>
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4" y="4" width="48" height="48" rx="24" fill="#F4EBFF" />
                <path d="M27 19H23.8C22.1198 19 21.2798 19 20.638 19.327C20.0735 19.6146 19.6146 20.0735 19.327 20.638C19 21.2798 19 22.1198 19 23.8V32.2C19 33.8802 19 34.7202 19.327 35.362C19.6146 35.9265 20.0735 36.3854 20.638 36.673C21.2798 37 22.1198 37 23.8 37H32.2C33.8802 37 34.7202 37 35.362 36.673C35.9265 36.3854 36.3854 35.9265 36.673 35.362C37 34.7202 37 33.8802 37 32.2V29M28 24H32V28M31.5 19.5V18M35.4393 20.5607L36.5 19.5M36.5103 24.5H38.0103M19 29.3471C19.6519 29.4478 20.3199 29.5 21 29.5C25.3864 29.5 29.2653 27.3276 31.6197 24" stroke="#7F56D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <rect x="4" y="4" width="48" height="48" rx="24" stroke="#F9F5FF" stroke-width="8" />
              </svg>
            </div>

            <div>
              <p class="fw-bold fs-1 mb-2"><?= carbon_get_theme_option("feature_three_title") ?></p>
              <p class="fs-3 mb-3 pb-1"><?= carbon_get_theme_option("feature_three_description") ?></p>

              <a href="<?= carbon_get_theme_option("feature_three_link") ?>" class="text-decoration-none text-orange fw-bold fs-3 d-flex align-items-center justify-content-start gap-2">
                <span>
                  Learn more
                </span>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.16666 6.99984H12.8333M12.8333 6.99984L6.99999 1.1665M12.8333 6.99984L6.99999 12.8332" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6 text-center text-lg-end">
        <img src="<?= get_template_directory_uri() ?>/public/images/cards_stacked.png" alt="" class="mw-100">
      </div>
    </div>
  </div>
</div>

<!-- Credit cards -->
<div class="bg-dark-100 my-5 py-5">
  <div class="container py-5 my-5">
    <div class="d-flex flex-column flex-md-row gap-3 align-items-center justify-content-between mb-5 mb-lg-0">
      <div>
        <p class="fw-bold fs-xl-4 mb-3 pb-1">Credit Cards</p>
        <p class="mb-5 pb-3 fs-1">The latest cards that we provide from our team.</p>
      </div>

      <div>
        <a href="<?= get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-info text-white fw-bold fs-3 px-3 py-2">View all cards</a>
      </div>
    </div>

    <!-- Slider main container -->
    <div class="swiper swiper-cards pb-5 ">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <?php
        $params = array(
          'posts_per_page' => 15,
          'post_type' => 'product',
          'order'     => 'desc',
        ); // (1)
        $wc_query = new WP_Query($params); // (2)
        ?>
        <?php if ($wc_query->have_posts()) : // (3)
        ?>
          <?php while ($wc_query->have_posts()) : // (4)
            $wc_query->the_post(); // (4.1)
            global $product;
          ?>

            <!-- Slides -->
            <div class="swiper-slide">
              <a class="d-block text-decoration-none text-white border border-1 border-grey rounded-4 bg-dark-200 overflow-hidden" href="<?= get_the_permalink(); ?>">
                <img src="<?= get_template_directory_uri() ?>/public/images/credit-card-background.png" alt="" class="mw-100">

                <div class="p-1">
                  <div class="p-3">
                    <div class="p-0">
                      <div class="p-1">
                        <p class="fw-bold fs-4 mb-4"><?= carbon_get_post_meta(get_the_ID(), "credit_card_bank") ?></p>
                        <div class="d-flex flex-column justify-content-between align-items-center flex-md-row gap-3 mb-2">
                          <p class="m-0 fs-6 fw-bold">
                          <?= carbon_get_post_meta(get_the_ID(), "credit_card_name") ?>
                          </p>
                          <p class="m-0 fs-6 fw-bold">
                          <?= carbon_get_post_meta(get_the_ID(), "credit_card_expire_date") ?>
                          </p>
                        </div>

                        <p class="text-monospace mb-3 fs-5">
                        <?= carbon_get_post_meta(get_the_ID(), "credit_card_card_number") ?>
                        </p>

                        <div class="d-flex flex-column flex-md-row gap-5 justify-content-between fs-5">
                          <div>
                            <p class="d-block mb-1">
                              Limit
                            </p>
                            <p class="d-block mb-1 fw-bold">
                            <?= carbon_get_post_meta(get_the_ID(), "credit_card_limit") ?>
                            </p>
                          </div>
                          <div>
                            <p class="d-block mb-1">
                              Price
                            </p>
                            <p class="d-block mb-1 fw-bold">
                              $<?= $product->get_price(); ?>/month
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); // (5)
          ?>
        <?php else :  ?>
          <p>
            <?php _e('No Products'); // (6)
            ?>
          </p>
        <?php endif; ?>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
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

<!-- Testimonial -->
<div class="py-5 my-5">
  <div class="bg-info py-5 my-5">
    <div class="container pt-5 my-5">

      <!-- Slider main container -->
      <div class="swiper swiper-testimonial pb-5">
        <div class="swiper-wrapper">
          <?php foreach(carbon_get_theme_option("tcf_testimonials") as $testimonial): ?>
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


<div class="container py-5 my-5">
  <div class="mb-5 pb-3">
    <div class="d-flex align-items-center justify-content-between flex-md-row flex-column gap-3">
      <div>
        <p class="fw-bold text-orange fs-3 mb-2 pb-1">Our blog</p>
        <p class="fw-bold mb-3 pb-1 fs-xl-4">Lastest blog posts</p>
        <p class="fs-1 m-0">Tool and strategies modern teams need to help their companies grow.</p>
      </div>

      <div>
        <a href="<?= get_post_permalink(get_option('page_for_posts')) ?>" class="btn btn-indigo text-white fw-bold fs-3 px-3 py-2">View all posts</a>
      </div>
    </div>
  </div>

  <div class="row row-cols-auto gx-lg-4 gy-4">
    <?php
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 3,
      'post_status' => 'publish'
    ));
    foreach ($recent_posts as $post) : ?>
      <div class="col-12 col-md-4">
        <a href="<?= get_permalink($post['ID']) ?>" class="text-decoration-none text-white d-block">
          <div class="w-100 mb-3 pb-3" style="background-image: url(<?= get_the_post_thumbnail_url($post['ID'], 'full'); ?>);height: 240px; background-size: cover; background-position: center;">
          </div>
          <p class="text-orange fw-bold mb-2 pb-1"><?= get_the_category($post["ID"])[0]->name ?></p>

          <div class="d-flex flex-row align-items-center justify-content-between mb-2 gap-3">
            <p class="fw-bold fs-xl-6 m-0 text-truncate"><?= $post['post_title'] ?></p>

            <div style="width: 24px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>

          <p class="mb-4"><?= get_the_excerpt($post) ?></p>

          <div class="d-flex align-items-center flex-row justify-content-start">
            <div class=" me-2 pe-1">
              <img src="<?= get_avatar_url($post["post_author"]) ?>" alt="" class="mw-100 rounded-pill" width="40px" height="40px">
            </div>

            <div class="d-flex align-items-start justify-content-start flex-column">
              <p class="m-0"><?= get_the_author_meta("user_firstname", $post["post_author"]) . " " . get_the_author_meta("user_lastname", $post["post_author"]) ?></p>
              <p class="m-0"><?= get_the_date("", $post) ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php get_footer() ?>
