<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery extends CI_Model {
	
    
    public function lists()
	{
		$this->db->select('*');
        $this->db->from('tbl_gallery');    
		$this->db->order_by('id_gallery', 'DESC');
        return $this->db->get()->result();
    }  
    
    public function detail($id_gallery )
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery ');
		$this->db->where('id_gallery ', $id_gallery );
		return $this->db->get()->row();
    }
    
    public function add($data)
	{
		$this->db->insert('tbl_gallery', $data);
	}

		public function edit($data)
	{
		$this->db->where('id_gallery', $data['id_gallery']);
		$this->db->update('tbl_gallery', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_gallery', $data['id_gallery']);
		$this->db->delete('tbl_gallery', $data);
	}



} 