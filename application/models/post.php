<?php

	class Post extends CI_Model
	{
	  public function getPost()
	  {
	  	  $this->load->database();
		  $query = $this->db->query('SELECT COUNT(*) FROM products');
		
		  return 'Connected successfully';
	  }
	  
	}
	
	
?>
	
	
