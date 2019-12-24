<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
include("DBConnection.php"); 
if (isset($_POST['surrender']))
{ 
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stockinventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 $id = $_POST["id"];
$sql = "SELECT * FROM issued WHERE ID = '".$id."' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
	{
$row = mysqli_fetch_assoc($result);
$slno = $row["SLNO"];
$name=$row["NAME"];
$cl=$row["ISSUED_FROM"];
$noi = $row["NO_ITEMS_ISSUED"];
	$query = " UPDATE equipments SET NO_ITEMS_RECEIVED=NO_ITEMS_RECEIVED + '$noi' WHERE SLNO
='$slno' ";
if (mysqli_query($conn, $query)) {
//echo "updated";
	}
$q = "DELETE  FROM issued WHERE ID = $id";
if (mysqli_query($conn, $q)) {
//echo "deleted";
	}
	$date=date("Y-m-d");
 	$time=date("h:i:sa");
  	$approval="Surrendered ".$noi." ".$name."s from ".$cl.".";
 	$currentuser=$_SESSION['uname'];
 	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = "INSERT into approval(DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER) values('$date','$time','$approval','$currentuser')";
	if (mysqli_query($dbConnection, $query)) {
	echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	} else {
	echo "Error occurred: " . mysqli_error($dbConnection);
	}
header('location:surrender.php?success=msg');
exit();
	}
	else{
		header('location:surrender.php?failure=msg');
 exit();

	}
}
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
?>
</body> 
</html>