<?php

/**
 * Template Name: Credit Repair
 */

get_header();
?>
<!-- Video Modal -->
<div class="modal fade" id="modal-video" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <?= carbon_get_theme_option("youtube_video_iframe") ?>
    </div>
  </div>
</div>

<div class="container mt-5 pt-5 mb-5 pb-3 text-center">

  <!-- New tag -->
  <div class="d-inline-flex flex-row gap-3 bg-dark-100 rounded-pill p-1 mb-3">
    <div class="text-white bg-danger rounded-pill px-2">What’s new?</div>
    <div class="pe-2">Instantly issue virtual cards</div>
  </div>

  <!-- Heading -->
  <p class="mb-4 fs-xl-2 fw-bold"><?= get_the_title() ?></p>

  <!-- Description -->
  <p class="fs-1 mb-5"><?= get_the_content() ?></p>

  <!-- Buttons -->
  <div class="d-inline-flex flex-column flex-md-row gap-3">
    <button class="btn btn-white text-dark-200 border border-grey-200 fs-2 fw-bold py-3 px-4 d-flex gap-3 align-items-center" data-bs-toggle="modal" data-bs-target="#modal-video">
      <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 22C18.0228 22 22.5 17.5228 22.5 12C22.5 6.47715 18.0228 2 12.5 2C6.97715 2 2.5 6.47715 2.5 12C2.5 17.5228 6.97715 22 12.5 22Z" stroke="#344054" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M10 8.96533C10 8.48805 10 8.24941 10.0997 8.11618C10.1867 8.00007 10.3197 7.92744 10.4644 7.9171C10.6304 7.90525 10.8311 8.03429 11.2326 8.29239L15.9532 11.3271C16.3016 11.551 16.4758 11.663 16.5359 11.8054C16.5885 11.9298 16.5885 12.0702 16.5359 12.1946C16.4758 12.337 16.3016 12.449 15.9532 12.6729L11.2326 15.7076C10.8311 15.9657 10.6304 16.0948 10.4644 16.0829C10.3197 16.0726 10.1867 15.9999 10.0997 15.8838C10 15.7506 10 15.512 10 15.0347V8.96533Z" stroke="#344054" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>

      <span>Demo</span>
    </button>

    <a href="<?= site_url("/register") ?>" class="btn btn-info text-white fs-2 fw-bold py-3 px-4 border border-info">
      Sign up
    </a>
  </div>
</div>

<!-- Hero Image -->
<div class="position-relative container mb-5 pb-3">
  <img src="<?= get_the_post_thumbnail_url() ?>" alt="Credit Card" class="w-100 h-100 mw-100">
</div>

<!-- Items -->
<div class="container mb-5 pb-5">
  <div class="row gx-lg-5 gy-3">
    <div class="col-12 col-lg-4">
      <div class="mb-4">
        <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="5" y="5" width="56" height="56" rx="28" fill="#FFEFD6" />
          <path d="M29.5002 39.4167H23.0835M26.5835 33H21.3335M29.5002 26.5833H23.6668M38.8335 22.5L31.1377 33.2742C30.797 33.7511 30.6267 33.9895 30.6341 34.1883C30.6405 34.3614 30.7235 34.5226 30.8606 34.6285C31.0181 34.75 31.3111 34.75 31.8971 34.75H37.6668L36.5002 43.5L44.196 32.7258C44.5366 32.2489 44.7069 32.0105 44.6996 31.8117C44.6932 31.6386 44.6102 31.4774 44.473 31.3715C44.3156 31.25 44.0225 31.25 43.4365 31.25H37.6668L38.8335 22.5Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="5" y="5" width="56" height="56" rx="28" stroke="#FFEFD6" stroke-width="10" />
        </svg>
      </div>

      <p class="fs-xl-4 mb-3 pb-1 fw-bold"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_hero_feature_title") ?></p>
      <p class="m-0"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_hero_feature_description") ?></p>
    </div>

    <div class="col-12 col-lg-8">
      <div class="row row-cols-auto">

        <?php foreach (carbon_get_post_meta(get_the_ID(), "tcf_credit_card_hero_features") as $feature) : ?>
          <div class="col-12 col-lg-6">
            <div class="mb-3 pb-3">
              <p class="fw-bold fs-1 mb-2"><?= $feature["title"] ?></p>
              <p class="fs-3"><?= $feature["description"] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- Zig Zags -->

