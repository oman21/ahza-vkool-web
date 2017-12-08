<?php

class M_dealer extends CI_Model {

	public function getList(){
		return $this->db->get('m_dealer');
	}

	public function getProvinsi(){
		$this->db->order_by('provinsi_nama','asc');
		return $this->db->get('m_provinsi')->result();
	}

	public function getKota(){
		$this->db->order_by('kokab_nama','asc');
		return $this->db->get('m_kota')->result();
	}

	public function getListByKota($kota){
		$this->db->where('kota_id',$kota);
		return $this->db->get('m_dealer');
	}
}