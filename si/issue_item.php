<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
if(!($_SERVER['REQUEST_METHOD'] == 'POST'))
  {
  header('location:home.php');  
  }
include("DBConnection.php"); 
 
if (isset($_POST['issue']))
{ 
 $slno = $_POST["slno"];
 $name = $_POST["sname"];
 $from = $_POST["l"];
 $to = $_POST["nl"];
 $noi = $_POST["noi"];

 $doi = date("Y-m-d h:i:sa");

 $stmt = $db->prepare("INSERT INTO issued(SLNO,NAME,NO_ITEMS_ISSUED,ISSUED_FROM,ISSUED_TO,DATE_OF_ISSUE) VALUES(?,?,?,?,?,?)");
 $stmt->bind_param("ssssss",$slno,$name,$noi,$from,$to,$doi); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 $dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
//echo $inUsername;
$query = " UPDATE equipments SET NO_ITEMS_RECEIVED=NO_ITEMS_RECEIVED - '$noi' WHERE SLNO
='$slno' ";
if (mysqli_query($dbConnection, $query)) {
echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
  $date=date("Y-m-d");
  $time=date("h:i:sa");
  $approval="Issued ".$noi." ".$name."s to ".$to.".";
  $currentuser=$_SESSION['uname'];
  $dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
  $query = "INSERT into approval(DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER) values('$date','$time','$approval','$currentuser')";
  if (mysqli_query($dbConnection, $query)) {
  echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
  } else {
  echo "Error occurred: " . mysqli_error($dbConnection);
  }
header('location:issue.php?success=msg');
exit();

} else {
echo "Error occurred: " . mysqli_error($dbConnection);
 header('location:issue.php?failure=msg');
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