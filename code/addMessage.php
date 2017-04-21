<?php 
$username="ep85";
$password="p4Ywq0KjV";
$dbname="ep85";
$servername="sql.njit.edu";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$user= $_POST['name'];
$message=$_POST['message'];
$time=$_POST['timestamp'];
$sql = "INSERT INTO assignment5_messages (name, message, time_stamp) VALUES ('$user','$message','$time')";
$result = $conn->query($sql);

echo json_encode(array('success' => 'added')); 

$conn->close();

?>  