<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Post extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mpost');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['post'] = $this->mpost->list_post();
        $data['isi'] = 'root/post';
        $data['title'] = 'Administrator | Post Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addpost';
        $data['title'] = 'Add Post';
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();
		
		$urllow = strtolower($this->input->post('title'));
		$url = str_replace(' ', '-', $urllow);
		
		$pub_date = $this->input->post('date');
		$format = date('Y-m-d', strtotime($pub_date));
            
        if($this->input->post('submit') ) {
            $query = array (
                'title' => $this->input->post('title'),
                'image' => base_url().'uploads/news/'.$image['file_name'],
                'url' => $url,
                'category' => $this->input->post('category'),
                'status' => $this->input->post('status'),
                'content' => $this->input->post('content'),
                'user_id' => $this->input->post('user_id'),
                'date' => $format
            );
            $this->mpost->save($query);
            }
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/success';
        $data['title'] = 'Sukses';
        $data['page'] = 'post';
        $this->load->view('root/layout/wrapper',$data);
    }

    function edit($id) {
        $this->load->helper(array('url','form'));
		$data['user'] = $this->session->all_userdata();
        $data['hasil'] = $this->mpost->get($id);
        $data['isi'] = 'root/editpost';
        $data['title'] = 'Edit Post';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mpost->edit($id);
			redirect('root/post/');
        }
 
    }

    function delete($id) {
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id' => $id);
        $this->mpost->delete($where,'post');
        redirect('root/post');
 
    }
}