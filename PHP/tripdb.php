<?php

$server="127.0.0.1";
$user = "root";  //username of the database server
$pass="";
$database='royal_chennai';

$tuser=$_POST["t1"];
$temail=$_POST["t2"];
$tphone=$_POST["t3"];
$tadd=$_POST["t4"];
$tpd=$_POST["t5"];
$tpt=$_POST["t6"];
$tguest=$_POST["t7"];
$tcitizen=$_POST["t8"];
$tsreq=$_POST["t9"];
$tephone=$_POST["t10"];
$tptrans=$_POST["t11"];


$con=new mysqli($server,$user,$pass,$database);

$str="insert into trip values('  $tuser  ','  $temail  ','  $tphone  ','  $tadd  ','  $tpd  ','  $tpt  ','  $tguest  ','  $tcitizen  ', '  $tsreq  ','  $tephone  ','  $tptrans  ')";

if ($con->query($str) === TRUE){
    echo "New record created sucessfully";
}
else{
    echo "Error: " .$str . "<br>" .$con->error;
}

$con->close();

// query($str,$con);

?>