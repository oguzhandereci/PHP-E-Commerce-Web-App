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

   

}
