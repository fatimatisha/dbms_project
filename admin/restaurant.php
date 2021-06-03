<html>
<title>Restaurant Description</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body>


<p><h1 align="center" style="background-color:powderblue;">Restaurant Description</p></h1>
<br/>
<form action="" method="post">
<table align="center">
<tr>
    <td> Enter Restaurant Id: </td>
    <td> <input name="resId" type="text"> </td>
</tr>
<tr>
    <td> Enter Restaurant Name: </td>
    <td> <input name="name" type="text"> </td>
</tr>
<tr>
    <td> Enter Address: </td>
    <td> <input name="address" type="text"> </td>
</tr>
<tr>
    <td> Enter Email: </td>
    <td> <input name="email" type="text"> </td>
</tr>
<tr>
    <td> Enter Contact: </td>
    <td> <input name="contact" type="text"> </td>
</tr>
<tr>
    <td> <input class="btn btn-success btn-sm" name="x" type="submit" value="SAVE" >
	<input class="btn btn-success btn-sm" name="y" type="submit" value="DISPLAY"> </td>
</tr>

</table>
</form>

<?php


$con=mysqli_connect('localhost','root','','miniProject');


if(isset($_POST['x']))
{
	
	$a=$_POST['resId'];
	$b=$_POST['name'];
	$c=$_POST['email'];
	$d=$_POST['address'];
	$e=$_POST['contact'];

$q="insert into restaurant values('$a','$b','$c','$d','$e')";

$result=mysqli_query($con,$q);
}

if(isset($_POST['y']))
{
	
	$a=$_POST['resId'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['address'];
$e=$_POST['contact'];

$disp="select * from restaurant";

$result=mysqli_query($con,$disp);
echo '<table border=10 align="center">';
echo '<tr><th>RestaurantId</th><th>RestaurantName</th><th>Email</th><th>Address</th><th>Contact</th></tr>';

while($row=mysqli_fetch_array($result))
{
 echo'<tr>';
     echo '<td align="center">'.$row['resId'].'</td>';
     echo '<td>'.$row['name'].'</td>';
     echo '<td>'.$row['email'].'</td>';
     echo '<td>'.$row['address'].'</td>';
     echo '<td>'.$row['contact'].'</td>';
 echo'</tr>';

}

echo '</table>';
}

mysqli_close($con);
?>

</body>
</html>