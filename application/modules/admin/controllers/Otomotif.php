<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otomotif extends MX_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Otomotif_model','otomotif');
    }

	public function index()
	{
		$page['page'] = 'otomotif';
		$this->load->view('layouts/header',$page);
		$this->load->view('otomotif/index');
		$this->load->view('layouts/footer');
	}

	public function ajax_list()
    {
        $list = $this->otomotif->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $otomotif) {

        	if($otomotif->status=='1'){
        		$status = '<span class="label label-success label-sm">Publish</span>';
        	}else{
        		$status = '<span class="label label-danger label-sm">Tidak</span>';
        	}

            $no++;
            $row = array();
            $row[] = '<a href="'.base_url().'otomotif/detail/'.$otomotif->link_code.'" target="blank">'.$otomotif->ind_nama.'</a>';
            $row[] = $otomotif->link_code;
            $row[] = $status;
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="'.base_url().'admin/otomotif/edit/'.$otomotif->id.'" title="Edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus('."'".$otomotif->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->otomotif->count_all(),
                        "recordsFiltered" => $this->otomotif->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function tambah(){
    	$page['page'] = 'otomotif';
		$this->load->view('layouts/header',$page);
		$this->load->view('otomotif/tambah');
		$this->load->view('layouts/footer');
    }

    public function proses_tambah(){
    	$this->db->trans_start();

    	$data = array(
    		'ind_nama'		=> $this->input->post("nama"),
    		'en_nama'		=> $this->input->post("nama"),
    		'link_code'		=> $this->input->post("kode_link"),
    		'ind_content'	=> $this->input->post("konten_id"),
    		'en_content'	=> $this->input->post("konten_en"),
    		'ind_faq'		=> $this->input->post("faq_id"),
    		'en_faq'		=> $this->input->post("faq_en"),
    		'ind_warranty'	=> $this->input->post("warranty_id"),
    		'en_warranty'	=> $this->input->post("warranty_en")
    	);

    	if(!empty($_FILES['img1']['tmp_name'])){
    		$file_tmp 	= $_FILES['img1']['tmp_name'];
    		$arr1 		= explode(".", $_FILES['img1']['name']);
    		$file_ext1 	= strtolower(array_pop($arr1)); 
    		$file_name1 = $this->input->post("kode_link").'_img_1.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name1)){
    			$data['img1'] = $file_name1;
    		}	
    	}

    	if(!empty($_FILES['img2']['tmp_name'])){
    		$file_tmp 	= $_FILES['img2']['tmp_name'];
    		$arr2 		= explode(".", $_FILES['img2']['name']);
    		$file_ext2 	= strtolower(array_pop($arr2));
    		$file_name2 = $this->input->post("kode_link").'_img_2.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name2)){
    			$data['img2'] = $file_name2;
    		}	
    	}

    	if(!empty($_FILES['img3']['tmp_name'])){
    		$file_tmp 	= $_FILES['img3']['tmp_name'];
    		$arr3 		= explode(".", $_FILES['img3']['name']);
    		$file_ext3 	= strtolower(array_pop($arr3));
    		$file_name3 = $this->input->post("kode_link").'_img_3.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name3)){
    			$data['img3'] = $file_name3;
    		}	
    	}

    	if(!empty($_FILES['img4']['tmp_name'])){
    		$file_tmp 	= $_FILES['img4']['tmp_name'];
    		$arr4 		= explode(".", $_FILES['img4']['name']);
    		$file_ext4 	= strtolower(array_pop($arr4));
    		$file_name4 = $this->input->post("kode_link").'_img_4.'.$file_ext4;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name4)){
    			$data['img4'] = $file_name4;
    		}	
    	}

    	$this->db->insert('m_otomotif', $data);

    	for($i=0; $i<count($this->input->post('performa_data')); $i++){
    		$data2 = array(
    			'data' 					=> $this->input->post('performa_data')[$i],
    			'value'					=> $this->input->post('performa_value')[$i],
    			'otomotif_link_code' 	=> $this->input->post('kode_link')
    		);

    		$this->db->insert('m_otomotif_performa', $data2);
    	}

    	$res = $this->db->trans_complete();
    	if($res == true){
    		redirect(base_url().'admin/otomotif');
    	}
    }


    public function edit($id){
    	$data['data'] = $this->otomotif->getByID($id);
    	$page['page'] = 'otomotif';
		$this->load->view('layouts/header',$page);
		$this->load->view('otomotif/edit', $data);
		$this->load->view('layouts/footer');
    }

    public function proses_edit(){
    	// echo '<pre>';
    	// print_r($this->input->post());
    	// echo '</pre>';
    	$this->db->trans_start();

    	$data = array(
    		'ind_nama'		=> $this->input->post("nama"),
    		'en_nama'		=> $this->input->post("nama"),
    		'ind_content'	=> $this->input->post("konten_id"),
    		'en_content'	=> $this->input->post("konten_en"),
    		'ind_faq'		=> $this->input->post("faq_id"),
    		'en_faq'		=> $this->input->post("faq_en"),
    		'ind_warranty'	=> $this->input->post("warranty_id"),
    		'en_warranty'	=> $this->input->post("warranty_en")
    	);

    	if(!empty($_FILES['img1']['tmp_name'])){
    		$file_tmp 	= $_FILES['img1']['tmp_name'];
    		$arr1 		= explode(".", $_FILES['img1']['name']);
    		$file_ext1 	= strtolower(array_pop($arr1)); 
    		$file_name1 = $this->input->post("kode_link").'_img_1.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name1)){
    			$data['img1'] = $file_name1;
    		}	
    	}

    	if(!empty($_FILES['img2']['tmp_name'])){
    		$file_tmp 	= $_FILES['img2']['tmp_name'];
    		$arr2 		= explode(".", $_FILES['img2']['name']);
    		$file_ext2 	= strtolower(array_pop($arr2));
    		$file_name2 = $this->input->post("kode_link").'_img_2.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name2)){
    			$data['img2'] = $file_name2;
    		}	
    	}

    	if(!empty($_FILES['img3']['tmp_name'])){
    		$file_tmp 	= $_FILES['img3']['tmp_name'];
    		$arr3 		= explode(".", $_FILES['img3']['name']);
    		$file_ext3 	= strtolower(array_pop($arr3));
    		$file_name3 = $this->input->post("kode_link").'_img_3.'.$file_ext1;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name3)){
    			$data['img3'] = $file_name3;
    		}	
    	}

    	if(!empty($_FILES['img4']['tmp_name'])){
    		$file_tmp 	= $_FILES['img4']['tmp_name'];
    		$arr4 		= explode(".", $_FILES['img4']['name']);
    		$file_ext4 	= strtolower(array_pop($arr4));
    		$file_name4 = $this->input->post("kode_link").'_img_4.'.$file_ext4;

    		if(move_uploaded_file($file_tmp,"content/otomotif/".$file_name4)){
    			$data['img4'] = $file_name4;
    		}	
    	}

    	$this->db->where('id', $this->input->post('id'));
    	$this->db->update('m_otomotif', $data);

    	$this->db->where('otomotif_link_code', $this->input->post("kode_link"));
        if($this->db->delete('m_otomotif_performa')){
        	for($i=0; $i<count($this->input->post('performa_data')); $i++){
        		$data2 = array(
        			'data' 					=> $this->input->post('performa_data')[$i],
        			'value'					=> $this->input->post('performa_value')[$i],
        			'otomotif_link_code' 	=> $this->input->post('kode_link')
        		);

        		$this->db->insert('m_otomotif_performa', $data2);
        	}
        }

    	$res = $this->db->trans_complete();
    	if($res == true){
    		redirect(base_url().'admin/otomotif');
    	}
    }


    public function hapus($id){
    	echo json_encode(array('status' => '1'));
    }
}
