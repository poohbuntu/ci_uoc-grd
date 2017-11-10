<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UOC_GRD_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getAllProvince()
  {
    $query=$this->db->select()
                    ->from('ref_province')
                    ->get();
    return $query;
  }

  public function getDistrict()
  {
    $query=$this->db->select()
                    ->from('ref_district')
                    ->get();
    return $query;
  }

  public function getSubDistrict()
  {
    $query=$this->db->select()
                    ->from('ref_sub_district')
                    ->get();
    return $query;
  }

}
