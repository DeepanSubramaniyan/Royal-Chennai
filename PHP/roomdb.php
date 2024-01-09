<?php

$server="127.0.0.1";
$user = "root";  //username of the database server
$pass="";
$database='royal_chennai';


$tuser=$_POST["t1"];
$temail=$_POST["t2"];
$tphone=$_POST["t3"];
$tadd=$_POST["t4"];
$tcd=$_POST["t5"];
$tcod=$_POST["t6"];
$troom=$_POST["t7"];
// $id = $_POST[''];


$con=new mysqli($server,$user,$pass,$database);

$str="insert into room values ('  $tuser  ','  $temail  ','  $tphone  ','  $tadd  ','  $tcd  ','  $tcod  ','  $troom  ')";

if ($con->query($str) === TRUE){
    echo "New record created sucessfully";
}
else{
    echo "Error: " .$str . "<br>" .$con->error;
}

$con->close();

// query($str,$con);

?>