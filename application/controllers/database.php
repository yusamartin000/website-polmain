<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_pdf');		
	}

	public function download($link){
		$data['link'] = $this->m_pdf->download_pdf($link);
		$this->load->view('download', $data);
	}
}