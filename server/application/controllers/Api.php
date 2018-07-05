<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        //untuk memuat model M_buku.php agar dapat dipakai di controller ini
        $this->load->model(array('m_buku'));
    }

    //Menampilkan data buku
    function buku_get() {
        $id = $this->get('id_buku');
        if ($id == '') {
            $buku = $this->m_buku->getBuku();
        } else {
            $buku = $this->m_buku->getBukuById($id);
        }
        $this->response($buku, 200);
    }
    
    //Mengubah data produk
	function buku_post() {
        //mengambil ID yang dikirim melalui method post
        $id = $this->post('id_buku');
        //mengambil data yang dikirim melalui method post
        $data = array(
                'judul'      => $this->put('judul'),
                'pengarang'  => $this->put('pengarang'),
                'penerbit'   => $this->put('penerbit'),
                'harga'      => $this->put('gambar'),
                'harga'      => $this->put('harga'),
                'deskripsi'  => $this->put('deskripsi')
        );
        
        //proses update data ke dalam database
        $update = $this->m_buku->updateBuku($id_buku,$data);
        //pengecekan apakah proses update berhasil atau tidak
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Menambah data produk
	function buku_put() {
        //mengambil data yang dikirim melalui method put
        $data = array(
                'judul'      => $this->put('judul'),
                'pengarang'  => $this->put('pengarang'),
                'penerbit'   => $this->put('penerbit'),
                'harga'      => $this->put('gambar'),
                'harga'      => $this->put('harga'),
                'deskripsi'  => $this->put('deskripsi')
        );
        //proses insert data ke dalam database
        $insert = $this->m_buku->insertBuku($data);

        //pengecekan apakah proses insert berhasil atau tidak
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Menghapus salah satu data produk
	function buku_delete() {
        //mengambil data ID yang dikirim melalui method post
        $id = $this->delete('id_buku');
        //proses delete data dari database
        $delete = $this->m_buku->deleteBuku($id_buku);

        //pengecekan apakah proses delete berhasil atau tidak
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}
?>
