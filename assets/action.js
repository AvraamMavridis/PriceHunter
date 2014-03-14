/* Global JavaScript File for working with jQuery library */

// execute when the HTML file's (document object model: DOM) has loaded


var pnames = new Array(); //List of products's names
var pIDS=new Array(); //List of products's ids
var selectedproducts = new Array(); //List of selected products's names
var selectedIDS=new Array(); //List of selected products's ids
var SupermarketsTHTP=new Array(); //List of supermarket's that have all the selected products
var SumPrices=new Array(); //The sum price of the selected products in each supermarket
var i=0;
var thesi;
var thisID;
var temp=0;

function autoComplete()
{
	 
  $.get("http://localhost/tddd27/index.php/json/getAllProducts", //Ajax retrieve of the products
	function(data){
	 for(var i=0;i<data.length;i++)
	 {
	 pnames[i]=data[i].ItemName; //Pass the products to the array
	 pIDS[i]=data[i].ItemID;
	 //console.log(pnames[i]);
	 }
	},"json");
	
	//JQuery autocomplete UI
	$("#autocomplete_text_field").autocomplete({
      source: pnames
    });
}

function findIDS()//Finds the ID of the SelectedProducts
{
	selectedIDS=[];//ResetTemplateItsTime
 for(k=0; k<selectedproducts.length;k++)
 {
  for(j=0; j<pnames.length;j++)
		 {
			 if(selectedproducts[k]===pnames[j])
			 {
				 selectedIDS[k]=pIDS[j];
			 }
		 }
 }
		 
}


$(document).ready(function() {
	
	$( "#tabs" ).tabs();
	$( "#tabs2" ).tabs();
	$("#autocomplete_text_field").focus(function () {
		autoComplete();
	});	
	$("#logo").click(function(){
		window.open('http://localhost/tddd27/index.php/','_self');
	});
	$("#logo").mouseover(function(){
		  document.body.style.cursor="pointer";
	  }); 
    $("#_FindCheapest").button();
    $("#add_product_button").button();
	
	
	
	
	$("#add_product_button").click(function() {
		
		SelectedProductID=pIDS[jQuery.inArray(document.getElementById("autocomplete_text_field").value,pnames)];
		console.log(SelectedProductID);
		
		
      
	   if(!document.getElementById("autocomplete_text_field").value)
	   {
		   alert("Empty value");
		  
	   }
	   else if(SelectedProductID==undefined)
	   {
		   alert("Product not found");
		   
	   }
	   else if(jQuery.inArray(SelectedProductID,selectedIDS)==-1)
	   {
		   $( "#ProductsDiv" ).show("bounce",1000);
		 selectedproducts[i]=document.getElementById("autocomplete_text_field").value;
		 for(var m=0; m<pnames.length; m++)
		 {
		 	if(selectedproducts[i]==pnames[m])
		 	{
		 	selectedIDS[i]=pIDS[m];
		 	}
		 }
		 console.log(selectedIDS);
		 
		 thesi=jQuery.inArray(document.getElementById("autocomplete_text_field").value,selectedproducts);
		 var row=$('<div class"productsclass" id='+selectedIDS[i]+' style="height:50px; background-color:#E36D84; -webkit-border-radius: 5px; border-radius: 5px; border-style:solid; border-color:#DB4865;" ><label style="position:relative; top:10px; left:2px; font-size:20px">'+selectedproducts[i]+'</label><input  style="position:relative; left:2px; top:10px; width:20px;" type="text" name="Quantity" value="1" id="'+thesi+'"><img class="delete"  src="http://b.dryicons.com/images/icon_sets/handy_part_2_icons/png/128x128/recycle_bin.png" height="22"  width="22" style="position:relative; top:10px; float: right;"></div><br>'); 
	   $("#productstable").append(row);
	   i++;
	   }    	   
	   else if(jQuery.inArray(SelectedProductID,selectedIDS)!=-1)
	   {
		  document.getElementById(jQuery.inArray(document.getElementById("autocomplete_text_field").value,selectedproducts)).value++;//Increase the quantity of a product
	   } 
	   

    });
	
	
     //Delete products
    $(document).on("click", "[class*='delete']", function() {
		thisID = $(this).parent().attr('id'); //find items parent
		console.log("This:"+thisID);
		selectedIDS.splice(jQuery.inArray(thisID,selectedIDS),1);
		console.log(selectedIDS);
		$(this).parent().hide("explode", 1000);
		$(this).parent().remove();//delete item		
		i--;
	});	
	
	
	$("#_FindCheapest").click(function() { 
		 //findIDS();//Finds the IDs of the SelectedProducts
		 var obj=new Array;
		 //Retrives from the database all the supermarkets that have the Selected Products and their  SumPrices
			$.post('http://localhost/tddd27/index.php/AddProduct/getSupermarketsWithProductsC', { items: JSON.stringify(selectedIDS) }).done( function(data) {
				obj = jQuery.parseJSON(data);//parse the returned JSON object
				for(q=0;q<obj.length;q++)//pass the SupermarketIDs and SumPrices to two Arrays
				{
				 SupermarketsTHTP[q]=obj[q].SupermarketID;
                 SumPrices[q]=parseInt(obj[q].SumPrice);
				}
				var position=findSupermarketWithTheLowestPrice(SumPrices);//call findSupermarketWithTheLowestPrice to find which supermarket has the lowest price
				console.log("Supermarket "+SupermarketsTHTP[position]+" Sumprice:"+SumPrices[position]);
				
				var obj2;
				$.get("http://localhost/tddd27/index.php/json/Supermarkets?SupermarketID="+SupermarketsTHTP[position]).done( //Ajax retrieve of the products
	function(data2){
					obj2 = jQuery.parseJSON(data2);
					console.log(obj2);
					if(obj2!=null)
					{
					document.getElementById('CheapestSupermarketLabel').innerHTML=obj2[0].SupermarketName;
					document.getElementById('CheapestSupermarketChain').innerHTML=obj2[0].Chain;
					document.getElementById('CheapestSupermarketCity').innerHTML=obj2[0].City;
					document.getElementById('CheapestSupermarketRegion').innerHTML=obj2[0].Region;
					$("#map").gmap3({
					map:{options:{center:[obj2[0].Lat, obj2[0].Long],zoom: 8}},
					marker:{latLng:[obj2[0].Lat, obj2[0].Long]}	});
					}
					else if(obj2==null)
					{
						document.getElementById('CheapestSupermarketLabel').innerHTML="There isn't supermarket that contain all the selected products";
					}
						
				 	
	 				
	},"json");
				
				
				 $( "#MapDiv" ).show("bounce",1000);
				 
				 
           },"json");	
		 
  });

	 
});

function findSupermarketWithTheLowestPrice(SumPrices)
{
	var max=SumPrices[0];
	var position=0;
	for(i=0;i<SumPrices.length;i++)
	{
		if(SumPrices[i]>max)
		{
			max=SumPrices[i];
			position=i;
		}
	}
	return position;
}

