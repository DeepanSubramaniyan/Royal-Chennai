<?php

$server="127.0.0.1";
$user = "root";  //username of the database server
$pass="";
$database='royal_chennai';

$tuser=$_POST["t1"];
$temail=$_POST["t2"];
$tphone=$_POST["t3"];
$tadd=$_POST["t4"];
$ted=$_POST["t5"];
$tpt=$_POST["t6"];
$tguest=$_POST["t7"];
$tcater=$_POST["t8"];
$tsreq=$_POST["t9"];



$con=new mysqli($server,$user,$pass,$database);

$str="insert into wedding_and_meeting values('  $tuser  ','  $temail  ','  $tphone  ','  $tadd  ','  $ted  ','  $tpt  ','  $tguest  ','  $tcater  ', '  $tsreq  ')";

if ($con->query($str) === TRUE){
    echo "New record created sucessfully";
}
else{
    echo "Error: " .$str . "<br>" .$con->error;
}

$con->close();

// query($str,$con);

?>