<!-- Description -->
<div class="container mt-5 pt-5">
  <div class="mb-5 pb-5 text-center">
    <p class="text-orange fs-3 mb-2 pb-1">Features</p>
    <p class="fw-bold fs-xl-4 mb-3 pb-1"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_features_title") ?></p>
    <p class=""><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_features_description") ?></p>
  </div>
</div>

<!-- Right Image, Left Text -->
<div class="ps-lg-3 pb-5 mb-5">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center ps-lg-5 ms-lg-3 gap-5">
    <div class="ps-lg-3 ms-lg-3">
      <div class="mb-4">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M22.0944 27.2288C22.0322 26.8282 22 26.4179 22 26C22 21.5817 25.6052 18 30.0526 18C34.4999 18 38.1052 21.5817 38.1052 26C38.1052 26.9981 37.9213 27.9535 37.5852 28.8345C37.5154 29.0175 37.4804 29.109 37.4646 29.1804C37.4489 29.2512 37.4428 29.301 37.4411 29.3735C37.4394 29.4466 37.4493 29.5272 37.4692 29.6883L37.8717 32.9585C37.9153 33.3125 37.9371 33.4895 37.8782 33.6182C37.8266 33.731 37.735 33.8205 37.6211 33.8695C37.4911 33.9254 37.3146 33.8995 36.9617 33.8478L33.7765 33.3809C33.6101 33.3565 33.527 33.3443 33.4512 33.3448C33.3763 33.3452 33.3245 33.3507 33.2511 33.3661C33.177 33.3817 33.0823 33.4172 32.893 33.4881C32.0097 33.819 31.0524 34 30.0526 34C29.6344 34 29.2237 33.9683 28.8227 33.9073M23.6316 38C26.5965 38 29 35.5376 29 32.5C29 29.4624 26.5965 27 23.6316 27C20.6667 27 18.2632 29.4624 18.2632 32.5C18.2632 33.1106 18.3603 33.6979 18.5395 34.2467C18.6153 34.4787 18.6532 34.5947 18.6657 34.6739C18.6786 34.7567 18.6809 34.8031 18.6761 34.8867C18.6714 34.9668 18.6514 35.0573 18.6113 35.2383L18 38L20.9948 37.591C21.1583 37.5687 21.24 37.5575 21.3114 37.558C21.3865 37.5585 21.4264 37.5626 21.5001 37.5773C21.5701 37.5912 21.6742 37.6279 21.8823 37.7014C22.4306 37.8949 23.0191 38 23.6316 38Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>

      <div class="mb-3 pb-3">
        <p class="fw-bold fs-xl-4 mb-3"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_one_title") ?></p>
        <p><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_one_title") ?></p>
      </div>

      <!-- Check list -->
      <div>
        <?php foreach(carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_one_features") as $feature):?>
        <div class="d-flex align-items-center mb-3 pb-1">
          <div class="me-2 pe-1">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_334_73324)">
                <path d="M8.75016 14.0002L12.2502 17.5002L19.2502 10.5002M25.6668 14.0002C25.6668 20.4435 20.4435 25.6668 14.0002 25.6668C7.55684 25.6668 2.3335 20.4435 2.3335 14.0002C2.3335 7.55684 7.55684 2.3335 14.0002 2.3335C20.4435 2.3335 25.6668 7.55684 25.6668 14.0002Z" stroke="#F39C12" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_334_73324">
                  <rect width="28" height="28" rx="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <span class="fs-2 text-grey-100"><?= $feature["description"] ?></span>
        </div>
        <?php endforeach ?>
      </div>
    </div>

    <div class="text-center text-lg-end">
      <img src="<?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_one_image") ?>" alt="" class="mw-100">
    </div>
  </div>
