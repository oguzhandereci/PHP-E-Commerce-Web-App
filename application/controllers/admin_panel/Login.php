<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        //$this->load->helper('url');
        
    }


	public function index()
	{
		$this->load->view('admin_panel/login.php');
		$this->load->database();

	}

	public function login_islemi()
	{
		$username = $this->input->post("uName");
		$pass = $this->input->post("pwd");

		$username = $this->security->xss_clean($username);
		$pass = $this->security->xss_clean($pass);

		$this->load->model('admin_panel/Database_model');
		$result = $this->Database_model->login("kullanicilar",$username,$pass);

		if($result)
		{
			$session_array = array(
				'id' => $result[0]->id ,
				'adsoy' => $result[0]->adsoy ,
				'kAdi' => $result[0]->kAdi ,
				'yetki' => $result[0]->yetki , 
				'resim' => $result[0]->resim ,
				'durum' => $result[0]->durum ,
				'tarih' => $result[0]->tarih ,

			);

			$this->session->set_userdata("admin_session",$session_array);
			redirect(base_url().'admin_panel/home');
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya şifre girildi.");
			redirect(base_url().'admin_panel/login');
		}

	}

	public function logout_islemi()
	{
		$this->session->unset_userdata("admin_session");
		redirect(base_url().'admin_panel/login');
	}

}
