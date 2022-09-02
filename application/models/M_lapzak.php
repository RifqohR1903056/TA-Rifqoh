<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_lapzak extends CI_Model {

    public function tampil_zakat()
    {
        return $this->db->get('tbl_zakat')->result();
    }
    public function tot_rekap()
    {
        return $this->db->query('SELECT SUM(jumlah) as tot_jumlah, FROM tbl_zakat')->result();
    }

    
}
?>