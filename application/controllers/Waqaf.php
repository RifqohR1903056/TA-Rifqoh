<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Waqaf extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_waqaf');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Waqaf', 
                'waqaf' => $this->m_waqaf->lists(),
                'isi'  => 'admin/waqaf/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('nm_waqif', 'Nama Waqif ', 'required'); 
            $this->form_validation->set_rules('lokasi_tanah', 'Lokasi Tanah ', 'required'); 
            $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required'); 
            $this->form_validation->set_rules('no_sertifikat', 'No Sertifikat ', 'required'); 
            $this->form_validation->set_rules('nadzir', 'Nadzir ', 'required'); 
            $this->form_validation->set_rules('nm_penggarap', 'Nama Penggarap ', 'required');            
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Waqaf', 
                    'isi'  => 'admin/waqaf/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tanggal' => $this->input->post('tanggal'),
                                'nm_waqif' => $this->input->post('nm_waqif'),
                                'lokasi_tanah' => $this->input->post('lokasi_tanah'),
                                'luas_tanah' => $this->input->post('luas_tanah'),
                                'no_sertifikat' => $this->input->post('no_sertifikat'),
                                'nadzir' => $this->input->post('nadzir'),
                                'nm_penggarap' => $this->input->post('nm_penggarap')
                                );
                        $this->m_waqaf->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('waqaf');
                    }
                }

        public function edit($id_waqaf)
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('nm_waqif', 'Nama Waqif ', 'required'); 
            $this->form_validation->set_rules('lokasi_tanah', 'Lokasi Tanah ', 'required'); 
            $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required'); 
            $this->form_validation->set_rules('no_sertifikat', 'No Sertifikat ', 'required'); 
            $this->form_validation->set_rules('nadzir', 'Nadzir ', 'required'); 
            $this->form_validation->set_rules('nm_penggarap', 'Nama Penggarap ', 'required');             
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Waqaf', 
                    'waqaf' => $this->m_waqaf->detail($id_waqaf),
                    'isi'  => 'admin/waqaf/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_waqaf' 	=> $id_waqaf,
                                'tanggal' => $this->input->post('tanggal'),
                                'nm_waqif' => $this->input->post('nm_waqif'),
                                'lokasi_tanah' => $this->input->post('lokasi_tanah'),
                                'luas_tanah' => $this->input->post('luas_tanah'),
                                'no_sertifikat' => $this->input->post('no_sertifikat'),
                                'nadzir' => $this->input->post('nadzir'),
                                'nm_penggarap' => $this->input->post('nm_penggarap')
                                );
                        $this->m_waqaf->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('waqaf');
                    }
                }

        public function delete($id_waqaf)
        {
            $data = array(
                'id_waqaf' => $id_waqaf,
            );
            $this->m_waqaf->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('waqaf');
        }
}

/* End of file Siswa.php */