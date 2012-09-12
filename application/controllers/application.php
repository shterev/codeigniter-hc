<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application extends CI_Controller {
	
    public function index(){
		$data['page'] = "pages/index" ;
        $this->load->view('layout/layout', $data);
	}
     public function test(){

        echo "teesst!";
     }
    
}

