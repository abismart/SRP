<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{

include("DBConnection.php"); 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $dateofreceipt = $_POST["ad"];
 $description = $_POST["ades"];
 $noi = $_POST["an"];
 $rate = $_POST["ar"];
 $tcost = $_POST["ac"];
 $tax = $_POST["at"];
 $supplier = $_POST["as"];
 $fundingagency = $_POST["af"];
 $stocknum = $_POST["asn"];
 $state = $_POST["astate"];
 $location = $_POST["al"];

 $stmt = $db->prepare("INSERT INTO equipments(DATE_OF_RECEIPT,DESCRIPTION,NO_ITEMS_RECEIVED,RATE,TOTAL_COST,TAX_PERCENTAGE,SUPPLIER_DETAILS,FUNDING_AGENCY,STOCK_NO,STATE,LOCATION) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
 $stmt->bind_param("sssssssssss",$dateofreceipt,$description,$noi,$rate,$tcost,$tax,$supplier,$fundingagency,$stocknum,$state,$location); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 	$date=date("Y-m-d");
 	$time=date("h:i:sa");
 	$approval="Added ".$noi." ".$description."s.";
 	$currentuser=$_SESSION['uname'];
 	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
$query = "INSERT into approval(DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER) values('$date','$time','$approval','$currentuser')";
if (mysqli_query($dbConnection, $query)) {
echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
} else {
echo "Error occurred: " . mysqli_error($dbConnection);
}
header('location:edit.php?stock=msg');
exit();
 }
 else
 {
 header('location:addentry.php?failure=msg');
 exit();
 }
}
else{
	header('location:home.php');
}
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
?>
</body> 
</html>