<?php

class M_home extends CI_Model {

	public function slider(){
		$this->db->order_by('no','asc');
		return $this->db->get('m_home_slider')->result();
	}

	public function video(){
		return $this->db->get('m_home_video')->row();
	}

	public function section(){
		$this->db->where('status', '1');
		$this->db->order_by('no','asc');
		return $this->db->get('m_home_section')->result();
	}

	public function section_detail($id){
		$this->db->where('section_id', $id);
		$this->db->order_by('no','asc');
		return $this->db->get('m_home_section_detail')->result();
	}
}