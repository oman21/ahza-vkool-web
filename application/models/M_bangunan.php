<?php

class M_bangunan extends CI_Model {

	public function getSection($id){
		$this->db->where('bangunan_link',$id);
		$this->db->order_by('no','asc');
		return $this->db->get('m_bangunan_detail')->result();
	}

	public function getList($id){
		$this->db->where('bangunan_link_code',$id);
		return $this->db->get('m_bangunan_performa')->result();	
	}

	public function getProduk($id){
		$this->db->where('link_code', $id);
		return $this->db->get('m_bangunan')->row();
	}

	public function getPortfolio(){
		return $this->db->get('m_bangunan_portfolio')->result();
	}
}