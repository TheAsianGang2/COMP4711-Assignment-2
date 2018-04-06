<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sets
 *
 * @author Owner
 */
class Sets extends Entity {
    
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
    
    /*
     * Sets model constructor
     */
    function __construct()
    {
        parent::__construct('../data/Sets.csv', 'id');
    }
}
