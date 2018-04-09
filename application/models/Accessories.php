<?php

/**
 * Description of Accessories
 *
 * @author Owner
 */
class Accessories extends CSV_Model {

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

    public function __construct() {
        parent::__construct('../data/Accessories.csv', 'id');
    }

    public function rules() {
        $config = array(
                ['field' => 'damage', 'label' => 'secondary', 'rules' => 'integer|less_than[100]'],
                ['field' => 'protection', 'label' => 'secondary', 'rules' => 'integer|less_than[100]'],
                ['field' => 'weight', 'label' => 'secondary', 'rules' => 'integer|less_than[100]'],
        );
        return $config;
    }

}
