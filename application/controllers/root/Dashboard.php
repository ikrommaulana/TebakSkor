<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
	}

	function index()
	{
		$data['user'] = $this->session->all_userdata();
		$data['post'] = $this->db->count_all('post');
		$data['slide'] = $this->db->count_all('slide');
		$data['magz'] = $this->db->count_all('magazine');
		$data['apply'] = $this->db->count_all('carrer_apply');
		$data['isi'] = 'root/dashboard';
		$data['title'] = 'Administrator | Dashboard Page';
		$this->load->view('root/layout/wrapper',$data);
	}
}