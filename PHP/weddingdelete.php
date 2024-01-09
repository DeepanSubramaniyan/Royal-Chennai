<?php
if (isset($_GET['fullname'])){
$id = $_GET['fullname'];
$con = new mysqli('localhost','root','','royal_chennai');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

$query = "DELETE FROM wedding_and_meeting WHERE fullname=$id";
$result = mysqli_query($con,$query);

if($result){
    header('location:weddingtable.php');
}
else{
    echo "Error while deleting record";
}

}
else{
    echo "Value not recieved";
}

?>