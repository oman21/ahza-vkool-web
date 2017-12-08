<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bangunan extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_bangunan','bangunan');
    }

	public function detail($id)
	{
		if(!empty($id)){
			$data['data'] = $this->bangunan->getSection($id);
			$data['list'] = $this->bangunan->getList($id);
			$data['produk'] = $this->bangunan->getProduk($id);
			
			$page['page'] = 'bangunan/detail/'.$id;
			$this->load->view('../../layouts/en/header',$page);
			$this->load->view('bangunan/index',$data);
			$this->load->view('../../layouts/en/footer');
		}else{
			redirect(base_url().'page/note_found');
		}
	}

	public function portfolio(){
		$data['data'] = $this->bangunan->getPortfolio();
		
		$page['page'] = 'bangunan/portfolio';
		$this->load->view('../../layouts/en/header',$page);
		$this->load->view('bangunan/portfolio',$data);
		$this->load->view('../../layouts/en/footer');
	}
}
