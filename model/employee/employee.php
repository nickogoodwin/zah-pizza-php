<?php
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