<?php

//step 1 db connection
$con = new mysqli('localhost','root','','royal_chennai');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

if(isset($_POST['register']) && $_POST['register'] == "Insert"){
    $name = $_POST['t1'];
    $emailid = $_POST['t2'];
    $phone = $_POST['t3'];
    $add = $_POST['t4'];
    $cd = $_POST['t5'];
    $cod = $_POST['t6'];
    $roomtype = $_POST['t7'];
   

//fetch data from table and display in web


  

$query = "INSERT INTO room(username,email,phone,address_details,checking_date,checkout_date,room_type) 
          values( '$name','$emailid','$phone','$add','$cd', '$cod','$roomtype')";

$result = mysqli_query($con,$query);

if($result){
    echo "Successfully Inserted";
 }
 else{
     echo "Error while inserting record";
 }

}
else if(isset($_POST['updatevalue']) && $_POST['updatevalue'] == "Update"){
    $id = $_POST['id'];
    $name = $_POST['t1'];
    $emailid = $_POST['t2'];
    $phone = $_POST['t3'];
    $add = $_POST['t4'];
    $cd = $_POST['t5'];
    $cod = $_POST['t6'];
    $roomtype = $_POST['t7'];



$query = "UPDATE room set username='$name',email=' $emailid',phone='$phone',address_details='$add',checking_date='$cd',checkout_date=' $cod',room_type='$roomtype ' where id=$id";
$result = mysqli_query($con,$query);
if($result){
    header('location:table.php');
}else{
 echo 'Error While Updating recored';
}

}



?>