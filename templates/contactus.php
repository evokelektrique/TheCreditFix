<?php

/**
 * Template Name: Contact Us
 */

get_header();
?>

<div class="container py-5 my-5">
  <div class="text-center mb-5 pb-5">
    <p class="text-orange fw-bold fs-3 mb-2 pb-1">Contact us</p>
    <p class="fw-bold fs-xl-3 mb-4">We’d love to hear from you</p>
    <p class="fs-1 m-0">Our friendly team is always here to chat.</p>
  </div>

  <div class="row mb-5 pb-5">
    <div class="col-12 col-lg-4 text-center">
      <div class="mb-3 pb-1">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M18 23L26.1649 28.7154C26.8261 29.1783 27.1567 29.4097 27.5163 29.4993C27.8339 29.5785 28.1661 29.5785 28.4837 29.4993C28.8433 29.4097 29.1739 29.1783 29.8351 28.7154L38 23M22.8 36H33.2C34.8802 36 35.7202 36 36.362 35.673C36.9265 35.3854 37.3854 34.9265 37.673 34.362C38 33.7202 38 32.8802 38 31.2V24.8C38 23.1198 38 22.2798 37.673 21.638C37.3854 21.0735 36.9265 20.6146 36.362 20.327C35.7202 20 34.8802 20 33.2 20H22.8C21.1198 20 20.2798 20 19.638 20.327C19.0735 20.6146 18.6146 21.0735 18.327 21.638C18 22.2798 18 23.1198 18 24.8V31.2C18 32.8802 18 33.7202 18.327 34.362C18.6146 34.9265 19.0735 35.3854 19.638 35.673C20.2798 36 21.1198 36 22.8 36Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>
      <p class="fw-bold mb-2 fs-1">Email</p>
      <p class="mb-3 pb-1 fs-3">Our friendly team is here to help.</p>
      <a href="mailto:<?= carbon_get_theme_option("contact_us_email") ?>" class="text-decoration-none text-orange fw-bold fs-3"><?= carbon_get_theme_option("contact_us_email") ?></a>
    </div>

    <div class="col-12 col-lg-4 text-center">
      <div class="mb-3 pb-1">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M28 28.5C29.6569 28.5 31 27.1569 31 25.5C31 23.8431 29.6569 22.5 28 22.5C26.3431 22.5 25 23.8431 25 25.5C25 27.1569 26.3431 28.5 28 28.5Z" stroke="#E74C3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M28 38C30 34 36 31.4183 36 26C36 21.5817 32.4183 18 28 18C23.5817 18 20 21.5817 20 26C20 31.4183 26 34 28 38Z" stroke="#E74C3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>
      <p class="fw-bold mb-2 fs-1">Office</p>
      <p class="mb-3 pb-1 fs-3">Come say hello at our office HQ.</p>
      <p class="m-0 text-orange fw-bold fs-3"><?= carbon_get_theme_option("contact_us_office") ?></p>
    </div>

    <div class="col-12 col-lg-4 text-center">
      <div class="mb-3 pb-1">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="48" height="48" rx="24" fill="#FFEFD6" />
          <path d="M24.3803 24.8534C25.0763 26.303 26.0251 27.6616 27.2266 28.8632C28.4282 30.0648 29.7869 31.0136 31.2365 31.7096C31.3612 31.7694 31.4235 31.7994 31.5024 31.8224C31.7828 31.9041 32.127 31.8454 32.3644 31.6754C32.4313 31.6275 32.4884 31.5704 32.6027 31.4561C32.9523 31.1064 33.1271 30.9316 33.3029 30.8174C33.9658 30.3864 34.8204 30.3864 35.4833 30.8174C35.6591 30.9316 35.8339 31.1064 36.1835 31.4561L36.3783 31.6509C36.9098 32.1824 37.1755 32.4481 37.3198 32.7335C37.6069 33.301 37.6069 33.9713 37.3198 34.5389C37.1755 34.8242 36.9098 35.09 36.3783 35.6214L36.2207 35.779C35.6911 36.3087 35.4263 36.5735 35.0662 36.7757C34.6667 37.0001 34.0462 37.1615 33.588 37.1601C33.1751 37.1589 32.8928 37.0788 32.3284 36.9186C29.295 36.0576 26.4326 34.4332 24.0447 32.0452C21.6567 29.6572 20.0322 26.7948 19.1712 23.7614C19.011 23.197 18.9309 22.9148 18.9297 22.5018C18.9283 22.0436 19.0897 21.4231 19.3141 21.0236C19.5164 20.6636 19.7812 20.3988 20.3108 19.8691L20.4684 19.7115C20.9999 19.1801 21.2656 18.9143 21.551 18.77C22.1185 18.4829 22.7888 18.4829 23.3564 18.77C23.6417 18.9143 23.9075 19.1801 24.4389 19.7115L24.6338 19.9064C24.9834 20.256 25.1582 20.4308 25.2725 20.6066C25.7035 21.2694 25.7035 22.124 25.2725 22.7869C25.1582 22.9627 24.9834 23.1375 24.6338 23.4871C24.5195 23.6014 24.4623 23.6586 24.4145 23.7254C24.2445 23.9628 24.1858 24.3071 24.2675 24.5874C24.2905 24.6663 24.3204 24.7287 24.3803 24.8534Z" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <rect x="4" y="4" width="48" height="48" rx="24" stroke="#FFEFD6" stroke-width="8" />
        </svg>
      </div>
      <p class="fw-bold mb-2 fs-1">Phone</p>
      <p class="mb-3 pb-1 fs-3">Mon-Fri from 8am to 5pm.</p>
      <a href="tel:<?= carbon_get_theme_option("contact_us_phone") ?>" class="text-decoration-none text-orange fw-bold fs-3"><?= carbon_get_theme_option("contact_us_phone") ?></a>
    </div>
  </div>

  <div class="container mw-100 py-5 my-5">
    <div class="mb-5 pb-3 text-center">
      <p class="mb-2 pb-1 text-orange fw-bold fs-xl-6">Contact us</p>
      <p class="fw-bold fs-xl-4 mb-3 pb-1">Get in touch</p>
      <p class="fs-1 m-0">We’d love to hear from you. Please fill out this form.</p>
    </div>

    <div class="mw-100 mx-auto" style="width: 480px">
      <?php $wpform_id = carbon_get_theme_option("contact_us_form_id");
      echo do_shortcode('[wpforms id="' . $wpform_id . '" title="false"]') ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
