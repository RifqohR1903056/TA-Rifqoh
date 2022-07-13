<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_tarawih extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_tarawih');    
		$this->db->order_by('id_tarawih', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_tarawih) 
    {
        $this->db->select('*');
        $this->db->from('tbl_tarawih');                      
        $this->db->where('id_tarawih', $id_tarawih);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_tarawih', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_tarawih', $data['id_tarawih']);
        $this->db->update('tbl_tarawih', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_tarawih', $data['id_tarawih']);
        $this->db->delete('tbl_tarawih', $data);
        
    }


}

/* End of file M_tarawih.php */
