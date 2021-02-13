<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
	$data['title'] = "Main Pages";
	$ambilUser = $this->session->userdata('user');
	$namaUser = explode(" ", $ambilUser);
	$data['akun'] = $namaUser[0];
	$this->load->view('main/header', $data);
	$this->load->view('main/index', $data);
	$this->load->view('main/footer', $data);		
	}

	public function barang_masuk()
	{
		$data['title'] = "Barang masuk";
		$ambilUser = $this->session->userdata('user');
	$namaUser = explode(" ", $ambilUser);
	$data['akun'] = $namaUser[0];
		$this->load->view('main/header', $data, FALSE);
		$this->load->view('admin/f_brgmasuk', $data, FALSE);
		$this->load->view('main/footer', $data, FALSE);
	}

	

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */