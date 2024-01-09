<style>
.dbresult,.dbresult td, .dbresult th{
    border:1px solid black;
    border-collapse:collapse;
    padding: 10px;
}
.dbresult{
    width:100%;
    margin:auto;
    
}

</style> 

<?php

$con = new mysqli('localhost','root','','royal_chennai');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }
//fetch data from table and display in web

$query = "SELECT username,email,phone,address_details,checking_date,checkout_date,room_type FROM room";

$result = mysqli_query($con,$query);
$numrows = mysqli_num_rows($result);

if ($numrows > 0){
   //filter row by row
   echo'<h2 align=center>Data base Report</h2>';
   echo'<h2 align=center><u>Room Booking</u></h2>';
echo '<table class="dbresult">';
   echo '<tr>';
   

   echo '<th>NAME</th>';
   echo '<th>EMAILID</th>';
   echo '<th>PHONE NUMBER</th>';
   echo '<th>ADDRESS</th>';
   echo '<th>CHECKING DATE</th>';
   echo '<th>CHECKOUT DATE</th>';
   echo '<th>ROOM TYPE</th>';
   echo '<th>Delete</th>';
   echo '<th>Update</th>';
   echo '</tr>';
   
while($row = mysqli_fetch_assoc($result)){
    $id = $row['phone'];
echo '<tr>';
   
    echo '<td>'.$row['username'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo '<td>'.$row['address_details'].'</td>';
    echo '<td>'.$row['checking_date'].'</td>';
    echo '<td>'.$row['checkout_date'].'</td>';
    echo '<td>'.$row['room_type'].'</td>';
    echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>';
    echo '<td><a href="update.php?id='.$id.'">Edit</a></td>';
    echo '</tr>';

   }
echo '<tr><th colspan="14"><a href="Room.php">Back to Form</a></th></tr>';
echo '</table>';
}
else{
   echo "Record not found" ;
}


















?>