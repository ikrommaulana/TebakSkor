<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Msurvey extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

	function save($query){
		$this->db->insert('survey_customer',$query);
    }

	function simpan($query){
		$this->db->insert('survey_employee',$query);
    }

	function nikcheck($str){
		$this->db->where('nik',$str);
		$query =  $this->db->get('employee');
        return $query->num_rows();
    }

}