<?php
class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('data_marawa','marawa');
	}

	public function index(){
		$data['judul'] = 'Marawa';
		$data['product'] = $this->marawa->landing_page();
		$data['isi'] = 'landing_page';

		$this->load->view('asset/main', $data);
	}

	public function product_marawa()
	{
		$data['judul'] = 'Marawa Product';
		$data['product'] = $this->marawa->product();
		$data['isi'] = 'product';

		$this->load->view('asset/main', $data);
	}

	public function product_commercial()
	{
		$data['judul'] = 'Marawa Product';
		$data['product'] = $this->marawa->product_commercial();
		$data['isi'] = 'product';

		$this->load->view('asset/main', $data);
	}

	public function product_applications()
	{
		$data['judul'] = 'Marawa Product';
		$data['product'] = $this->marawa->product_application();
		$data['isi'] = 'product';

		$this->load->view('asset/main', $data);
	}

	public function single_order()
	{
		$data['judul'] = 'Single Order';
		$data['isi'] = 'order';

		$this->load->view('asset/main', $data);
	}

	public function about_us()
	{
		$data['judul'] = 'About Us';

		$this->load->view('asset/main', $data);
	}

	public function screen_printing()
	{
		$data['judul'] = 'Sablon';

		$this->load->view('asset/main', $data);
	}
}