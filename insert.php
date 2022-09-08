<?php
	include "dbconnect.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = test_input($_POST["nam"]);
		$description=test_input($_POST["des"]);
		$quantity=test_input($_POST["quan"]);
		$price=test_input($_POST["price"]);
        $expire_date=test_input($_POST["expdate"]);
	
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$sql = "INSERT INTO product (id, name, description, quantity, price, expire_date)
	VALUES (NULL, '$name', '$description', '$quantity', '$price', '$expire_date')";
	
	 if($conn->query($sql))
	 {header('location:index.php');
		
	
	 }

	
	

	$conn->close();	

?>

