<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_organisasi extends CI_Model {
	
    
    public function lists()
	{
		$this->db->select('*');
        $this->db->from('tbl_organisasi');    
		$this->db->order_by('id_organisasi', 'DESC');
        return $this->db->get()->result();
    }  
    
    public function detail($id_organisasi )
	{
		$this->db->select('*');
		$this->db->from('tbl_organisasi ');
		$this->db->where('id_organisasi ', $id_organisasi );
		return $this->db->get()->row();
    }
    
    public function add($data)
	{
		$this->db->insert('tbl_organisasi', $data);
	}

		public function edit($data)
	{
		$this->db->where('id_organisasi', $data['id_organisasi']);
		$this->db->update('tbl_organisasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_organisasi', $data['id_organisasi']);
		$this->db->delete('tbl_organisasi', $data);
	}



} 