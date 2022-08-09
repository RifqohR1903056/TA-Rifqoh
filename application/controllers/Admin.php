<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kas_keluar');
        $this->load->model('m_kas');
    }

    public function index()
    {
        $data = array(
            'title' => 'Selamat Datang Admin', 
            'pengumuman' =>$this->db->get('tbl_pengumuman')->num_rows(),
            'berita' =>$this->db->get('tbl_berita')->num_rows(),
            'sapra' =>$this->db->get('tbl_sapra')->num_rows(),
            'tot_masuk' => $this->m_kas->tot_masuk(),
            'tot_keluar' => $this->m_kas_keluar->tot_keluar(),
            'isi'  => 'admin/v_home'
        );  
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

  

}

/* End of file admin.php */
