// JavaScript Document

var pnames = new Array(); //List of products


$(document).ready(function() {
	
	//Initializations of the JQuery Widgets
	$("#add_product_button").button();
	$( "#menu" ).menu();
	$( "#tabs" ).tabs();
     $("#_addNewProduct").click(function(){
        $("#AddProductView").submit();
      });
	  
	   $("#_showAllProduct").click(function(){
        $("#ShowAllProductsView").submit();
      });
	  
	  $("#_ViewProfileView").click(function(){
        $("#ViewProfileView").submit();
      });
	  
	  $("#_EditProfileView").click(function(){
        $("#EditProfileView").submit();
      });
	  
	 
	 
	 
	  
	  
	  $("#logo").click(function(){
		window.open('http://localhost/tddd27/index.php/','_self');
	});
	
	$("#logo").mouseover(function(){
		  document.body.style.cursor="pointer";
	  });
	  
	
	 //Get Supplier's ID from the hidden input field ID
	 var ID=document.getElementById('ID').value;
	 
	  $.get("http://localhost/tddd27/index.php/json/Supermarkets?SupermarketID="+ID, //Ajax retrieve of the products
	        function(data){
				document.getElementById('SupermarketNameLabel').innerHTML=data[0].SupermarketName;
				document.getElementById('ChainLabel').innerHTML=data[0].Chain;
				document.getElementById('CityLabel').innerHTML=data[0].City;
				document.getElementById('RegionLabel').innerHTML=data[0].Region;
                $("#map").gmap3({
					map:{options:{center:[data[0].Lat, data[0].Long],zoom: 8}},
					marker:{latLng:[data[0].Lat, data[0].Long]}		
				 });			
						
	},"json");
	 
	    
      
	  

});



