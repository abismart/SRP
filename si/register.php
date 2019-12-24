<html>
<body>
<?php
include("DBConnection.php"); 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inStaffid = $_POST["staffid"];
 $inEmail = $_POST["mailid"];
 $inUsername = $_POST["uname"];
 $inPassword = $_POST["password"];
 
 $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO users(STAFFID, EMAIL, USERNAME, PASSWORD) VALUES(?, ?, ?, ?)");
 $stmt->bind_param("ssss", $inStaffid, $inEmail, $inUsername, $encryptPassword); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
$query = " UPDATE users SET lastlogin='This is the first time.' WHERE EMAIL='$inEmail' ";
if (mysqli_query($dbConnection, $query)) {
echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
} else {
echo "Error occurred: " . mysqli_error($dbConnection);
}
header('location:l.php?success=msg');
exit();
 }
 else
 {
 header('location:l.php?failure=msg');
 exit();
 }
}
?>
</body> 
</html>