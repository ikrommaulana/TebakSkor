<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sponsorship extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/msponsorship');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['post'] = $this->msponsorship->list_slide();
        $data['isi'] = 'root/sponsorship';
        $data['title'] = 'Administrator | Slide';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addsponsorship';
        $data['title'] = 'Add New Sponsorship';
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {
        $this->load->helper(array('url','form'));
        $config['upload_path']          = './uploads/sponsorship/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();

        if($this->input->post('submit') ) {
            $query = array (
                'title' => $this->input->post('title'),
                'image' => base_url().'uploads/sponsorship/'.$image['file_name'],
                'link' => $this->input->post('link'),
                'target' => $this->input->post('target'),
                'category' => $this->input->post('category'),
                'order' => $this->input->post('order'),
                'status' => $this->input->post('status'),
                'user_id' => $this->input->post('user_id'),
                'date' => $this->input->post('date')
            );
            $this->msponsorship->save($query);
            }
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/success';
        $data['title'] = 'Sukses';
        $data['page'] = 'sponsorship';
        $this->load->view('root/layout/wrapper',$data);
    }

    function edit($id) {
        $this->load->helper(array('url','form'));
		$data['user'] = $this->session->all_userdata();
        $data['hasil'] = $this->msponsorship->get($id);
        $data['isi'] = 'root/editsponsorship';
        $data['title'] = 'Edit Sponsorship';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mponsorship->edit($id);
        }
 
    }

    function delete($id) {
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id' => $id);
        $this->msponsorship->delete($where,'slide');
        redirect('root/sponsorship');
 
    }
}