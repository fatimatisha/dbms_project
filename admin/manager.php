<html>
<title>Restaurant Manager Description</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body>

<p><h1 align="center" style="background-color:powderblue;">Restaurant Manager Description</p></h1>

<form action="" method="post">
<table align="center">
<tr>
    <td> Enter Manager Id: </td>
    <td> <input name="manId" type="text"> </td>
</tr>
<tr>
    <td> Enter Restaurant Id : </td>
    <td> <input name="resId" type="text"> </td>
</tr>
<tr>
    <td> Enter Manager Name: </td>
    <td> <input name="manName" type="text"> </td>
</tr>
<tr>
    <td> Enter Manager Email: </td>
    <td> <input name="manEmail" type="text"> </td>
</tr>

<tr>
    <td> <input name="x" type="submit" value="SAVE" class="btn btn-info btn-sm pull-center">
	<input name="y" type="submit" value="DISPLAY" class="btn btn-info btn-sm pull-center"> </td>
</tr>

</table>
</form>

<?php


$con=mysqli_connect('localhost','root','','miniProject');


if(isset($_POST['x']))
{
	
	$a=$_POST['manId'];
	$b=$_POST['resId'];
	$c=$_POST['manName'];
	$d=$_POST['manEmail'];
	$q="insert into manager values('$a','$b','$c','$d')";

	$result=mysqli_query($con,$q);
}

if(isset($_POST['y']))
{
	
	$a=$_POST['manId'];
	$b=$_POST['resId'];
	$c=$_POST['manName'];
	$d=$_POST['manEmail'];
	
	$disp="select * from manager";

	$result=mysqli_query($con,$disp);
echo '<table border=10 align="center">';
echo '<tr><th>ManagerId</th><th>RestaurantId</th><th>ManagerName</th><th>ManagerEmail</th></tr>';

while($row=mysqli_fetch_array($result))
{
 echo'<tr>';
     echo '<td>'.$row['manId'].'</td>';
     echo '<td>'.$row['resId'].'</td>';
     echo '<td>'.$row['manName'].'</td>';
     echo '<td>'.$row['manEmail'].'</td>';
 echo'</tr>';

}

echo '</table>';
}

mysqli_close($con);
?>

</body>
</html>