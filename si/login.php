
<!DOCTYPE HTML>
<html>
<body>
<?php 
include_once("DBConnection.php"); 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{  
$inUsername = $_POST["username"]; 
$inPassword = $_POST["password"]; 
$stmt= $db->prepare("SELECT EMAIL,PASSWORD,USERNAME,lastlogin FROM users WHERE EMAIL = ?"); 
$stmt->bind_param("s", $inUsername); 
$stmt->execute();
$stmt->bind_result($UsernameDB, $PasswordDB,$user,$lastlogin); 
if ($stmt->fetch() && password_verify($inPassword, $PasswordDB)) 
{
$_SESSION['username']=$inUsername; 
$_SESSION['uname']=$user;
$_SESSION['lastlogin'] =$lastlogin;
header("location: home.php"); 
}
else
{
header('location:l.php?lfailure=msg');
} 
} 
?>
</body> 
</html>