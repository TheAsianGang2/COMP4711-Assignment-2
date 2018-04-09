<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Set
 *
 * @author Owner
 */
class Set extends Entity{
    //put your code here
    //id of set (acts as primary key)
    protected $id;
    //name of set
    protected $name;
    //id of helm accessory in set
    public $helmId;
    //id of chest accessory in set
    public $chestId;
    //id of primary accessory in set
    public $primaryId;
    //id of secondary accessory in set
    public $secondaryId;
    
    public function setId($value) {
    if (empty($value))
        throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
    }
    
    public function setName($value) {
    if (empty($value))
        throw new Exception('A Name cannot be empty');
    if (strlen($value) > 64)
        throw new Exception('A Name cannot be longer than 64 characters');
    $this->name = $value;
    return $this;
    }
    
    public function setHelmId($value) {
        if (empty($value))
            throw new Exception('A helmId cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A helmid must be in 0 - 3');
        $this->helmId = $value;
        return $this;
    }
    
    public function setChestId($value) {
        if (empty($value))
            throw new Exception('A chestid cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A chestid must be in 0 - 3');
        $this->chestId = $value;
        return $this;
    }
    
    public function setPrimaryId($value) {
        if (empty($value))
            throw new Exception('A primaryid cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A primaryid must be in 0 - 3');
        $this->primaryId = $value;
        return $this;
    }
    
    public function setSecondaryId($value) {
        if (empty($value))
            throw new Exception('A secondaryid cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A secondaryid must be in 0 - 3');
        $this->secondaryId = $value;
        return $this;
    }
}
