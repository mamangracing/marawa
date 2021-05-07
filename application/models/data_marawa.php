<?php
class data_marawa extends CI_Model
{
	public function landing_page()
	{
		return $this->db->query('select * from product limit 4 ')->result_array();
	}

	public function product()
	{
		return $this->db->get('product')->result_array();
	}

	public function product_commercial()
	{
		return $this->db->get_where('product',array('product_type'=>'commercial'))->result_array();
	}

	public function product_application()
	{
		return $this->db->get_where('product',array('product_type'=>'application'))->result_array();
	}
}