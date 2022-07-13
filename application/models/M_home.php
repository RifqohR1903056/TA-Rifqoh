<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function pengumuman()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');            
        $this->db->order_by('id_pengumuman', 'desc');
        return $this->db->get()->result();
    }

    public function prestasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_prestasi');            
        $this->db->order_by('id_prestasi', 'desc');
        return $this->db->get()->result();
    }

    public function organisasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_organisasi');            
        $this->db->order_by('id_organisasi', 'desc');
        return $this->db->get()->result();
    }


    public function jumat()
    {
        $this->db->select('*');
        $this->db->from('tbl_jumat');            
        $this->db->order_by('id_jumat', 'desc');
        return $this->db->get()->result();
    }

    public function majelis()
    {
        $this->db->select('*');
        $this->db->from('tbl_majelis');            
        $this->db->order_by('id_majelis', 'desc');
        return $this->db->get()->result();
    }

    public function tarawih()
    {
        $this->db->select('*');
        $this->db->from('tbl_tarawih');            
        $this->db->order_by('id_tarawih', 'desc');
        return $this->db->get()->result();
    }

    public function contact()
    {
        $this->db->select('*');
        $this->db->from('tbl_inbox');            
        $this->db->order_by('inbox_id', 'desc');
        return $this->db->get()->result();
    }

    public function sapra()
    {
        $this->db->select('*');
        $this->db->from('tbl_sapra');            
        $this->db->order_by('id_sapra', 'desc');
        return $this->db->get()->result();
    }
    
    public function gallery()
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');            
        $this->db->order_by('id_gallery', 'desc');
        return $this->db->get()->result();
    }
    //memunculkan berita deg pging
    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    public function slider_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');  
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');       
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(2);
        return $this->db->get()->result();
    }

    public function lapkas()
    {
        return $this->db->get('kas_masjid')->result();
    }
        
}

/* End of file M_Home.php */
