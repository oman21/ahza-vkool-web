<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_dealer','dealer');
    }

	public function index()
	{
		$data['kota'] = $this->dealer->getKota();
		$data['provinsi'] = $this->dealer->getProvinsi();

		$page['page'] = 'dealer';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('dealer/index', $data);
		$this->load->view('../../layouts/id/footer');
	}


	public function listDealer($kota){

		if($kota != 'all'){
			$list = $this->dealer->getListByKota($kota);
		}else{
			$list = $this->dealer->getList();
		}

		if($list->num_rows() > 0){

			$data = '';
				foreach ($list->result() as $row) {
		            $data.='<div class="col-sm-4 list-dealer">;
		            	<div class="list-content-dealer">
		                    <a href="#">
		                        <img alt="Pic" class="mb24" src="'.base_url().'content/dealer/'.$row->gambar.'" />
		                    </a>
		                    
		                    <div class="content-wraper">
		                        <a href="#">
		                            <h4 class="mb8">'.$row->nama.'</h4>
		                        </a>
		                        <ul class="list-inline mb16">
		                            <li>
		                                <a href="dealer-vil.html">
		                                    <span class="label">Lihat Peta</span>
		                                </a>
		                            </li>
		                        </ul>
		                        <p class="mb0">
		                            '.$row->alamat.'
		                            <br />Ph  : '.$row->phone.'
									<br />Fax : '.$row->fax.'
		                        </p>
		                    </div>
		                </div>
		            </div>';                     
	            } 
	    }else{
	    	$data = "<h3>Dealer Tidak Ditemukan</h3>";
	    }

        echo json_encode(array('data' => $data));
	}
}