<?php
    defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_kas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekap_kas');
    }

    public function index()
    {
        $data = [
            'title' => 'Rekap Kas Masjid',
            'tampildata' => $this->m_rekap_kas->tampil_kas(),
            'tot_rekap' => $this->m_rekap_kas->tot_rekap(),
            'isi' => 'admin/rekap_kas/v_list'
        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
?>