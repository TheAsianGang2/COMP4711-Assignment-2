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
    public $id;
    //category id (acts as foreign key)
    public $catId;
    //path of the image
    public $imagepath;
    //name of the accessory
    public $name;
    //damage stat of accessory
    public $damage;
    //protection stat of accessory
    public $protection;
    //weight stat of accessory
    public $weight;
    
    
    // insist that an ID be present
    public function setId($value) {
    if (empty($value))
        throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
    }

    // insist that a Category id from 0 to 3
    public function setCatId($value) {
    $allowed = [0,1,2,3];
    if (!in_array($value, $allowed))
        throw new Exception('A category must be in 0 - 3');
    $this->color = $value;
    return $this;
    }
    
    // insist that a Image Path be present and no longer than 50 characters
    public function setImagepath($value) {
    if (empty($value))
        throw new Exception('A Imagepath cannot be empty');
    if (strlen($value) > 50)
        throw new Exception('A Imagepath cannot be longer than 30 characters');
    $this->imagepath = $value;
    return $this;
    }
    
    // insist that a Name be present and no longer than 30 characters
    public function setName($value) {
    if (empty($value))
        throw new Exception('A Name cannot be empty');
    if (strlen($value) > 30)
        throw new Exception('A Name cannot be longer than 30 characters');
    $this->name = $value;
    return $this;
    } 

    // insist that a Damage be a positive number, and less than 1000 (grams)
    public function setDamage($value) {
    if (!is_numeric($value))
        throw new Exception('Weight must be numeric');
    if ($value > 1000)
        throw new Exception('A fruit cannot weigh more than 1kg');
    $this->damage = $value;
    return $this;
    }
    
        // insist that a Protection be a positive number, and less than 1000 (grams)
    public function setProtection($value) {
    if (!is_numeric($value))
        throw new Exception('Weight must be numeric');
    if ($value > 100)
        throw new Exception('A fruit cannot weigh more than 1kg');
    $this->protection = $value;
    return $this;
    }
    
        // insist that a Weight be a positive number, and less than 1000 (grams)
    public function setWeight($value) {
    if (!is_numeric($value))
        throw new Exception('Weight must be numeric');
    if ($value > 100)
        throw new Exception('A fruit cannot weigh more than 1kg');
    $this->weight = $value;
    return $this;
    }
    
    // Return ID
    public function getId() {
        return $this->id;
    }

    // Return Category ID
    public function getCatId() {
        return $this->color;
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
    /*
     * Accessories model constructor
     */
    public function __construct()
    {
        parent::__construct('../data/Accessories.csv', 'id');
    }
}
