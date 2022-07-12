<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Kas_laporan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lapkas');
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan Kas',
            'tampildata' => $this->m_lapkas->tampil_kas(),
            'tot_rekap' => $this->m_lapkas->tot_rekap(),
            'isi' => 'admin/laporan_kas/v_list'
        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function lap_per()
    {
        $this->load->view('admin/laporan_kas/v_per');
    }
    public function lap_full()
    {
        $this->load->view('admin/laporan_kas/v_full');
    }
}
?>