<html>
<title>Natural Join</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body>

<form action="" method="post">
<table align="center">
<p><h2 style="background-color:powderblue;" align="center">Natural Join Operation</h2></p>
<tr>
    <td> 
	<input class ="btn btn-info pull-right" name="display" type="submit" value="DISPLAY"/> </td>
</tr>

</table>
</form>

<?php
$con=mysqli_connect('localhost','root','','miniProject');

if(isset($_POST['display']))
{

$disp="select restaurant.resId,name,email,contact,manName,itemId,itemName from restaurant inner join manager on
restaurant.resId=manager.resId inner join  item on restaurant.resId=item.resId ";

$result=mysqli_query($con,$disp);
echo '<table border=12 bordercolor ="lightblue" align="center">';
echo '<tr><th>Restaurant Id </th><th>Restaurant Name </th><th> Email </th><th> Contact </th><th>Manager Name </th><th>Item Id </th><th>Item Name </th></tr>';

while($row=mysqli_fetch_array($result))
{
 echo'<tr>';
     echo '<td align="center">'.$row['resId'].'</td>';
     echo '<td>'.$row['name'].'</td>';
     echo '<td>'.$row['email'].'</td>';
     echo '<td>'.$row['contact'].'</td>';
     echo '<td align="center">'.$row['manName'].'</td>';
     echo '<td>'.$row['itemId'].'</td>';
     echo '<td>'.$row['itemName'].'</td>';
 echo'</tr>';

}

echo '</table>';
}



mysqli_close($con);
?>

</body>
</html>