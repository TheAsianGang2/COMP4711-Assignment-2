<?php

/**
 * Description of Accessories
 *
 * @author Owner
 */
//class Accessories extends CSV_Model{
class Accessories extends Entity{
    
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
    
    /*
     * Accessories model constructor
     */
    public function __construct()
    {
        parent::__construct('../data/Accessories.csv', 'id');
    }
}
