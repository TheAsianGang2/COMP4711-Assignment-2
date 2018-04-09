<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {

        $this->set(0);
    }

    /*
     * Same function as above, but takes the id that
     * was retrieved by Index() as a parameter. User
     * can make set selection from list
     */

    public function set($id) {

        $role = $this->session->userdata('userrole');
        if ($role == ROLE_USER || $role == ROLE_ADMIN) {
            $this->data['add'] = '<a href="/Add/Initialize" role="button" class="btn">Add</a>';
            $this->data['edit'] = '<a href="/Edit/Initialize/' . $id . '" role="button" class="btn">Edit</a>';
        } else {
            
            $this->data['add'] = '';
            $this->data['edit'] = '';
        }

        $sets = $this->Sets->all();
        $this->data['sets'] = $sets;
        $setOne = $this->Sets->get($id);
        $this->data['name'] = $setOne->name;

        //Retrieves all fields for any accessory to be used in image and tooltip
        $this->data['helmId'] = $this->Accessories->get($setOne->helmId)->imagepath;
        $this->data['helmName'] = $this->Accessories->get($setOne->helmId)->name;
        $this->data['helmDmg'] = $this->Accessories->get($setOne->helmId)->damage;
        $this->data['helmProt'] = $this->Accessories->get($setOne->helmId)->protection;
        $this->data['helmWeight'] = $this->Accessories->get($setOne->helmId)->weight;

        $this->data['chestId'] = $this->Accessories->get($setOne->chestId)->imagepath;
        $this->data['chestName'] = $this->Accessories->get($setOne->chestId)->name;
        $this->data['chestDmg'] = $this->Accessories->get($setOne->chestId)->damage;
        $this->data['chestProt'] = $this->Accessories->get($setOne->chestId)->protection;
        $this->data['chestWeight'] = $this->Accessories->get($setOne->chestId)->weight;

        $this->data['primaryId'] = $this->Accessories->get($setOne->primaryId)->imagepath;
        $this->data['primaryName'] = $this->Accessories->get($setOne->primaryId)->name;
        $this->data['primaryDmg'] = $this->Accessories->get($setOne->primaryId)->damage;
        $this->data['primaryProt'] = $this->Accessories->get($setOne->primaryId)->protection;
        $this->data['primaryWeight'] = $this->Accessories->get($setOne->primaryId)->weight;

        $this->data['secondaryId'] = $this->Accessories->get($setOne->secondaryId)->imagepath;
        $this->data['secondaryName'] = $this->Accessories->get($setOne->secondaryId)->name;
        $this->data['secondaryDmg'] = $this->Accessories->get($setOne->secondaryId)->damage;
        $this->data['secondaryProt'] = $this->Accessories->get($setOne->secondaryId)->protection;
        $this->data['secondaryWeight'] = $this->Accessories->get($setOne->secondaryId)->weight;

        $this->data['damageStat'] = $this->Accessories->get($setOne->helmId)->damage + $this->Accessories->get($setOne->chestId)->damage + $this->Accessories->get($setOne->primaryId)->damage + $this->Accessories->get($setOne->secondaryId)->damage;

        $this->data['protectionStat'] = $this->Accessories->get($setOne->helmId)->protection + $this->Accessories->get($setOne->chestId)->protection + $this->Accessories->get($setOne->primaryId)->protection + $this->Accessories->get($setOne->secondaryId)->protection;

        $this->data['weightStat'] = $this->Accessories->get($setOne->helmId)->weight + $this->Accessories->get($setOne->chestId)->weight + $this->Accessories->get($setOne->primaryId)->weight + $this->Accessories->get($setOne->secondaryId)->weight;

        $this->data['pagebody'] = 'welcome_message';
        $this->data['pagetitle'] = 'Set View';
        $this->render();
    }

}
