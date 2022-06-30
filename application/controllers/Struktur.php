<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('m_struktur');

    }

	  public function index()
        {
            $data = array(
                'title' => 'Struktur Organisasi', 
                'struktur' => $this->m_struktur->lists(),
                'isi'  => 'admin/struktur/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }

         public function add()
        {         
            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './sampul/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('sampul'))
                    {
                           
                            $data = array(                
                                'title' => 'Input Data Struktur Organisasi',
								'error_upload' => $this->upload->display_errors(),
								'isi'=> 'admin/struktur/v_add'  
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            // $this->upload->initialize($config);

                            $data = array(							
								'sampul' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_struktur->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('struktur');
                    }
            } 
            
            $data = array(
                'title' => 'Tambah Data Struktur Organisasi', 
                'mapel' => $this->m_struktur->lists(),
                'isi'  => 'admin/struktur/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        

 		 public function edit($id_struktur)
        {
            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './sampul/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('sampul'))
                    {
                           
                            $data = array(                
                                'title' => ' Edit Data Struktur Organisasi', 
                                'struktur' => $this->m_struktur->detail($id_struktur),
                                'isi'  => 'admin/struktur/v_edit'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            //menghapus file photo lama
                            $struktur=$this->m_struktur->detail($id_struktur);
                            if ($struktur->sampul !="") {
                                unlink('./sampul/'.$struktur>sampul);
                            }
                            //end menghapus photo lama
                            $data = array(
                                'id_struktur'       =>$id_struktur,
                                'sampul' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_struktur->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('struktur');
                    }

                    $upload_data = array('uploads' => $this->upload->data());
                    $config = array('uploads' => $this->upload->data());
                    $config ['image_library'] = 'gd2';
                    $config ['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        		'id_struktur'       =>$id_struktur,
                        );
                        $this->m_struktur->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('struktur');
            } 

            $data = array(
                'title' => 'Edit Data Struktur Organisasi',                
                'struktur' => $this->m_struktur->detail($id_struktur),
                'isi'  => 'admin/struktur/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }


        public function delete($id_struktur)
        {

             //menghapus file photo lama
             $struktur=$this->m_struktur->detail($id_struktur);
             if ($struktur->sampul !="") {
                 unlink('./sampul/'.$struktur->sampul);
             }
             //end menghapus photo lama
            $data = array(
                'id_struktur' => $id_struktur,
            );
            $this->m_struktur->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('struktur');
        }

        public function add_foto($id_struktur)
        {         
             $this->form_validation->set_rules('ket_foto','Keterangan Foto', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './foto/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                           $struktur = $this->m_struktur->detail($id_sstruktur);
                            $data = array(                
                                'struktur' => $struktur ,
                                'isi'  => 'admin/struktur/v_add_foto'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                          
                            $data = array(
                                'id_struktur'       =>$id_struktur,
                                'foto' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_struktur->add_foto($data);
                        $this->session->set_flashdata('pesan', 'Data Foto Berhasil Ditambakan');
                        redirect('struktur/add_foto/'.$id_struktur);
                    }                 
            } 
            $struktur = $this->m_struktur>detail($id_struktur);
            $data = array(                
                'struktur' => $struktur, 
                'isi'  => 'admin/struktur/v_add_foto'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
}

/* End of file Struktur.php */
