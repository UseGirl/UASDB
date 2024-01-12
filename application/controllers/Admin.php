<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

    public function dashboard()
    {
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }

    public function login(){
		$this->load->model('Madmin');
		$u= $this->input->post('username');
		$p= $this->input->post('password');
		
		$cek = $this->Madmin->cek_login($u, $p)->num_rows();

		if($cek==1){ 
			$data_session = array(
				'username' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('admin/dashboard');
		} else {
			redirect('admin');
		}
	}

	public function logout(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->session->sess_destroy();
		redirect('admin');
	}
}
