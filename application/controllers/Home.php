<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_pengumuman');

	}
    

    public function index()
    {
        $data = array(
            'title' => 'Web Informasi Masjid',         
             'pengumuman' => $this->m_pengumuman->lists(),          
             'berita' => $this->m_home->slider_berita(),   
            'isi'  => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


	public function pengumuman()
	{
		$data = array(
			'title' => 'Pengumuman',
			'pengumuman' => $this->m_home->pengumuman(),
			'isi'=> 'v_pengumuman' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	

	public function prestasi()
	{
		$data = array(
			'title' => 'Prestasi',
			'prestasi' => $this->m_home->prestasi(),
			'isi'=> 'v_prestasi' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
	
	//berita
	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->m_home->total_berita());
		$config['per_page'] = 4;
		$config['url_segmen'] = 3;	
		
		/////
			$limit= $config['per_page'];
			$start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//////
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagination__number blog__pagination"><ul class="pagination">"';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';			
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';		
		$config['full_tag_close'] = '</ul></div>';		
		/////............

		$this->pagination->initialize($config);

		$data = array(
			'paginasi' =>$this->pagination->create_links(),
			'latest_berita'=>$this->m_home->latest_berita(),
			'berita' =>$this->m_home->berita($limit,$start),
			'title' => 'Berita',
			'isi'=> 'v_berita' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	 public function detail_berita($slug_berita)
	{
		$data = array(
			'title' => 'Detail Berita',
			'latest_berita'=>$this->m_home->latest_berita(),
			'berita' => $this->m_home->detail_berita($slug_berita),
			'isi'=> 'v_berita_detail' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
	//end berita
}

/* End of file Home.php */
