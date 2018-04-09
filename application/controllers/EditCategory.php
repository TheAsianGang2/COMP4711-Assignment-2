<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditCategory extends Application {

    function index() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST || $role == ROLE_USER) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        //Set pagebody and page title, render
        $this->data['pagebody'] = 'editCategory';
        $this->data['pagetitle'] = 'Edit Category';
        $this->render();
    }

    public function OnSubmit() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST || $role == ROLE_USER) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        $this->load->model('Categories');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->Categories->rules());
        $category = $this->input->post();
        $category = (object) $category;

        if ($this->form_validation->run()) {
            $this->Categories->update($category);
        } else {
            $this->alert(validation_errors(), 'danger');
        }
        
        redirect("/Catalog");
    }

}
