<?php
session_start();
if(isset($_SESSION['username']))
{
$inUsername = $_SESSION['username'];

$lastlogin = date("Y-m-d h:i:sa");
//echo $lastlogin;
// <?php
/* Change database details according to your database */
$dbConnection = mysqli_connect('localhost', 'root', '', 'stockinventory');
//echo $inUsername;
$query = " UPDATE users SET lastlogin='$lastlogin' WHERE EMAIL='$inUsername' ";
if (mysqli_query($dbConnection, $query)) {
//echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " row";
} else {
//echo "Error occurred: " . mysqli_error($dbConnection);
} 
session_unset();
session_destroy();
header('Location:l.php?logoutf=msg');
exit();
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
?>