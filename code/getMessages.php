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


$sql = "SELECT * FROM assignment5_messages ";
$result = $conn->query($sql);
$newresult=[];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($newresult, $row);
    }
} else {
    $newresult= array("error"=>"no messages");
}
$conn->close();
echo json_encode($newresult); 

$conn->close();

?>  

