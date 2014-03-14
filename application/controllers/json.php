  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  class Json extends CI_Controller {
	  
	  //Constructor
	  function __construct() {
		  parent::__construct();
		 
	  }
	  
	  
	  //Get Products function
	  public function getAllProducts(){	
	   $this->load->model ('ProductsModel'); 
		$data ['rows'] = $this->ProductsModel->getAllProducts();
		echo json_encode($data ['rows']);
		exit; 
		}
		
	  
	  public function Products(){
		  //Variables initilizations
			$ItemID=0;
			$ItemName="0";
			$ItemCategory="0";
			$SupermarketID=0;
			
			if(!empty($_GET["ItemID"]))
			{
				$ItemID=$_GET["ItemID"];
			}
			if(!empty($_GET["ItemName"]))
			{
				$ItemName=$_GET["ItemName"];
			}
			if(!empty($_GET["ItemCategory"]))
			{
				$ItemCategory=$_GET["ItemCategory"];
			}
			if(!empty($_GET["SupermarketID"]))
			{
				$SupermarketID=$_GET["SupermarketID"];
			}
			$this->load->model('ProductsModel'); 
			$data ['rows'] = $this->ProductsModel->getProducts($ItemID,$ItemName,$ItemCategory,$SupermarketID);
			echo json_encode($data ['rows']);
			exit;
		}
		
		public function Supermarkets(){	
			$SupermarketID=0;
		 	$SupermarketName="0";
		    $City="0";
			$Region="0";
			
		    if(!empty($_GET["SupermarketID"]))
			{
				$SupermarketID=$_GET["SupermarketID"];
			}
			if(!empty($_GET["SupermarketName"]))
			{
				$SupermarketName=$_GET["SupermarketName"];
			}
			if(!empty($_GET["City"]))
			{
				$City=$_GET["City"];
			}
			if(!empty($_GET["Region"]))
			{
				$Region=$_GET["Region"];
			}
		
	    $this->load->model('SupermarketsModel'); 
		$data ['rows'] = $this->SupermarketsModel->getSupermarkets($SupermarketID,$SupermarketName,$City,$Region);
		echo json_encode($data ['rows']);
		exit; 
		}
		
		public function ProductInSupermarket()
		{
		$this->load->model('functionsoonproductinsupermarket'); 
		$data ['rows'] = $this->functionsoonproductinsupermarket->getProductInSupermarket(101);
		echo json_encode($data ['rows']);
		exit; 
		}
		
		
	}
  
