<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mustahik extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mustahik');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Mustahik', 
                'mustahik' => $this->m_mustahik->lists(),
                'isi'  => 'admin/mustahik/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('jenis_mustahik', 'Jenis Mustahik ', 'required'); 
            $this->form_validation->set_rules('nm_mustahik', 'Nama Mustahik', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('total', 'Total ', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Mustahik', 
                    'isi'  => 'admin/mustahik/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tanggal' => $this->input->post('tanggal'),
                                'jenis_mustahik' => $this->input->post('jenis_mustahik'),
                                'nm_mustahik' => $this->input->post('nm_mustahik'),
                                'alamat' => $this->input->post('alamat'),
                                'total' => $this->input->post('total')
                                );
                        $this->m_mustahik->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('mustahik');
                    }
                }

        public function edit($id_mustahik)
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('jenis_mustahik', 'Jenis Mustahik ', 'required'); 
            $this->form_validation->set_rules('nm_mustahik', 'Nama Mustahik', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('total', 'Total ', 'required');              
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Mustahik', 
                    'mustahik' => $this->m_mustahik->detail($id_mustahik),
                    'isi'  => 'admin/mustahik/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_mustahik' 	=> $id_mustahik,
                                'tanggal' => $this->input->post('tanggal'),
                                'jenis_mustahik' => $this->input->post('jenis_mustahik'),
                                'nm_mustahik' => $this->input->post('nm_mustahik'),
                                'alamat' => $this->input->post('alamat'),
                                'total' => $this->input->post('total')
                                );
                        $this->m_mustahik->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('mustahik');
                    }
                }

        public function delete($id_mustahik)
        {
            $data = array(
                'id_mustahik' => $id_mustahik,
            );
            $this->m_mustahik->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('mustahik');
        }
}

/* End of file Siswa.php */