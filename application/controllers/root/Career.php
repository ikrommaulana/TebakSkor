<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Career extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('root/mcareer');
    }

    function index()
    {	
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $data['career'] = $this->mcareer->list_career();
        $data['isi'] = 'root/career';
        $data['title'] = 'Administrator | Vacancy';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {	
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addcareer';
        $data['title'] = 'Add Career';
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {	
        if($this->input->post('submit') ) {
            $query = array (
                'job_title' => $this->input->post('jobtitle'),
                'department' => $this->input->post('department'),
                'location' => $this->input->post('location'),
                'latest_education' => $this->input->post('edu'),
                'years_experience' => $this->input->post('exp'),
                'status' => $this->input->post('status'),
                'desc' => $this->input->post('desc'),
            );
            $this->mcareer->save($query);
            }
        $data['isi'] = 'root/success';
        $data['title'] = 'Sukses';
        $data['page'] = 'career';
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $this->load->view('root/layout/wrapper',$data);
    }

    function edit($id_carrer) {
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $data['hasil'] = $this->mcareer->get($id_carrer);
        $data['isi'] = 'root/editcareer';
        $data['title'] = 'Edit Career';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mcareer->edit($id_carrer);
			redirect('root/career/');
        }
 
    }

    function delete($id_carrer) {
		$this->load->library('session');
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id_carrer' => $id_carrer);
        $this->mcareer->delete($where,'carrer');
        redirect('root/career/');
 
    }
}