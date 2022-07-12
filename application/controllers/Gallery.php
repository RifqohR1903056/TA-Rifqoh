<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');

    }

	  public function index()
        {
            $data = array(
                'title' => 'Gallery Photo', 
                'gallery' => $this->m_gallery->lists(),
                'isi'  => 'admin/gallery/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }

         public function add()
        {         
            
        $this->form_validation->set_rules('nama_gallery','Nama Gallery Photo', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './photo/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('photo'))
                    {
                           
                            $data = array(                
                                'title' => 'Input Gallery Photo',
								'error_upload' => $this->upload->display_errors(),
								'isi'=> 'admin/gallery/v_add'  
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './photo/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            // $this->upload->initialize($config);

                            $data = array(
                                'nama_gallery' 		=> $this->input->post('nama_gallery'),							
								'photo' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_gallery->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
                        redirect('gallery');
                    }
            } 
            
            $data = array(
                'title' => 'Tambah Gallery Photo', 
                'mapel' => $this->m_gallery->lists(),
                'isi'  => 'admin/gallery/v_add'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
        

 		 public function edit($id_gallery)
        {
            $this->form_validation->set_rules('nama_gallery','Nama Gallery Photo', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './photo/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('photo'))
                    {
                           
                            $data = array(                
                                'title' => ' Edit Gallery Photo', 
                                'gallery' => $this->m_gallery->detail($id_gallery),
                                'isi'  => 'admin/gallery/v_edit'
                            );
                            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    }
                    else
                    {
                            $upload_data = array('uploads' => $this->upload->data());
                            $config = array('uploads' => $this->upload->data());
                            $config ['image_library'] = 'gd2';
                            $config ['source_image'] = './photo/'.$upload_data['uploads']['file_name'];
                            $this->load->library('image_lib', $config);
                            //menghapus file photo lama
                            $gallery=$this->m_gallery->detail($id_gallery);
                            if ($gallery->photo !="") {
                                unlink('./photo/'.$gallery->photo);
                            }
                            //end menghapus photo lama
                            $data = array(
                                'id_gallery'       =>$id_gallery,
                                'nama_gallery' 	=> $this->input->post('nama_gallery'),
                                'photo' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_gallery->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('gallery');
                    }

                    $upload_data = array('uploads' => $this->upload->data());
                    $config = array('uploads' => $this->upload->data());
                    $config ['image_library'] = 'gd2';
                    $config ['source_image'] = './photo/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        		'id_gallery'       =>$id_gallery,
                                'nama_gallery' 	=> $this->input->post('nama_gallery'),
                        );
                        $this->m_gallery->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('gallery');
            } 

            $data = array(
                'title' => 'Edit Gallery Photo',                
                'gallery' => $this->m_gallery->detail($id_gallery),
                'isi'  => 'admin/gallery/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }


        public function delete($id_gallery)
        {

             //menghapus file photo lama
             $gallery=$this->m_gallery->detail($id_gallery);
             if ($gallery->photo !="") {
                 unlink('./photo/'.$gallery->photo);
             }
             //end menghapus photo lama
            $data = array(
                'id_gallery' => $id_gallery,
            );
            $this->m_gallery->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!!');        
            redirect('gallery');
        }

        public function add_foto($id_gallery)
        {         
             $this->form_validation->set_rules('ket_foto','Keterangan Foto', 'required');

            
            if ($this->form_validation->run() == TRUE) {
               $config['upload_path'] = './foto/';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 2000;
               $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                           $gallery = $this->m_gallery->detail($id_gallery);
                            $data = array(                
                				'title' => 'Tambah Gallery Photo : '.$gallery->nama_gallery,   
                                'gallery' => $gallery ,
                                'isi'  => 'admin/gallery/v_add_foto'
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
                                'id_gallery'       =>$id_gallery,
                                'ket_foto' 	=> $this->input->post('ket_foto'),
                                'foto' 	=> $upload_data['uploads']['file_name'],
                                );
                        $this->m_gallery->add_foto($data);
                        $this->session->set_flashdata('pesan', 'Data Foto Berhasil Ditambakan');
                        redirect('gallery/add_foto/'.$id_gallery);
                    }                 
            } 
            $gallery = $this->m_gallery->detail($id_gallery);
            $data = array(
                'title' => 'Tambah Gallery Photo : '.$gallery->nama_gallery,                
                'gallery' => $gallery, 
                'isi'  => 'admin/gallery/v_add_foto'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        }
}

/* End of file Gallery.php */
