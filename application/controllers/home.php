<?php
class home extends CI_Controller
{
	public function index(){
		$data = array('judul'=>'Marawa',
					  'isi'=>'landing_page');

		$this->load->view('asset/main', $data);
	}

	public function prodak_marawa()
	{
		$data = array('judul'=>'Prodak Marawa',
					  'isi'=>'product');

		$this->load->view('asset/main', $data);
	}
}