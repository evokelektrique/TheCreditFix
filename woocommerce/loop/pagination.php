<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';
global $wp_query;
if ( $total <= 1 ) {
	return;
}
?>

<nav aria-label="Pagination" class="border-top border-dark-100 d-flex justify-content-between align-items-center py-3">
    <div class="pagination-link pagination-link-previous">
      <?= get_previous_posts_link('<span>Previous</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15.8332 9.99984H4.1665M4.1665 9.99984L9.99984 15.8332M4.1665 9.99984L9.99984 4.1665" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/> </svg>'); ?>
    </div>

    <ul class="list-unstyled d-flex gap-1">
      <?php foreach ($GLOBALS["tcf"]->wpdocs_get_paginated_links($wp_query) as $link) : ?>
        <?php if ($link->isCurrent) : ?>
          <li class="btn btn-info text-white px-3" aria-current="page">
            <?php _e($link->page) ?>
          </li>
        <?php else : ?>
          <li class="">
            <a class="btn btn-transparent px-3 text-white" href="<?php esc_attr_e($link->url) ?>">
              <?php _e($link->page) ?>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>

    <div class="pagination-link">
      <?= get_next_posts_link('<span>Next</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.1665 9.99984H15.8332M15.8332 9.99984L9.99984 4.1665M15.8332 9.99984L9.99984 15.8332" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /> </svg>'); ?>
    </div>

  </nav>
