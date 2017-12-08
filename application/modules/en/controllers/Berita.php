<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$page['page'] = 'berita';
		$this->load->view('../../layouts/en/header',$page);
		$this->load->view('berita/index');
		$this->load->view('../../layouts/en/footer');
	}
}