<?php
class DB {
  private static $dsn = 'mysql:host=localhost;dbname=zah_pizza';
  private static $username = 'app';
  private static $password = 'Pa55word';
  private static $db;
  
  private function __construct() {}

  public static function getDB() {
    if (!isset(self::$db)) {
      try {
        self::$db = new PDO(self::$dsn, self::$username, self::$password);
      } catch (PDOException $e) {
        self::displayError($e->getMessage());
      }
    }
    return self::$db;
  }

  public static function displayError($error_message) {
    global $app_path;
    include('errors/errors.php');
    exit();
  }
}
?>