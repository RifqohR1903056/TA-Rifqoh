<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_zakat');
    }

    public function index()
        {
            $data = array(
                'title' => 'Data Zakat', 
                'zakat' => $this->m_zakat->lists(),
                'isi'  => 'admin/zakat/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('jenis_zakat', 'Jenis Zakat ', 'required'); 
            $this->form_validation->set_rules('nm_pemberi', 'Nama Pemberi', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('jumlah', 'Jumlah ', 'required');           
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Zakat', 
                    'isi'  => 'admin/zakat/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'tgl' => $this->input->post('tgl'),
                                'jenis_zakat' => $this->input->post('jenis_zakat'),
                                'nm_pemberi' => $this->input->post('nm_pemberi'),
                                'alamat' => $this->input->post('alamat'),
                                'jumlah' => $this->input->post('jumlah')
                                );
                        $this->m_zakat->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('zakat');
                    }
                }

        public function edit($id_zakat)
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required'); 
            $this->form_validation->set_rules('jenis_zakat', 'Jenis Zakat ', 'required'); 
            $this->form_validation->set_rules('nm_pemberi', 'Nama Pemberi', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('jumlah', 'Jumlah ', 'required');                
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Data Zakat', 
                    'zakat' => $this->m_zakat->detail($id_zakat),
                    'isi'  => 'admin/zakat/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'id_zakat' 	=> $id_zakat,
                                'tgl' => $this->input->post('tgl'),
                                'jenis_zakat' => $this->input->post('jenis_zakat'),
                                'nm_pemberi' => $this->input->post('nm_pemberi'),
                                'alamat' => $this->input->post('alamat'),
                                'jumlah' => $this->input->post('jumlah')
                                );
                        $this->m_zakat->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('zakat');
                    }
                }

        public function delete($id_zakat)
        {
            $data = array(
                'id_zakat' => $id_zakat,
            );
            $this->m_zakat->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('zakat');
        }
}

/* End of file Siswa.php */