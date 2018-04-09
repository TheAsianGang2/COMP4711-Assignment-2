<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accessory
 *
 * @author yunominosencha
 */
class Accessory extends Entity {

//id (acts as primary key)
    protected $id;
    //category id (acts as foreign key)
    protected $catId;
    //path of the image
    protected $imagepath;
    //name of the accessory
    protected $name;
    //damage stat of accessory
    protected $damage;
    //protection stat of accessory
    protected $protection;
    //weight stat of accessory
    protected $weight;

    // insist that an ID be present
    public function setId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An Id must have a value');
        $this->id = $value;
        return $this;
    }

    // insist that a Category id from 0 to 3
    public function setCatId($value) {
        if (empty($value))
            throw new Exception('catId cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A category must be in 0 - 3');
        $this->catId = $value;
        return $this;
    }

    // insist that a Image Path be present and no longer than 50 characters
    public function setImagepath($value) {
        if (empty($value))
            throw new Exception('A Imagepath cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A Imagepath cannot be longer than 64 characters');
        $this->imagepath = $value;
        return $this;
    }

    // insist that a Name be present and no longer than 30 characters
    public function setName($value) {
        if (empty($value))
            throw new Exception('A Name cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A Name cannot be longer than 64 characters');
        $this->name = $value;
        return $this;
    }

    public function setDamage($value) {
        if (empty($value))
            throw new Exception('Damage cannot be empty');
        if (!is_numeric($value))
            throw new Exception('Damage must be numeric');
        if ($value > 100)
            throw new Exception('Must be less than 101');
        $this->damage = $value;
        return $this;
    }

    public function setProtection($value) {
        if (empty($value))
            throw new Exception('Protection cannot be empty');
        if (!is_numeric($value))
            throw new Exception('Protection must be numeric');
        if ($value > 100)
            throw new Exception('Must be less than 101');
        $this->protection = $value;
        return $this;
    }

    public function setWeight($value) {
        if (empty($value))
            throw new Exception('Weight cannot be empty');
        if (!is_numeric($value))
            throw new Exception('Weight must be numeric');
        if ($value > 100)
            throw new Exception('Must be less than 101');
        $this->weight = $value;
        return $this;
    }

    /*
      // Return ID
      public function getId() {
      return $this->id;
      }

      // Return Category ID
      public function getCatId() {
      return $this->catId;
      }

      // Return Image Path
      public function getImagepath() {
      return $this->imagepath;
      }

      // Return Name
      public function getName() {
      return $this->name;
      }

      // Return Damage
      public function getDamage() {
      return $this->damage;
      }

      // Return Protection
      public function getProtection() {
      return $this->protection;
      }

      // Return Weight
      public function getWeight() {
      return $this->weight;
      }

      public function __construct()
      {
      parent::__construct('../data/Accessories.csv', 'id');
      }
     */
}
