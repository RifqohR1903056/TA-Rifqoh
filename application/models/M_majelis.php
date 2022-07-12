<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_majelis extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_majelis');    
		$this->db->order_by('id_majelis', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_majelis) 
    {
        $this->db->select('*');
        $this->db->from('tbl_majelis');                      
        $this->db->where('id_majelis', $id_majelis);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_majelis', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_majelis', $data['id_majelis']);
        $this->db->update('tbl_majelis', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_majelis', $data['id_majelis']);
        $this->db->delete('tbl_majelis', $data);
        
    }


}

/* End of file M_majelis.php */
