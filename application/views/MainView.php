<!DOCTYPE html>
<html>
<head>
<!--<?php echo base_url()?>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/jquery-ui-1.9.2.custom.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/MainViewCss.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/action.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gmap3.min.js"></script>
</head>
<body id="body">
<div id="logo" ><img src="<?php echo base_url()?>assets/images/logo.png"/></div>

<div id="maindiv" class="maindiv">
<input id="autocomplete_text_field">
<button id="add_product_button">Add product</button>
</div>

<div id="supplier">
<form name="frm1" action="http://localhost/tddd27/index.php/auth/session">
<input type="image" src="<?php echo base_url()?>assets/images/fb_supplier.png" />
</form>
</div>


<div id="ProductsDiv" class="ProductsDiv" hidden="true">
<div id="tabs">
  <ul>
    <li><a href="#fragment-1"><span>Shopping List</span></a></li>
  </ul>
  <div id="fragment-1">
 <form action="#" id="productstable" name="productstable">
<p></p>
</form>
<button id="_FindCheapest" name="_FindCheapest">Find Cheapest Supermarket</button>
</div>
  </div>
</div>

 
 <div id="MapDiv" class="MapDiv" hidden="true">
 <div id="tabs2">
  <ul>
    <li><a href="#fragment-2"><span>Supermarket With the cheapest price</span></a></li>
  </ul>
  <div id="fragment-2">
  <label id="CheapestSupermarketLabel"></label>
   <br>
  <label id="CheapestSupermarketChain"></label>
  <br>
  <label id="CheapestSupermarketCity"></label>
  <br>
  <label id="CheapestSupermarketRegion"></label>
 
<div style="height:350px; width:430px" id="map"></div>
</div>
  </div>
  </div>
  
  

</body>
</html>
