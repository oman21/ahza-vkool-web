<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MX_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$page['page'] = 'event';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('event/index');
		$this->load->view('../../layouts/id/footer');
	}
}