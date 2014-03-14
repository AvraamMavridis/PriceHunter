<?php

	class functionsonproducts extends CI_Model
	{
		
		  function __construct(){
        // Call the Model constructor
        parent::__construct();
		$this->load->database();//Φορτώνει την βάση δεδομένων
		$query = $this->db->get('products');
		$query2 = $this->db->get('productinsupermarket');
		$query3 = $this->db->get('supermarkets');
		}
		
	  public function getAllProducts() //Επιστρέφει τα προϊόντα
	  {   $query = $this->db->get('products');
          return $query->result_array(); // Επιστρέφει το αποτέλεσμα με την μορφή array 
		  $query->free_result(); 
	  }

       public function getProductsSum() //Επιστρέφει το άθρισμα των προϊόντων
	  {
		  $row = $query->num_rows();		  
		  return $row;
	  }
	  
	  
	  public function getProducts($ItemID,$ItemName,$ItemCategory,$SupermarketID)
	  {
		  //Giving all parameters
		  if(($ItemID!=0)and($ItemName!="0")and($ItemCategory!="0")and($SupermarketID!=0))
		  {
		    $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  //Giving 3 of 4
		  if(($ItemID!=0)and($ItemName!="0")and($ItemCategory!="0"))
		  {
		    $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($ItemID!=0)and($ItemName!="0")and($SupermarketID!=0))
		  {
		    $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemName',$ItemName);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($ItemID!=0)and($ItemCategory!="0")and($SupermarketID!=0))
		  {
		    $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($ItemName!="0")and($ItemCategory!="0")and($SupermarketID!=0))
		  {
		    $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  
		  
		  //Giving 2 of the 4
		  if(($ItemID!=0)and($ItemName!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemName',$ItemName);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($ItemID!=0)and($ItemCategory!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($ItemID!=0)and($SupermarketID!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemID',$ItemID);
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($ItemName!="0")and($ItemCategory!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($ItemName!="0")and($SupermarketID!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.SupermarketID',$SupermarketID);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketID!="0")and($ItemCategory!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  //Giving one
		  if(($ItemID!=0))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemID',$ItemID);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($ItemName!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemName',$ItemName);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result();  
		  }
		   if(($ItemCategory!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('products.ItemCategory',$ItemCategory);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result();  
		  } 
		   if(($SupermarketID!="0"))
		  {
          $this->db->select('*');
			$this->db->from('products');
			$this->db->join('productinsupermarket','products.ItemID = productinsupermarket.ItemID');
			$this->db->where('productinsupermarket.SupermarketID',$SupermarketID);
            $query = $this->db->get();
		   return $query->result_array();
		  $query->free_result();  
		  } 
		  
	  }
	  
	  function getSupermarketsWithProducts()
	  {
		 $this->db->select('SupermarketID'); 
		 $this->db->from('productinsupermarket');
		 $this->db->group_by("SupermarketID");
		 $query = $this->db->get();
		 return $query->result_array();
		 $query->free_result();
		  
	  }
	  
	  
	  
	  
	  
	  
	}
	
	
?>
	