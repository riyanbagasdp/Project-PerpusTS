<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('Collectionmodel');
    }

	public function index(){
        $data['list']=$this->Collectionmodel->get_koleksi();
		$this->load->view('collection',$data);

    }
    public function detail($a= null){
        $data['detail']=$this->Collectionmodel->get_detail($a);
		$this->load->view('detail',$data);
    }
    public function add(){
        $this->load->view('add');
    }
    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/img/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "20480000000000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->Collectionmodel->insert($this->input->post(), "assets/img/".$cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('collection'));
        }
    }

    
        // return $this -> db -> insert('koleksi',$data);
    
    public function edit ($a){
        $data['detail']=$this->Collectionmodel->get_detail($a);
		$this->load->view('edit',$data);
    }
    public function update($id){
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/img/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "20480000000000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')){
            $this->Collectionmodel->update_cover($cover,$id);
        }
        if ($this->Collectionmodel->update($this->input->post(),$id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('collection'));
        }

    }
    public function delete ($id){
    if ($this->Collectionmodel->delete($id)){
        $this->session->set_flashdata('pesan','Data berhasil dihapus');
        redirect(base_url('collection'));
    }
    
}
    
    

   
}