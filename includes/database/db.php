<?php

require_once(__DIR__ . "/schema.php");

class DB {

  /**
   * Current database migration version
   * And will be saved in 'wp_options' table
   *
   * @static float $db_version Migration version
   */
  private static $db_version = 0.5;

  public function __construct() {
    // Initialize Database
    //
    // Check if current database version stored on `wp_options`
    // table is set or lower than the plugin's version($db_version)
    // and if so, then upgrade current database.
    $option_db_version = get_option("tcf_db_version");
    if ($option_db_version === false || $option_db_version < self::$db_version) {
      $this->init_db();
    }
  }

  /**
   * Initializes Database Tables
   */
  private function init_db() {
    // Require wordpress database files
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    update_option("tcf_db_version", self::$db_version);

    // Initialize Schema Generator Class
    $schema_generator = new DatabaseSchema();

    // Get Table Schemas And Insert Them Into an Array
    $schemas = [];
    $schemas[] = $schema_generator::cards();

    // Iterate over schemas and create them
    foreach ($schemas as $schema) {
      dbDelta($schema);
    }
  }
}
