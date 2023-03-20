<?php

/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

require_once(__DIR__ . "/../../includes/tables/cards/card-functions.php");
$user = wp_get_current_user();
$user_id = $user->ID;
$user_cards = tcf_get_user_cards([], $user_id);
$approved_status = get_user_meta($user_id, 'user_activation_status', true);

$allowed_html = array(
  'a' => array(
    'href' => array(),
  ),
);

/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

$customer_orders = get_posts(apply_filters('woocommerce_my_account_my_orders_query', array(
  'numberposts' => 5,
  'meta_key' => '_customer_user',
  'meta_value' => get_current_user_id(),
  'post_type' => wc_get_order_types('view-orders'),
  'post_status' => array_keys(wc_get_order_statuses()),
  'order_by' => "desc",
)));
?>
<?php if ($approved_status != true) : ?>
  <div class="bg-dark-100 rounded p-3 mb-4">
    <p class="fw-bold fs-4 mb-1">Your not Verified Yet!</p>
    <p class="mb-2 pb-1 fs-4">Your Profile is not verified, Please verify your profile in the profile section.</p>
    <a href="<?= site_url("/my-account/edit-account/") ?>" class="text-decoration-none text-white d-flex align-items-center gap-2 fw-bold fs-4">
      <span>Verify Profile</span>

      <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.1665 10.0001H15.8332M15.8332 10.0001L9.99984 4.16675M15.8332 10.0001L9.99984 15.8334" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
    </a>
  </div>
<?php endif ?>

<div class="bg-dark-100 rounded py-3 px-4 mb-4 d-none">
  <p class="fw-bold fs-2 mb-1">Credit Cards monitored</p>
  <p class="mb-4 fs-4">You are getting a great credit score.</p>

  <div class="row row-cols-auto">
    <div class="col-12 col-lg-4 position-relative">
      <div class="position-absolute top-0 end-0 d-flex align-items-center fs-4 fw-bold gap-2 py-1 px-2 rounded-pill text-success bg-success-100">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 9.5V2.5M6 2.5L2.5 6M6 2.5L9.5 6" stroke="#12B76A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <span>10%</span>
      </div>

      <div class="custom_circle_bars" data-text="10000"></div>

      <div class="text-center my-3 py-1">
        <p class="mb-1">Identity IQ</p>
        <p class="m-0">+1ps &bull; Good</p>
      </div>
    </div>

    <div class="col-12 col-lg-4 position-relative">
      <div class="position-absolute top-0 end-0 d-flex align-items-center fs-4 fw-bold gap-2 py-1 px-2 rounded-pill text-success bg-success-100">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 9.5V2.5M6 2.5L2.5 6M6 2.5L9.5 6" stroke="#12B76A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <span>10%</span>
      </div>

      <div class="custom_circle_bars" data-text="10000"></div>

      <div class="text-center my-3 py-1">
        <p class="mb-1">Identity IQ</p>
        <p class="m-0">+1ps &bull; Good</p>
      </div>
    </div>

    <div class="col-12 col-lg-4 position-relative">
      <div class="position-absolute top-0 end-0 d-flex align-items-center fs-4 fw-bold gap-2 py-1 px-2 rounded-pill text-success bg-success-100">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 9.5V2.5M6 2.5L2.5 6M6 2.5L9.5 6" stroke="#12B76A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <span>10%</span>
      </div>

      <div class="custom_circle_bars" data-text="10000"></div>

      <div class="text-center my-3 py-1">
        <p class="mb-1">Identity IQ</p>
        <p class="m-0">+1ps &bull; Good</p>
      </div>
    </div>

  </div>
</div>

