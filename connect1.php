<?php

$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "testdb";

$conn=mysqli_connect($dbusername,$host,$dbpassword,$dbname);

if($conn)
{
  echo "Connection OK";
}
else {
  echo "erroorr";
}


 ?>
