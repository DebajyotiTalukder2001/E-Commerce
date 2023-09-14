<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Cleared</title>

</head>
<body>

<?php


            include 'config.php';
            

	$sql = "DELETE FROM cart";


	if(mysqli_query($conn,$sql)){

		echo"
	<script>

	alert('Cart Successfully Cleared');
	window.location ='/E-Commerce/User/Index/viewcart.php';			

</script>";

	}else{
		echo "error" .mysqli_error($conn);
	}  



// Close connection
mysqli_close($conn);


?>

</body>
</html>