<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midtrans extends CI_Controller {

   

	public function index()
	{
		$this->load->view('midtrans/index');
	}
}