<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginP extends CI_Model {

	public function VERIF($email, $psw)
	{
        if($email=="Admin" && $psw=="admin"){
            redirect(site_url("admin"));
        }
        else{
            $sql = sprintf("SELECT * FROM Account WHERE email=%s AND password=%s", $this->db->escape($email), $this->db->escape($psw));
            $data = $this->db->query($sql);
            $row = $data->row_array();
            if($row!=NULL){
                $this->session->set_userdata('idA', $row['idA']);
                echo $this->session->userdata('idA');
            }else{
                redirect('Welcome/');
            }
        }
	}		
}
