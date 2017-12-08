<?php

class M_bangunan extends CI_Model {

	public function getALL(){
		return $this->db->get('m_bangunan')->result();
	}

	public function getByID($id){
		$this->db->where('link_code',$id);
		return $this->db->get('m_bangunan')->row();
	}

	public function detail_performa($id){
		$this->db->where('bangunan_link_code',$id);
		return $this->db->get('m_bangunan_performa')->result();	
	}
}