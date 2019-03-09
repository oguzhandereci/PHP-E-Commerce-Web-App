<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

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
		
        
        
	}

    public function elektronik()
    {
        $query = $this->db->query("SELECT * FROM urunler WHERE urun_kategori='1' ");
        $data["veriler"] = $query->result();
        $this->load->view('admin_panel/urun_kategori/elektronik.php',$data);  
    }

    public function giyim()
    {
        $query = $this->db->query("SELECT * FROM urunler WHERE urun_kategori='2' ");
        $data["veriler"] = $query->result();
        $this->load->view('admin_panel/urun_kategori/giyim.php',$data);
        
    }

    public function kozmetik()
    {
        $query = $this->db->query("SELECT * FROM urunler WHERE urun_kategori='3' ");
        $data["veriler"] = $query->result();
        $this->load->view('admin_panel/urun_kategori/kozmetik.php',$data);  
    }

    public function urun_ekle($value)
    {
        $a["veri"]=$value;
        
       $this->load->view('admin_panel/urun_ekle',$a);
    }

    public function ekle_kaydet($param)
    {
        $urun_bilgi =  array(
        
            'urun_ad' => $this->input->post("urunAd"),
            'urun_kod' => $this->input->post("urunKod"),
            'urun_kategori' => $this->input->post("kategori"),
            'urun_Afiyat' => $this->input->post("aFiyat"),
            'urun_Sfiyat' => $this->input->post("sFiyat"),
            'urun_stok' => $this->input->post("stok"), 
            'urun_aciklama' => $this->input->post("aciklama"),
            'urun_Akelime' => $this->input->post("anahtarKelime"),
            'urun_durum' => $this->input->post("urunDurum")
            
        );

        $this->db->insert("urunler",$urun_bilgi);
        //$query = $this->db->query("INSERT INTO urunler u JOIN kategoriler k ON u.urun_kategori = k.kategori_id WHERE  ");
        
        if($param == 'elektronik'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/elektronik');
        }    
        
        elseif($param == 'giyim'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/giyim');
        }

        elseif($param == 'kozmetik'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/kozmetik');
        }
        
    }

    public function urun_sil($param,$id)
    {
        $query_sil = $this->db->query("DELETE FROM urunler WHERE urun_id=$id");
        
        if($param == 'elektronik'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/elektronik');
        }    
        
        elseif($param == 'giyim'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/giyim');
        }

        elseif($param == 'kozmetik'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/kozmetik');
        }
    }

    public function urun_duzenle($id)
    {
        $query_getir = $this->db->query("SELECT * FROM urunler WHERE urun_id=$id");
        $data["veri"] = $query_getir->result();
        $this->load->view('admin_panel/urun_duzenle.php',$data);
    }

    public function duzenle_kaydet($param,$id)
    {
        $urun_bilgi =  array(
        
            'urun_ad' => $this->input->post("urunAd"),
            'urun_kod' => $this->input->post("urunKod"),
            'urun_Afiyat' => $this->input->post("Afiyat"),
            'urun_Sfiyat' => $this->input->post("Sfiyat"),
            'urun_stok' => $this->input->post("stok"),
            'urun_aciklama' => $this->input->post("aciklama"), 
            'urun_Akelime' => $this->input->post("Akelime"),
            'urun_durum' => $this->input->post("durum"),
            'urun_resim' => $this->input->post("resim"),
        );

        $this->load->model('admin_panel/Database_model');
        $this->Database_model->urun_duzenle("urunler",$urun_bilgi,$id);

        if($param == '1'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/elektronik');
        }    
        
        elseif($param == '2'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/giyim');
        }

        elseif($param == '3'){
            $this->session->set_flashdata("sonuc","Ürün ekleme işlemi başarıyla gerçekleştirildi.");
            redirect(base_url().'admin_panel/urunler/kozmetik');
        }
    }

    public function resim_ekle($kategori,$id)
    {
        $data['id']=$id;
        $data['kategori']=$kategori;

        $this->load->view('admin_panel/resim_ekle',$data);
    }

    public function resim_kaydet($param,$id)
    {
        $data["id"]=$id;

        $config['upload_path']          = './temp/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('resim'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata("mesaj","Yüklemede hata oluştu: ".$error);
                $this->load->view('admin_panel/resim_ekle', $data);
            }
            else
            {
                $upload = $this->upload->data();

                $data =  array(
        
                    'urun_resim' => $upload["file_name"],
                );

                $this->load->model('admin_panel/Database_model');
                $this->Database_model->resim_guncelle("urunler",$data,$id);

                if($param == 'elektronik'){
                    $this->session->set_flashdata("sonuc","Resim ekleme işlemi başarıyla gerçekleştirildi.");
                    redirect(base_url().'admin_panel/urunler/elektronik');
                }    
                
                elseif($param == 'giyim'){
                    $this->session->set_flashdata("sonuc","Resim ekleme işlemi başarıyla gerçekleştirildi.");
                    redirect(base_url().'admin_panel/urunler/giyim');
                }

                elseif($param == 'kozmetik'){
                    $this->session->set_flashdata("sonuc","Resim ekleme işlemi başarıyla gerçekleştirildi.");
                    redirect(base_url().'admin_panel/urunler/kozmetik');
                }
            }
    }

    public function galeri($id)
    {

        $query_getir = $this->db->query("SELECT * FROM urunresim WHERE urun_id=$id");
        $data["resim"] = $query_getir->result();
        $data['id']=$id;
        //$data['kategori']=$kategori;

        $this->load->view('admin_panel/galeri_ekle',$data);
        
    }

    public function galeri_kaydet($id)
    {
        $data["id"]=$id;

        $config['upload_path']          = './temp/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('resim'))
            {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata("mesaj","Yüklemede hata oluştu: ".$error);
                $this->load->view('admin_panel/resim_ekle', $data);
            }
            else
            {
                $upload = $this->upload->data();

                $data =  array(
                    'urun_id' => $id,
                    'urun_resim_url' => $upload["file_name"],
                );

                $this->db->insert("urunresim",$data);
                redirect(base_url().'admin_panel/urunler/galeri/'.$param.'/'.$id);

                
            }
    }

    public function galeri_resim_sil($urunId,$resimId)
    {
        $query_sil = $this->db->query("DELETE FROM urunresim WHERE urun_resim_id=$resimId");
        redirect(base_url().'admin_panel/urunler/galeri/'.$urunId);
    }

}


