<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Updated</title>
	
</head>
<body>

<?php

if(isset($_POST['edit'])){

include 'config.php';

$id =  $_POST['id'];

$sql = "SELECT * FROM add_product WHERE ID= '$id'";  

$table = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($table);

  
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pimg = $_FILES['pimg'] ['name'];
	$pquantity = $_POST['pquantity'];
	$description = $_POST['pdesc'];

	move_uploaded_file($_FILES['pimg']['tmp_name'],"../img/uploads/" .$_FILES['pimg']['name']);

	$sql = "UPDATE add_product SET pname='$pname', pprice='$pprice', pimg='$pimg', pquantity='$pquantity',pdesc='$description' WHERE ID = '$id'";


	if(mysqli_query($conn,$sql)){

		echo"
	<script>

	alert('Product Successfully Updated');
	
	window.location ='/E-Commerce/admin/Index/view.php';

	</script>";

	}else{
		echo "error" .mysqli_error($conn);
	}  
}


// Close connection
mysqli_close($conn);


?>

</body>
</html>