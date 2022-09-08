<?php
	include "dbconnect.php";
	
	// $id=$_GET["edit_id"];
	// $nam=$_POST["nam"];
	// $des=$_POST["des"];
	// $quan=$_POST["quan"];
	// $price=$_POST["price"];
    // $expdate=$_POST["expdate"];
	    $id=$_GET["edit_id"];

		$nam = test_input($_POST["nam"]);
		$des=test_input($_POST["des"]);
		$quan=test_input($_POST["quan"]);
		$price=test_input($_POST["price"]);
        $expdate=test_input($_POST["expdate"]);
	
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}	
	$sql="UPDATE product SET name='$nam', description='$des', quantity='$quan'  price='$price',
    expire_date='$expdate' where id='$id' ";
	
	$result=$conn->query($sql);
	if($result){
		header('location:index.php');
    }
    echo "updated successfully";
	
	

?>

