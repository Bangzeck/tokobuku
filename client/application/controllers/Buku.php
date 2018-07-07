

<?php if(! defined("BASEPATH")) exit("No direct script access allowed");

class Buku extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/tokobuku/server/index.php/api/";
    }

    // menampilkan data buku
    function index(){
        $data['databuku'] = json_decode($this->curl->simple_get($this->API.'/buku'));
        $data['title'] = "Data buku";
        $this->load->view('admin/listBuku',$data);
    }

    // tambah data buku
    function tambah(){
        if(isset($_POST['submit'])){
            $data = array(
                'judul'      =>  $this->input->post('judul'),
                'pengarang'     =>  $this->input->post('pengarang'),
                'penerbit'      =>  $this->input->post('penerbit'),
                'harga'      =>  $this->input->post('harga'),
                'deskripsi'     =>  $this->input->post('deskripsi'));
            $insert =  $this->curl->simple_put($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10));
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

    // ubah data buku
    function ubah(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'        =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'tipe'     =>  $this->input->post('tipe'),
                'harga'      =>  $this->input->post('harga'),
                'stok'     =>  $this->input->post('stok'));
            $update =  $this->curl->simple_post($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Ubah Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Ubah Data Gagal');
            }
            redirect('buku');
        }else{
            $params = array('id'    =>  $this->uri->segment(3));
            $data['title'] = "Ubah Data";
            $buku = json_decode($this->curl->simple_get($this->API.'/buku',$params));
            $data['databuku'] = $buku[0];
            $this->load->view('buku/ubah',$data);
        }
    }

    // hapus data buku
    function hapus($id){
        if(empty($id)){
            redirect('buku');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/buku', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
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
