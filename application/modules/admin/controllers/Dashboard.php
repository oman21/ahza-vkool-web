<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$page['page'] = 'dashboard';
		$this->load->view('layouts/header',$page);
		$this->load->view('dashboard/index');
		$this->load->view('layouts/footer');
	}
}
