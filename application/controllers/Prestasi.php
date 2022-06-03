<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_prestasi');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Prestasi', 
                'prestasi' => $this->m_prestasi->lists(),
                'isi'  => 'admin/prestasi/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('nm_kajian', 'Nama Kajian ', 'required');   
            $this->form_validation->set_rules('hari', 'Hari', 'required');        
            $this->form_validation->set_rules('nm_ustad', 'Nama Ustad', 'required');        
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Prestasi', 
                    'isi'  => 'admin/prestasi/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'nm_kajian'     => $this->input->post('nm_kajian'),
                                'hari'    => $this->input->post('hari'),
                                'nm_ustad'    => $this->input->post('nm_ustad'),
                                'pembahasan'    => $this->input->post('pembahasan')
                                );
                        $this->m_prestasi->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('prestasi');
                    }
                }

        public function edit($id_prestasi)
        {
            $this->form_validation->set_rules('nm_kajian', 'Nama Kajian ', 'required');   
            $this->form_validation->set_rules('hari', ' Hari', 'required');        
            $this->form_validation->set_rules('nm_ustad', 'NamaUstad', 'required');        
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'required');    
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data prestasi', 
                    'prestasi' => $this->m_prestasi->detail($id_prestasi),
                    'isi'  => 'admin/prestasi/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_prestasi' 	=> $id_prestasi,
                                'nm_kajian'  => $this->input->post('nm_kajian'),
                                'hari'    => $this->input->post('hari'),
                                'nm_ustad'    => $this->input->post('nm_ustad'),
                                'pembahasan'    => $this->input->post('pembahasan')
                                );
                        $this->m_prestasi->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('prestasi');
                    }
                }

        public function delete($id_prestasi)
        {
            $data = array(
                'id_prestasi' => $id_prestasi,
            );
            $this->m_prestasi->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('prestasi');
        }
}

/* End of file Siswa.php */