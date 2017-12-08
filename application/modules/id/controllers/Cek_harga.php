<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_harga extends MX_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('../M_harga','harga');
    }

	public function index()
	{
		$data['mobil_merk'] = $this->harga->mobil_merk();
		$data['mobil_tipe'] = $this->harga->mobil_tipe();
		$data['list_depan'] = $this->harga->list_depan();
		$data['list_samping'] = $this->harga->list_samping();
		$data['list_belakang'] = $this->harga->list_belakang();
		
		$page['page'] = 'price-estimation-automotive';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('cek_harga/index', $data);
		$this->load->view('../../layouts/id/footer');
	}

	public function hitung(){
		$harga_depan = $this->input->post('bagian_depan');
		$harga_samping = $this->input->post('bagian_samping');
		$harga_belakang = $this->input->post('bagian_belakang');

		$hasil = $harga_depan + $harga_samping + $harga_belakang;

		echo json_encode(array('status' => '1', 'harga' => $hasil));
	}

	public function bangunan(){
		$data['list'] = $this->harga->list_bangunan();

		$page['page'] = 'price-estimation-architectural';
		$this->load->view('../../layouts/id/header',$page);
		$this->load->view('cek_harga/bangunan', $data);
		$this->load->view('../../layouts/id/footer');
	}

	public function hitung_bangunan(){
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');

		$hasil = ((($panjang*$lebar)*$harga)*$jumlah);
		
		echo json_encode(array('status' => '1', 'harga' => $hasil));
	}
}
