<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "data_show";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if ($mysqli == false){
  echo "can't connect to database";
}else{
  echo "Success connect to database";
}