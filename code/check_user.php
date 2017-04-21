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

$email= $_POST['email'];
$pass= $_POST['password'];
$sql = "SELECT * FROM assignment4 where email= '$email' and password='$pass' ";
$result = $conn->query($sql);
$newresult=$result->fetch_assoc();
if($newresult===null){
	$newresult=array('error' => 'NO USER FOUND');
}
echo json_encode($newresult); 

$conn->close();

?>  

