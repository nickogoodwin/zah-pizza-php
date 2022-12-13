<?php
class Visit {
    private $id, $name, $email, $phone, $message, $newsletter, $date, $employee_id;

    public function __construct($id, $name, $email, $phone, $message, $newsletter, $date, $employee_id) {
        $this->$id = $id;
        $this->$name = $name;
        $this->$email = $email;
        $this->$phone = $phone;
        $this->$message = $message;
        $this->newsletter = $newsletter;
        $this->$date = $date;
        $this->$employee_id = $employee_id;
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

      // Email
      public function getEmail() {
        return $this->$email;
      }
    
      public function setEmail($value) {
        $this->$email = $value;
      }

      // Phone
      public function getPhone() {
        return $this->$phone;
      }
    
      public function setPhone($value) {
        $this->$phone = $value;
      }

      // Message
      public function getMessage() {
        return $this->$message;
      }
    
      public function setMessage($value) {
        $this->$message = $value;
      }

      // Newsletter
      public function getNewsletter() {
        return $this->$newsletter;
      }
    
      public function setNewsletter($value) {
        $this->$newsletter = $value;
      }

      // Date
      public function getDate() {
        return $this->$date;
      }
    
      public function setDate($value) {
        $this->$date = $value;
      }

      // Employee ID
      public function getEmployeeId() {
        return $this->$employee_id;
      }
    
      public function setEmployeeId($value) {
        $this->$employee_id = $value;
      }
}
?>