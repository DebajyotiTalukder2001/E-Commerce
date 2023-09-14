<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order Added</title>
	 
</head>
<body>
	<?php

if(isset($_POST['add_order'])){

include 'config.php';



$name = $_POST['firstname'];
$mail = $_POST['email'];
$add = $_POST['address'];




$cp = "INSERT INTO ordered(customer_name, customer_mail, customer_address, product_name, product_price, product_image)
SELECT '$name' , '$mail', '$add', product_name, product_price, product_image FROM cart";

mysqli_query($conn ,$cp);



$sql = "DELETE FROM cart";


if(mysqli_query($conn,$sql)){

    echo"
<script>

alert('Successfully ordered');
window.location ='/E-Commerce/User/Index/vieworder.php';			

</script>";

}else{
    echo "error" .mysqli_error($conn);
}  



// Close connection
mysqli_close($conn);

}

?>

</body>
</html>



