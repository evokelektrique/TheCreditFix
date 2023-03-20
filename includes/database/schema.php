<?php

class DatabaseSchema {

  public static $TABLES_PREFIX = "tcf_";

  /**
   * Wordpress Database Object Instance
   * @var class
   */
  private static $wpdb;

  /**
   * Sets $wpdb class variable
   */
  public function __construct() {
    global $wpdb;
    self::$wpdb = $wpdb;
  }

  /**
   * @return string Create table SQL query
   */
  public static function cards() {
    $table_name = self::$wpdb->prefix . self::$TABLES_PREFIX . "cards";

    $charset_collate = self::$wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
          `id` BIGINT unsigned NOT NULL AUTO_INCREMENT,
          `user_id` BIGINT DEFAULT NULL,
          `name` VARCHAR(255) DEFAULT NULL,
          `expiry` VARCHAR(255) DEFAULT NULL,
          `card_number` VARCHAR(255) DEFAULT NULL,
          `opened` VARCHAR(255) DEFAULT NULL,
          `limit` VARCHAR(255) DEFAULT NULL,
          `utilization` VARCHAR(255) DEFAULT NULL,
          `email` VARCHAR(255) DEFAULT NULL,
          `street_address` TEXT DEFAULT NULL,
          `city` VARCHAR(255) DEFAULT NULL,
          `state` VARCHAR(255) DEFAULT NULL,
          `province` VARCHAR(255) DEFAULT NULL,
          `status` INTEGER DEFAULT 0,
          `card_report_one` LONGTEXT DEFAULT NULL,
          `card_report_two` LONGTEXT DEFAULT NULL,
          `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          PRIMARY KEY (id),
          KEY name (name)
       ) $charset_collate";

    return $sql;
  }
}
