<?php

/**
 * 
 */
class Posts extends CI_Controller {
	
	function index() {
		$this->load->model('post');
		$data=$this->post->getPost();
		echo "<b>";
		print_r($data);
		echo "</b>";
	}
}

?>
