<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_gambar');
                $this->load->helper('url');
	}

	public function index()
	{
		$data['prestasi'] = $this->m_gambar->gambar_prestasi()->result();
		$this->load->view('home', $data);
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function pmb()
	{
		$this->load->view('pmb');
	}
	public function hubungi_kami()
	{
		$this->load->view('hubungi_kami');
	}
	public function kemahasiswaan()
	{
		$data['bem'] = $this->m_gambar->gambar_bem()->result();
		$this->load->view('kemahasiswaan',$data);
	}
	public function beasiswa()
	{
		$this->load->view('beasiswa');
	}
	public function ukm()
	{
		$data['prestasi'] = $this->m_gambar->gambar_prestasi()->result();
		$this->load->view('ukm', $data);	
	}
	public function kerjasama()
	{
		$this->load->view('kerjasama');
	}
	public function P3M()
	{
		$this->load->view('P3M');
	}
}
