<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        //$this->load->helper('url');
       // $this->load->database();
        if(!$this->session->userdata("admin_session"))
        	redirect(base_url().'admin_panel/login');
    }


	public function index()
	{
        $query = $this->db->query("SELECT * FROM ayarlar WHERE ayar_id='1' ");
        $data["ayarlar"] = $query->result();
		$this->load->view('admin_panel/ayarlar.php',$data);
	}

    public function ayar_guncelle($param,$id)
    {
        if($param == 'genel')
        {
            $genel_ayarlar = array(
                
                'ayar_adi' => $this->input->post("sitead"),
                'keywords' => $this->input->post("keywords"),
                'description' => $this->input->post("description"),
                'adres' => $this->input->post("adres"),
                'sehir' => $this->input->post("sehir"),
                'hakkimizda' => $this->input->post("hakkimizda"),
                'iletisim' => $this->input->post("iletisim"),
            );

            $this->load->model('admin_panel/Database_model');
            $this->Database_model->ayar_guncelle("ayarlar",$genel_ayarlar,$id);

            $this->session->set_flashdata("sonuc","Ayarların güncellenmesi işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/ayarlar');
        
        }

        elseif($param == 'email')
        {
            $email_ayarlar = array(
                
                'smtp_server' => $this->input->post("smtp_server"),
                'smtp_port' => $this->input->post("smtp_port"),
                'smtp_email' => $this->input->post("smtp_email"),
                'smtp_pass' => $this->input->post("smtp_pass"),
            );

            $this->load->model('admin_panel/Database_model');
            $this->Database_model->ayar_guncelle("ayarlar",$email_ayarlar,$id);

            $this->session->set_flashdata("sonuc","Ayarların güncellenmesi işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/ayarlar');
        
        }

        elseif($param == 'sosyal')
        {
            $sosyal_ayarlar = array(
                
                'facebook' => $this->input->post("facebook"),
                'twitter' => $this->input->post("twitter"),
                'instagram' => $this->input->post("instagram"),
            );

            $this->load->model('admin_panel/Database_model');
            $this->Database_model->ayar_guncelle("ayarlar",$sosyal_ayarlar,$id);

            $this->session->set_flashdata("sonuc","Ayarların güncellenmesi işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/ayarlar');
        
        }

    }

}
