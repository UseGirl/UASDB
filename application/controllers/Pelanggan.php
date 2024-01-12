<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$data['pelanggan']=$this->Madmin->get_all_data('tb_pelanggan')->result();
		$this->load->view('admin/layout/sidebar');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pelanggan/index', $data);
        $this->load->view('admin/layout/footer');
	}

	public function register()
	{
		$this->load->view('home/register');
	}


	public function save(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namaPelanggan = $this->input->post('namaPelanggan');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$tlpn = $this->input->post('tlpn');
		$dataInput=array('username'=>$username,
						'password'=>$password,
						'namaPelanggan'=>$namaPelanggan,
						'email'=>$email,
						'alamat'=>$alamat,
						'tlpn'=>$tlpn
					);
		$this->Madmin->insert('tb_pelanggan', $dataInput);
		redirect('home/login');
	}

	public function delete($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->Madmin->delete('tb_pelanggan', 'idPelanggan', $id);
		redirect('pelanggan');
	}
}
