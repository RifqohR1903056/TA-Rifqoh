<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_rekap_kas extends CI_Model {
    public function tampil_kas()
    {
        return $this->db->get('kas_masjid')->result();
    }
    public function tot_rekap()
    {
        return $this->db->query('SELECT SUM(masuk) as tot_masuk, SUM(keluar) as tot_keluar FROM kas_masjid')->result();
    }
}