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
	  
	  $("#SupermarketCity").keypress(function(){
		  
	  });
	  
	
	 //Get Supplier's ID from the hidden input field ID
	 var ID=document.getElementById('ID').value;
	 
	 console.log(ID);
	 
	 $.get("http://localhost/tddd27/index.php/json/Supermarkets?SupermarketID="+ID, //Ajax retrieve of the products
	        function(data){
				 document.getElementById('SupermarketName').value=data[0].SupermarketName;
				 document.getElementById('SupermarketChain').value=data[0].Chain;
				 document.getElementById('SupermarketCity').value=data[0].City;
				 document.getElementById('SupermarketRegion').value=data[0].Region;
				 document.getElementById('Lat').value=data[0].Lat;
				 document.getElementById('Long').value=data[0].Long;
	},"json");
	
	
	
	$("#_SaveProfile").click(function(){
		  
		  var flag=0;
		  if(document.getElementById("SupermarketName").value==="")
		  {
			 flag=1;
			 document.getElementById("SupermarketNameLabel").style.color="#DB1A4A";
		  }
		  
		  if(flag!=1)
		  {
          $("#EditProfileForm").submit();
		  }
      });
	 
	    
      
	  

});



