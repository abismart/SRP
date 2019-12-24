<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{

include("DBConnection.php"); 
if(!($_SERVER['REQUEST_METHOD'] == 'POST'))
  {
  header('location:home.php');  
  } 
if (isset($_POST['transfer']))
{ 
 $noi=$_POST["noit"];
 $name=$_POST["nam"];	
 $slno = $_POST["idd"];
 $cl = $_POST["loc"];
 $nl = $_POST["nloc"];
 $doi = date("Y-m-d h:i:sa");
//echo " UPDATE issued SET ISSUED_FROM ='$cl',ISSUED_TO = '$nl' WHERE ID ='$slno' ";
 $dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
//echo $inUsername;
$query = " UPDATE issued SET ISSUED_FROM ='$cl' , ISSUED_TO = '$nl' WHERE ID ='$slno' ";
if (mysqli_query($dbConnection, $query)) {
echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	$date=date("Y-m-d");
 	$time=date("h:i:sa");
  	$approval="Transfered ".$noi." ".$name."s from ".$cl." to ".$nl.".";
 	$currentuser=$_SESSION['uname'];
 	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = "INSERT into approval(DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER) values('$date','$time','$approval','$currentuser')";
	if (mysqli_query($dbConnection, $query)) {
	echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	} else {
	echo "Error occurred: " . mysqli_error($dbConnection);
	}
header('location:transfer.php?success=msg');
exit();

} else {
echo "Error occurred: " . mysqli_error($dbConnection);
header('location:transfer.php?failure=msg');
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