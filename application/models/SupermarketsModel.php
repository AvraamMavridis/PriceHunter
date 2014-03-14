<?php

	class SupermarketsModel extends CI_Model
	{
		
		  function __construct(){
        // Call the Model constructor
        parent::__construct();
		$this->load->database();//Φορτώνει την βάση δεδομένων
		}
		
	
	  public function getAllSupermarkets() //Επιστρέφει τα προϊόντα
	  {   
		  $query = $this->db->get('supermarkets'); // Επιλέγει τον πίνακα products
          return $query->result_array(); // Επιστρέφει το αποτέλεσμα με την μορφή array 
		  $query->free_result(); 
	  }
	  
	   public function getSupermarketsSum() //Επιστρέφει το άθρισμα των προϊόντων
	  {
		  $query = $this->db->qet('supermarkets');  
		  $row = $query->num_rows();		  
		  return $row;
	  }
	  
	  public function insertSupermarket($SupermarketID,$SupermarketName)
	  {
		  $data=array('SupermarketID' => $SupermarketID,'SupermarketName' => $SupermarketName);
		  $this->db->insert('supermarkets', $data);
	  }
	  
	  public function getSupermarkets($SupermarketID,$SupermarketName,$City,$Region)
	  {
		  //Giving all parameters
		  if(($SupermarketID!=0)and($SupermarketName!="0")and($City!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'SupermarketName' => $SupermarketName,'City' => $City,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  
		  //Giving 3 of 4
		  if(($SupermarketID!=0)and($SupermarketName!="0")and($City!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'SupermarketName' => $SupermarketName,'City' => $City));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketID!=0)and($SupermarketName!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'SupermarketName' => $SupermarketName,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketID!=0)and($City!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'City' => $City,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($SupermarketName!="0")and($City!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketName' => $SupermarketName,'City' => $City,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  //Giving 2 of 4
		  if(($SupermarketID!=0)and($SupermarketName!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'SupermarketName' => $SupermarketName));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		   if(($SupermarketID!=0)and($City!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'City' => $City));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketID!=0)and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketName!="0")and($City!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketName' => $SupermarketName,'City' => $City));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketName!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketName' => $SupermarketName,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($City!="0")and($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('City' => $City,'Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  //Giving 1 of 4
		  if(($SupermarketID!=0))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketID' => $SupermarketID));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($SupermarketName!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('SupermarketName' => $SupermarketName));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($Region!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('Region' => $Region));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  if(($City!="0"))
		  {
          $query = $this->db->get_where('supermarkets', array('City' => $City));
		   return $query->result_array();
		  $query->free_result(); 
		  }
		  
	  }

	  
	}
	
	
?>