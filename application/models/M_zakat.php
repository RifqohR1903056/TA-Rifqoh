<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_zakat extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_zakat');    
		$this->db->order_by('id_zakat', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_zakat) 
    {
        $this->db->select('*');
        $this->db->from('tbl_zakat');                      
        $this->db->where('id_zakat', $id_zakat);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_zakat', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_zakat', $data['id_zakat']);
        $this->db->update('tbl_zakat', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_zakat', $data['id_zakat']);
        $this->db->delete('tbl_zakat', $data);
        
    }


}

/* End of file M_zakat.php */
