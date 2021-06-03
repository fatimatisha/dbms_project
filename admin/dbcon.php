<?php

 $link=mysqli_connect("localhost","root","","miniProject");
  if($link)
  {
	  echo"yes";
  }
  else
	  echo"no";
?>