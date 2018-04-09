<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Owner
 */
class Category extends Entity {

    //put your code here
    //id of category (acts as primary key)
    protected $id;
    //name of category
    protected $name;
    //description of category
    protected $desc;

    public function setId($value) {
        if (empty($value))
            throw new Exception('A id cannot be empty');
        $allowed = [0, 1, 2, 3];
        if (!in_array($value, $allowed))
            throw new Exception('A category must be in 0 - 3');
        $this->id = $value;
        return $this;
    }

    public function setName($value) {
        if (empty($value))
            throw new Exception('A name cannot be empty');
        //$allowed = ['head', 'chest', 'primary', 'secondary'];
        //if (!in_array($value, $allowed))
        //    throw new Exception('A name must be head, chest, primary or secondary');
        $this->name = $value;
        return $this;
    }

    public function setDesc($value) {
        if (empty($value))
            throw new Exception('A desc cannot be empty');
        if (strlen($value) > 30)
            throw new Exception('A desc cannot be longer than 30 characters');
        $this->desc = $value;
        return $this;
    }

}
