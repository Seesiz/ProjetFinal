<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Redirect extends CI_Controller {
    public function index(){
        $data = array('title'=>$_GET['title']);
        $this->load->view($_GET['view'], $data);
    }
}
