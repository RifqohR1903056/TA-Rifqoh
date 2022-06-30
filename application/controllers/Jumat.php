<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jumat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jumat');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Sholat Jumat', 
                'jumat' => $this->m_jumat->lists(),
                'isi'  => 'admin/jumat/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('nm_khatib', 'Nama Khatib ', 'required');   
            $this->form_validation->set_rules('nm_imam', 'Nama Imam', 'required');        
            $this->form_validation->set_rules('nm_muadzin', 'Nama Muadzin', 'required');          
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Sholat Jumat', 
                    'isi'  => 'admin/jumat/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tgl' 	=> date('Y,m.d'),
                                'nm_khatib' => $this->input->post('nm_khatib'),
                                'nm_imam'    => $this->input->post('nm_imam'),
                                'nm_muadzin'    => $this->input->post('nm_muadzin')
                                );
                        $this->m_jumat->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('jumat');
                    }
                }

        public function edit($id_jumat)
        {
            $this->form_validation->set_rules('nm_khatib', 'Nama Khatib ', 'required');   
            $this->form_validation->set_rules('nm_imam', ' Nama Imam', 'required');        
            $this->form_validation->set_rules('nm_muadzin', 'Nama Muadzin', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Sholat jumat', 
                    'jumat' => $this->m_jumat->detail($id_jumat),
                    'isi'  => 'admin/jumat/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'tgl' 	=> date('Y,m.d'),
                                'id_jumat' 	=> $id_jumat,
                                'nm_khatib'  => $this->input->post('nm_khatib'),
                                'nm_imam'    => $this->input->post('nm_imam'),
                                'nm_muadzin'    => $this->input->post('nm_muadzin')
                                );
                        $this->m_jumat->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('jumat');
                    }
                }

        public function delete($id_jumat)
        {
            $data = array(
                'id_jumat' => $id_jumat,
            );
            $this->m_jumat->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('jumat');
        }
}

/* End of file Siswa.php */