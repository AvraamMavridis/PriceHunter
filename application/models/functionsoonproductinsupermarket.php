<?php

	class functionsoonproductinsupermarket extends CI_Model
	{
		
		  function __construct(){
        // Call the Model constructor
        parent::__construct();
		$this->load->database();//Φορτώνει την βάση δεδομένων
		}
		
	
	   public function getSupermarketsSum() //Επιστρέφει το άθρισμα των προϊόντων
	  {
		  $query = $this->db->qet('productinsupermarket'); 
		  $row = $query->num_rows();		  
		  return $row;
	  }
	   
	  public function getProductInSupermarket($ProductID) //Επιστρέφει το άθρισμα των προϊόντων
	  {
		  $query = $this->db->get('products');
		  $query2 = $this->db->get('productinsupermarket');
		  $query3 = $this->db->get('supermarkets');
		  $query4 = $this->db->query("SELECT products.ItemName,productinsupermarket.Price,supermarkets.SupermarketName FROM productinsupermarket,supermarkets,products WHERE productinsupermarket.ItemID=products.ItemID AND productinsupermarket.SupermarketID=supermarkets.SupermarketID AND products.ItemID=".$ProductID."");
		  return $query4->result_array();
		  $query->free_result(); 
		  $query2->free_result(); 
		  $query3->free_result(); 
		  $query4->free_result(); 
		  
	  }
	  
	  
	  
	}
	
	
?>