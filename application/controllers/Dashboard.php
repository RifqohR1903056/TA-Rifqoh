<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function index()
        {
            $x['total_pengumuman'] = $this->db->query('SELECT * FROM tbl_pengumuman')->num_rows();
            $this->load->view('admin/v_home',$x, FALSE);

        }


        
}

/* End of file Siswa.php */