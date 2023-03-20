<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>


<div class="container mw-100 my-5 py-5" style="width: 460px;">

  <div class="mb-3 pb-3 text-center">
    <img src="<?= get_template_directory_uri() ?>/public/images/full_logo.png" alt="" class="mb-4">

    <p class="fw-bold fs-xl-4 mb-2 pb-1">Log in to your account</p>
    <p class="fs-3 m-0">Welcome back! Please enter your details.</p>
  </div>

  <form class="mb-3 pb-3" method="post">
    <?php do_action('woocommerce_login_form_start'); ?>

    <!-- Username -->
    <div class="mb-3 pb-1">
      <label for="username" class="form-label mb-2">
        <?php esc_html_e('Email or Username', 'woocommerce'); ?>
      </label>
      <input type="text" class="form-control" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
    </div>

    <!-- Password -->
    <div class="mb-3 pb-1">
      <label for="password" class="form-label mb-2">
        <?php esc_html_e('Password', 'woocommerce'); ?>
      </label>
      <input class="form-control" type="password" name="password" id="password" autocomplete="current-password" />
    </div>

    <?php do_action('woocommerce_login_form'); ?>

    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">

      <!-- Remember me -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" name="rememberme" value="forever" id="rememberme">
        <label class="form-check-label fs-4" for="rememberme">
          Remember for 30 days
        </label>
      </div>

      <!-- Lost password link -->
      <a href="<?php echo esc_url(wp_lostpassword_url()); ?>" class="fw-bold fs-4 text-orange text-decoration-none">Forgot password</a>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-info fw-bold text-white fs-3 w-100 py-2" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
      Sign in
    </button>

    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
    <?php do_action('woocommerce_login_form_end'); ?>
  </form>

  <p class="fs-4 text-center">
    Don’t have an account?
    <a href="<?= site_url("/register") ?>" class="text-orange fw-bold text-decoration-none fs-4">Sign up</a>
  </p>
</div>
