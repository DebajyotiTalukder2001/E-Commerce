
<?php

// servername => localhost
		// username => root
		// password => empty
		// database name => ecommerce
        
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

        ?>