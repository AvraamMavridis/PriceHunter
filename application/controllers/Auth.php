 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  class Auth extends CI_Controller
{
	//Constructor
	  function __construct() {
		  parent::__construct();
		  $this->load->helper ( 'url' );
		$this->load->helper ( 'form' );
	  }
	  

	
    public function session()
    {
    
	//Require facebook's library
	require 'facebook/facebook.php';
	
	//Create an Facebook Object with our ID and Secret
	$facebook = new Facebook(array(  
    'appId'  => '186850328134561',  
    'secret' => 'fd60c475f38af65483af36372a8a9374',  
    'cookie' => false
	));  
	
	//Check if the user is authenticated
    $user = $facebook->getUser();
	
	  if ($user) {
		$user_profile = $facebook->api('/me','GET');
		$this->load->model('SupermarketsModel');
		$SupermarketID=$user_profile['id'];
		$SupermarketName=$user_profile['name'];
		$City=0;
		$Region=0;
		$result=$this->SupermarketsModel->getSupermarkets($SupermarketID,$SupermarketName,$City,$Region);
		  if(empty($result))//If Supermarket does not exist in 
		  {
			  echo "Empty";
			  $this->SupermarketsModel->insertSupermarket($SupermarketID,$SupermarketName);
			  $getAccessToken = $facebook->getAccessToken();
		  	  $data=array('ID' => $user_profile['id'], 'Name' => $user_profile['name']);
		      $this->load->view ('SupplierAllProductsView',$data);
		  }
		  else
		  {
		  $getAccessToken = $facebook->getAccessToken();
		  $data=array('ID' => $user_profile['id'], 'Name' => $user_profile['name']);
		  $this->load->view ('SupplierAllProductsView',$data);
		  }
	  } else {
		// proceed knowing you require user login and/or authentication
		$login_url = $facebook->getLoginUrl();  
		  header("Location: ".$login_url);  
	  }
    }
	
	
	
}