<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_home','home');
    }

	public function index()
	{
		$data['slider'] = $this->home->slider();
		$data['video'] = $this->home->video();
		$data['section'] = $this->home->section();

		$page['page'] = 'home';
		$this->load->view('../../layouts/en/header',$page);
		$this->load->view('home/index', $data);
		$this->load->view('../../layouts/en/footer');
	}

	public function detail($id){
		$data['section'] = $this->home->section_detail($id);

		$page['page'] = 'home/detail/'.$id;
		$this->load->view('../../layouts/en/header',$page);
		$this->load->view('home/detail', $data);
		$this->load->view('../../layouts/en/footer');
	}
}
