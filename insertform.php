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
<h1> Insert Data</h1>
<form action="insert.php" method="post">

Name*: <input type="text" name="nam"> <br><br>

Description: <input type="text" name="des" ><br><br>

Quantity: <input type="text" name="quan" ><br><br>
Price: <input type="text" name="price"> <br><br>
Expire_date:<input type="text" name="expdate"><br><br>
<input type="submit" value="Insert">

</form>
</center>
</body>
</html>