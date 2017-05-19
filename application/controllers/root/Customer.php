<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Customer extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mcustomer');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['user'] = $this->session->all_userdata();
        $data['cust'] = $this->mcustomer->list_customer();
        $data['isi'] = 'root/customer';
        $data['title'] = 'Administrator | Customer Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function search($from,$until)
    {
		$data['user'] = $this->session->all_userdata();
        $data['cust'] = $this->mcustomer->search_customer($from,$until);
        $data['isi'] = 'root/searchcustomer';
        $data['title'] = 'Administrator | Customer Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function delete($id) {
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id' => $id);
        $this->mpost->delete($where,'post');
        redirect('root/post');
 
    }
}