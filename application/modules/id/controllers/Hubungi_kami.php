<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_hubungi_kami','hubungi');
    }

	public function tentang_vkool()
	{
		$data['section'] = $this->hubungi->getSectionTentangKami();

		$page['page'] = 'about-vkool';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('hubungi_kami/tentang_kami', $data);
		$this->load->view('../../layouts/id/footer');
	}

	public function penghargaan(){
		$data['list'] = $this->hubungi->getListPenghargaan();
		$page['page'] = 'awards';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('hubungi_kami/penghargaan', $data);
		$this->load->view('../../layouts/id/footer');	
	}
}