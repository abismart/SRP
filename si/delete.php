<html>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{

include("DBConnection.php"); 
 if($_GET['SLNO'] != NULL)
 {
	$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
	$query = " DELETE from equipments  WHERE SLNO='" . $_GET['SLNO'] ."' ";
	if (mysqli_query($dbConnection, $query)) {
	header("location:edit.php?success=msg");
	 //header("Location: ultrapro.php?var1=".$_GET['var1']."&var2=".$_GET['var2']."&var3=".$_GET['var3']);
	} 
	else {
			header("location:edit.php?failure=msg");
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