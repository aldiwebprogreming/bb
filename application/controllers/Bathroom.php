<?php 

class Bathroom extends CI_Controller{

	function __construct()
	{
		parent:: __construct();

	}

	function index(){

		$this->load->view('template/header');
		$this->load->view('landing/index');
		$this->load->view('template/footer');
	}

	function produk(){

		$data['merek'] = $this->db->get('tbl_merek')->result_array();
		$data['jenis_sub_kategori'] = $this->db->get('tbl_jenis_sub_kategori')->result_array();


		$this->load->view('template/header');
		$this->load->view('landing/produk', $data);
		$this->load->view('template/footer');
	}

	function produk_kitchen(){

		$this->load->view('template/header');
		$this->load->view('landing/produk_kitchen');
		$this->load->view('template/footer');

	}


	function kontak(){
		$this->load->view('template/header');
		$this->load->view('landing/kontak');
		$this->load->View('template/footer');
	}



}
?>