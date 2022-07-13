<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tarawih extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tarawih');
    }

    public function index()
        {
            $data = array(
                'title' => 'Jadwal Tarawih', 
                'tarawih' => $this->m_tarawih->lists(),
                'isi'  => 'admin/tarawih/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('nm_imam', 'Nama Imam ', 'required');   
            $this->form_validation->set_rules('nm_bilal', 'Bilal', 'required');                 
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Jadwal Tarawih', 
                    'isi'  => 'admin/tarawih/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tgl' => $this->input->post('tgl'),
                                'nm_imam' => $this->input->post('nm_imam'),
                                'nm_bilal'    => $this->input->post('nm_bilal')
                                );
                        $this->m_tarawih->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('tarawih');
                    }
                }

        public function edit($id_tarawih)
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required');
            $this->form_validation->set_rules('nm_imam', 'Nama Imam ', 'required');   
            $this->form_validation->set_rules('nm_bilal', ' Nama Bilal', 'required');                 
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Jadwal Tarawih', 
                    'tarawih' => $this->m_tarawih->detail($id_tarawih),
                    'isi'  => 'admin/tarawih/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'tgl' 	=> $this->input->post('tgl'),
                                'id_tarawih' 	=> $id_tarawih,
                                'nm_imam'  => $this->input->post('nm_imam'),
                                'nm_bilal'    => $this->input->post('nm_bilal')
                                );
                        $this->m_tarawih->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('tarawih');
                    }
                }

        public function delete($id_tarawih)
        {
            $data = array(
                'id_tarawih' => $id_tarawih,
            );
            $this->m_tarawih->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('tarawih');
        }
}

/* End of file Siswa.php */