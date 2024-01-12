<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$data['produk'] = $this->Madmin->get_all_data('tb_produk')->result();
		$this->load->view('Home/layout/header', $data); 
		$this->load->view('Home/slider');
		$this->load->view('Home/layout/index', $data);
		$this->load->view('Home/layout/footer');
	}

	public function login(){
		$this->load->view('Home/login');
	}

	public function cek_login(){
		$this->load->model('Madmin');
		$u= $this->input->post('username');
		$p= $this->input->post('password');
		
		$cek = $this->Madmin->cek_login_pelanggan($u, $p)->num_rows();

		if($cek==1){ 
			$data_session = array(
				'idPelanggan' => $result->idPelanggan,
				'Pelanggan' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('Home');
		} else {
			redirect('Home/login');
		}
	}

	public function toko()
	{
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$data['produk'] = $this->Madmin->get_all_data('tb_produk')->result();
		$this->load->view('home/layout/header', $data); 
		$this->load->view('home/toko', $data);
		$this->load->view('home/layout/footer');
	}
	
	public function detailproduk($idProduk)
	{
		$data['idProduk']=$idProduk;
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$dataWhere = array('idProduk'=>$data['idProduk']);
		$data['produk'] = $this->Madmin->get_by_id('tb_produk', $dataWhere)->row_object();
		$this->load->view('home/layout/header',$data);
		$this->load->view('home/detailproduk',$data);
		$this->load->view('home/layout/footer');
	}

	public function add_cart($idProduk)
	{

		$dataWhere = array('idProduk'=>$idProduk);
		$produk = $this->Madmin->get_by_id('tb_produk',$dataWhere)->row_object();

		$data = array(
			'id' => $produk->idProduk,
			'qty' => 1,
			'price' => $produk->harga,
			'name' => $produk->namaProduk,
			'image' => $produk->gambar
		);

		$this->cart->insert($data);
		redirect("home/cart");
	}

	public function cart()
	{

		$data['cartItems'] = $this->cart->contents();
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
		$data['total'] = $this->cart->total();

		$this->load->view('home/layout/header',$data);
		$this->load->view('home/cart',$data);
		$this->load->view('home/layout/footer');
	}

	public function delete_cart($rowid)
	{
		$remove = $this->cart->remove($rowid);
		redirect("Home/cart");
	}

	public function kategori($id){
		$data['kategori']=$this->Madmin->get_all_data('tb_kategori')->result();
        
        // Dapatkan produk berdasarkan kategori
        $data['produk'] = $this->Madmin->get_all_data($idKat);

        // Load view dengan data yang telah diambil
        $this->load->view('home/toko', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Home');
	}

	
}
