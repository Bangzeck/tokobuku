<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index(){
		$adm = array(
			"user" => $this->load->view("admin/user",array(),true),
			"menu" => $this->load->view("admin/menu",array(),true),
			"home" => $this->load->view("admin/home",array(),true),
			"listBuku" => $this->load->view("admin/listBuku",array(),true),
			"tambah" => $this->load->view("admin/tambah",array(),true),
	);
		$this->load->view("admin/index",$adm);
	}


	public function login(){

		$this->load->view("admin/login");
	}



}
