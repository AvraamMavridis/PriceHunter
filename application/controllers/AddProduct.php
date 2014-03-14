<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  class AddProduct extends CI_Controller
{
	//Constructor
	  function __construct() {
		  parent::__construct();
		  $this->load->helper ( 'url' );
		  $this->load->helper ( 'form' );
		 
	  }
	  
	  function ShowAddProductView()
	  {
		   $data=array('ID' => $_GET['ID'], 'Name' => $_GET['Name']);
		   $this->load->view ( 'AddProductView',$data);
	  }
	  
	  function AddToDatabase()
	  {
		  $ItemName=$_GET['ItemName'];
		  $ItemCategory=$_GET['ItemCategory'];
		  $ItemDesc=$_GET['ItemDesc'];
		  $ID=$_GET['ID'];
		  $Price=$_GET['ItemDesc'];
		  $this->load->model('AddProductModule'); 
		  $this->AddProductModule->AddProductOnTable($ItemName,$ItemCategory,$ItemDesc,$ID,$Price); 
		  $data=array('ID' => $_GET['ID'], 'Name' => $_GET['Name']);
		  $this->load->view ( 'SupplierAllProductsView',$data);
	  }
	  
	  function ShowAllProductsView()
	  {
		  $data=array('ID' => $_GET['ID'], 'Name' => $_GET['Name']);
		  $this->load->view ( 'SupplierAllProductsView',$data);
	  }
	  
	  function ShowViewProfileView()
	  {
		  $data=array('ID' => $_GET['ID'], 'Name' => $_GET['Name']);
		  $this->load->view ( 'ViewProfileView',$data);
	  }
	  
	  function ShowEditProfileView()
	  {
		  $data=array('ID' => $_GET['ID'], 'Name' => $_GET['Name']);
		  $this->load->view ( 'EditProfileView',$data);
	  }
	  
	  function DeleteProductFromDatabase()
	  {
		  $ID=$_GET['ID'];
		  $ItemID=$_GET['ItemID'];
		  $this->load->model('AddProductModule'); 
		  $this->AddProductModule->DeleteProduct($ItemID,$ID);
	  }
	  
	  function UpdateSupermarketInfo()
	  {
		  $SupermarketID=$_GET['ID'];
		  $SupermarketName=$_GET['SupermarketName'];
		  $Chain=$_GET['SupermarketChain'];
		  $City=$_GET['SupermarketCity'];
		  $Region=$_GET['SupermarketRegion'];
		  $Lat=$_GET['Lat'];
		  $Long=$_GET['Long'];
		  $this->load->model('AddProductModule');
		  $this->AddProductModule->UpdateSupermarket($SupermarketID,$SupermarketName,$Chain,$City,$Region,$Lat,$Long);
		  $data=array('ID' => $SupermarketID, 'Name' => $SupermarketName);
		  $this->load->view ( 'EditProfileView',$data);
	  }
	  
	  function getSupermarketsWithProductsC()
	  {
		  $this->load->model('AddProductModule');
		  $data['rows']=$this->AddProductModule->getSupermarketsWithProducts($_POST['items']);
		  echo json_encode($data ['rows']);
		  exit;
	  }
	
}