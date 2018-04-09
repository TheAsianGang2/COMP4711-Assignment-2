<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catalog
 *
 * @author Owner
 */
class Catalog extends Application {
    /*
     * Constructor for Catalog
     */

    function __construct() {
        parent::__construct();
    }

    /*
     * Controller for Catalog view
     */

    function index() {

        $role = $this->session->userdata('userrole');
        if ($role == ROLE_ADMIN) {
            $this->data['MtceA'] = '<a href="/EditAccessory/Index" role="button" class="btn btn-info">Accessory</a>';
            $this->data['MtceC'] = '<a href="/EditCategory/Index" role="button" class="btn btn-primary">Category</a>';
        } else {
            $this->data['MtceA'] = '';
            $this->data['MtceC'] = '';
        }

        //Retrieve csv data
        $accessories = $this->Accessories->all();
        $categories = $this->Categories->all();

        //Inject csv data into controller
        $this->data['accessories'] = $accessories;
        $this->data['categories'] = $categories;


        //Set pagebody and page title, render
        $this->data['pagebody'] = 'catalog';
        $this->data['pagetitle'] = 'Catalog';
        $this->render();
    }

}
