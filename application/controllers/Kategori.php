<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/kategori/index', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/kategori/tambah');
		$this->load->view('admin/layout/footer');
	}

	public function save(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$namaKat = $this->input->post('namaKat');
		$dataInput=array('namaKat'=>$namaKat);
		$this->Madmin->insert('tb_kategori', $dataInput);
		redirect('kategori');
	}

	public function get_by_id($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$dataWhere = array('idKat'=>$id);
		$data['kategori'] = $this->Madmin->get_by_id('tb_kategori', $dataWhere)->row_object();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/kategori/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function edit(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$id = $this->input->post('id');	
		$namaKategori = $this->input->post('namaKat');	
		$dataUpdate = array('namaKat'=>$namaKategori);
		$this->Madmin->update('tb_kategori', $dataUpdate, 'idKat', $id);
		redirect('kategori');
	}

	public function delete($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->Madmin->delete('tb_kategori', 'idKat', $id);
		redirect('kategori');
	}

	
}
