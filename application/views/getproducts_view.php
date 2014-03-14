<!DOCTYPE html>
<html>
<head>
<!--<?php echo base_url()?>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/jquery-ui-1.9.2.custom.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/producttable.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/action.js"></script>
</head>
<body id="body">
<div id="logo" ><img src="<?php echo base_url()?>assets/images/logo.png"/></div>

<div id="maindiv" class="maindiv">
<input id="autocomplete_text_field">
<button id="add_product_button">Add product</button>
<form action="#" id="productstable" name="productstable">
<p></p>
</form>
</div>

<div id="supplier">
<form name="frm1" action="http://localhost/tddd27/index.php/auth/session">
<input type="image" src="<?php echo base_url()?>assets/images/fb_supplier.png" />
</form>
<div>

</body>
</html>
