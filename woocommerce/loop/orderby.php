<?php

/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
  exit;
}

?>
<form class="mb-2 pb-1" method="get">

  <div class="input-group">
    <label class="input-group-text bg-dark-100 text-white border-dark-100" for="">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 10H15M2.5 5H17.5M7.5 15H12.5" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </label>
    <select name="orderby" onchange="this.form.submit()" class="orderby custom-select" aria-label="<?php esc_attr_e('Shop order', 'woocommerce'); ?>">
      <?php foreach ($catalog_orderby_options as $id => $name) : ?>
        <option value="<?php echo esc_attr($id); ?>" <?php selected($orderby, $id); ?>><?php echo esc_html($name); ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <input type="hidden" name="paged" value="1" />
  <?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
</form>
