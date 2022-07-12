<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kas_keluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kas_keluar');
    }

    public function index()
        {
            $data = [
                'title' => 'Kas Keluar',
                'tampildata' => $this->m_kas_keluar->tampil_kas(),
                'tot_keluar' => $this->m_kas_keluar->tot_keluar(),
                'isi' => 'admin/kas_keluar/v_list'
            ];
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
    public function tambah()
    {
        $this->form_validation->set_rules('tgl_km', 'Tanggal Kas ', 'required');
        $this->form_validation->set_rules('uraian_km', 'Uraian Kas', 'required');
        $this->form_validation->set_rules('keluar', 'Keluar', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Tambah Data Kas Masjid',
                'isi'  => 'admin/kas_keluar/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(

                'id_km'     => $this->input->post('id_km'),
                'tgl_km'     => $this->input->post('tgl_km'),
                'uraian_km'    => $this->input->post('uraian_km'),
                'keluar'    => $this->input->post('keluar'),
                'jenis'    => $this->input->post('jenis')
            );
            $this->m_kas_keluar->tambah($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('kas_keluar/index');
        }
    }
    public function edit($id_km)
    {
        $this->form_validation->set_rules('tgl_km', 'Tanggal Kas ', 'required');
        $this->form_validation->set_rules('uraian_km', 'Uraian Kas', 'required');
        $this->form_validation->set_rules('keluar', 'keluar', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Kas Masjid',
                'tampildata' => $this->m_kas_keluar->edit($id_km),
                'isi'  => 'admin/kas_keluar/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } 
        else {
            $data = array(

                'id_km'     => $this->input->post('id_km'),
                'tgl_km'     => $this->input->post('tgl_km'),
                'uraian_km'    => $this->input->post('uraian_km'),
                'masuk'    => $this->input->post('masuk'),
                'jenis'    => $this->input->post('jenis')
            );
            $this->m_kas_keluar->simpanEdit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('kas_keluar/index');
        }
    }

    public function delete($id_km)
    {
        $data = array(
            'id_km' => $id_km,
        );
        $this->m_kas_keluar->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');
        redirect('kas_keluar/index');
    }
}

/* End of file Siswa.php */