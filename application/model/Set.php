<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Set
 *
 * @author yunominosencha
 */
class Set extends Entity  {
    
    //id of set (acts as primary key)
    public $id;
    //name of set
    public $name;
    //id of helm accessory in set
    public $helmId;
    //id of chest accessory in set
    public $chestId;
    //id of primary accessory in set
    public $primaryId;
    //id of secondary accessory in set
    public $secondaryId;
    
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
    
    // insist that a HelmId be present
    public function setHelmId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An helmId must have a value');
        $this->helmId = $value;
        return $this;
    }
    
    // insist that a ChestId be present
    public function setChestId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An chestId must have a value');
        $this->chestId = $value;
        return $this;
    }
  
    // insist that a PrimaryId be present
    public function setPrimaryId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An primaryId must have a value');
        $this->primaryId = $value;
        return $this;
    }
    
    // insist that a SecondaryId be present
    public function setSecondaryId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An secondaryId must have a value');
        $this->secondaryIdId = $value;
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
    
    // Return helmId
    public function getHelmId() {
        return $this->helmId;
    } 
    
    // Return chestId
    public function getChestId() {
        return $this->chestId;
    } 
    
    // Return primaryId
    public function getPrimaryId() {
        return $this->primaryId;
    } 
    
    // Return secondaryId
    public function getSecondaryId() {
        return $this->secondaryId;
    } 
    
    /*
     * Sets model constructor
     */
    function __construct()
    {
        parent::__construct('../data/Sets.csv', 'id');
    }
}
