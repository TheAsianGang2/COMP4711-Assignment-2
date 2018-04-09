<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends Application {

    //put your code here
    public function Initialize($id) {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        $items = $this->Accessories->all();
        $set = $this->Sets->get($id);
        for ($x = 0; $x < sizeof($items); $x++) {
            $acc = $this->Accessories->get($x);
            if ($set->helmId == $acc->id || $set->chestId == $acc->id || $set->primaryId == $acc->id || $set->secondaryId == $acc->id) {
                $temp = array('item' => '<option selected value="' . $acc->id . '">' . $acc->name . '</option>');
            } else {
                $temp = array('item' => '<option value="' . $acc->id . '">' . $acc->name . '</option>');
            }
            if ($acc->catId == 0) {
                $h[] = $temp;
            }
            if ($acc->catId == 1) {
                $c[] = $temp;
            }
            if ($acc->catId == 2) {
                $p[] = $temp;
            }
            if ($acc->catId == 3) {
                $s[] = $temp;
            }
        }
        $this->data['h'] = $h;
        $this->data['c'] = $c;
        $this->data['p'] = $p;
        $this->data['s'] = $s;
        $this->data['setId'] = $id;
        $this->data['setName'] = $set->name;
        $this->data['pagetitle'] = 'Edit Set';
        $this->data['pagebody'] = 'editSet';
        $this->render();
    }

    public function OnSubmit() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        $this->load->model('Sets');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->Sets->rules());
        $set = $this->input->post();
        $set = (object) $set;

        if ($this->form_validation->run()) {
            $this->Sets->update($set);
        } else {
            $this->alert(validation_errors(), 'danger');
        }
        redirect('/Welcome/set/' . $set->id);
    }
}
