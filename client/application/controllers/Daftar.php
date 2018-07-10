<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->models('MDaftar');
  $this->load->helper('form');
 }

 public function index()
 {
  // $this->load->view('daftar');

  if ($this->input->post('submit')) {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');




            $objek = array(
                'nama' => $nama,
                'email' => $email,
                'username' => $username,
                'password' => $password
                 );

            // $query = $this->db->query("INSERT INTO customer (nama,email,username,password) VALUES ('$nama','$email','$username','$password'"));

            $query = $this->MDaftar->simpan($objek);

            if ($query) {
                $this->session->set_flashdata('berhasil_simpan', 'sukses');
                redirect(base_url('pembeli/login'));
            }

        } else {
          $this->load->view('daftar');
        }
 }


}