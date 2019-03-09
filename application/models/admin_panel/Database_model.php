<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
        }

        public function login($tablo,$uName,$sifre)
        {
        	//$sql = "select * from $tablo where kAdi=$uName and sifre=$sifre ";
        	$this->db->select('*');
        	$this->db->from($tablo);
        	$this->db->where('kAdi',$uName);
        	$this->db->where('sifre',$sifre);

        	$query = $this->db->get();

        	if($query->num_rows())
        		return $query->result();
        	else
        		return false;
        }

        public function uye_guncelle($table,$data,$id)
        {
                $this->db->where('id',$id);
                $this->db->update($table,$data);
                return true;
        }

        public function urun_getir($table)
        {
                $this->db->select('*');
                $this->db->from($tablo);

                $query = $this->db->get();

                if($query->num_rows())
                        return $query->result();
                else
                        return false;
        }

        public function urun_duzenle($table,$data,$id)
        {
                $this->db->where('urun_id',$id);
                $this->db->update($table,$data);
                return true;
        }

        public function resim_guncelle($table,$data,$id)
        {
                $this->db->where('urun_id',$id);
                $this->db->update($table,$data);
                return true;
        }

        public function ayar_guncelle($table,$data,$id)
        {
                $this->db->where('ayar_id',$id);
                $this->db->update($table,$data);
                return true;
        }

}

?>