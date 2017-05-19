<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Applicant extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('root/mapplicant');
    }

    function index()
    {
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $data['applicant'] = $this->mapplicant->list_applicant();
        $data['isi'] = 'root/applicant';
        $data['title'] = 'Administrator | Applicant';
        $this->load->view('root/layout/wrapper',$data);
    }

    function delete($id_carrer_apply) {
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id_carrer_apply' => $id_carrer_apply);
        $this->mapplicant->delete($where,'carrer_apply');
        redirect('root/applicant/');
 
    }
}