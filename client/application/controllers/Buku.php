<?php if(! defined("BASEPATH")) exit("No direct script access allowed");
class Buku extends CI_Controller{
var $API ="";
function __construct() {
parent::__construct();
$this->API = "http://localhost:8080/tokobuku/client/index.php/api/";
}
// menampilkan data produk
function index(){
$data['databuku'] =
json_decode($this->curl->simple_get($this->API.'/buku'));
$data['title'] = "Data Buku";
$this->load->view('buku/data',$data);
}
// tambah data produk
function tambah(){
if(isset($_POST['submit'])){
$data = array(
'judul' => $this->input->post('judul'),
'pengarang' => $this->input->post('pengarang'),
'penerbit' => $this->input->post('penerbit'),
'gambar' => $this->input->post('gambar'),
'harga' => $this->input->post('harga'),
'deskripsi' => $this->input->post('deskrpsi'));
$insert = $this->curl->simple_put($this->API.'/buku', $data,
array(CURLOPT_BUFFERSIZE => 10));
if($insert)
{
$this->session->set_flashdata('hasil','Tambah Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Tambah Data Gagal');
}
redirect('buku');
}else{
$data['title'] = "Tambah Data";
$this->load->view('buku/tambah',$data);
}
}
// ubah data produk
function ubah(){
if(isset($_POST['submit'])){
$data = array(
'id' => $this->input->post('id'),
'judul' => $this->input->post('judul'),
'pengarang' => $this->input->post('pengarang'),
'penerbit' => $this->input->post('penerbit'),
'gambar' => $this->input->post('gambar'),
'harga' => $this->input->post('harga'),
'deskripsi' => $this->input->post('deskrpsi'));

$update = $this->curl->simple_post($this->API.'/buku', $data,
array(CURLOPT_BUFFERSIZE => 10));
if($update)
{
$this->session->set_flashdata('hasil','Ubah Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Ubah Data Gagal');
}
redirect('buku');
}else{
$params = array('id' => $this->uri->segment(3));
$data['title'] = "Ubah Data";
$produk =
json_decode($this->curl->simple_get($this->API.'/buku',$params));
$data['databuku'] = $buku[0];
$this->load->view('buku/ubah',$data);
}
}
// hapus data produk
function hapus($id){
if(empty($id)){
redirect('buku');
}else{
$delete = $this->curl->simple_delete($this->API.'/buku',
array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
if($delete)
{
$this->session->set_flashdata('hasil','Hapus Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Hapus Data Gagal');
}
redirect('buku');
}
}
}
