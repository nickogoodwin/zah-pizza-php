<?php
class UserDB {
    public static function getUsers($id = null) {
      $db = DB::getDB();
  
      if ($id) {
          $query = 'SELECT * FROM users
                      WHERE id = '.$id;
      } else {
          $query = 'SELECT * FROM users';
      }
      
      $statement = $db->prepare($query);
      $statement->execute();
  
      $users = $statement->fetchAll();
      $statement->closeCursor();
              
      return $users;
    }
  
    public static function addUser($email, $password, $firstName, $lastName) {
      $db = DB::getDB();
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO users
                      (email, password, firstName, lastName)
                  VALUES
                      ('$email', '$hash', '$firstName', '$lastName')";
      $db->exec($query);
    }
  
    public static function updateUser($id = null, $email = null, $firstName = null, $lastName = null) {
      $db = DB::getDB();
      $query = "UPDATE users
                  SET email = '$email', firstName = '$firstName', lastName = '$lastName',
                  WHERE id = '$id'";
      $db->exec($query);
    }
  
    public static function deleteUser($id) {
      $db = DB::getDB();
      $query = 'DELETE FROM users
                  WHERE id = :id';
      $statement = $db->prepare($query);
      $statement->bindValue(':id', $id);
      $statement->execute();
      $statement->closeCursor();
    }
  }
?>