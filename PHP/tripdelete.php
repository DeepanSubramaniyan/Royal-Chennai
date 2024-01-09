<?php
if (isset($_GET['fullname'])){
$id = $_GET['fullname'];
$con = new mysqli('localhost','root','','royal_chennai');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

$query = "DELETE FROM trip WHERE fullname=$id";
$result = mysqli_query($con,$query);

if($result){
    header('location:triptable.php');
}
else{
    echo "Error while deleting record";
}

}
else{
    echo "Value not recieved";
}

?>