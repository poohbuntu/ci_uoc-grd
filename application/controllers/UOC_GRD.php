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
}
