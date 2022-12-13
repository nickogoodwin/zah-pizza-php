<?php
class User {
    private $id, $email, $password, $firstName, $lastName;

    public function __construct($id, $email, $password, $firstName, $lastName) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // ID
    public function getId() {
        return $this->id;
      }
    
      public function setId($value) {
        $this->id = $value;
      }
    
      // Email
      public function getEmail() {
        return $this->email;
      }
    
      public function setEmail($value) {
        $this->email = $value;
      }
    
      // Password
      public function getPassword() {
        return $this->password;
      }
    
      public function setPassword($value) {
        $this->password = $value;
      }

      // First name
      public function getFirstName() {
        return $this->firstName;
      }
    
      public function setFirstName($value) {
        $this->firstName = $value;
      }

      // Last Name
      public function getLastName() {
        return $this->password;
      }
    
      public function setLastName($value) {
        $this->password = $value;
      }
}
?>