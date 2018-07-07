<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index(){
		$adm = array(
			"user" => $this->load->view("admin/user",array(),true),
			"home" => $this->load->view("admin/home",array(),true),
	);
		$this->load->view("admin/index",$adm);
	}
}
