<?php

class M_otomotif extends CI_Model {

	public function getALL(){
		return $this->db->get('m_otomotif')->result();
	}

	public function getByID($id){
		$this->db->where('link_code',$id);
		return $this->db->get('m_otomotif')->row();
	}

	public function detail_performa($id){
		$this->db->where('otomotif_link_code',$id);
		return $this->db->get('m_otomotif_performa')->result();	
	}
}