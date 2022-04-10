<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('text','url','cookie','string'));
        if ($this->session->userdata('nama')==''){
            redirect(base_url('login'));
        }

        // $this->load->model('usermodel');
    }

	public function index()
	{
        $data['nama'] = "budi waluyo";
        $data['email'] = 'solo';
        $data['alamat'] = 'budwal@gmail.com';
        $data['hobi'] = ['membaca','menulis','memasak','menulis'];
		$this->load->view('dashboard',$data);
		// $this->load->view('dashboard');
	}
    public function calculator(){
        $this->load->view('welcome');
    }
   
}