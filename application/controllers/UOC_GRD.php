<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UOC_GRD extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
      $this->load->model('UOC_GRD_Model');
  }

	public function index()
	{
		$data['provinces'] = $this->UOC_GRD_Model->getAllProvince();
		$data['districts'] = $this->UOC_GRD_Model->getDistrict();
		$data['sub_districts'] = $this->UOC_GRD_Model->getSubDistrict();
		$this->load->view('welcome_message', $data);
	}

	public function get_district()
	{
		$province = $this->input->post('province');

		$query=$this->db->select()
                    ->from('ref_district')
										->where('province_id', $province)
                    ->get();

		foreach($query->result() as $district){
			echo '<option value="'.$district->DISTRICT_ID.'">'.$district->DISTRICT_NAME_TH.'</option>';
		}
	}

	public function get_sub_district_id()
	{
		$district = $this->input->post('district');

		$query=$this->db->select()
                    ->from('ref_sub_district')
										->where('district_id', $district)
                    ->get();

		foreach($query->result() as $sub_district){
			echo '<option value="'.$sub_district->SUB_DISTRICT_ID.'">'.$sub_district->SUB_DISTRICT_NAME_TH.'</option>';
		}
	}
}
