<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logon extends CI_Model {

	public function INSCRIPTION($data)
	{
        $this->db->insert('Account', $data);
	}		
}
