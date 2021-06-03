<html>
<title>Information</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<body style="background-image:url(https://www.jakpost.travel/wimages/large/7-78242_blurry-blue-background-4k-hd-desktop-wallpaper.jpg);  background-size: cover; background-repeat:no-repeat;">

<form action="" method="post">
<table align="center">
<p><h2 style="background-color:powderblue;" align="center">Restaurant Information</h2></p>
<tr>
    <td> Enter Restaurant Id </td>
    <td> <input name="resId" type="text"/> </td>
</tr>
</br>
<tr>
    <td> 
	<input class ="btn btn-info pull-right" name="display" type="submit" value="DISPLAY"/> </td></br>
</tr>

</table>
</form>

<?php
$con=mysqli_connect('localhost','root','','miniProject');

if(isset($_POST['display']))
{

$a=$_POST['resId'];
$disp="select restaurant.resId,name,email,contact,manName,itemId,itemName from restaurant inner join manager on
restaurant.resId=manager.resId inner join  item on restaurant.resId=item.resId where restaurant.resId=$a";

$result=mysqli_query($con,$disp);
echo '<table border=15 bordercolor ="lightblue" align="center">';
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