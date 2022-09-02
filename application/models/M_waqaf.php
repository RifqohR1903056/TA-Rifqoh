<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_waqaf extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_waqaf');    
		$this->db->order_by('id_waqaf', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_waqaf) 
    {
        $this->db->select('*');
        $this->db->from('tbl_waqaf');                      
        $this->db->where('id_waqaf', $id_waqaf);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_waqaf', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_waqaf', $data['id_waqaf']);
        $this->db->update('tbl_waqaf', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_waqaf', $data['id_waqaf']);
        $this->db->delete('tbl_waqaf', $data);
        
    }


}

/* End of file M_waqaf.php */
