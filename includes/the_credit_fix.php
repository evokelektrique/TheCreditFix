<?php
class TheCreditFix {
  public $wc;

  public function __construct() {
    global $woocommerce;
    $this->wc = $woocommerce;

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ]);

    // Shortcodes
    add_action('init', [$this, 'register_shortcodes']);

    // Custom endpoints
    add_action('init', [$this, 'custom_endpoints']);

    add_action('init', [$this, 'disable_emojis']);
    // add_action('wp_print_styles', [$this, 'deregister_dashicon'], 100);
    // add_action('wp_enqueue_scripts', [$this, 'dequeue_gutenberg'], 100);
    add_action('wp_logout', [$this, 'safe_redirect_after_logout']);
    // add_action('show_user_profile', [$this, 'extra_user_profile_fields']);
    // add_action('edit_user_profile', [$this, 'extra_user_profile_fields']);
    // add_action('personal_options_update', [$this, 'save_extra_user_profile_fields']);
    // add_action('edit_user_profile_update', [$this, 'save_extra_user_profile_fields']);
    // add_filter('show_admin_bar', '__return_false');
    // add_filter('manage_users_columns', [$this, 'add_user_columns']);
    // add_filter('manage_users_custom_column', [$this, 'add_user_column_data'], 10, 3);
    // add_filter('woocommerce_catalog_orderby', [$this, 'customize_product_sorting']);
    // add_filter('woocommerce_checkout_fields', [$this, 'remove_woo_checkout_fields']);
    // add_filter('woocommerce_checkout_fields', [$this, 'override_checkout_fields']);
    // add_action('woocommerce_admin_order_data_after_shipping_address', [$this, 'custom_checkout_field_display_admin_order_meta'], 10, 1);
    // add_filter('woocommerce_form_field', [$this, 'filter_woocommerce_form_field'], 10, 4);

    // Widgets
    // add_action('widgets_init', [$this, 'register_sidebars']);

    // Carbon Fields
    add_action('after_setup_theme', [$this, 'crb_load']);

    remove_action('wp_head', 'wp_generator');

    // add_filter('woocommerce_product_tabs', [$this, 'sort_products_tabs']);

    add_theme_support('woocommerce');

    // Register Navigation Menus Locations
    register_nav_menus([
      'primary_navigation' => 'header_primary',
      'footer_navigation_one' => 'footer_primary_one',
      'footer_navigation_two' => 'footer_primary_two',
      'footer_navigation_three' => 'footer_primary_three',
    ]);

    // add_filter('woocommerce_enqueue_styles', '__return_false');
    // add_action('wp_enqueue_scripts', [$this, 'woocommerce_script_cleaner'], 99);

    add_action('wp_print_scripts', function () {
      wp_dequeue_script('wc-password-strength-meter');
    }, 20);

    // Include Styles
    $this->add_style('app', get_template_directory_uri() . '/public/css/app.css');
    $this->add_admin_style('a4a_admin_style', get_template_directory_uri() . '/public/css/admin.css');

    // Include Scripts
    $this->add_script('app', get_template_directory_uri() . '/public/js/app.js');
    $this->add_admin_script('a4a_admin_script', get_template_directory_uri() . '/public/js/admin.js');

    // add_filter('template_include', [$this, 'template_chooser']);

    // Defer loading script tags
    add_filter('script_loader_tag', function ($tag, $handle, $src) {
      $script_handlers = [
        'app',
      ];

      if (in_array($handle, $script_handlers)) {
        return '<script src="' . $src . '" defer="" type="text/javascript"></script>' . "\n";
      }

      return $tag;
    }, 10, 3);


    // Increase authentication cookie expire length
    add_filter('auth_cookie_expiration', [$this, 'change_auth_cookie_expire']);

    /**
     * Proper ob_end_flush() for all levels
     *
     * This replaces the WordPress `wp_ob_end_flush_all()` function
     * with a replacement that doesn't cause PHP notices.
     */
    remove_action('shutdown', 'wp_ob_end_flush_all', 1);
    add_action('shutdown', function () {
      while (@ob_end_flush());
    });
  }

  public function wpdocs_get_paginated_links($query) {
    // When we're on page 1, 'paged' is 0, but we're counting from 1,
    // so we're using max() to get 1 instead of 0
    $currentPage = max(1, get_query_var('paged', 1));

    // This creates an array with all available page numbers, if there
    // is only *one* page, max_num_pages will return 0, so here we also
    // use the max() function to make sure we'll always get 1
    $pages = range(1, max(1, $query->max_num_pages));

    // Now, map over $pages and return the page number, the url to that
    // page and a boolean indicating whether that number is the current page
    return array_map(function ($page) use ($currentPage) {
      return (object) array(
        "isCurrent" => $page == $currentPage,
        "page" => $page,
        "url" => get_pagenum_link($page)
      );
    }, $pages);
  }

  public function cta_generate_stars(int $number) {
    $star = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_371_63529)">
        <path d="M9.53834 1.60996C9.70914 1.19932 10.2909 1.19932 10.4617 1.60996L12.5278 6.57744C12.5998 6.75056 12.7626 6.86885 12.9495 6.88383L18.3123 7.31376C18.7556 7.3493 18.9354 7.90256 18.5976 8.19189L14.5117 11.6919C14.3693 11.8139 14.3071 12.0053 14.3506 12.1876L15.5989 17.4208C15.7021 17.8534 15.2315 18.1954 14.8519 17.9635L10.2606 15.1592C10.1006 15.0615 9.89938 15.0615 9.73937 15.1592L5.14806 17.9635C4.76851 18.1954 4.29788 17.8534 4.40108 17.4208L5.64939 12.1876C5.69289 12.0053 5.6307 11.8139 5.48831 11.6919L1.40241 8.19189C1.06464 7.90256 1.24441 7.3493 1.68773 7.31376L7.05054 6.88383C7.23744 6.86885 7.40024 6.75056 7.47225 6.57744L9.53834 1.60996Z" fill="#F2F4F7" />
        <g clip-path="url(#clip1_371_63529)">
          <path d="M9.53834 1.60996C9.70914 1.19932 10.2909 1.19932 10.4617 1.60996L12.5278 6.57744C12.5998 6.75056 12.7626 6.86885 12.9495 6.88383L18.3123 7.31376C18.7556 7.3493 18.9354 7.90256 18.5976 8.19189L14.5117 11.6919C14.3693 11.8139 14.3071 12.0053 14.3506 12.1876L15.5989 17.4208C15.7021 17.8534 15.2315 18.1954 14.8519 17.9635L10.2606 15.1592C10.1006 15.0615 9.89938 15.0615 9.73937 15.1592L5.14806 17.9635C4.76851 18.1954 4.29788 17.8534 4.40108 17.4208L5.64939 12.1876C5.69289 12.0053 5.6307 11.8139 5.48831 11.6919L1.40241 8.19189C1.06464 7.90256 1.24441 7.3493 1.68773 7.31376L7.05054 6.88383C7.23744 6.86885 7.40024 6.75056 7.47225 6.57744L9.53834 1.60996Z" fill="#FEC84B" />
        </g>
      </g>
      <defs>
        <clipPath id="clip0_371_63529">
          <rect width="20" height="20" fill="white" />
        </clipPath>
        <clipPath id="clip1_371_63529">
          <rect width="20" height="20" fill="white" />
        </clipPath>
      </defs>
    </svg>';

    $content = "";

    for ($i = 0; $i < $number; $i++) {
      $content .= $star;
    }

    return $content;
  }

  public function change_auth_cookie_expire() {
    return 31556926; // 1 year in seconds
  }

  public function custom_endpoints() {
    // add_rewrite_endpoint('support', EP_ROOT | EP_PAGES);
  }

  // My account links
  public function change_wc_links($items) {
    // $neworder = [
    //   'dashboard'          => __('Dashboard', 'woocommerce'),
    //   'orders'             => __('Orders', 'woocommerce'),
    //   'support'             => __('پشتیبانی', 'a4a'),
    //   'edit-account'       => __('اطلاعات حساب کاربری', 'a4a'),
    //   'customer-logout'    => __('Logout', 'woocommerce'),
    // ];

    // return $neworder;

    return $items;
  }

  // Override search.php
  function template_chooser($template) {
    global $wp_query;
    $post_type = get_query_var('post_type');
    if ($wp_query->is_search && $post_type == 'products') {
      // redirect to archive-product.php
      return locate_template('archive-product.php');
    }
    return $template;
  }

  function remove_woo_checkout_fields($fields) {
    // remove shipping fields
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);

    // remove billing fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    $fields['billing']['billing_phone']["type"] = "text";

    return $fields;
  }

  // function override_checkout_fields($fields) {
  //   $fields['billing']['billing_telegram'] = array(
  //     'label'        => __('تلگرام', 'a4a'),
  //     'placeholder'   => _x('تلگرام', 'placeholder', 'a4a'),
  //     'required'     => false,
  //     'clear'        => true,
  //     "is-full-width" => false
  //   );

  //   $fields['billing']['billing_whatsapp'] = array(
  //     'label'        => __('واتس اپ', 'a4a'),
  //     'placeholder'  => _x('واتس اپ', 'placeholder', 'a4a'),
  //     'required'     => false,
  //     'clear'        => true,
  //     "is-full-width" => false

  //   );

  //   $fields['billing']['billing_phone'] = array(
  //     'label'        => __('شماره تماس', 'a4a'),
  //     'placeholder'  => _x('شماره تماس خود را وارد کنید', 'placeholder', 'a4a'),
  //     'required'     => true,
  //     'clear'        => true,
  //     "is-full-width" => false
  //   );

  //   // Add dynamic custom fields
  //   $cart = WC()->cart->get_cart();
  //   foreach ($cart as $item_key => $values) {
  //     $product      = $values["data"];
  //     $product_id   = $values["product_id"];
  //     $custom_field = carbon_get_post_meta($product_id, 'product_dynamic_fields');
  //     if (empty($custom_field)) {
  //       continue;
  //     } else {
  //       foreach ($custom_field as $field) {
  //         $name = str_replace(" ", "_", $field["name_en"]);
  //         $key = "billing_" . $name;
  //         $fields["billing"][$key] = [
  //           "label"       => $field["name_fa"],
  //           "placeholder" => $field["placeholder"],
  //           "required"    => false,
  //           'clear'       => true,
  //           "type"        => $field["type"],
  //           "help"        => $field["help"],
  //           "is-full-width" => true
  //         ];

  //         // Append checkbox attributes
  //         if ($field["type"] === "checkbox" || $field["type"] === "radio") {
  //           $fields["billing"][$key]["is-full-width"] = false;
  //           $fields["billing"][$key]["group"] = $field["checkbox_group"];
  //           $fields["billing"][$key]["targets"] = $field["checkbox_targets"];
  //         }
  //       }
  //     }
  //   }

  //   $fields['billing']['order_comments'] = array(
  //     'type'         => "textarea",
  //     'label'        => __('یادداشت سفارش', 'a4a'),
  //     'placeholder'  => _x('یادداشت خود را وارد کنید ...', 'placeholder', 'a4a'),
  //     'required'     => false,
  //     'clear'        => true,
  //     "is-full-width" => false
  //   );

  //   return $fields;
  // }

  // function custom_checkout_field_display_admin_order_meta($order) {
  //   $order_id = $order->get_id();
  //   // $user_email = $user->user_email;
  //   $user_id = $order->get_user_id();
  //   $accounts_metadata = carbon_get_post_meta($order->get_id(), 'order_dynamic_fields');

  //   echo '<p><strong>' . __('واتس اپ') . ':</strong> ' . get_post_meta($order->get_id(), '_billing_whatsapp', true) . '</p>';
  //   echo '<p><strong>' . __('تلگرام') . ':</strong> ' . get_post_meta($order->get_id(), '_billing_telegram', true) . '</p>';

  //   // Add dynamic custom fields
  //   $cart = $order->get_items();
  //   $fields = [];
  //   foreach ($cart as $item_key => $values) {
  //     $product      = $values["data"];
  //     $product_id   = $values["product_id"];
  //     $custom_field = carbon_get_post_meta($product_id, 'product_dynamic_fields');
  //     if (empty($custom_field)) {
  //       continue;
  //     } else {
  //       foreach ($custom_field as $field) {
  //         $name = str_replace(" ", "_", $field["name_en"]);
  //         $fields[$name] = [
  //           "type" => $field["type"],
  //           "name_fa" => $field["name_fa"],
  //           "name_en" => $field["name_en"],
  //           "data" => get_post_meta($order->get_id(), '_billing_' . $name, true)
  //         ];
  //       }
  //     }
  //   }
  //   foreach ($fields as $field) {
  //     if (in_array($field["type"], ["checkbox", "radio"])) {
  //       $field_status = (intval($field["data"])) ? "checked=''" : "";
  //       echo "<input type='checkbox' disabled='' $field_status />&nbsp;" . $field["name_fa"];
  //     } else {
  //       echo '<p><strong>' . $field["name_fa"] . ':</strong> ' . $field["data"] . '</p>';
  //     }
  //   }

  //   // Display send email button
  //   echo '<button data-order-id="' . $order_id . '" data-user-id="' . $user_id . '" class="button button-primary" id="send_order_accounts">' . __("ارسال اکانت ها به ایمیل کاربر", "a4a") . '</button>';

  //   return $order;
  // }

  // function customize_product_sorting($sorting_options) {
  //   $sorting_options = array(
  //     'menu_order' => __('ترتیب محصولات', 'woocommerce'),
  //     'popularity' => __('پر طرفدار', 'woocommerce'),
  //     'rating'     => __('امتیاز', 'woocommerce'),
  //     'date'       => __('جدید ترین', 'woocommerce'),
  //     'price'      => __('ارزان ترین', 'woocommerce'),
  //     'price-desc' => __('گران ترین', 'woocommerce'),
  //   );

  //   return $sorting_options;
  // }

  function woocommerce_script_cleaner() {
    // Remove the generator tag
    remove_action('wp_head', array($GLOBALS['woocommerce'], 'generator'));

    wp_dequeue_style('global-styles');

    wp_dequeue_style('woocommerce_frontend_styles');
    wp_dequeue_style('woocommerce-general');
    wp_dequeue_style('woocommerce-layout');
    wp_dequeue_style('woocommerce-smallscreen');
    wp_dequeue_style('woocommerce_fancybox_styles');
    wp_dequeue_style('woocommerce_chosen_styles');
    wp_dequeue_style('woocommerce_prettyPhoto_css');
    wp_dequeue_script('selectWoo');
    wp_deregister_script('selectWoo');
    wp_dequeue_script('wc-add-payment-method');
    wp_dequeue_script('wc-lost-password');
    wp_dequeue_script('wc_price_slider');
    wp_dequeue_script('wc-single-product');
    wp_dequeue_script('wc-add-to-cart');
    wp_dequeue_script('wc-cart-fragments');
    wp_dequeue_script('wc-credit-card-form');
    wp_dequeue_script('wc-checkout');
    wp_dequeue_script('wc-add-to-cart-variation');
    wp_dequeue_script('wc-single-product');
    wp_dequeue_script('wc-cart');
    wp_dequeue_script('wc-chosen');
    wp_dequeue_script('woocommerce');
    wp_dequeue_script('prettyPhoto');
    wp_dequeue_script('prettyPhoto-init');
    wp_dequeue_script('fancybox');

    // WooCommerce product pages needs jQuery
    if (!is_product()) {
      wp_deregister_script('jquery');
    }
  }

  function register_shortcodes() {
  }

  function crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
  }

  function safe_redirect_after_logout() {
    wp_safe_redirect(home_url());
    exit();
  }

  function dequeue_gutenberg() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_style('wc-blocks-style');
    wp_dequeue_style('wc-blocks-style');
  }

  public function add_nav_menu(array &$locations = []) {
    $this->after_theme_setup(function () use ($locations) {
      register_nav_menus($locations);
    });
  }

  public function load_text_domain($domain, $path = false) {
    $this->after_theme_setup(function () use ($domain, $path) {
      load_theme_textdomain($domain, $path);
    });
    return $this;
  }

  public function add_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
    $this->enqueue_scripts(function () use ($handle, $src, $deps, $ver, $media) {
      wp_enqueue_style($handle, $src, $deps, $ver, $media);
    });
    return $this;
  }

  public function add_admin_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
    $this->admin_enqueue_scripts(function () use ($handle, $src, $deps, $ver, $media) {
      wp_enqueue_style($handle, $src, $deps, $ver, $media);
    });
    return $this;
  }

  public function add_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false) {
    $this->enqueue_scripts(function () use ($handle, $src, $deps, $ver, $in_footer) {

      wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
      // Append Server Side Settings to JS
      wp_localize_script($handle, 'settings', [
        'ajax_url'                    => admin_url("admin-ajax.php"),
        'redirect_url'                => home_url(),
        'tempalte_url'                => get_template_directory_uri(),
      ]);
    });

    return $this;
  }

  public function add_admin_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false) {
    $this->admin_enqueue_scripts(function () use ($handle, $src, $deps, $ver, $in_footer) {

      wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
      // Append Server Side Settings to JS
      wp_localize_script($handle, 'settings', [
        'ajax_url'    => admin_url("admin-ajax.php"),
      ]);
    });

    return $this;
  }

  public static function is_woocommerce_activated() {
    if (class_exists('Woocommerce')) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * Disable the emoji's
   */
  function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', [$this, 'disable_emojis_tinymce']);
    add_filter('wp_resource_hints', [$this, 'disable_emojis_remove_dns_prefetch'], 10, 2);
  }

  /**
   * Filter function used to remove the tinymce emoji plugin.
   *
   * @param array $plugins
   * @return array Difference betwen the two arrays
   */
  function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
      return array_diff($plugins, array('wpemoji'));
    } else {
      return array();
    }
  }

  /**
   * Remove emoji CDN hostname from DNS prefetching hints.
   *
   * @param array $urls URLs to print for resource hints.
   * @param string $relation_type The relation type the URLs are printed for.
   * @return array Difference betwen the two arrays.
   */
  function disable_emojis_remove_dns_prefetch($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
      /** This filter is documented in wp-includes/formatting.php */
      $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

      $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
  }

  //
  // Private
  //

  private function enqueue_scripts($function) {
    add_action('wp_enqueue_scripts', function () use ($function) {
      $function();
    });
  }
  private function admin_enqueue_scripts($function) {
    add_action('admin_enqueue_scripts', function () use ($function) {
      $function();
    });
  }

  private function after_theme_setup($function) {
    add_action('after_theme_setup', function () use ($function) {
      $function();
    });
  }
}
