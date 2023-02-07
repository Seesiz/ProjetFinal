<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model {
    public function getAllC(){
        $data = $this->db->query("SELECT * FROM Categorie");
        return $data;
    }
}
