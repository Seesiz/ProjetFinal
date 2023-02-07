<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $this->load->model('categorie');
        $allCategorie = $this->categorie->getAllC();
        $data = array('title'=>'Admin', 'name'=>'Admin', 'categorie'=>$allCategorie);
		$this->load->view('admin', $data);
    }
}
