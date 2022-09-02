<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_mustahik extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_mustahik');    
		$this->db->order_by('id_mustahik', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_mustahik) 
    {
        $this->db->select('*');
        $this->db->from('tbl_mustahik');                      
        $this->db->where('id_mustahik', $id_mustahik);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_mustahik', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_mustahik', $data['id_mustahik']);
        $this->db->update('tbl_mustahik', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_mustahik', $data['id_mustahik']);
        $this->db->delete('tbl_mustahik', $data);
        
    }


}

/* End of file M_mustahik.php */
