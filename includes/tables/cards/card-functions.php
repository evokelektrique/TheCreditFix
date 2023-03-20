<?php

/**
 * Get all card
 *
 * @param $args array
 *
 * @return array
 */
function tcf_get_all_card($args = array()) {
  global $wpdb;

  $defaults = array(
    'number'     => 20,
    'offset'     => 0,
    'orderby'    => 'id',
    'order'      => 'ASC',
  );

  $args      = wp_parse_args($args, $defaults);
  $cache_key = 'card-all';
  $items     = wp_cache_get($cache_key, 'tcf');

  if (false === $items) {
    $items = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'tcf_cards ORDER BY ' . $args['orderby'] . ' ' . $args['order'] . ' LIMIT ' . $args['offset'] . ', ' . $args['number']);

    wp_cache_set($cache_key, $items, 'tcf');
  }

  return $items;
}

/**
 * Fetch all card from database
 *
 * @return array
 */
function tcf_get_card_count() {
  global $wpdb;

  return (int) $wpdb->get_var('SELECT COUNT(*) FROM ' . $wpdb->prefix . 'tcf_cards');
}

/**
 * Fetch a single card from database
 *
 * @param int   $id
 *
 * @return array
 */
function tcf_get_card($id = 0) {
  global $wpdb;

  return $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'tcf_cards WHERE id = %d', $id));
}

/**
 * It takes in a file, uploads it to the media library, and returns the file's url.
 *
 * @param args An array of arguments to override the defaults.
 * @param user_id The ID of the user who owns the card.
 *
 * @return the id of the inserted row.
 */
function tcf_get_user_cards($args = [], $user_id) {
  global $wpdb;

  $defaults = array(
    'number'     => 20,
    'offset'     => 0,
    'orderby'    => 'id',
    'order'      => 'ASC',
  );

  $args = wp_parse_args($args, $defaults);

  return $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'tcf_cards WHERE user_id = ' . $user_id . '  ORDER BY ' . $args['orderby'] . ' ' . $args['order'] . ' LIMIT ' . $args['offset'] . ', ' . $args['number']);
}

function tcf_insert_card($form_inputs, $form_files, $user_id) {
  global $wpdb;

  $data = [
    "user_id" => $user_id,
    "name" => sanitize_text_field($form_inputs["name"]),
    "expiry" => sanitize_text_field($form_inputs["expiry"]),
    "card_number" => sanitize_text_field($form_inputs["card_number"]),
    "opened" => sanitize_text_field($form_inputs["opened"]),
    "limit" => sanitize_text_field($form_inputs["limit"]),
    "utilization" => sanitize_text_field($form_inputs["utilization"]),
    "email" => sanitize_text_field($form_inputs["email"]),
    "street_address" => sanitize_text_field($form_inputs["street_address"]),
    "city" => sanitize_text_field($form_inputs["city"]),
    "state" => sanitize_text_field($form_inputs["state"]),
    "province" => sanitize_text_field($form_inputs["province"]),
  ];

  $files = [
    "card_report_one" => $form_files["card_report_one"],
    "card_report_two" => $form_files["card_report_two"],
  ];

  $card_report_one = upload_file($files["card_report_one"]);
  $card_report_two = upload_file($files["card_report_two"]);

  if (is_wp_error($card_report_one)) {
    return wp_send_json_error($card_report_one);
  }

  if (is_wp_error($card_report_two)) {
    return wp_send_json_error($card_report_two);
  }

  $data['card_report_one'] = $card_report_one["url"];
  $data['card_report_two'] = $card_report_two["url"];

  $table = $wpdb->prefix . 'tcf_cards';
  $wpdb->insert($table, $data);
  $insert_id = $wpdb->insert_id;

  return $insert_id;
}

/**
 * It uploads a file to the server and adds it to the WordPress media library
 *
 * @param file The file to upload.
 *
 * @return the  array.
 */
function upload_file($file) {
  require_once(ABSPATH . 'wp-admin/includes/file.php');

  $upload = wp_handle_upload(
    $file,
    array('test_form' => false)
  );

  if (!empty($upload['error'])) {
    return new WP_Error('uplaod', $upload['error']);
  }

  // it is time to add our uploaded image into WordPress media library
  $attachment_id = wp_insert_attachment(
    array(
      'guid'           => $upload['url'],
      'post_mime_type' => $upload['type'],
      'post_title'     => basename($upload['file']),
      'post_content'   => '',
      'post_status'    => 'inherit',
    ),
    $upload['file']
  );

  if (is_wp_error($attachment_id) || !$attachment_id) {
    return new WP_Error('uplaod', 'Upload error.');
  }

  // update medatata, regenerate image sizes
  require_once(ABSPATH . 'wp-admin/includes/image.php');

  wp_update_attachment_metadata(
    $attachment_id,
    wp_generate_attachment_metadata($attachment_id, $upload['file'])
  );

  return $upload;
}

function tcf_delete_card($id) {
  global $wpdb;

  $table = $wpdb->prefix . 'tcf_cards';
  return $wpdb->delete($table, [
    "id" => $id,
  ]);
}

function tcf_get_status($card) {
  $status = null;

  switch ($card->status) {
    case 0:
      $status = "Review";
      break;

    case 1:
      $status = "Rejected";
      break;

    case 2:
      $status = "Accepted";
      break;

    default:
      $status = "Review";
      break;
  }

  return $status;
}

function tcf_change_status_card($id, $status) {
  global $wpdb;

  $table = $wpdb->prefix . 'tcf_cards';
  return $wpdb->update($table, ["status" => $status], ["id" => $id]);
}
