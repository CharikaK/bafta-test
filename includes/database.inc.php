<?php
$servername     = "localhost";
$dbName         = "bafta";
$dbuserName     = "root";
$dbPassword     = "";
/* $dbuserName     = "bf2021test";
$dbPassword     = "bf2021candidate"; */

$conn = mysqli_connect($servername,$dbuserName,$dbPassword,$dbName);

if(!$conn){
   die("Connection failed: ".mysqli_connect_errno()); 
}