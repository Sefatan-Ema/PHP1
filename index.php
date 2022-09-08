<?php
	include "dbconnect.php";
	$sql="SELECT * FROM product";
	
	$result=$conn->query($sql);
	
?>


<html>
    <head>
        <style>
            th{
                background-color:gray;
                color:white
            }
            button{
                color:black;
                background-color:violet;margin:30px;
                padding:10px;
                
            }
            a{
                text-decoration:none
            }
            </style>
    </head>
	<body>

	<center>
		<h1 style="color:red"> Product Information</h1>
		<table  border='3' cellpadding='10' cellspacing='5'>
			<tr >
				
				<th >Name</th>
				<th>Description</th>
				<th >Quantity</th>
				<th >Price</th>
				<th >Expire_date</th>
				<th >Edit</th>
				<th >Delete</th>
			</tr>
			<?php 
			while($row = $result->fetch_assoc()){
				$id= $row["id"];
				$name=$row["name"];
				
				echo "<tr>";
				//echo "<td >". $id. "</td>";
					echo "<td>". $name. "</td>";
					echo "<td>". $row["description"]. "</td>";
					echo "<td>". $row["quantity"]. "</td>";
					echo "<td>". $row["price"]. "</td>";
					echo "<td>". $row["expire_date"]. "</td>";
					echo "<td><a href='updateform.php?edit=$id'> Edit </a></td>";
					echo "<td> <a href='delete.php?del=$id'> Delete </a> </td>";
				echo "</tr>";
				}
			?>
		
		</table>
		<button ><a style="color:black" href="insertform.php">Insert Product Info.</a></button>
		
		<br><br>

	</center>
	</body>
</html>
</a>