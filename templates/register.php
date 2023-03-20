<?php

/**
 * Template Name: Register
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if(is_user_logged_in()){
  wp_redirect(get_permalink(get_option('woocommerce_myaccount_page_id')));
}

get_header();
do_action('woocommerce_before_customer_login_form');
?>

<div class="container mw-100 my-5 py-5" style="width: 460px;">

  <div class="mb-3 pb-3 text-center">
    <img src="<?= get_template_directory_uri() ?>/public/images/full_logo.png" alt="" class="mb-4">

    <p class="fw-bold fs-xl-4 mb-2 pb-1">Log in to your account</p>
    <p class="fs-3 m-0">Welcome back! Please enter your details.</p>
  </div>

  <form method="post" class="pb-3 mb-3" <?php do_action('woocommerce_register_form_tag'); ?>>

    <?php do_action('woocommerce_register_form_start'); ?>

    <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
      <div class="mb-3 pb-1">
        <label for="reg_username" class="form-label mb-2"><?php esc_html_e('Username', 'woocommerce'); ?></label>
        <input type="text" class="form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
      </div>
    <?php endif; ?>

    <div class="mb-3 pb-1">
      <label for="reg_email" class="form-label mb-2"><?php esc_html_e('Email address', 'woocommerce'); ?></label>
      <input type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
    </div>

    <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
      <div class="mb-3 pb-1">
        <label for="reg_password" class="form-label mb-2"><?php esc_html_e('Password', 'woocommerce'); ?></label>
        <input type="password" class="form-control" name="password" id="reg_password" autocomplete="new-password" />
      </div>
    <?php else : ?>
      <p><?php esc_html_e('A password will be sent to your email address.', 'woocommerce'); ?></p>
    <?php endif; ?>

    <?php do_action('woocommerce_register_form'); ?>

    <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>

    <button type="submit" class="btn btn-info fw-bold text-white fs-3 w-100 py-2" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>">
      Register
    </button>
    <?php do_action('woocommerce_register_form_end'); ?>
  </form>

  <p class="fs-4 text-center">
    Have an account already?
    <a href="<?= site_url("/login") ?>" class="text-orange fw-bold text-decoration-none fs-4">Log in</a>
  </p>
</div>

<?php
do_action('woocommerce_after_customer_login_form');
get_footer()
?>
