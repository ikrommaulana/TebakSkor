<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Guess extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mguess');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['match'] = $this->mguess->list_match();
        $data['isi'] = 'root/guess';
        $data['title'] = 'Administrator | Guess Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function detail($id)
    {
		$data['user'] = $this->session->all_userdata();
        $data['guess'] = $this->mguess->list_guess($id);
        $data['isi'] = 'root/detail_guess';
        $data['title'] = 'Administrator | Guess Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function all($id)
    {
		$data['user'] = $this->session->all_userdata();
        $data['guess'] = $this->mguess->all_guess($id);
        $data['isi'] = 'root/all_guess';
        $data['title'] = 'Administrator | Guess Page';
        $this->load->view('root/layout/wrapper',$data);
    }
}