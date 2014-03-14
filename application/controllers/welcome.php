<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Welcome extends CI_Controller {
	
	function index() {
		$this->load->helper ( 'url' );
		$this->load->helper ( 'form' );
		$this->load->model ( 'ProductsModel' );  
		$this->load->view ( 'MainView');
	}
}

?>
