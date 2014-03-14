// JavaScript Document

var pnames = new Array(); //List of products


function ProductsToView(pnames,i)//ProductsToView appends supplier's product
{
	
		 var row=$('<div class"productsclass" id='+pnames[i]+' style="height:50px; background-color:#E36D84; -webkit-border-radius: 5px; border-radius: 5px; border-style:solid; border-color:#DB4865;" ><label style="position:relative; top:10px; left:2px; font-size:20px">'+pnames[i]+'</label><img class="delete"  src="http://b.dryicons.com/images/icon_sets/handy_part_2_icons/png/128x128/recycle_bin.png" height="22"  width="22" style="position:relative; top:10px; float: right;"></div><br>'); 
    $("#productstable").append(row);
}



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
	 
	    
      
	  $.get("http://localhost/tddd27/index.php/json/Products?SupermarketID="+ID, //Ajax retrieve of the products
	        function(data){
			 for(var i=0;i<data.length;i++)
			 {
				 pnames[i]=data[i].ItemName; //Pass the products to the array
				 ProductsToView(pnames,i)//Call ProductsToView
			 }
	 
	},"json");
	
	
	
	  $(document).on("click", "[class*='delete']", function() {
		  thisID = $(this).parent().attr('id'); //find items parent
	
		  	$.get("http://localhost/tddd27/index.php/json/Products?ItemName="+thisID, //Ajax retrieve to-be-deleted product's ID
	        function(data){
			 var ItemID2=data[0].ItemID;//When the Ajax callback is finished this value has been defined
			 $.post('http://localhost/tddd27/index.php/AddProduct/DeleteProductFromDatabase?ID='+document.getElementById('ID').value+'&ItemID='+ItemID2);//Delete product from database
		      thesi=jQuery.inArray(thisID,pnames);//find item's position in the products Array
		      pnames.splice(thesi,1);//Delete product from array
			},"json");

		$(this).parent().hide("explode", 1000);
		$(this).parent().remove();//delete item
		//console.log("Size:"+pnames.length);
		//console.log(pnames);
	});	
	  

});



