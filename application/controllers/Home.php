<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_pengumuman');
		$this->load->model('m_sapra');

	}
    

    public function index()
    {
        $data = array(
            'title' => 'Web Informasi Masjid',         
             'pengumuman' => $this->m_pengumuman->lists(),          
			 'sapra' => $this->m_sapra->lists(),     
            //  'berita' => $this->m_home->slider_berita(),   
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


	public function majelis()
	{
		$data = array(
			'title' => 'Majelis',
			'majelis' => $this->m_home->majelis(),
			'isi'=> 'v_majelis' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function tarawih()
	{
		$data = array(
			'title' => 'tarawih',
			'tarawih' => $this->m_home->tarawih(),
			'isi'=> 'v_tarawih' 
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

	public function lapkas()
	{
		$data = array(
			'title' => 'Laporan Kas',
			'lapkas' => $this->m_home->lapkas(),
			'isi' => 'v_lapkas'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	
	public function infaq()
	{
		$data = array(
			'title' => 'Data Infaq',
			'infaq' => $this->m_home->infaq(),
			'isi' => 'v_infaq'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
	
	public function waqaf()
	{
		$data = array(
			'title' => 'Data Waqaf',
			'waqaf' => $this->m_home->waqaf(),
			'isi' => 'v_waqaf'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function mustahik()
	{
		$data = array(
			'title' => 'Data Mustahik',
			'mustahik' => $this->m_home->mustahik(),
			'isi' => 'v_mustahik'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function shodaqoh()
	{
		$data = array(
			'title' => 'Data Shodaqoh',
			'shodaqoh' => $this->m_home->shodaqoh(),
			'isi' => 'v_shodaqoh'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function zakat()
	{
		$data = array(
			'title' => 'Data Zakat',
			'zakat' => $this->m_home->zakat(),
			'isi' => 'v_zakat'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function pengeluaran()
	{
		$data = array(
			'title' => 'Data Pengeluaran',
			'pengeluaran' => $this->m_home->pengeluaran(),
			'isi' => 'v_pengeluaran'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function jumat()
	{
		$data = array(
			'title' => 'Sholat Jumat',
			'jumat' => $this->m_home->jumat(),
			'isi'=> 'v_jumat' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	
	public function organisasi()
	{
		$data = array(
			'title' => 'Struktur Organisasi',
			'organisasi' => $this->m_home->organisasi(),
			'isi'=> 'v_organisasi' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	 public function sapra()
	{
		$data = array(
			'title' => 'Sarana & Prasarana',
			'sapra' => $this->m_home->sapra(),
			'isi'=> 'v_sapra' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function gallery()
	{
		$data = array(
			'title' => 'Gallery',
			'gallery' => $this->m_home->gallery(),
			'isi'=> 'v_gallery' 
			);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function contact()
	{
		$data = array(
			'title' => 'Contact',
			'isi'=> 'v_contact' 
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
