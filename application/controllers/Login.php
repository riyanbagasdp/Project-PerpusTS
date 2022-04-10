<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('text','url','cookie','string'));


    }
    public function index()
    {
        $cookie=get_cookie('tigaserangkai');
        if ($this->session->userdata('nama')!=''){
            redirect(base_url('dashboard'));
        // } else if ($cookie != ''){
        //     // $sesi=$this->Usermodel->get_detail_by_cookie($cookie);
        //     $this->session->set_userdata($sesi);
        //     reddirect(base_url('dashboard'));
        // 
        }
        $this->load->view('login');
    }
    public function auth()
    {
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');
        $auth = $this->Usermodel->auth($email,$pwd);
        if ($auth == TRUE){
            if ($this->input->post('remember')!=''){
                $key = random_string('alnum',64);
                set_cookie('tigaserangkai',$key,3600*24*30);
                $this->Usermodel->update_cookie($key,$email);
            }
            $sesi = $this->Usermodel->get_detaill($email);
            $this->session->set_userdata($sesi);
            redirect(base_url('dashboard'));
        } else {
            // $this->session->set_flashdata('pesan','Username atau password');
            // $sesi = array('flag'=>'1');
            // $this->session->set_userdata($sesi);
            redirect(base_url('login'));
        }
    }
    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
?>