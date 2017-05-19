<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Magazine extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mmagazine');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['magz'] = $this->mmagazine->list_magazine();
        $data['isi'] = 'root/magazine';
        $data['title'] = 'Administrator | Magazine';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addmagazine';
        $data['title'] = 'Add New Magazine';
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {
        $this->load->helper(array('url','form'));
        $config['upload_path']          = './uploads/magazine/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();
		
        if($this->input->post('submit') ) {
		   $query = array (
				'name' => $this->input->post('name'),
				'id_mag' => $this->input->post('id_mag'),
				'image' => base_url().'uploads/magazine/'.$image['file_name'],
				'download' => $this->input->post('download'),
				'embed' => $this->input->post('embed'),
				'target' => $this->input->post('target'),
				'user_id' => $this->input->post('user_id'),
				'status' => $this->input->post('status'),
				'date' => $this->input->post('date')
				);
            $this->mmagazine->save($query);
            }
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/success';
        $data['title'] = 'Sukses';
        $data['page'] = 'magazine';
        $this->load->view('root/layout/wrapper',$data);
    }

    function edit($id) {
        $this->load->helper(array('url','form'));
		$data['user'] = $this->session->all_userdata();
        $data['hasil'] = $this->mmagazine->get($id);
        $data['isi'] = 'root/editmagazine';
        $data['title'] = 'Edit Magazine';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mmagazine->edit($id);
        }
 
    }

    function delete($id) {
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id' => $id);
        $this->mmagazine->delete($where,'magazine');
        redirect('root/magazine');
 
    }
}