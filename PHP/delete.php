<?php
if (isset($_GET['phone'])){
$phone = $_GET['phone'];
$con = new mysqli('localhost','root','','royal_chennai');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

$query = "DELETE FROM room WHERE phone=$phone";
$result = mysqli_query($con,$query);

if($result){
    header('location:table.php');
}
else{
    echo "Error while deleting record";
}

}
else{
    echo "Value not recieved";
}

?>