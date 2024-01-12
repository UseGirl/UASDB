<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$data['ongkir']=$this->Madmin->get_all_data('tb_ongkir')->result();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/ongkir/index', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/ongkir/tambah');
		$this->load->view('admin/layout/footer');
	}

	public function save(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$tujuan = $this->input->post('tujuan');
		$kurir = $this->input->post('kurir');
		$ongkos = $this->input->post('ongkos');
		$dataInput=array('tujuan'=>$tujuan,
						'kurir'=>$kurir,
						'ongkos'=>$ongkos
					);
		$this->Madmin->insert('tb_ongkir', $dataInput);
		redirect('ongkir');
	}

	public function get_by_id($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$dataWhere = array('idOngkir'=>$id);
		$data['ongkir'] = $this->Madmin->get_by_id('tb_ongkir', $dataWhere)->row_object();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/ongkir/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function edit(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$id = $this->input->post('id');	
		$tujuan = $this->input->post('tujuan');
		$kurir = $this->input->post('kurir');
		$ongkos = $this->input->post('ongkos');	
		$dataUpdate = array('tujuan'=>$tujuan,
							'kurir'=>$kurir,
							'ongkos'=>$ongkos
						);
		$this->Madmin->update('tb_ongkir', $dataUpdate, 'idOngkir', $id);
		redirect('ongkir');
	}

	public function delete($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->Madmin->delete('tb_ongkir', 'idOngkir', $id);
		redirect('ongkir');
	}
}
