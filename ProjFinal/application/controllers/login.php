<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function log(){
        $this->load->model('loginP');
        $this->loginP->VERIF($_GET['email'], $_GET['password']);
    }
}
