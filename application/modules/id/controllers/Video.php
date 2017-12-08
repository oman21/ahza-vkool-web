<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends MX_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$page['page'] = 'video';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('video/index');
		$this->load->view('../../layouts/id/footer');
	}
}