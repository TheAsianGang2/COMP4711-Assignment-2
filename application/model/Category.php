<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author yunominosencha
 */
class Category extends Entity  {
    
    //id of category (acts as primary key)
    public $id;
    //name of category
    public $name;
    //description of category
    public $desc;
    
    // insist that an ID be present
    public function setId($value) {
    if (empty($value))
        throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
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
    
    // insist that a Category id from 0 to 3
    public function setDesc($value) {
    $allowed = [0,1,2,3];
    if (!in_array($value, $allowed))
        throw new Exception('A category must be in 0 - 3');
    $this->desc = $value;
    return $this;
    }

    // Return ID
    public function getId() {
        return $this->id;
    }
    
    // Return Name
    public function getName() {
        return $this->name;
    } 
    
    // Return Desc
    public function getDesc() {
        return $this->Desc;
    } 
    
    /*
     * Categories model constructor
     */
    function __construct()
    {
        parent::__construct('../data/Categories.csv', 'id');
    }
}
