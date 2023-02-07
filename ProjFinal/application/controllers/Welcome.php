<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array('title'=>'Connexion');
		$this->load->view('pages-login', $data);
		
	}

	public function inscription(){
		$data = array("nom"=> $_GET['name'], "password"=>$_GET['password'], "prenom"=>$_GET['username'], "email"=>$_GET['email']);
		$this->load->model('logon');
		$this->logon->INSCRIPTION($data);
		redirect(site_url('Welcome/'));
	}
} ?>
