<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{

include("DBConnection.php"); 
 if($_GET['ID'] != NULL)
 {
	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = " DELETE from approval  WHERE ID='" . $_GET['ID'] ."' ";
	if (mysqli_query($dbConnection, $query)) {
	header("location:approvals.php?success=msg");
	 //header("Location: ultrapro.php?var1=".$_GET['var1']."&var2=".$_GET['var2']."&var3=".$_GET['var3']);
	} 
	else {
			header("location:approvals.php?failure=msg");
	}
	exit();
}	
else{
	header("location:edit.php?failure=msg");
}

}
else{
header('location:l.php?loginf=msg');
 exit();
 }
?>
</body> 
</html>