<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('m_organisasi');

    }

	  public function index()
        {
            $data = array(
                'title' => 'Sarana & Prasarana', 
                'organisasi' => $this->m_organisasi->lists(),
                'isi'  => 'admin/organisasi/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }

         public function add()
        {         
            
        $this->form_validation->set_rules('nama_organisasi','Nama Struktur Organisasi', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './struktur/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('struktur'))
                    {
                           
                            $data = array(                
                                'title' => 'Input Struktur Organisasi',
								'error_upload' => $this->upload->display_errors(),
								'isi'=> 'admin/organisasi/v_add'  
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './struktur/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            // $this->upload->initialize($config);

                            $data = array(
                                'nama_organisasi' 		=> $this->input->post('nama_organisasi'),							
								'struktur' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_organisasi->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('organisasi');
                    }
            } 
            
            $data = array(
                'title' => 'Tambah Data Sarana & Prasarana', 
                'mapel' => $this->m_organisasi->lists(),
                'isi'  => 'admin/organisasi/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        

 		 public function edit($id_organisasi)
        {
            $this->form_validation->set_rules('nama_organisasi','Nama Sarana & Prasarana', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './struktur/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('struktur'))
                    {
                           
                            $data = array(                
                                'title' => ' Edit Data Sarana & Prasarana', 
                                'organisasi' => $this->m_organisasi->detail($id_organisasi),
                                'isi'  => 'admin/organisasi/v_edit'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './struktur/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            //menghapus file photo lama
                            $organisasi=$this->m_organisasi->detail($id_organisasi);
                            if ($organisasi->struktur !="") {
                                unlink('./struktur/'.$organisasi->struktur);
                            }
                            //end menghapus photo lama
                            $data = array(
                                'id_organisasi'       =>$id_organisasi,
                                'nama_organisasi' 	=> $this->input->post('nama_organisasi'),
                                'struktur' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_organisasi->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('organisasi');
                    }

                    $upload_data = array('uploads' => $this->upload->data());
                    $config = array('uploads' => $this->upload->data());
                    $config ['image_library'] = 'gd2';
                    $config ['source_image'] = './struktur/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        		'id_organisasi'       =>$id_organisasi,
                                'nama_organisasi' 	=> $this->input->post('nama_organisasi'),
                        );
                        $this->m_organisasi->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('organisasi');
            } 

            $data = array(
                'title' => 'Edit Data Sarana & Prasarana',                
                'organisasi' => $this->m_organisasi->detail($id_organisasi),
                'isi'  => 'admin/organisasi/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }


        public function delete($id_organisasi)
        {

             //menghapus file photo lama
             $organisasi=$this->m_organisasi->detail($id_organisasi);
             if ($organisasi->struktur !="") {
                 unlink('./struktur/'.$organisasi->struktur);
             }
             //end menghapus photo lama
            $data = array(
                'id_organisasi' => $id_organisasi,
            );
            $this->m_organisasi->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('organisasi');
        }

        public function add_foto($id_organisasi)
        {         
             $this->form_validation->set_rules('ket_foto','Keterangan Foto', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './foto/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                           $organisasi = $this->m_organisasi->detail($id_organisasi);
                            $data = array(                
                				'title' => 'Tambah Data Foto Sarana & Prasarana : '.$organisasi->nama_organisasi,   
                                'organisasi' => $organisasi ,
                                'isi'  => 'admin/organisasi/v_add_foto'
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
                                'id_organisasi'       =>$id_organisasi,
                                'ket_foto' 	=> $this->input->post('ket_foto'),
                                'foto' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_organisasi->add_foto($data);
                        $this->session->set_flashdata('pesan', 'Data Foto Berhasil Ditambakan');
                        redirect('organisasi/add_foto/'.$id_organisasi);
                    }                 
            } 
            $organisasi = $this->m_organisasi->detail($id_organisasi);
            $data = array(
                'title' => 'Tambah Data Sarana & Prasarana : '.$organisasi->nama_organisasi,                
                'organisasi' => $organisasi, 
                'isi'  => 'admin/organisasi/v_add_foto'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
}

/* End of file Sapra.php */
