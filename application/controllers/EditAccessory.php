<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditAccessory extends Application {

    function index() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST || $role == ROLE_USER) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        //Set pagebody and page title, render
        $this->data['pagebody'] = 'editAccessory';
        $this->data['pagetitle'] = 'Edit Accessory';
        $this->render();
    }

    public function OnSubmit() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST || $role == ROLE_USER) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        $this->load->model('Accessories');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->Accessories->rules());
        $accessory = $this->input->post();
        $accessory = (object) $accessory;

        if ($this->form_validation->run()) {
            $this->Accessories->update($accessory);
        } else {
            $this->alert(validation_errors(), 'danger');
        }
        
        redirect("/Catalog");
    }

}
