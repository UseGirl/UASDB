<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$data['produk'] = $this->Madmin->get_all_data('tb_produk')->result();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/produk/index', $data);
		$this->load->view('admin/layout/footer');
	}


	public function add(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/produk/tambah', $data);
		$this->load->view('admin/layout/footer');
	}

	public function get_by_id($idProduk){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$data['idProduk']=$idProduk;
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$dataWhere = array('idProduk'=>$data['idProduk']);
		$data['produk'] = $this->Madmin->get_by_id('tb_produk', $dataWhere)->row_object();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/produk/edit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function save(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$idKat = $this->input->post('idKat');
		$namaProduk = $this->input->post('namaProduk');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$data_file = $this->upload->data();
			$data_insert=array('namaProduk' => $namaProduk,
								'gambar' =>  $data_file['file_name'],
								'harga' => $harga,
								'stok' => $stok,
								'deskripsi' => $deskripsi,
								'idKat' => $idKat);
			$this->Madmin->insert('tb_produk', $data_insert);
			redirect('produk');
		} else {
			redirect('produk/add/');
		}
	}

	public function edit(){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$id=$this->input->post('id');
		$idKat = $this->input->post('kategori');
		$namaProduk = $this->input->post('namaProduk');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$data_file = $this->upload->data();
			$data_update=array('namaProduk' => $namaProduk,
								'gambar' =>  $data_file['file_name'],
								'harga' => $harga,
								'stok' => $stok,
								'deskripsi' => $deskripsi,
								'idKat' => $idKat);
			$this->Madmin->update('tb_produk', $data_update,'idProduk', $id);
			redirect('produk');
		} else {
			$data_update=array('namaProduk' => $namaProduk,
								'harga' => $harga,
								'stok' => $stok,
								'deskripsi' => $deskripsi,
								'idKat' => $idKat);
			$this->Madmin->update('tb_produk', $data_update,'idProduk', $id);

			redirect('produk');
		}
	}

	public function delete($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$this->Madmin->delete('tb_produk', 'idProduk', $id);
		redirect('produk');
	}

	


}
