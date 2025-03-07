<?php

/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;
?>

<div class="">
  <?php do_action('woocommerce_before_edit_account_form'); ?>

  <form class="woocommerce-EditAccountForm edit-account" action="" enctype="multipart/form-data" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>

  <?php do_action('woocommerce_edit_account_form_start'); ?>
  <div class="row row-cols-auto mb-4 gy-4">

      <div class="col-12 col-lg-6">
        <label class="form-label" for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr($user->first_name); ?>" />
      </div>

      <div class="col-12 col-lg-6">
        <label for="account_last_name" class="form-label"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="form-control" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr($user->last_name); ?>" />
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <div class="col-12 col-lg-6">
        <label for="account_display_name" class="form-label"><?php esc_html_e('Display name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="form-control" name="account_display_name" id="account_display_name" value="<?php echo esc_attr($user->display_name); ?>" />
      </div>

      <div class="col-12 col-lg-6">
        <label for="account_email" class="form-label"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
        <input type="email" class="form-control" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr($user->user_email); ?>" />
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <?php do_action('woocommerce_edit_account_form'); ?>
    </div>


    <p>
      <?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>
      <button type="submit" class="btn btn-info fw-bold fs-3 text-white py-2 px-3" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>"><?php esc_html_e('Save changes', 'woocommerce'); ?></button>
      <input type="hidden" name="action" value="save_account_details" />
    </p>

    <?php do_action('woocommerce_edit_account_form_end'); ?>
  </form>

  <?php do_action('woocommerce_after_edit_account_form'); ?>
</div>
