<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Streaming extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mstreaming');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['streaming'] = $this->mstreaming->list_view();
        $data['isi'] = 'root/streaming';
        $data['title'] = 'Administrator | Streaming Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addvideo';
        $data['title'] = 'Add Video Streaming';
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
		
		$pub_date = $this->input->post('date');
		$format = date('Y-m-d', strtotime($pub_date));
            
        if($this->input->post('submit') ) {
            $query = array (
                'judul' => $this->input->post('title'),
                'link_video' => $this->input->post('link_video'),
                'cat' => $this->input->post('category'),
                'deskripsi' => $this->input->post('deskripsi'),
                'date' => $format
            );
            $this->mstreaming->save($query);
            }
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/success';
        $data['title'] = 'Sukses';
        $data['page'] = 'streaming';
        $this->load->view('root/layout/wrapper',$data);
    }

    function edit($id) {
        $this->load->helper(array('url','form'));
		$data['user'] = $this->session->all_userdata();
        $data['hasil'] = $this->mstreaming->get($id);
        $data['isi'] = 'root/editstreaming';
        $data['title'] = 'Edit Video Streaming';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mstreaming->edit($id);
			redirect('root/streaming/');
        }
 
    }

    function delete($id) {
		$data['user'] = $this->session->all_userdata();
        $this->load->helper(array('url','form'));
        $where = array('id' => $id);
        $this->mstreaming->delete($where,'streaming');
        redirect('root/streaming/');
 
    }
}