<div class="bg-dark-100 rounded py-3 px-4 mb-4">
  <div class="mb-4 d-flex justify-content-between flex-md-row flex-column align-items-center">
    <p class="fw-bold fs-2">Your cards</p>
    <a href="<?= site_url("/my-account/credit_cards/") ?>" class="btn btn-white text-dark">Manage Cards</a>
  </div>

  <div class="row row-cols-auto gx-lg-5 gy-3">
    <?php foreach ($user_cards as $card) : ?>
      <div class="col-12 col-lg-4">
        <div class="position-relative" style="background-image: url(<?= get_template_directory_uri() ?>/public/images/credit_card_mockup_horizontal.png);background-position: center;background-repeat: no-repeat;background-size: cover; height: 190px; width: 316px;">
          <p class="m-2 p-1 position-absolute top-0 start-0 fw-bold">The Credit Fix</p>

          <div class="position-absolute bottom-0 start-0 m-2 p-1">

            <div class="d-flex align-items-center justify-content-between mb-2">
              <p class="m-0 p-0 fs-5"><?= $card->{"name"} ?></p>
              <p class="m-0 p-0 fs-5"><?= $card->{"expiry"} ?></p>
            </div>

            <p class="m-0 p-0 fs-5 fw-bold font-monospace"><?= $card->{"card_number"} ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="bg-dark-100 p-3 rounded">
  <p class="fs-2 fw-bold mb-3">Your orders</p>

  <?php if (!empty($customer_orders)) : ?>

    <div class="responsive-table">
      <table class="table table-borderless text-white table-sm">
        <thead>
          <tr>
            <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
              <th class="pb-4 woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr($column_id); ?>"><span class="nobr"><?php echo esc_html($column_name); ?></span></th>
            <?php endforeach; ?>
          </tr>
        </thead>

        <tbody>
          <?php
          foreach ($customer_orders as $customer_order) {
            $order      = wc_get_order($customer_order); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
            $item_count = $order->get_item_count() - $order->get_item_count_refunded();
          ?>
            <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr($order->get_status()); ?> order">
              <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
                <td class="pb-4 woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr($column_id); ?>" data-title="<?php echo esc_attr($column_name); ?>">
                  <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                    <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                  <?php elseif ('order-number' === $column_id) : ?>
                    <a href="<?php echo esc_url($order->get_view_order_url()); ?>" class="text-decoration-none fw-bold fs-4 text-white">
                      <?php echo esc_html(_x('#', 'hash before order number', 'woocommerce') . $order->get_order_number()); ?>
                    </a>

                  <?php elseif ('order-date' === $column_id) : ?>
                    <time datetime="<?php echo esc_attr($order->get_date_created()->date('c')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time>

                  <?php elseif ('order-status' === $column_id) : ?>
                    <?php echo esc_html(wc_get_order_status_name($order->get_status())); ?>

                  <?php elseif ('order-total' === $column_id) : ?>
                    <?php
                    /* translators: 1: formatted order total 2: total order items */
                    echo wp_kses_post(sprintf(_n('%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce'), $order->get_formatted_order_total(), $item_count));
                    ?>

                  <?php elseif ('order-actions' === $column_id) : ?>
                    <?php
                    $actions = wc_get_account_orders_actions($order);

                    if (!empty($actions)) {
                      foreach ($actions as $key => $action) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        echo '<a href="' . esc_url($action['url']) . '" class="btn btn-info fw-bold text-white py-1 px-3 ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</a>';
                      }
                    }
                    ?>
                  <?php endif; ?>
                </td>
              <?php endforeach; ?>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <?php do_action('woocommerce_before_account_orders_pagination'); ?>

  <?php else : ?>
    <div class="text-center py-5">
      <svg width="152" height="118" viewBox="0 0 152 118" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="76" cy="52" r="52" fill="#EAECF0" />
        <g filter="url(#filter0_dd_633_97643)">
          <rect x="18" y="12" width="115" height="72" rx="6" fill="url(#paint0_linear_633_97643)" />
          <rect x="28" y="26" width="20" height="15" rx="2" fill="#D0D5DD" />
          <circle cx="114.667" cy="32.3333" r="8.33333" fill="#98A2B3" />
          <circle cx="104.667" cy="32.3333" r="8.33333" fill="#D0D5DD" />
          <path d="M28 73.6667C28 72.7462 28.7462 72 29.6667 72H46.3333C47.2538 72 48 72.7462 48 73.6667C48 74.5871 47.2538 75.3333 46.3333 75.3333H29.6667C28.7462 75.3333 28 74.5871 28 73.6667Z" fill="#D0D5DD" />
          <path d="M53 73.6667C53 72.7462 53.7462 72 54.6667 72H71.3333C72.2538 72 73 72.7462 73 73.6667C73 74.5871 72.2538 75.3333 71.3333 75.3333H54.6667C53.7462 75.3333 53 74.5871 53 73.6667Z" fill="#D0D5DD" />
          <path d="M78 73.6667C78 72.7462 78.7462 72 79.6667 72H96.3333C97.2538 72 98 72.7462 98 73.6667C98 74.5871 97.2538 75.3333 96.3333 75.3333H79.6667C78.7462 75.3333 78 74.5871 78 73.6667Z" fill="#D0D5DD" />
          <path d="M103 73.6667C103 72.7462 103.746 72 104.667 72H121.333C122.254 72 123 72.7462 123 73.6667C123 74.5871 122.254 75.3333 121.333 75.3333H104.667C103.746 75.3333 103 74.5871 103 73.6667Z" fill="#D0D5DD" />
        </g>
        <circle cx="21" cy="5" r="5" fill="#F2F4F7" />
        <circle cx="18" cy="109" r="7" fill="#F2F4F7" />
        <circle cx="145" cy="35" r="7" fill="#F2F4F7" />
        <circle cx="134" cy="8" r="4" fill="#F2F4F7" />
        <g filter="url(#filter1_b_633_97643)">
          <rect x="52" y="70" width="48" height="48" rx="24" fill="#344054" fill-opacity="0.4" />
          <path d="M76 90V94M76 98H76.01M86 94C86 99.5228 81.5228 104 76 104C70.4772 104 66 99.5228 66 94C66 88.4772 70.4772 84 76 84C81.5228 84 86 88.4772 86 94Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </g>
        <defs>
          <filter id="filter0_dd_633_97643" x="1.33333" y="12" width="148.333" height="105.333" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feMorphology radius="3.33333" operator="erode" in="SourceAlpha" result="effect1_dropShadow_633_97643" />
            <feOffset dy="6.66667" />
            <feGaussianBlur stdDeviation="3.33333" />
            <feColorMatrix type="matrix" values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.04 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_633_97643" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feMorphology radius="3.33333" operator="erode" in="SourceAlpha" result="effect2_dropShadow_633_97643" />
            <feOffset dy="16.6667" />
            <feGaussianBlur stdDeviation="10" />
            <feColorMatrix type="matrix" values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.1 0" />
            <feBlend mode="normal" in2="effect1_dropShadow_633_97643" result="effect2_dropShadow_633_97643" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_633_97643" result="shape" />
          </filter>
          <filter id="filter1_b_633_97643" x="44" y="62" width="64" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feGaussianBlur in="BackgroundImageFix" stdDeviation="4" />
            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_633_97643" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_633_97643" result="shape" />
          </filter>
          <linearGradient id="paint0_linear_633_97643" x1="22.0049" y1="83.1477" x2="19.9135" y2="17.2505" gradientUnits="userSpaceOnUse">
            <stop stop-color="#E4E7EC" />
            <stop offset="1" stop-color="#F9FAFB" />
          </linearGradient>
        </defs>
      </svg>

      <p class="fw-bold fs-3 my-3">No Orders Found!</p>
    </div>
  <?php endif; ?>
</div>
