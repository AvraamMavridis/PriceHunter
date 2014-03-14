<div id="MenuDiv" class="MenuDiv">
<div><label id="Welcome">Welcome <?php echo $Name; ?></label></div>
<?php echo $ID; ?>
<form name="AddProductView" id="AddProductView" action="http://localhost/tddd27/index.php/AddProduct/ShowAddProductView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>

<form name="ShowAllProductsView" id="ShowAllProductsView" action="http://localhost/tddd27/index.php/AddProduct/ShowAllProductsView">
<input type="text" name="ID" id="ID"  value="<?php echo $ID; ?>" hidden="true" >
<input type="text" name="Name"  value="<?php echo $Name; ?>" hidden="true">
</form>
<ul id="menu">
  <li><a href="#" id="_showAllProduct"><span class="ui-icon ui-icon-cart"></span>View All Products</a></li>
  <li><a href="#" id="_addNewProduct"><span class="ui-icon ui-icon-circle-plus"></span>Add New Product</a></li>
  <li><a href="#" id=""><span class="ui-icon ui-icon-person"></span>View Profile</a></li>
  <li><a href="#"><span class="ui-icon ui-icon-wrench"></span>Edit Profile</a></li>
</ul>
</div>
