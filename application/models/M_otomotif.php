<?php

class M_otomotif extends CI_Model {

	public function getSection($id){
		$this->db->where('otomotif_link',$id);
		$this->db->order_by('no','asc');
		return $this->db->get('m_otomotif_detail')->result();
	}

	public function getList($id){
		$this->db->where('otomotif_link',$id);
		$this->db->order_by('no','asc');
		return $this->db->get('m_otomotif_detail_list')->result();
	}

	public function getPortfolio(){
		return $this->db->get('m_otomotif_portfolio')->result();
	}
}