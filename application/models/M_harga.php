<?php

class M_harga extends CI_Model {

	public function mobil_merk(){
		$this->db->order_by('nama','asc');
		return $this->db->get('m_mobil_merk')->result();
	}

	public function mobil_tipe(){
		$this->db->order_by('nama','asc');
		return $this->db->get('m_mobil_tipe')->result();
	}

	public function list_depan(){
		$this->db->order_by('b.id','asc');
		$this->db->join('m_otomotif as b','b.id=a.tipe_vkool','left');
		$this->db->where('bagian','1');
		return $this->db->get('m_harga as a')->result();
	}

	public function list_samping(){
		$this->db->order_by('b.id','asc');
		$this->db->join('m_otomotif as b','b.id=a.tipe_vkool','left');
		$this->db->where('bagian','2');
		return $this->db->get('m_harga as a')->result();
	}

	public function list_belakang(){
		$this->db->order_by('b.id','asc');
		$this->db->join('m_otomotif as b','b.id=a.tipe_vkool','left');
		$this->db->where('bagian','3');
		return $this->db->get('m_harga as a')->result();
	}

	public function list_bangunan(){
		return $this->db->get('m_bangunan')->result();
	}
}