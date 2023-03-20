<?php
// Autoload
require_once(__DIR__ . '/vendor/autoload.php');

require_once(__DIR__ . '/includes/the_credit_fix.php');
require_once(__DIR__ . '/includes/menus/class-tcf-cards.php');
require_once(__DIR__ . '/includes/database/db.php');
$GLOBALS["tcf"] = new TheCreditFix();

// Carbon Fields
require_once(__DIR__ . '/includes/carbon_fields.php');

// Initialize Database
new DB();

// Cards menu
new TCF_Cards();


register_taxonomy('product_cat', array('product'), array());

/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
  require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args) {
  if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
    if (array_key_exists('data-toggle', $atts)) {
      unset($atts['data-toggle']);
      $atts['data-bs-toggle'] = 'dropdown';
    }
  }
  return $atts;
}

// add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
// function new_loop_shop_per_page( $cols ) {
//   $cols = 1;
//   return $cols;
// }

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');
function addBootstrapToCheckoutFields($fields) {
  foreach ($fields as &$fieldset) {
    foreach ($fieldset as &$field) {
      // if you want to add the form-group class around the label and the input
      $field['class'][] = 'form-group';

      // add form-control to the actual input
      $field['input_class'][] = 'form-control bg-transparent shadow-none border-dark-300 py-3 text-white';
    }
  }
  return $fields;
}

function my_account_new_endpoints() {
  add_rewrite_endpoint('credit_cards_new', EP_PAGES);
  add_rewrite_endpoint('credit_cards', EP_PAGES);
  add_rewrite_endpoint('credit_card_calculator', EP_PAGES);
  add_rewrite_endpoint('disputes', EP_PAGES);
  add_rewrite_endpoint('subscriptions', EP_PAGES);
}
add_action('init', 'my_account_new_endpoints');

add_action('woocommerce_account_credit_cards_endpoint', function () {
  get_template_part('templates/credit_cards');
});
add_action('woocommerce_account_credit_cards_new_endpoint', function () {
  get_template_part('templates/credit_cards_new');
});
add_action('woocommerce_account_credit_card_calculator_endpoint', function () {
  get_template_part('templates/credit_card_calculator');
});
add_action('woocommerce_account_disputes_endpoint', function () {
  get_template_part('templates/disputes');
});

function my_account_rename_items($menu_items) {
  $menu_items['credit_cards'] = "Credit Cards";
  $menu_items['credit_card_calculator'] = "Credit Calculator";
  $menu_items['disputes'] = "Disputes";
  return $menu_items;
}

add_filter('woocommerce_account_menu_items', 'my_account_rename_items');

function my_account_menu_order($menu_items) {

  $reordered_items = array(
    'dashboard' => __('Dashboard', 'woocommerce'),
    'credit_cards' => __('Credit Cards', 'woocommerce'),
    'orders' => __('My Orders', 'woocommerce'),
    'credit_card_calculator' => __('Credit Calculator', 'woocommerce'),
    'disputes' => __('Disputes', 'woocommerce'),
    'edit-account' => __('Profile', 'woocommerce'),
    'customer-logout' => __('Logout', 'woocommerce'),
  );

  return $reordered_items;
}

add_filter('woocommerce_account_menu_items', 'my_account_menu_order');


// Ajax new card
function ajax_new_card() {
  require_once(__DIR__ . "/includes/tables/cards/card-functions.php");

  if (!is_user_logged_in()) {
    wp_send_json_error("user not logged in");
  }

  $user = wp_get_current_user();
  $user_id = $user->ID;
  $form_inputs = $_POST;
  $form_files = $_FILES;
  $id = tcf_insert_card($form_inputs, $form_files, $user_id);

  wp_send_json_success($id);
}

add_action('wp_ajax_nopriv_new_card', 'ajax_new_card');
add_action('wp_ajax_new_card', 'ajax_new_card');


add_filter('woocommerce_add_to_cart_redirect', 'tcf_skip_cart_redirect_checkout');

function tcf_skip_cart_redirect_checkout($url) {
  return wc_get_checkout_url();
}

add_filter('woocommerce_product_add_to_cart_url', 'tcf_fix_for_individual_products', 10, 2);
function tcf_fix_for_individual_products($add_to_cart_url, $product) {

  if (
    $product->get_sold_individually() // if individual product
    && WC()->cart->find_product_in_cart(WC()->cart->generate_cart_id($product->id)) // if in the cart
    && $product->is_purchasable() // we also need these two conditions
    && $product->is_in_stock()
  ) {
    $add_to_cart_url = wc_get_checkout_url();
  }

  return $add_to_cart_url;
}

// Add the custom field "ssn"
add_action('woocommerce_edit_account_form', 'add_favorite_color_to_edit_account_form');
function add_favorite_color_to_edit_account_form() {
  $user = wp_get_current_user();
?>
  <div class="col-12 col-lg-6">
    <label for="ssn" class="form-label">SSN<span class="required">*</span></label>
    <input type="text" class="form-control" name="ssn" id="ssn" autocomplete="email" value="<?php echo esc_attr($user->ssn); ?>" required />
  </div>

  <div class="col-12 col-lg-6">
    <label for="phone_number" class="form-label">Phone Number<span class="required">*</span></label>
    <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?php echo esc_attr($user->phone_number); ?>" required />
  </div>

  <div class="col-12">
    <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
  </div>

  <div class="col-12 col-lg-6">
    <label for="file_one" class="form-label">Your ID<span class="required">*</span></label>
    <input type="file" class="form-control" name="file_one" id="file_one" value="<?php echo esc_attr($user->file_one); ?>" required />
  </div>

  <div class="col-12 col-lg-6">
    <label for="file_two" class="form-label">Other Personal Documents<span class="required">*</span></label>
    <input type="file" class="form-control" name="file_two" id="file_two" value="<?php echo esc_attr($user->file_two); ?>" required />
  </div>
<?php
}

add_action('woocommerce_save_account_details', 'save_favorite_color_account_details', 12, 1);
function save_favorite_color_account_details($user_id) {
  require_once(__DIR__ . "/includes/tables/cards/card-functions.php");

  $file_one = $_FILES["file_one"];
  $file_one_uploaded = upload_file($file_one);
  if (isset($_FILES['file_one']))
    update_user_meta($user_id, 'file_one', $file_one_uploaded["url"]);

  $file_two = $_FILES["file_two"];
  $file_two_uploaded = upload_file($file_two);
  if (isset($_FILES['file_two']))
    update_user_meta($user_id, 'file_two', $file_two_uploaded["url"]);

  if (isset($_POST['ssn']))
    update_user_meta($user_id, 'ssn', sanitize_text_field($_POST['ssn']));

  if (isset($_POST['phone_number']))
    update_user_meta($user_id, 'phone_number', sanitize_text_field($_POST['phone_number']));
}


add_action( 'show_user_profile', 'rudr_profile_fields' );
add_action( 'edit_user_profile', 'rudr_profile_fields' );

function rudr_profile_fields( $user ) {

	// let's get custom field values
	$file_one = get_user_meta( $user->ID, 'file_one', true );
	$file_two = get_user_meta( $user->ID, 'file_two', true );

	?>
		<h3>Uploaded files</h3>
		<table class="form-table">
	 		<tr>
				<th><label>File one</label></th>
		 		<td>
          <a href="<?= $file_one ?>"><?= $file_one ?></a>
				</td>
			</tr>

      <tr>
				<th><label>File two</label></th>
		 		<td>
          <a href="<?= $file_two ?>"><?= $file_two ?></a>
				</td>
			</tr>
		</table>
	<?php
}
