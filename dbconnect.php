

<?php

$connect = mysqli_connect("localhost","root","","project1");
 if($connect)
 {
echo "Database Connected";
 }
 else{
 	echo "Not connected, contact administrator";
 }
?>