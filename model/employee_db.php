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
?>