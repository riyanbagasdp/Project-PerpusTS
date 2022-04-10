<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('Pinjammodel');
    }

	public function index(){
        $data['list']=$this->Pinjammodel->get_peminjaman();
		$this->load->view('peminjaman',$data);

    }
    public function detailpinjam($a= null){
        $data['detailpinjam']=$this->Pinjammodel->get_detailpinjam($a);
		$this->load->view('detailpinjam',$data);
    }
    public function addpinjam(){
        $this->load->view('addpinjam');
    }
    public function insert()
    {

        $this->load->library('upload');
        if ($this->Pinjammodel->insert($this->input->post())) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('peminjaman'));
        }
    }
    
    public function editpinjam($a){
        $data['detailpinjam']=$this->Pinjammodel->get_detailpinjam($a);
		$this->load->view('editpinjam',$data);
    }
    public function update($id){

        $this->load->library('upload');

        if ($this->Pinjammodel->update($this->input->post(),$id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('collection'));
        }

    }
    public function delete ($id){
    if ($this->Pinjammodel->delete($id)){
        $this->session->set_flashdata('pesan','Data berhasil dihapus');
        redirect(base_url('peminjaman'));
    }
    
}
    
    

   
}