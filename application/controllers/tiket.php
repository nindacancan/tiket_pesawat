<?php
class Tiket extends CI_controller{
    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index() {
        $data['penumpang'] = $this->m_data->tampil_data()->result();
        $this->load->view('tampil_data', $data);
    }

    function tambah() {
        $this->load->view('input_data');
    }

    function tambah_aksi() {
        $nama = $this->input->post('nama');
        $nama_pesawat = $this->input->post('nama_pesawat');
        $kelas = $this->input->post('kelas');
        $harga_tiket = $this->input->post('harga_tiket');
        $jumlah = $this->input->post('jumlah');

        if($nama_pesawat == 'Garuda' && $kelas == 'Eksekutif'){
            $harga_tiket = 1500000;
        }elseif ($nama_pesawat == 'Garuda' && $kelas == 'Bisnis'){
            $harga_tiket = 900000; 
        }elseif ($nama_pesawat == 'Garuda' && $kelas == 'Ekonomi'){
            $harga_tiket = 500000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Eksekutif'){
            $harga_tiket = 1200000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Bisnis'){
            $harga_tiket = 800000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Ekonomi'){
            $harga_tiket = 40000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Eksekutif'){
            $harga_tiket = 1000000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Bisnis'){
            $harga_tiket = 700000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Ekonomi'){
            $harga_tiket = 300000;
        }

    $data = array(
        'nama' => $nama,
        'nama_pesawat' => $nama_pesawat,
        'kelas' => $kelas,
        'harga_tiket' => $harga_tiket,
        'jumlah' => $jumlah
    );
    $this->m_data->input_data($data, 'penumpang');
    redirect('tiket/index');
    } 

    function edit($id) {
        $where = array('id' => $id);
        $data['penumpang'] = $this->m_data->edit_data($where, 'penumpang')->result();
        $this->load->view('edit_data', $data);
        }

    function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nama_pesawat = $this->input->post('nama_pesawat');
        $kelas = $this->input->post('kelas');
        $harga_tiket = $this->input->post('harga_tiket');
        $jumlah = $this->input->post('jumlah');

        if($nama_pesawat == 'Garuda' && $kelas == 'Eksekutif'){
            $harga_tiket = 1500000;
        }elseif ($nama_pesawat == 'Garuda' && $kelas == 'Bisnis'){
            $harga_tiket = 900000; 
        }elseif ($nama_pesawat == 'Garuda' && $kelas == 'Ekonomi'){
            $harga_tiket = 500000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Eksekutif'){
            $harga_tiket = 1200000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Bisnis'){
            $harga_tiket = 800000;
        }elseif ($nama_pesawat == 'Merpati' && $kelas == 'Ekonomi'){
            $harga_tiket = 40000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Eksekutif'){
            $harga_tiket = 1000000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Bisnis'){
            $harga_tiket = 700000;
        }elseif ($nama_pesawat == 'Batavia' && $kelas == 'Ekonomi'){
            $harga_tiket = 300000;
        }

        $data = array(
            'nama' => $nama,
            'nama_pesawat' => $nama_pesawat,
            'kelas' => $kelas,
            'harga_tiket' => $harga_tiket,
            'jumlah' => $jumlah
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'penumpang');
        redirect('tiket');
    }

    function hapus($id) {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'penumpang');
        redirect('tiket');
    }
}
?>