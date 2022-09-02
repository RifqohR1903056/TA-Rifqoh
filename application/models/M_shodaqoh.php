<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_shodaqoh extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_shodaqoh');    
		$this->db->order_by('id_shodaqoh', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_shodaqoh) 
    {
        $this->db->select('*');
        $this->db->from('tbl_shodaqoh');                      
        $this->db->where('id_shodaqoh', $id_shodaqoh);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_shodaqoh', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_shodaqoh', $data['id_shodaqoh']);
        $this->db->update('tbl_shodaqoh', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_shodaqoh', $data['id_shodaqoh']);
        $this->db->delete('tbl_shodaqoh', $data);
        
    }


}

/* End of file M_shodaqoh.php */