</div>

<!-- Left Image, Right Text -->
<div class="pe-lg-3 pb-5 mb-5">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pe-lg-5 me-lg-3 gap-5">
  <div class="text-center text-lg-end">
      <img src="<?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_two_image") ?>" alt="" class="mw-100">
    </div>

    <div class="pe-lg-3 me-lg-3">
      <div class="mb-4">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M22.0944 27.2288C22.0322 26.8282 22 26.4179 22 26C22 21.5817 25.6052 18 30.0526 18C34.4999 18 38.1052 21.5817 38.1052 26C38.1052 26.9981 37.9213 27.9535 37.5852 28.8345C37.5154 29.0175 37.4804 29.109 37.4646 29.1804C37.4489 29.2512 37.4428 29.301 37.4411 29.3735C37.4394 29.4466 37.4493 29.5272 37.4692 29.6883L37.8717 32.9585C37.9153 33.3125 37.9371 33.4895 37.8782 33.6182C37.8266 33.731 37.735 33.8205 37.6211 33.8695C37.4911 33.9254 37.3146 33.8995 36.9617 33.8478L33.7765 33.3809C33.6101 33.3565 33.527 33.3443 33.4512 33.3448C33.3763 33.3452 33.3245 33.3507 33.2511 33.3661C33.177 33.3817 33.0823 33.4172 32.893 33.4881C32.0097 33.819 31.0524 34 30.0526 34C29.6344 34 29.2237 33.9683 28.8227 33.9073M23.6316 38C26.5965 38 29 35.5376 29 32.5C29 29.4624 26.5965 27 23.6316 27C20.6667 27 18.2632 29.4624 18.2632 32.5C18.2632 33.1106 18.3603 33.6979 18.5395 34.2467C18.6153 34.4787 18.6532 34.5947 18.6657 34.6739C18.6786 34.7567 18.6809 34.8031 18.6761 34.8867C18.6714 34.9668 18.6514 35.0573 18.6113 35.2383L18 38L20.9948 37.591C21.1583 37.5687 21.24 37.5575 21.3114 37.558C21.3865 37.5585 21.4264 37.5626 21.5001 37.5773C21.5701 37.5912 21.6742 37.6279 21.8823 37.7014C22.4306 37.8949 23.0191 38 23.6316 38Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>

      <div class="mb-3 pb-3">
        <p class="fw-bold fs-xl-4 mb-3"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_two_title") ?></p>
        <p><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_two_title") ?></p>
      </div>

      <!-- Check list -->
      <div>
        <?php foreach(carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_two_features") as $feature):?>
        <div class="d-flex align-items-center mb-3 pb-1">
          <div class="me-2 pe-1">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_334_73324)">
                <path d="M8.75016 14.0002L12.2502 17.5002L19.2502 10.5002M25.6668 14.0002C25.6668 20.4435 20.4435 25.6668 14.0002 25.6668C7.55684 25.6668 2.3335 20.4435 2.3335 14.0002C2.3335 7.55684 7.55684 2.3335 14.0002 2.3335C20.4435 2.3335 25.6668 7.55684 25.6668 14.0002Z" stroke="#F39C12" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_334_73324">
                  <rect width="28" height="28" rx="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <span class="fs-2 text-grey-100"><?= $feature["description"] ?></span>
        </div>
        <?php endforeach ?>
      </div>
    </div>

  </div>
</div>

