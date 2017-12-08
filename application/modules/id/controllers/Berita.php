<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$page['page'] = 'news';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('berita/index');
		$this->load->view('../../layouts/id/footer');
	}
}