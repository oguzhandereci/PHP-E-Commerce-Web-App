<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
       // $this->load->database();
        
        	
    }

   

	public function index()
	{
        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $query = $this->db->query("SELECT * FROM urunler");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM resimslider");
        $data["slider"]  = $query->result();

        $this->load->view('on_panel/header.php',$data);  
		$this->load->view('on_panel/maincontent.php',$data);
        $this->load->view('on_panel/footer.php');
	}

    public function hakkimizda()
    {
          $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["hakkimizda"]  = $query->result();
        $this->load->view('on_panel/hakkimizda.php',$data,$data);
    }

    public function iletisim()
    {
          $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["iletisim"]  = $query->result();
        $this->load->view('on_panel/iletisim.php',$data,$data);
    }

    public function kategoriler($kat_ad)
    {
        $query = $this->db->query("SELECT * FROM urunler");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();
        
        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();
        //$this->load->view('on_panel/header.php',$data);

        if($kat_ad == 'Elektronik')
            $this->load->view('on_panel/elektronik.php',$data);
        elseif ($kat_ad == 'Giyim') 
            $this->load->view('on_panel/giyim.php',$data);
        elseif ($kat_ad == 'Kozmetik')
            $this->load->view('on_panel/kozmetik.php',$data);
 
    }

    public function elektronik()
    {
        $query = $this->db->query("SELECT * FROM urunler");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $this->load->view('on_panel/elektronik.php',$data);       
    }

    public function giyim()
    {
        $query = $this->db->query("SELECT * FROM urunler");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $this->load->view('on_panel/giyim.php',$data);       
    }

    public function kozmetik()
    {
        $query = $this->db->query("SELECT * FROM urunler");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $this->load->view('on_panel/kozmetik.php',$data);       
    }



    public function urun_detay($id)
    {
        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $query = $this->db->query("SELECT * FROM urunler WHERE urun_id = $id");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM urunresim WHERE urun_id = $id");
        $data["resim"] = $query->result();

        $query = $this->db->query("SELECT * FROM yorumlar WHERE urun_id = $id");
        $data["yorum"] = $query->result();

        $this->load->view('on_panel/urun_detay.php',$data);
    }

    public function mesaj_gonder(){
        $kime=$this->input->post('email');
        $config=array(
                "protocol"=>"smtp",
                "smtp_host"=>"mail.urunmarkt.com",
                "smtp_port"=>"587",
                "smtp_user"=>"info@urunmarkt.com",
                "smtp_pass"=>"07081968.eY", // şifreniz olacak
                "starttls"=>true,
                "charset"=>"utf-8",
                "mailtype"=>"html",
                "wordwrap"=>true,
                "newline"=>"\r\n"
            );
            $this->load->library("email",$config);
            $this->email->from("info@urunmarkt.com","info@urunmarkt.com");
            $this->email->to($kime);
            $this->email->subject("urunmarkt.com");
            $this->email->message("Fikir ve görüşleriniz için teşekkür ederim.En kısa zamanda size geri dönüş yapacağım.");
            $send= $this->email->send();

            $this->session->set_flashdata("onsayfa_mesaj","Mesajınız alınmıştır.Size en kısa sürede geri dönüş yapılacaktır.");
            redirect(base_url().'on_panel/home/iletisim');

    //redirect(base_url().'Home');
    }


    public function uye_hesap()
    {
        $this->load->view('on_panel/uye_hesap.php');
    }

    public function yorum($id)
    {
        if(!$this->session->userdata("user_session")){
            $uye_id = $this->session->uye_session['uye_id'];
            $uye_adsoy = $this->session->uye_session['uye_adsoy'];
        }


        $yorum_bilgi =  array(
        
            'urun_id' => $id,
            'uye_id' => $uye_id,
            'yorum' => $this->input->post("yorum"),
            
            
        );



        $this->db->insert("yorumlar",$yorum_bilgi);

        $query = $this->db->query("SELECT * FROM kategoriler");
        $data["veri"]  = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["meta"]  = $query->result();

        $query = $this->db->query("SELECT * FROM urunler WHERE urun_id = $id");
        $data["urun"]  = $query->result();

        $query = $this->db->query("SELECT * FROM urunresim WHERE urun_id = $id");
        $data["resim"] = $query->result();

        $query = $this->db->query("SELECT * FROM yorumlar WHERE urun_id = $id");
        $data["yorum"] = $query->result();

        $this->load->view('on_panel/urun_detay.php',$data);
    }

}


