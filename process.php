<?php
// create a variable
$conn = new mysqli("localhost", "root", "", "RestaurantDb");
if(!$conn)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Name=$_POST['name'];
$Email=$_POST['email'];
$msg=$_POST['text_a'];
//Execute the query
$sql = "INSERT INTO Feedback (Name, Email, Message)
VALUES ('$Name', '$Email', '$msg')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}                 
 // Close connection
mysqli_close($conn);
?>
