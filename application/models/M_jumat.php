<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_jumat extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_jumat');    
		$this->db->order_by('id_jumat', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_jumat) 
    {
        $this->db->select('*');
        $this->db->from('tbl_jumat');                      
        $this->db->where('id_jumat', $id_jumat);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_jumat', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_jumat', $data['id_jumat']);
        $this->db->update('tbl_jumat', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_jumat', $data['id_jumat']);
        $this->db->delete('tbl_jumat', $data);
        
    }


}

/* End of file M_jumat.php */
