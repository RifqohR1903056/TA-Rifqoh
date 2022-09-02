<?php
    defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_zakat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekap_zakat');
    }

    public function index()
    {
        $data = [
            'title' => 'Rekap Zakat',
            'tampildata' => $this->m_rekap_zakat->tampil_kas(),
            'tot_rekap' => $this->m_rekap_zakat->tot_rekap(),
            'isi' => 'admin/rekap_zakat/v_list'
        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
?>