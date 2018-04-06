<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categories
 *
 * @author Owner
 */
class Categories extends Entity {

    //id of category (acts as primary key)
    public $id;
    //name of category
    public $name;
    //description of category
    public $desc;
    
    /*
     * Categories model constructor
     */
    function __construct()
    {
        parent::__construct('../data/Categories.csv', 'id');
    }
}
