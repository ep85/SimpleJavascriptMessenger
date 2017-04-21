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

$user= $_POST['ID'];
$classes=[];
$sql = "SELECT * FROM assignment4_grades, assignment4_courses where assignment4_grades.userID= '$user' and  assignment4_grades.courseID = assignment4_courses.id ";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    array_push($classes,$row);
 }
if($classes===null){
	$classes=array('error' => 'NO USER FOUND');
}
echo json_encode($classes); 

$conn->close();

?>  

