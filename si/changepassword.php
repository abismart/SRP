
<?php
include_once("DBConnection.php"); 
// Fetching Values From URL
//$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
//$db = mysql_select_db("stockinventory", $connection); // Selecting Database
if (isset($_POST['email'])) {
$name = $_POST['email'];
$password2 = $_POST['password'];
$stmt= $db->prepare("SELECT EMAIL FROM users WHERE EMAIL = ?"); 
$stmt->bind_param("s", $name); 
$stmt->execute();
$stmt->bind_result($Username); 
if ($stmt->fetch()) 
{
	 $encryptPassword = password_hash($password2, PASSWORD_DEFAULT);
$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
//echo $inUsername;
$query = " UPDATE users SET PASSWORD='$encryptPassword' WHERE EMAIL='$name' ";
if (mysqli_query($dbConnection, $query)) {
//echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	echo "change success";
 //header('location:l.php?psuccess=msg');
} else {
//echo "Error occurred: " . mysqli_error($dbConnection);
	echo "change failed";
	//header('location:l.php?pfailure=msg');
} 

}
else
{
echo "failed";
//header('location:l.php?ufailure=msg');
}

// $query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')"); //Insert Query
// echo "Form Submitted succesfully";
}
else{
	header('location:l.php');
}
//mysql_close($connection); // Connection Closed
?>
