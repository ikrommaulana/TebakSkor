<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Match_sch extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mschedule');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['match'] = $this->mschedule->list_match();
        $data['isi'] = 'root/schedule';
        $data['title'] = 'Administrator | Match Schedule';
        $this->load->view('root/layout/wrapper',$data);
    }

    function add()
    {
		$data['user'] = $this->session->all_userdata();
        $data['isi'] = 'root/addschedule';
        $data['title'] = 'Add Match';
		$data['home'] = $this->mschedule->list_club();
		$data['away'] = $this->mschedule->list_club();
        $this->load->view('root/layout/wrapper',$data);
    }

    function save()
    {	
        $this->load->helper(array('url','form'));
		echo $data['home'] = $this->input->post('home[1]');
		echo $data['away'] = $this->input->post('away[1]');
        echo $data['home_logo'] = $this->mschedule->select_logo($data['home']);
        echo $data['away_logo'] = $this->mschedule->select_logo($data['away']);
		echo "<br/>";
		
		echo $data['home'] = $this->input->post('home[2]');
		echo $data['away'] = $this->input->post('away[2]');
        echo $data['home_logo'] = $this->mschedule->select_logo($data['home']);
        echo $data['away_logo'] = $this->mschedule->select_logo($data['away']);
		echo "<br/>";
		
		echo $data['home'] = $this->input->post('home[3]');
		echo $data['away'] = $this->input->post('away[3]');
        echo $data['home_logo'] = $this->mschedule->select_logo($data['home']);
        echo $data['away_logo'] = $this->mschedule->select_logo($data['away']);
		echo "<br/>";
		
		echo $data['home'] = $this->input->post('home[4]');
		echo $data['away'] = $this->input->post('away[4]');
        echo $data['home_logo'] = $this->mschedule->select_logo($data['home']);
        echo $data['away_logo'] = $this->mschedule->select_logo($data['away']);
		echo "<br/>";
		
		echo $data['home'] = $this->input->post('home[5]');
		echo $data['away'] = $this->input->post('away[5]');
        echo $data['home_logo'] = $this->mschedule->select_logo($data['home']);
        echo $data['away_logo'] = $this->mschedule->select_logo($data['away']);
		echo "<br/>";
		
		/*$match_date = $this->input->post('match_date');
		$form_match_date = date('Y-m-d', strtotime($match_date));
            
        if($this->input->post('submit') ) {
            $query = array (
                'home' => $home,
                'away' => $away,
                'home_logo' => $home_logo,
                'away_logo' => $away_logo,
                'match_date' => $form_match_date,
                'created_date' => $this->input->post('created_date')
            );
            $this->mmatch->save($query);
            }
		$data['user'] = $this->session->all_userdata();
		redirect('root/match/');*/
    }
}