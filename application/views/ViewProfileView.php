<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/jquery-ui-1.9.2.custom.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admincss.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/ViewProfileActions.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/gmap3.min.js"></script>

<head>

</head>
<body id="body">
<div id="logo" ><img src="<?php echo base_url()?>assets/images/logo.png"/></div>
<div id="MenuDiv" class="MenuDiv">
<div><label id="Welcome">Welcome <?php echo $Name; ?></label></div>
<form name="AddProductView" id="AddProductView" action="http://localhost/tddd27/index.php/AddProduct/ShowAddProductView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>

<form name="ShowAllProductsView" id="ShowAllProductsView" action="http://localhost/tddd27/index.php/AddProduct/ShowAllProductsView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>

<form name="ViewProfileView" id="ViewProfileView" action="http://localhost/tddd27/index.php/AddProduct/ShowViewProfileView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>


<form name="EditProfileView" id="EditProfileView" action="http://localhost/tddd27/index.php/AddProduct/ShowEditProfileView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>


<ul id="menu">
  <li><a href="#" id="_showAllProduct"><span class="ui-icon ui-icon-cart"></span>View All Products</a></li>
  <li><a href="#" id="_addNewProduct"><span class="ui-icon ui-icon-circle-plus"></span>Add New Product</a></li>
  <li><a href="#" id="_ViewProfileView"><span class="ui-icon ui-icon-person"></span>View Profile</a></li>
  <li><a href="#" id="_EditProfileView"><span class="ui-icon ui-icon-wrench"></span>Edit Profile</a></li>
</ul>
</div>


<div id="MainDiv" class="MainDiv">
<div id="tabs">
  <ul>
    <li><a href="#fragment-1"><span>View Profile</span></a></li>
  </ul>
  <div id="fragment-1">
  <label id="SupermarketNameLabel" name="SupermarketNameLabel"></label>
  <br>
  <label id="ChainLabel" name="ChainLabel"></label>
  <br>
  <label id="CityLabel" name="CityLabel"></label>
  <br>
  <label id="RegionLabel" name="RegionLabel"></label>
 <div style="height:350px; width:550px" id="map"></div>
  </div>
</div>
</div>
</body>



</html>
