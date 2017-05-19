<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Match extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mmatch');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['match'] = $this->mmatch->list_match();
        $data['isi'] = 'root/match';
        $data['title'] = 'Administrator | Match Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addmatch';
        $data['title'] = 'Add Match';
		$data['home'] = $this->mmatch->list_club();
		$data['away'] = $this->mmatch->list_club();
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        
        $this->load->library('upload', $config);
		$home = $this->input->post('home');
		$away = $this->input->post('away');
        
        $home_logo = $this->mmatch->select_logo($home);
        $away_logo = $this->mmatch->select_logo($away);
		
		$match_date = $this->input->post('match_date');
		$match_time = $this->input->post('time');
		$form_match_date = date('Y-m-d', strtotime($match_date));
		$match_date_time = $form_match_date." ".$match_time;
            
        if($this->input->post('submit') ) {
            $query = array (
                'home' => $home,
                'away' => $away,
                'home_logo' => $home_logo,
                'away_logo' => $away_logo,
                'match_date' => $match_date_time,
                'created_date' => $this->input->post('created_date')
            );
            $this->mmatch->save($query);
            }
		$data['user'] = $this->session->all_userdata();
		redirect('root/match/');
    }

    function update($id) {
        $this->load->helper(array('url','form'));
		$data['user'] = $this->session->all_userdata();
        $data['hasil'] = $this->mmatch->get($id);
        $data['isi'] = 'root/updatematch';
        $data['title'] = 'Update Match';
        $this->load->view('root/layout/wrapper', $data);

      if($this->input->post('submit')){
            $this->mmatch->update($id);
            $true = $this->mmatch->post_point($id);
			foreach ($true as $true){
				$match 		= $true->id_match;
				$guess 		= $true->id_guess;
				$username 	= $true->username;
			$this->mmatch->insert_point($match,$guess,$username);
			}
			redirect('root/match/');
        }
 
    }
}