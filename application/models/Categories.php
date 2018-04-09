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
class Categories extends CSV_Model {

    //id of category (acts as primary key)
    public $id;
    //name of category
    public $name;
    //description of category
    public $desc;

    /*
     * Categories model constructor
     */

    function __construct() {
        parent::__construct('../data/Categories.csv', 'id');
    }

    public function rules() {
        $config = array(
                ['field' => 'id', 'label' => 'id', 'rules' => 'integer'],
                ['field' => 'name', 'label' => 'name', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
                ['field' => 'desc', 'label' => 'desc', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
        );
        return $config;
    }

}
