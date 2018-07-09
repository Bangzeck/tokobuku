

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
        $this->load->view('admin/index');
        $this->load->view('admin/listBuku',$data);
    }

    // tambah data buku
    function tambah(){
        if(isset($_POST['submit'])){
            $data = array(
               'judul'         =>  $this->input->post('judul'),
               'pengarang'     =>  $this->input->post('pengarang'),
               'penerbit'      =>  $this->input->post('penerbit'),
               'harga'         =>  $this->input->post('harga'),
               'deskripsi'     =>  $this->input->post('deskripsi'));

          

            $insert =  $this->curl->simple_put($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($insert)
            {
                $this->session->set_flashdata('hasil','Tambah Data Berhasil');
                redirect('admin/listBuku');
            }else
            {
               $this->session->set_flashdata('hasil','Tambah Data Gagal');
            }
        }
    }

    // ubah data buku
    function ubah(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_buku'        =>  $this->input->post('id_buku'),
                'judul'      =>  $this->input->post('judul'),
                'pengarang'     =>  $this->input->post('pengarang'),
                'penerbit'      =>  $this->input->post('penerbit'),
                'harga'     =>  $this->input->post('harga'),
                'deskripsi'      =>  $this->input->post('deskripsi'));

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
            $params = array('id_buku' =>  $this->uri->segment(3));
            $data['title'] = "Ubah Data";
            $buku = json_decode($this->curl->simple_get($this->API.'/buku',$params));
            $data['databuku'] = $buku[0];
            $this->load->view('admin/editBuku',$data);


        }
    }

    // hapus data buku
    function hapus($id){
        if(empty($id)){
           redirect('admin/listBuku');
            // echo "kosong";
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/buku', array('id_buku'=>$id), array(CURLOPT_BUFFERSIZE => 10));
            if($delete)
            {
                // $this->session->set_flashdata('hasil','Hapus Data Berhasil');
                // redirect('admin/listBuku');
                echo "Okke";
            }else
            {
               // $this->session->set_flashdata('hasil','Hapus Data Gagal');
                echo "kosong";

            }

            // echo "Okke";
            
        }
    }
}
