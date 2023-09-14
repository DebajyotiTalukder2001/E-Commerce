<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Deleted</title>

</head>
<body>

<?php



include 'config.php';

$id =  $_GET['id'];

$sql = "SELECT * FROM add_product WHERE ID= '$id'";



	$sql = "DELETE FROM add_product WHERE ID = '$id'";


	if(mysqli_query($conn,$sql)){

		echo"
	<script>

	alert('Product Successfully Deleted');

	window.location ='/E-Commerce/admin/Index/view.php';			

</script>";

	}else{
		echo "error" .mysqli_error($conn);
	}  



// Close connection
mysqli_close($conn);


?>

</body>
</html>