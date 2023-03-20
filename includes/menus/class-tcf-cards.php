<?php

require_once(__DIR__ . "/../tables/cards/card-functions.php");

/**
 * Admin Menu
 */
class TCF_Cards {

  /**
   * Kick-in the class
   */
  public function __construct() {
    add_action('admin_menu', array($this, 'admin_menu'));
  }

  /**
   * Add menu items
   *
   * @return void
   */
  public function admin_menu() {

    /** Top Menu **/
    add_menu_page(__('Credit Cards', 'tcf'), __('Credit Cards', 'tcf'), 'manage_options', 'tcf-cards', array($this, 'plugin_page'), 'dashicons-groups', null);

    add_submenu_page('tcf-cards', __('Credit Cards', 'tcf'), __('Credit Cards', 'tcf'), 'manage_options', 'tcf-cards', array($this, 'plugin_page'));
  }

  /**
   * Handles the plugin page
   *
   * @return void
   */
  public function plugin_page() {
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id     = isset($_GET['id']) ? intval($_GET['id']) : 0;

    switch ($action) {
      case 'delete':
        tcf_delete_card($id);
        wp_safe_redirect(admin_url("?page=tcf-cards"));
        exit;

      case 'view':
        $template = dirname(__FILE__) . '/views/tcf-single.php';
        break;

      case 'edit':
        $template = dirname(__FILE__) . '/views/tcf-edit.php';
        break;

      case 'new':
        $template = dirname(__FILE__) . '/views/tcf-new.php';
        break;

      default:
        $template = dirname(__FILE__) . '/views/tcf-list.php';
        break;
    }

    if (file_exists($template)) {
      include $template;
    }
  }
}
