<?php
	
	if(!function_exists('otomotif_menu'))
	{
	  	function otomotif_menu(){
	  		$CI =& get_instance();
		    $CI->load->database();
		    $CI->db->order_by('id','asc');
		    $query = $CI->db->get('m_otomotif')->result();
		    return $query;
	  	}
	}

	if(!function_exists('bangunan_menu'))
	{
	  	function bangunan_menu(){
	  		$CI =& get_instance();
		    $CI->load->database();
		    $CI->db->order_by('id','asc');
		    $query = $CI->db->get('m_bangunan')->result();
		    return $query;
	  	}
	}