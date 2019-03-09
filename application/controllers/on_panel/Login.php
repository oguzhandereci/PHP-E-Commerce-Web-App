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
		$this->load->view('on_panel/login.php');
		$this->load->database();

	}

	public function login_islemi()
	{
		$username = $this->input->post("username");
		$pass = $this->input->post("pass");

		$username = $this->security->xss_clean($username);
		$pass = $this->security->xss_clean($pass);

		$this->load->model('on_panel/Database_model');
		$result = $this->Database_model->login("uyeler",$username,$pass);

		if($result)
		{
			$session_array = array(
				'uye_id' => $result[0]->uye_id ,
				'uye_adsoy' => $result[0]->uye_adsoy ,
				'kAdi' => $result[0]->kAdi ,
				'yetki' => $result[0]->yetki , 
				'resim' => $result[0]->resim ,
				'durum' => $result[0]->durum ,
				'tarih' => $result[0]->tarih ,

			);

			$this->session->set_userdata("uye_session",$session_array);
			redirect(base_url().'on_panel/home');
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya şifre girildi.");
			redirect(base_url().'on_panel/login');
		}

	}

	public function logout_islemi()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url().'on_panel/home');
	}
	

	public function register()
	{
		$this->load->view('on_panel/register.php');
	}

	public function uye_kaydet()
	{

		 $uye_bilgi =  array(
        
            'uye_adsoy' => $this->input->post("info"),
            'kAdi' => $this->input->post("username"),
            'sifre' => $this->input->post("pass"),
            
        );

        $this->db->insert("uyeler",$uye_bilgi);

        $this->session->set_flashdata("sonuc","Üyelik kaydı başarıyla gerçekleştirildi.");
        redirect(base_url().'on_panel/login'); 


	}

}
