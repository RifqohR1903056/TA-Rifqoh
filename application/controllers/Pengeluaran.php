<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengeluaran');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Pengeluaran', 
                'pengeluaran' => $this->m_pengeluaran->lists(),
                'isi'  => 'admin/pengeluaran/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('uraian', 'Uraian ', 'required'); 
            $this->form_validation->set_rules('total', 'Total', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Pengeluaran', 
                    'isi'  => 'admin/pengeluaran/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tgl' => $this->input->post('tgl'),
                                'uraian' => $this->input->post('uraian'),
                                'total' => $this->input->post('total')
                                );
                        $this->m_pengeluaran->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('pengeluaran');
                    }
                }

        public function edit($id_pengeluaran)
        {  
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('uraian', 'Uraian ', 'required'); 
            $this->form_validation->set_rules('total', 'Total', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Pengeluaran', 
                    'pengeluaran' => $this->m_pengeluaran->detail($id_pengeluaran),
                    'isi'  => 'admin/pengeluaran/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_pengeluaran' 	=> $id_pengeluaran,
                                'tgl' => $this->input->post('tgl'),
                                'uraian' => $this->input->post('uraian'),
                                'total' => $this->input->post('total')
                                );
                        $this->m_pengeluaran->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('pengeluaran');
                    }
                }

        public function delete($id_pengeluaran)
        {
            $data = array(
                'id_pengeluaran' => $id_pengeluaran,
            );
            $this->m_pengeluaran->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('pengeluaran');
        }
}

/* End of file Siswa.php */

