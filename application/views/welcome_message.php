


<!DOCTYPE html>
<html>
<head>
<!--Base_url είναι η διεύθυνση που έχει οριστεί στο config file-->
<!--<?php echo base_url()?>-->
<!--Πρώτα το jquery reference και μετά τα δικά μας js-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/action.js"></script>


</head>
<body>

<p><?= $sum ?></p>

<?php
foreach($rows as $row)
{
	print $row['id'];
}


?>







<button id="button1">sadadssssssssssad</button>
<button id="button3">dasdas</button>

</body>
</html> 

