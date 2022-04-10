<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('Usermodel');
    }

	public function index(){
        $data['list']=$this->Usermodel->get_user();
		$this->load->view('user',$data);

    }
    public function detailuser($a= null){
        $data['detailuser']=$this->Usermodel->get_detailuser($a);
		$this->load->view('detailuser',$data);
    }
    public function adduser(){
        $this->load->view('adduser');
    }
    public function insert()
    {
        $this->load->library('upload');
        if ($this->Usermodel->insert($this->input->post())) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }
    public function edituser ($a){
        $data['detailuser']=$this->Usermodel->get_detailuser($a);
		$this->load->view('edituser',$data);
    }
    public function update($id){

        $this->load->library('upload');
        if ($this->Usermodel->update($this->input->post(),$id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }

    }
    public function delete ($id){
        if ($this->Usermodel->delete($id)){
            $this->session->set_flashdata('pesan','Data berhasil dihapus');
            redirect(base_url('user'));
        }
    
}
    
    

   
}