<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajout extends CI_Controller {
    public function index(){
        $data = array('nom'=>$_GET['categorie']);
        $this->db->insert('Categorie', $data);
        redirect('admin');
    }

    public function delete(){
        $this->load->model('delete');
        $this->delete->DEL("Categorie", "idC", $_GET['idC']);
        redirect('admin');
    }
}
