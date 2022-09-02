<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shodaqoh extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_shodaqoh');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Shodaqoh', 
                'shodaqoh' => $this->m_shodaqoh->lists(),
                'isi'  => 'admin/shodaqoh/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('nm_pemberi', 'Nama Pemberi ', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('jenis_shodaqoh', 'Jenis Shodaqoh', 'required'); 
            $this->form_validation->set_rules('jml_shodaqoh', 'Jumlah Shodaqoh ', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Shodaqoh', 
                    'isi'  => 'admin/shodaqoh/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tgl' => $this->input->post('tgl'),
                                'nm_pemberi' => $this->input->post('nm_pemberi'),
                                'alamat' => $this->input->post('alamat'),
                                'jenis_shodaqoh' => $this->input->post('jenis_shodaqoh'),
                                'jml_shodaqoh' => $this->input->post('jml_shodaqoh')
                                );
                        $this->m_shodaqoh->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('shodaqoh');
                    }
                }

        public function edit($id_shodaqoh)
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('nm_pemberi', 'Nama Pemberi ', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('jenis_shodaqoh', 'Jenis Shodaqoh', 'required'); 
            $this->form_validation->set_rules('jml_shodaqoh', 'Jumlah Shodaqoh ', 'required');                
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Shodaqoh', 
                    'shodaqoh' => $this->m_shodaqoh->detail($id_shodaqoh),
                    'isi'  => 'admin/shodaqoh/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'tgl' => $this->input->post('tgl'),
                                'nm_pemberi' => $this->input->post('nm_pemberi'),
                                'alamat' => $this->input->post('alamat'),
                                'jenis_shodaqoh' => $this->input->post('jenis_shodaqoh'),
                                'jml_shodaqoh' => $this->input->post('jml_shodaqoh')
                                );
                        $this->m_shodaqoh->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('shodaqoh');
                    }
                }

        public function delete($id_shodaqoh)
        {
            $data = array(
                'id_shodaqoh' => $id_shodaqoh,
            );
            $this->m_shodaqoh->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('shodaqoh');
        }
}

/* End of file Siswa.php */