<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengeluaran extends CI_Model {

    public function lists() 
    {

    $this->db->select('*');
        $this->db->from('tbl_pengeluaran');    
		$this->db->order_by('id_pengeluaran', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_pengeluaran) 
    {
        $this->db->select('*');
        $this->db->from('tbl_pengeluaran');                      
        $this->db->where('id_pengeluaran', $id_pengeluaran);
        return $this->db->get()->row();
    }

    public function add($data) 
    {
        $this->db->insert('tbl_pengeluaran', $data);
    }

    public function edit($data) 
    {
        $this->db->where('id_pengeluaran', $data['id_pengeluaran']);
        $this->db->update('tbl_pengeluaran', $data);
        
    }

    public function delete($data) 
    {
        $this->db->where('id_pengeluaran', $data['id_pengeluaran']);
        $this->db->delete('tbl_pengeluaran', $data);
        
    }


}

/* End of file M_pengeluaran.php */
