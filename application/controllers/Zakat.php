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
                'isi'  => 'views/v_zakat'
            );
            $this->load->view('views/layout/v_wrapper', $data, FALSE);

        }


        public function add()          
        {
            $this->form_validation->set_rules('nomor', 'Nomor ', 'required'); 
            $this->form_validation->set_rules('nama', 'Nama ', 'required');   
            $this->form_validation->set_rules('zakat_fitrah', 'Jenis', 'required');  
            $this->form_validation->set_rules('alamat', 'Alamat ', 'required'); 
            $this->form_validation->set_rules('no_rek', 'Rekening Masjid ', 'required');                
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Jadwal Penceramah', 
                    'isi'  => 'views/v_zakat/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                
                                'nomor' => $this->input->post('nomor'),
                                'nama' => $this->input->post('nama'),
                                'zakat_fitrah' => $this->input->post('zakat_fitrah'),
                                'alamat' => $this->input->post('alamat'),
                                'no_rek'    => $this->input->post('no_rek')
                                );
                        $this->m_majelis->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('majelis');
                    }
                }

        public function edit($id_majelis)
        {
            $this->form_validation->set_rules('tgl', 'Tanggal ', 'required');
            $this->form_validation->set_rules('nm_penceramah', 'Nama Penceramah ', 'required');   
            $this->form_validation->set_rules('keterangan', ' Keterangan', 'required');                 
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Tambah Jadwal Penceramah', 
                    'majelis' => $this->m_majelis->detail($id_majelis),
                    'isi'  => 'admin/majelis/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

                    }
                    else
                    {
                            $data = array(
                                'tgl' 	=> $this->input->post('tgl'),
                                'id_majelis' 	=> $id_majelis,
                                'nm_penceramah'  => $this->input->post('nm_penceramah'),
                                'keterangan'    => $this->input->post('keterangan')
                                );
                        $this->m_majelis->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('majelis');
                    }
                }

        public function delete($id_majelis)
        {
            $data = array(
                'id_majelis' => $id_majelis,
            );
            $this->m_majelis->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('majelis');
        }
}

/* End of file Siswa.php */