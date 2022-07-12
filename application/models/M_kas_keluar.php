<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kas_keluar extends CI_Model {

    public function tampil_kas() 
    {
        return $this->db->get_where('kas_masjid', ['jenis' => 'Keluar'])->result();
    }
    public function tot_keluar()
    {
        return $this->db->query('select sum(keluar) as total from kas_masjid')->result();
    }
    public function tambah($data)
    {
        $this->db->insert('kas_masjid', $data);
    }
    public function edit($id_km)
    {
        $this->db->select('*');
        $this->db->from('kas_masjid');
        $this->db->where('id_km', $id_km);
        return $this->db->get()->row();
    }
    public function simpanEdit($data)
    {
        $this->db->where('id_km', $data['id_km']);
        $this->db->update('kas_masjid', $data);
    }
    public function delete($data)
    {
        $this->db->where('id_km', $data['id_km']);
        $this->db->delete('kas_masjid', $data);
    }
}

/* End of file M_pengumuman.php */
