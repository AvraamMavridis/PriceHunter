// JavaScript Document

var pnames = new Array(); //List of products

function ProductsToView(pnames,i)//ProductsToView appends supplier's product
{
	var row=$('<div class"productsclass" style="height:50px; background-color:#FFFFFF"   id='+pnames[i]+' style="position:relative; top:5px;"><label style="position:relative; top:2px; left:2px; font-size:20px">'+pnames[i]+'</label><input  style="position:relative; left:2px; top:1px; width:20px;" type="text" name="Quantity" value="1" id='+i+'><span class="ui-icon ui-icon-circle-close" height="22" width="22" style="float: right;"></div><br>'); 

    $("#productstable").append(row);
}

$(document).ready(function() {
	
	//Initializations of the JQuery Widgets
	$("#add_product_button").button();
	$("#menu").menu();
	$("#submit").button();
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
	  
	  $("#logo").mouseover(function(){
		  document.body.style.cursor="pointer";
	  });
	  
	  $("#logo").click(function(){
		window.open('http://localhost/tddd27/index.php/','_self');
	});
	  
	  $("#_NewProduct").click(function(){
		  
		  var flag=0;
		  if(document.getElementById("ItemName").value==="")
		  {
			 flag=1;
			 console.log("mpuke");
			 document.getElementById("ItemNameLabel").style.color="#DB1A4A";
		  }
		  if(document.getElementById("ItemCategory").value==="")
		  {
			  flag=1;
			 console.log("mpuke");
			 document.getElementById("ItemCategoryLabel").style.color="#DB1A4A";
		  }
		  if(document.getElementById("ItemDesc").value==="")
		  {
			  flag=1;
			 console.log("mpuke");
			 document.getElementById("ItemDescLabel").style.color="#DB1A4A";
		  }
		  if((document.getElementById("Price").value==="")||(isNaN(document.getElementById("Price").value)))
		  {
			  flag=1;
			 console.log("mpuke");
			 document.getElementById("PriceLabel").style.color="#DB1A4A";
			 if(isNaN(document.getElementById("Price").value))
			 {
				  document.getElementById("Price").value="Give a numeric price!";
			 }
		  }
		  
		  if(flag!=1)
		  {
          $("#NewProductForm").submit();
		  }
      });
	  

	  
	
	 //Get Supplier's ID from the hidden input field ID
	 var ID=document.getElementById('ID').value;
	 
	    
      
	  $.get("http://localhost/tddd27/index.php/json/Products?SupermarketID="+ID, //Ajax retrieve of the products
	        function(data){
			 for(var i=0;i<data.length;i++)
			 {
				 pnames[i]=data[i].ItemName; //Pass the products to the array
				 ProductsToView(pnames,i)//Call ProductsToView
			 }
	 
	},"json");
	
	
	
	
});



