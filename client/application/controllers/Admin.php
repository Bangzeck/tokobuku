<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $API = "";
	function __construct(){
		parent::__construct();
		$this->API = "http://localhost/tokobuku/server/index.php/api/";
	}
	public function index(){
		
		$this->load->view("admin/index");
	}


	public function login(){

		$this->load->view("admin/login");
	}

	public function listBuku(){
		$data['listbuku'] = json_decode($this->curl->simple_get($this->API.'buku'));
		$this->load->view("admin/listBuku", $data);
	}

	public function user(){
		
		$this->load->view('admin/user');	
	}
	public function editBuku(){
		
		$this->load->view('admin/editBuku');	
	}
	public function tambahBuku(){
		
		$this->load->view('admin/tambahBuku');	
	}
	public function transaksi(){
		
		$this->load->view('admin/transaksi');	
	}


	




}
