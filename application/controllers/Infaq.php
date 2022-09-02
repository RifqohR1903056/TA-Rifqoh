<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Infaq extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_infaq');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Infaq', 
                'infaq' => $this->m_infaq->lists(),
                'isi'  => 'admin/infaq/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('total', 'Total ', 'required');            
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Infaq Jumat', 
                    'isi'  => 'admin/infaq/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tanggal' => $this->input->post('tanggal'),
                                'total' => $this->input->post('total')
                                );
                        $this->m_infaq->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('infaq');
                    }
                }

        public function edit($id_infaq_jumat)
        {
            $this->form_validation->set_rules('tanggal', 'Tanggal ', 'required');
            $this->form_validation->set_rules('total', 'Total ', 'required');             
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Infaq jumat', 
                    'infaq' => $this->m_infaq->detail($id_infaq_jumat),
                    'isi'  => 'admin/infaq/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'tanggal' 	=> $this->input->post('tanggal'),
                                'id_infaq_jumat' 	=> $id_infaq_jumat,
                                'total'  => $this->input->post('total')
                                );
                        $this->m_infaq->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('infaq');
                    }
                }

        public function delete($id_infaq_jumat)
        {
            $data = array(
                'id_infaq_jumat' => $id_infaq_jumat,
            );
            $this->m_infaq->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('infaq');
        }
}

/* End of file Siswa.php */