<!-- Right Image, Left Text -->
<div class="ps-lg-3 pb-5 mb-5">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center ps-lg-5 ms-lg-3 gap-5">
    <div class="ps-lg-3 ms-lg-3">
      <div class="mb-4">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M22.0944 27.2288C22.0322 26.8282 22 26.4179 22 26C22 21.5817 25.6052 18 30.0526 18C34.4999 18 38.1052 21.5817 38.1052 26C38.1052 26.9981 37.9213 27.9535 37.5852 28.8345C37.5154 29.0175 37.4804 29.109 37.4646 29.1804C37.4489 29.2512 37.4428 29.301 37.4411 29.3735C37.4394 29.4466 37.4493 29.5272 37.4692 29.6883L37.8717 32.9585C37.9153 33.3125 37.9371 33.4895 37.8782 33.6182C37.8266 33.731 37.735 33.8205 37.6211 33.8695C37.4911 33.9254 37.3146 33.8995 36.9617 33.8478L33.7765 33.3809C33.6101 33.3565 33.527 33.3443 33.4512 33.3448C33.3763 33.3452 33.3245 33.3507 33.2511 33.3661C33.177 33.3817 33.0823 33.4172 32.893 33.4881C32.0097 33.819 31.0524 34 30.0526 34C29.6344 34 29.2237 33.9683 28.8227 33.9073M23.6316 38C26.5965 38 29 35.5376 29 32.5C29 29.4624 26.5965 27 23.6316 27C20.6667 27 18.2632 29.4624 18.2632 32.5C18.2632 33.1106 18.3603 33.6979 18.5395 34.2467C18.6153 34.4787 18.6532 34.5947 18.6657 34.6739C18.6786 34.7567 18.6809 34.8031 18.6761 34.8867C18.6714 34.9668 18.6514 35.0573 18.6113 35.2383L18 38L20.9948 37.591C21.1583 37.5687 21.24 37.5575 21.3114 37.558C21.3865 37.5585 21.4264 37.5626 21.5001 37.5773C21.5701 37.5912 21.6742 37.6279 21.8823 37.7014C22.4306 37.8949 23.0191 38 23.6316 38Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>

      <div class="mb-3 pb-3">
        <p class="fw-bold fs-xl-4 mb-3"><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_three_title") ?></p>
        <p><?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_three_title") ?></p>
      </div>

      <!-- Check list -->
      <div>
        <?php foreach(carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_three_features") as $feature):?>
        <div class="d-flex align-items-center mb-3 pb-1">
          <div class="me-2 pe-1">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_334_73324)">
                <path d="M8.75016 14.0002L12.2502 17.5002L19.2502 10.5002M25.6668 14.0002C25.6668 20.4435 20.4435 25.6668 14.0002 25.6668C7.55684 25.6668 2.3335 20.4435 2.3335 14.0002C2.3335 7.55684 7.55684 2.3335 14.0002 2.3335C20.4435 2.3335 25.6668 7.55684 25.6668 14.0002Z" stroke="#F39C12" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_334_73324">
                  <rect width="28" height="28" rx="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <span class="fs-2 text-grey-100"><?= $feature["description"] ?></span>
        </div>
        <?php endforeach ?>
      </div>
    </div>

    <div class="text-center text-lg-end">
      <img src="<?= carbon_get_post_meta(get_the_ID(), "tcf_credit_card_feature_three_image") ?>" alt="" class="mw-100">
    </div>
  </div>
</div>


<div class="container mb-5 pb-3 text-center">
  <p class="fw-bold mb-3 pb-1 fs-xl-4">Frequently asked questions</p>
  <p class="fs-1 ">Everything you need to know about the product and billing.</p>
</div>

<div class="container mb-5 pb-3">
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php foreach (carbon_get_post_meta(get_the_ID(), "tcf_post_faqs") as $key => $faq) : ?>
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

<div class="container mb-5 pb-5">
  <div class="bg-dark-100 p-3 text-center rounded-3">
    <div class="p-3">
      <div class="mb-3 mb-2">
        <img src="<?= get_template_directory_uri() ?>/public/images/avatar_group.png" alt="">
      </div>

      <p class="fw-bold fs-1 mb-2">Still have questions?</p>
      <p class="fs-2 mb-3 pb-3">Can’t find the answer you’re looking for? Please chat to our friendly team.</p>

      <a href="<?= carbon_get_theme_option("get_in_touch_link") ?>" class="btn btn-info text-white p-3 fw-bold fs-3">Get in touch</a>
    </div>
  </div>
</div>



<?php get_footer(); ?>
