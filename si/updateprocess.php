<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{

include("DBConnection.php"); 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $SLNO = $_POST['asl'];
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

	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = " UPDATE equipments SET  DATE_OF_RECEIPT='$dateofreceipt',DESCRIPTION='$description', NO_ITEMS_RECEIVED='$noi', RATE='$rate' ,TOTAL_COST='$tcost',TAX_PERCENTAGE='$tax',SUPPLIER_DETAILS='$supplier',FUNDING_AGENCY='$fundingagency',STOCK_NO='$stocknum',STATE='$state',LOCATION='$location'  WHERE SLNO = '$SLNO' ";
	if (mysqli_query($dbConnection, $query)) {
	echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	$date=date("Y-m-d");
 	$time=date("h:i:sa");
 	$approval="Updated stock ".$description." ,serial no:".$SLNO." .";
 	$currentuser=$_SESSION['uname'];
 	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = "INSERT into approval(DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER) values('$date','$time','$approval','$currentuser')";
	if (mysqli_query($dbConnection, $query)) {
	echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
	} else {
	echo "Error occurred: " . mysqli_error($dbConnection);
	}
	header("location:update.php?success=msg&SLNO=".$_POST['asl']);
	 //header("Location: ultrapro.php?var1=".$_GET['var1']."&var2=".$_GET['var2']."&var3=".$_GET['var3']);

	} else {
	echo "Error occurred: " . mysqli_error($dbConnection);
	}
	exit();
}
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
?>
</body> 
</html>