<?php
class EmployeeDB {
  public static function getEmployees($id = null, $name = null, $position = null) {
    $db = DB::getDB();

    if ($id) {
        $query = 'SELECT * FROM employees
                    WHERE id = '.$id;
    } elseif ($name) {
        $query = 'SELECT * FROM employees
                    WHERE name LIKE '.$name;
    }  elseif ($position) {
        $query = 'SELECT * FROM employees
                    WHERE name LIKE '.$position;
    } else {
        $query = 'SELECT * FROM employees';
    }
    
    $statement = $db->prepare($query);
    $statement->execute();

    $employees = $statement->fetchAll();
    $statement->closeCursor();
            
    return $employees;
  }

  public static function addEmployee($name, $position) {
    $db = DB::getDB();
    $query = "INSERT INTO employees
                    (name, position)
                VALUES
                    ('$name', '$position')";
    $db->exec($query);
  }

  public static function updateEmployee($id = null, $name = null, $position = null) {
    $db = DB::getDB();
    $query = "UPDATE employees
                SET name = '$name', position = '$position'
                WHERE id = '$id'";
    $db->exec($query);
  }

  public static function deleteEmployee($id) {
    $db = DB::getDB();
    $query = 'DELETE FROM employees
                WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
  }
}

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
        $error_message = $e->getMessage();
        include('../../../errors/errors.php');
        exit();
      }
    }
    return self::$db;
  }
}

class Employee {
  private $id, $name, $position;

  public function __construct($id, $name, $position) {
    $this->$id = $id;
    $this->$name = $name;
    $this->$position = $position;
  }

  // ID
  public function getId() {
    return $this->$id;
  }

  public function setId($value) {
    $this->$id = $value;
  }

  // Name
  public function getName() {
    return $this->$name;
  }

  public function setName($value) {
    $this->$name = $value;
  }

  // Position
  public function getPosition() {
    return $this->$position;
  }

  public function setPosition($value) {
    $this->$position = $value;
  }
}


?>