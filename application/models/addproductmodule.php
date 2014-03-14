<?php
	
	class AddProductModule extends CI_Model
	{
		 function __construct(){
		  parent::__construct();
		  $this->load->database();//Φορτώνει την βάση δεδομένων
		  $query = $this->db->get('products');
		  $query2 = $this->db->get('productinsupermarket');
		}
		
		
		function AddProductOnTable($ItemName,$ItemCategory,$ItemDesc,$ID,$Price){
			
			//First we check if the product is in the database
			$this->db->select('ItemID');
			$this->db->from('products');
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
			$this->db->where('products.ItemDesc',$ItemDesc);
            $query = $this->db->get();
			$data=$query->num_rows();
			
			if($data==0)//If it is not in the database we insert it
			{
			$data=array('ItemName' => $ItemName ,
		  'ItemCategory' => $ItemCategory ,'ItemDesc' => $ItemDesc);
			 $this->db->insert('products', $data);
			 
			$this->db->select('ItemID');
			$this->db->from('products');
			$this->db->where('products.ItemName',$ItemName);
			$this->db->where('products.ItemCategory',$ItemCategory);
			$this->db->where('products.ItemDesc',$ItemDesc);
            $query = $this->db->get();
			$ItemID = $query->row('ItemID');
			
			$data2=array('ItemID' => $ItemID ,
		  'SupermarketID' => $ID ,'Price' => $Price);
			$this->db->insert('productinsupermarket', $data2);
			}
			 
			 return "sadasds";
		  $query->free_result(); 	
		}
		
		
		function DeleteProduct($ItemID,$ID){
			$this->db->where('ItemID', $ItemID);
			$this->db->where('SupermarketID', $ID);
			$this->db->delete('productinsupermarket');
		}
		
		function UpdateSupermarket($SupermarketID,$SupermarketName,$Chain,$City,$Region,$Lat,$Long)
		{
			$data=array('SupermarketName' => $SupermarketName ,'Chain' => $Chain,'City' => $City,'Region' => $Region,'Lat' => $Lat,'Long' => $Long);
			$this->db->where('SupermarketID', $SupermarketID);
			$this->db->update('supermarkets', $data); 
	
		}
		
		
		function getSupermarketsWithProducts($ItemID)
	  {
		 $parsed_array = json_decode($_POST['items']);
		 $this->db->select('Sum(Price) as SumPrice,SupermarketID'); 
		 $this->db->from('productinsupermarket');
		 if(count($parsed_array) > 0)
		 {
    		$this->db->where_in('ItemID', $parsed_array);
		  }
		 $this->db->group_by('SupermarketID');
		 $this->db->having('COUNT(ItemID)', sizeof($parsed_array)); 
		 $query = $this->db->get();
		 return $query->result_array();
		 $query->free_result();
		  
	  }
	  
		
		
		
	}

?>