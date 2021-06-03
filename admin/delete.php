<html>
<title>Natural Join</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body>

<form action="" method="post">
<table align="center">
<p><h2 style="background-color:powderblue;" align="center">delete</h2></p>
<tr>
    <td> 
     <input name="delete" type="submit" value="DELETE"></td>
</tr>

</table>
</form>

<?php

$con=mysqli_connect('localhost','root','','miniProject');

if(isset($_POST['delete']))
{
	$a=$_POST['itemId'];
	$b=$_POST['resId'];
	$c=$_POST['itemName'];
	$d=$_POST['price'];
	$q="delete from item where itemId=$a";

$result=mysqli_query($con,$q);
}
mysqli_close($con);
?>

</body>
</html>
