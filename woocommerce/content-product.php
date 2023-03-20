<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
  return;
}
?>

<div class="col-12 col-lg-4">
  <div class="bg-dark-100 rounded-3 p-3">
    <div class="mb-3 position-relative credit-card-archive-background-image w-100" style="background: url(<?= get_template_directory_uri() ?>/public/images/credit_card_frame.png); background-size: cover; background-repeat: no-repeat; background-position: center; height: 230px;">
      <a href="<?= get_the_permalink() ?>" class="position-absolute top-0 start-0 w-100 h-100"></a>

      <p class="fw-bold m-0 position-absolute top-0 start-0 pt-3 ps-4">The Credit Fix</p>

      <div class="position-absolute bottom-0 start-0 ps-4 pb-4 mb-2">
        <div class="mb-2 d-flex align-items-center justify-content-between">
          <p class="mb-0 fs-5 d-inline-block">
            <?= carbon_get_post_meta($product->get_id(), "credit_card_bank") ?>
          </p>

          <p class="m-0 fs-5 d-inline-block">
            <?= carbon_get_post_meta($product->get_id(), "credit_card_expire_date") ?>
          </p>
        </div>

        <div class="font-monospace fs-3">
          <?= carbon_get_post_meta($product->get_id(), "credit_card_card_number") ?>
        </div>
      </div>
    </div>

    <div class="mb-2 pb-1">
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
        <span class="fs-4">Available Spots</span>
        <span class="fs-4 fw-bold">
          <?= $product->get_stock_quantity(); ?>
        </span>
      </div>

      <div class="mb-3 d-flex align-items-center justify-content-between">
        <span class="fs-4">Report By</span>
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
    </div>


    <div class="d-flex flex-md-row flex-column gap-3 justify-content-between">
      <a href="<?= site_url("checkout?add-to-cart={$product->get_id()}&quantity=1") ?>" class="btn btn-info text-white fw-bold fs-3 py-2 px-3 w-100">Purchase</a>
      <a href="#" class="btn btn-outline-grey-200 fs-3 py-2 px-3 w-100">Chat to sales</a>
    </div>

  </div>
</div>
