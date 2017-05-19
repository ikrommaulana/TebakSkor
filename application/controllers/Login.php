<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->config('facebook');
        $fbConfig = $this->config->item('facebook');
		$this->load->library('twitteroauth');
	}

	function index($error = NULL)
	{	
		$data = array(
			'user'  => $this->session->all_userdata(),
            'title' => 'Login Tebak Skor MNC Play',
            'error' => $error
        );
		$this->load->view('login', $data);
	}
	
	function register_facebook() {
        $fbConfig = $this->config->item('facebook');   
        $scope = "email,public_profile,user_friends,user_birthday,user_photos,user_likes,user_posts";
        $url = 'https://graph.facebook.com/oauth/authorize?client_id='.$fbConfig['appId'].'&redirect_uri='.base_url().'login/do_register_facebook_ext/'.'&scope='.$scope.'&display=popup';
        redirect($url);
    }
	
	function do_register_facebook_ext() {
        $fbConfig = $this->config->item('facebook');
        if(isset($_GET['code'])) {
            $token_url = "https://graph.facebook.com/oauth/access_token?client_id=".$fbConfig['appId']."&redirect_uri=".base_url().'login/do_register_facebook_ext/'."&client_secret=".$fbConfig['secret'].'&code='.$_GET['code'];
            $token_data = file_get_contents($token_url); // grab data token
            // echo "<pre>";

            // print_r($token_data);
            preg_match("/access_token=([^&]+)/",$token_data,$token); // filter grap data untuk dapatkan token
            $access_token = $token[1]; // ambil token FB
            # biasanya saya simpan access_token ke database bila perlu untuk melakukan proses API lainnya
           
            $url = 'https://graph.facebook.com/me?access_token='.$access_token; # url untuk ambil data user Login FB
            $fb  =json_decode(file_get_contents($url),true); // ambil data user login FB
            
            //print_r($fb);
            $id_fb = $fb['id']; # ambil ID User FB
            $name_fb = $fb['name']; # ambil Name User FB
            //$image_fb = 'https://graph.facebook.com/'.$fb['name'].'/picture'; # ambil gambar User FB
            //$email_fb = $fb['email']; # ambil email jika email tidak disembunyikan
			/**
            # array ini untuk kirim ke wall user FB
            $attachment = array(
                    'userid'=> $id_fb,
                    'access_token' => $access_token,
                    'message' => 'Kuis Tebak Skor by MNC Play',
                    'name' => "Tebak Skor",
                    'link' => "http://www.mncplaymedia.com/site/tebakskor/", // Link URL sisip disini
                    'description' => '', // Penjelasan lebih lengkap sisip di sini juga
                    'picture'=>'', // gambar dari path local
            );
            $post = $this->facebook->api('/me/feed', 'POST', $attachment);
            **/
            # biasanya sy buat session untuk menyimpan data di halaman lain nya
            $this->session->set_userdata('id',$id_fb);
            $this->session->set_userdata('username',$name_fb);
            //$this->session->set_userdata('image_fb',$image_fb);
            //$this->session->set_userdata('email',$email_fb);
            $this->session->set_userdata('logged',1);
            
            # panggil halaman selesai login
            redirect('tebakskor');
        }else{
            # jika gagal dapatkan kode atau user FB tidak menyetujui aplikasi kita
             redirect('login');
        }
    }

	function dologin()
	{
		$this->load->model('mlogin');

		$login = $this->mlogin->login($this->input->post('username'), md5($this->input->post('password')));

		if ($login == 1) {
            $row = $this->mlogin->data_login($this->input->post('username'), md5($this->input->post('password')));
            $data = array(
                'logged' => TRUE,
                'username' => $row->username,
				'id' => $row->id
            );
            $this->session->set_userdata($data);
            redirect(site_url('tebakskor'));
        } else {
            $error = 'Username / Password Salah';
            $this->index($error);
        }
	}
 
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}