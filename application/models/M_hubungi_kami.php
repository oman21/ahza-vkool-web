<?php

class M_hubungi_kami extends CI_Model {

	public function getSectionTentangKami(){
		$this->db->order_by('no','asc');
		return $this->db->get('m_tentang')->result();
	}

	public function getListPenghargaan(){
		return $this->db->get('m_penghargaan')->result();	
	}
}