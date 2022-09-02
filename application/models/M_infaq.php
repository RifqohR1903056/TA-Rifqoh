<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_infaq extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_infaq_jumat');    
		$this->db->order_by('id_infaq_jumat', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_infaq_jumat) 
    {
        $this->db->select('*');
        $this->db->from('tbl_infaq_jumat');                      
        $this->db->where('id_infaq_jumat', $id_infaq_jumat);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_infaq_jumat', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_infaq_jumat', $data['id_infaq_jumat']);
        $this->db->update('tbl_infaq_jumat', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_infaq_jumat', $data['id_infaq_jumat']);
        $this->db->delete('tbl_infaq_jumat', $data);
        
    }


}

/* End of file M_infaq.php */
