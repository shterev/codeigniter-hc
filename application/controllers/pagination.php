<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination extends CI_Controller {
	public function __construct() {
		parent:: __construct();

		$this->load->model("news");
		$this->load->library("pagination");
	}

	
	
	public function index() {
		$config = array(
			'base_url'		=> base_url()."index.php/pagination/index",
			'total_rows'	=> $this->news->record_count(),
			'per_page'		=> 5,
			'num_links'		=> 20,
			'uri_segment'	=> 3,
		);
		

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->news->fetch_countries($config['per_page'], $page);
		$data['links'] = $this->pagination->create_links();

		$this->load->view("pagination", $data);
	}
     
}

