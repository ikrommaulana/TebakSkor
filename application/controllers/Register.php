	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->model('mregister');
    }

    function index()
    {
		$this->load->helper(array('url','form'));
		$data['prov'] = $this->mregister->get_all_provinsi();
		$data['isi'] = 'register/register';
		$data['title'] = 'Daftar Pelanggan Baru | MNC Play';
		$this->load->view('register/layout/wrapper',$data);
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
            
        if($this->input->post('submit') ) {
            $query = array (
                'id_match' => $this->input->post('pertandingan'),
                'guess_home' => $this->input->post('tebak_skor_1'),
                'guess_away' => $this->input->post('tebak_skor_2'),
                'id_user' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'guess_date' => $this->input->post('tanggal_dibuat')
            );
            echo $this->mindex->save($query);
            }
		$data['user'] = $this->session->all_userdata();
		redirect('tebakskor/');
    }
}
