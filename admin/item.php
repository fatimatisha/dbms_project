<html>
<title>Restaurant Food Item</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body>
<p><h1 align="center" style="background-color:powderblue;">Food Item Description</p></h1>

<form action="" method="post">
<table align="center">
<tr>
    <td> Enter Item Id: </td>
    <td> <input name="itemId" type="text"/> </td>
</tr>
<tr>
    <td> Enter Restaurant Id : </td>
    <td> <input name="resId" type="text"/> </td>
</tr>
<tr>
    <td> Enter Item Name: </td>
    <td> <input name="itemName" type="text"/> </td>
</tr>
<tr>
    <td> Enter Price: </td>
    <td> <input name="price" type="text"/> </td>
</tr>

<tr>
    <td> <input name="submit" type="submit" value="SAVE" class="btn btn-info btn-sm pull-center">
	<input name="display" type="submit" value="DISPLAY" class="btn btn-info btn-sm pull-center"> </td>
</tr>

</table>
</form>

<?php



$con=mysqli_connect('localhost','root','','miniProject');


if(isset($_POST['submit']))
{
	
	$a=$_POST['itemId'];
	$b=$_POST['resId'];
	$c=$_POST['itemName'];
	$d=$_POST['price'];
	$q="insert into item values('$a','$b','$c','$d')";

$result=mysqli_query($con,$q);
}

if(isset($_POST['display']))
{
	$a=$_POST['itemId'];
	$b=$_POST['resId'];
	$c=$_POST['itemName'];
	$d=$_POST['price'];
	
	$disp="select * from item";

	$result=mysqli_query($con,$disp);
	echo '<table border=10 align="center">';
	echo '<tr><th>itemId</th><th>RestaurantId</th><th>itemName</th><th>Price</th></tr>';

while($row=mysqli_fetch_array($result))
{
 echo'<tr>';
     echo '<td>'.$row['itemId'].'</td>';
     echo '<td>'.$row['resId'].'</td>';
     echo '<td>'.$row['itemName'].'</td>';
     echo '<td>'.$row['price'].'</td>';
 echo'</tr>';

}

echo '</table>';
}


mysqli_close($con);
?>

</body>
</html>