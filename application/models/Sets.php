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
class Sets extends CSV_Model {

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

    function __construct() {
        parent::__construct('../data/Sets.csv', 'id');
    }

    public function rules() {
        $config = array(
                ['field' => 'id', 'label' => 'id', 'rules' => 'integer'],
                ['field' => 'name', 'label' => 'name', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
                ['field' => 'helmId', 'label' => 'helm', 'rules' => 'integer|less_than[4]'],
                ['field' => 'chestId', 'label' => 'chest', 'rules' => 'integer|less_than[4]'],
                ['field' => 'primaryId', 'label' => 'primary', 'rules' => 'integer|less_than[4]'],
                ['field' => 'secondaryId', 'label' => 'secondary', 'rules' => 'integer|less_than[4]'],
        );
        return $config;
    }
}
