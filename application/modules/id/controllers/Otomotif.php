<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otomotif extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_otomotif','otomotif');
    }

	public function detail($id)
	{
		if(!empty($id)){
			$data['data'] = $this->otomotif->getSection($id);
			$data['list'] = $this->otomotif->getList($id);
			
			$page['page'] = 'automotive/detail/'.$id;
			$this->load->view('../../layouts/id/header',$page);
			$this->load->view('otomotif/index',$data);
			$this->load->view('../../layouts/id/footer');
		}else{
			redirect(base_url().'page/note_found');
		}
	}

	public function portfolio(){
		$data['data'] = $this->otomotif->getPortfolio();
		
		$page['page'] = 'automotive/portfolio';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('otomotif/portfolio',$data);
		$this->load->view('../../layouts/id/footer');
	}
}
