<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mregister extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function get_all_provinsi()
	{
	   $query = $this->db->get('mkm_province');
	   return $query->result();
	}
	
	function register($data) {  
         $query = $this->db->insert('register_user',$data);  
    }  
	

}