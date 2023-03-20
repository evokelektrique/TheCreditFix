<?php

if (!class_exists('WP_List_Table')) {
  require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

require_once(__DIR__ . "/card-functions.php");

/**
 * List table class
 */
class TCF_Cards_List_Table extends \WP_List_Table {

  function __construct() {
    parent::__construct(array(
      'singular' => 'card',
      'plural'   => 'cards',
      'ajax'     => false
    ));
  }

  function get_table_classes() {
    return array('widefat', 'fixed', 'striped', $this->_args['plural']);
  }

  /**
   * Message to show if no designation found
   *
   * @return void
   */
  function no_items() {
    _e('No cards found', 'tcf');
  }

  /**
   * Default column values if no callback found
   *
   * @param  object  $item
   * @param  string  $column_name
   *
   * @return string
   */
  function column_default($item, $column_name) {

    switch ($column_name) {
      case 'id':
        return $item->id;

      case 'name':
        return $item->name;

      case 'expiry':
        return $item->expiry;

      case 'card_number':
        return $item->card_number;

      case 'opened':
        return $item->opened;

      case 'limit':
        return $item->limit;

      case 'utilization':
        return $item->utilization;

      case 'email':
        return $item->email;

      case 'street_address':
        return $item->street_address;

      case 'city':
        return $item->city;

      case 'state':
        return $item->state;

      case 'province':
        return $item->province;

      case 'card_reports':
        return $item->card_reports;

      default:
        return isset($item->$column_name) ? $item->$column_name : '';
    }
  }

  /**
   * Get the column names
   *
   * @return array
   */
  function get_columns() {
    $columns = array(
      'cb'           => '<input type="checkbox" />',
      'id'      => __('ID', 'tcf'),
      'name'      => __('Name on the card', 'tcf'),
      'expiry'      => __('Expiry', 'tcf'),
      'card_number'      => __('Card number', 'tcf'),
      'opened'      => __('Opened', 'tcf'),
      'limit'      => __('Limit', 'tcf'),
      'utilization'      => __('Utilization', 'tcf'),
      'email'      => __('Email address', 'tcf'),
      'street_address'      => __('Street address', 'tcf'),
      'city'      => __('City', 'tcf'),
      'state'      => __('State', 'tcf'),
      'province'      => __('Province', 'tcf'),
    );

    return $columns;
  }

  /**
   * Render the designation name column
   *
   * @param  object  $item
   *
   * @return string
   */
  function column_name($item) {

    $actions           = array();
    $actions['view']   = sprintf('<a href="%s" data-id="%d" title="%s">%s</a>', admin_url('admin.php?page=tcf-cards&action=view&id=' . $item->id), $item->id, __('View this item', 'tcf'), __('View', 'tcf'));
    $actions['delete'] = sprintf('<a href="%s" class="submitdelete" data-id="%d" title="%s">%s</a>', admin_url('admin.php?page=tcf-cards&action=delete&id=' . $item->id), $item->id, __('Delete this item', 'tcf'), __('Delete', 'tcf'));

    return sprintf('<a href="%1$s"><strong>%2$s</strong></a> %3$s', admin_url('admin.php?page=tcf-cards&action=view&id=' . $item->id), $item->name, $this->row_actions($actions));
  }

  /**
   * Get sortable columns
   *
   * @return array
   */
  function get_sortable_columns() {
    $sortable_columns = array(
      'id' => array('id', true),
      'name' => array('name', true),
    );

    return $sortable_columns;
  }

  /**
   * Set the bulk actions
   *
   * @return array
   */
  function get_bulk_actions() {
    $actions = array(
      'trash'  => __('Move to Trash', 'tcf'),
    );
    return $actions;
  }

  /**
   * Render the checkbox column
   *
   * @param  object  $item
   *
   * @return string
   */
  function column_cb($item) {
    return sprintf(
      '<input type="checkbox" name="card_id[]" value="%d" />',
      $item->id
    );
  }

  /**
   * Set the views
   *
   * @return array
   */
  public function get_views_() {
    $status_links   = array();
    $base_link      = admin_url('admin.php?page=sample-page');

    foreach ($this->counts as $key => $value) {
      $class = ($key == $this->page_status) ? 'current' : 'status-' . $key;
      $status_links[$key] = sprintf('<a href="%s" class="%s">%s <span class="count">(%s)</span></a>', add_query_arg(array('status' => $key), $base_link), $class, $value['label'], $value['count']);
    }

    return $status_links;
  }

  /**
   * Prepare the class items
   *
   * @return void
   */
  function prepare_items() {
    $columns               = $this->get_columns();
    $hidden                = array();
    $sortable              = $this->get_sortable_columns();
    $this->_column_headers = array($columns, $hidden, $sortable);

    $per_page              = 20;
    $current_page          = $this->get_pagenum();
    $offset                = ($current_page - 1) * $per_page;
    $this->page_status     = isset($_GET['status']) ? sanitize_text_field($_GET['status']) : '2';

    // only ncessary because we have sample data
    $args = array(
      'offset' => $offset,
      'number' => $per_page,
    );

    if (isset($_REQUEST['orderby']) && isset($_REQUEST['order'])) {
      $args['orderby'] = $_REQUEST['orderby'];
      $args['order']   = $_REQUEST['order'];
    }

    $this->items  = tcf_get_all_card($args);

    $this->set_pagination_args(array(
      'total_items' => tcf_get_card_count(),
      'per_page'    => $per_page
    ));
  }
}
