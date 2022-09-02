<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Zakat_laporan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lapkzak');
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan Zakat',
            'tampildata' => $this->m_lapkas->tampil_zakat(),
            'tot_rekap' => $this->m_lapkas->tot_rekap(),
            'isi' => 'admin/laporan_zakat/v_list'
        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function lap_per()
    {
        $this->load->view('admin/laporan_zakat/v_per');
    }
    public function lap_full()
    {
        $this->load->view('admin/laporan_zakat/v_full');
    }
}
?>