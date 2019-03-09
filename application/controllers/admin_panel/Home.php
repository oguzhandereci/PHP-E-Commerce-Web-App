<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('admin_panel/main_content.php');
	}

}
