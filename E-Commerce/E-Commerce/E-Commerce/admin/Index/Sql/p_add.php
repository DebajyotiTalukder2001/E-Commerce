<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Added</title>
	 
</head>
<body>
	<?php

if(isset($_POST['submit'])){

include 'config.php';

$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pimg = $_FILES['pimg'] ['name'];
$pquantity = $_POST['pquantity'];
$description = $_POST['pdesc'];

move_uploaded_file($_FILES['pimg']['tmp_name'],"../img/uploads/" .$_FILES['pimg']['name']);

$sql = "SELECT * FROM `add_product` WHERE pname = '$pname' and pimg = '$pimg'";
$table = mysqli_query($conn, $sql);

if(mysqli_num_rows($table)>0){

	echo"
	<script>

	alert('Product Already Added');

	window.location ='/E-Commerce/admin/Index/view.php';			

</script>";

}
else{



$sql = "INSERT INTO add_product(pname ,pprice, pimg , pquantity, pdesc)VALUES('$pname', '$pprice', '$pimg', '$pquantity', '$description')";

// $sql = "ALTER TABLE add_product AUTO_INCREMENT = 1;"

if(mysqli_query($conn ,$sql)){
	echo"
	<script>

	alert('Product Successfully Added');

	window.location ='/E-Commerce/admin/Index/view.php';			

</script>";

}else{
	echo "error" .mysqli_error($conn);
	}
}

}
// Close connection
mysqli_close($conn);
?>	
</body>
</html>



