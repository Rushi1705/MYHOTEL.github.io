<?php

$username=filter_input(INPUT_POST,'Username');
$password=filter_input(INPUT_POST,'password');
if (!empty($username)) {
  if (!empty($password)) {
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "testdb";

    $conn=new mysqli ($host,  $dbusername,  $dbpassword, $dbname);
    if (mysqli_connect_Error) {
      // code...
      die('connect Error('.mysqli_connect_error() .')'.mysqli_connect_error());
    }
    else {

              $table="CREATE TABLE info1 IF NOT EXIT ( ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              username VARCHAR(30) NOT NULL ,password VARCHAR(30) NOT NULL )";

              if ($conn->query($table) === TRUE ) {
                   echo "table is created  ";
              }

      $sql="INSERT INTO info1 (username,password) values ($username','$password')";
      if ($conn->query($sql)) {
           echo "new record is increted succesfully ";
      }
    }
    else {
         echo "Error:".$sql."<br>".$conn->error;
    }
    // code...
    $conn->close();
  }
  else {
    echo "password is empty";
    die();
  }
}
else {
  echo "userename is empty";
  die();
}




 ?>
