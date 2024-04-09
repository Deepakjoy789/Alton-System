<html>

<body>

 

 

<?php

include("connection/connect.php"); 
error_reporting(0);
session_start();


 

$sql="INSERT INTO reservation (customer_id, tablenumber, bookingdate, expecteddate) VALUES ('".$_POST['customer_id']."',' ".$_POST['tablenumber']."',' ".$_POST['bookingdate']."',' ".$_POST['expecteddate']."')";

 
												mysqli_query($db, $sql); 
												move_uploaded_file($temp, $store);
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																 New Table Booking Added Successfully.
															</div>';


echo "Table booking done";

 

mysql_close($db)

?>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>

</html>