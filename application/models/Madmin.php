<?php

class Madmin extends CI_Model{
	
	public function cek_login($u, $p){
		$q = $this->db->get_where('admin', array('username'=>$u, 'password'=>$p));
		return $q;
	}

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		$this->db->join('tb_kategori', 'tb_kategori.idKat = tb_produk.idProduk', 'left');
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

	public function cek_login_pelanggan($u, $p){
		$q = $this->db->get_where('tb_pelanggan', array('username'=>$u, 'password'=>$p));
		return $q;
	}

}
