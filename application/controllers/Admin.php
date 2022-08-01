<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Selamat Datang Admin', 
            'pengumuman' =>$this->db->get('tbl_pengumuman')->num_rows(),
            'berita' =>$this->db->get('tbl_berita')->num_rows(),
            'kas_keluar' => $this->db->query('SELECT sum(keluar) FROM kas_masjid'),
           
            'isi'  => 'admin/v_home'
        );
        // var_dump(coba);
      
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

  



}

/* End of file admin.php */
