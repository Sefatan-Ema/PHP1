<?php
	include "dbconnect.php";
	$id=$_GET["edit"];
	$sql="SELECT * FROM student where id='$id'";
	$result=$conn->query($sql);
	$row= $result->fetch_assoc();
	
	    $nam = $row["name"];
		$des=$row["description"];
		$quan=$row["quantity"];
		$price=$row["price"];
        $expdate=$row["expire_date"];
	
	
?>

<html>
<style>
body{
display:grid;
place-items:center;

}
form{
width:300px;
height:400px;
border:2px solid ;
padding: 10px;}
</style>
<body>

<center>
<h1> Update Data</h1>
<form action="update.php?edit_id= <?php echo $id;?>" method="post">

Name*: <input type="text" name="nam" value="<?php echo $nam;?>"> <br><br>
Description: <input type="text" name="des" value="<?php echo $des;?>"><br><br>
Quantity: <input type="text" name="quan" value="<?php echo $quan;?>"><br><br>

Price: <input type="text" name="price"  value="<?php echo $price;?>"><br><br>
Expire_date: <input type="text"name="expdate" value="<?php echo $expdate;?>"><br><br>

<input type="submit" value="Update">

</form>
</center>
</body>
</html>
