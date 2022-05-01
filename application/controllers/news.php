<?php 

class news extends CI_Controller{

    function __construct(){
        parent::__construct();      
        $this->load->model('ModelBerita');

    }

    function index(){
        $data['news'] = $this->ModelBerita->tampil_data()->result();
        $this->load->view('v_tampilnews',$data);
    }

    function tambah(){
        $this->load->view('v_inputnews');
    }

    function tambah_aksi(){
        
        $judul = $this->input->post('judul');
        $headline_news = $this->input->post('headline_news');
        $deskripsi_news = $this->input->post('deskripsi_news');
        $penulis = $this->input->post('penulis');
        $tgl_publikasi = $this->input->post('tgl_publikasi');
        $kategori = $this->input->post('kategori');

        $data = array(
            'judul' => $judul,
            'headline_news' => $headline_news,
            'deskripsi_news' => $deskripsi_news,
            'penulis' => $penulis,
            'tgl_publikasi' => $tgl_publikasi,
            'kategori' => $kategori,
            );
        $this->ModelBerita->input_data($data,'news');
        redirect('news/index');
    }

}
