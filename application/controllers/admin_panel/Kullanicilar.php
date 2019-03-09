<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('date');
       // $this->load->database();
        if(!$this->session->userdata("admin_session"))
        	redirect(base_url().'admin_panel/login');
    }


	public function index()
	{
        $query = $this->db->query("SELECT * FROM kullanicilar ORDER BY id ASC");
        $data["veriler"] = $query->result();

		$this->load->view('admin_panel/uyeler_listesi.php',$data);
		
	}

    public function kullanici_ekle()
    {
        $this->load->view('admin_panel/uye_ekle.php');
    }

    public function ekle_kaydet()
    {
        $uye_bilgi =  array(
        
            'adsoy' => $this->input->post("adsoy"),
            'cinsiyet' => $this->input->post("gender"),
            'kAdi' => $this->input->post("kadi"),
            'sifre' => $this->input->post("pwd"),
            'yetki' => $this->input->post("yetki"),
            'durum' => $this->input->post("durum"), 
            'resim' => $this->input->post("resim"),
            //'tarih' => $this->getdate(),
            'adres' => $this->input->post("adres"),
            'tel' => $this->input->post("tel"),
            
        );

        $this->db->insert("kullanicilar",$uye_bilgi);

        $this->session->set_flashdata("sonuc","Kullanıcı ekleme işlemi başarıyla gerçekleştirildi.");
        redirect(base_url().'admin_panel/kullanicilar');    
        
        
    }

    public function kullanici_sil($id)
    {
        $query_sil = $this->db->query("DELETE FROM kullanicilar WHERE id=$id");
        redirect(base_url().'admin_panel/kullanicilar');
    }

    public function kullanici_duzenle($id)
    {
        $query_getir = $this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
        $data["veri"] = $query_getir->result();
        $this->load->view('admin_panel/uye_duzenle.php',$data);
    }

    public function duzenle_kaydet($id)
    {
        $uye_bilgi =  array(
        
            'adsoy' => $this->input->post("adsoy"),
            'cinsiyet' => $this->input->post("gender"),
            'kAdi' => $this->input->post("kadi"),
            'sifre' => $this->input->post("pwd"),
            'yetki' => $this->input->post("yetki"),
            'durum' => $this->input->post("durum"), 
            'resim' => $this->input->post("resim"),
            'adres' => $this->input->post("adres"),
            'tel' => $this->input->post("tel"),
        );

        $this->load->model('admin_panel/Database_model');
        $this->Database_model->uye_guncelle("kullanicilar",$uye_bilgi,$id);

        $this->session->set_flashdata("sonuc","Düzenleme işlemi başarıyla gerçekleştirildi.");
        redirect(base_url().'admin_panel/kullanicilar');
    }
}
