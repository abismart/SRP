
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "autocomplete_text.php",
    });
});
</script>
		<style>
	
 	 .navbar-collapse{
 		max-height: 500px !important;
 	}
 	.navbar navbar-default{
		max-height: 600px !important;
	}

</style>
	</head>
	<body>
	


<nav class="navbar navbar-default " role="navigation">
    
    	    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            
            <ul class=" menu nav navbar-nav">
              <li style="border-left: 2px solid black; "><a href="adminprofile.php" ><b> Home </b></a></li>
            </ul>
		</div>
		<div style="padding-left:20px;">
		<span style="float: right; padding-right:20px;"><a href="admin_logout.php"><h4>Logout</h4></a></span> 
		</div>
</nav>

		
		
</div>

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
		
		<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            
            <ul class=" menu nav navbar-nav">
              <li style=""><a href="M_name.php" ><h3><b> Manufacture name  </b></h3></a>
			  <li><a href="Id.php" ><h3> ID </h3></a></li>
			  <li><a href="date.php" ><h3> Date </h3></a></li>
			  <li><a href="d1.php" ><h3> Date & Cost </h3></a></li>
			  <li><a href="cost_range.php" ><h3> Cost_range </h3></a></li>
			  <li><a href="location.php" ><h3> Location </h3></a></li>
			  <li><a href="MH_no.php" ><h3> MH_no </h3></a></li>
			  <li><a href="san_proceed.php" ><h3> San_proceed </h3></a></li>
            </ul>
		</div>
		<div class="auto-widget">
			<form method="POST" action="M_name.php">
				<p><input style="float: left; padding-left:20px"; type="text"  name="skill_input" id="skill_input" placeholder="M_name"/></p>
				<input type="submit" name="search" value="Search">
			</form>
		</div>
	</body>
	<style>
			table, th, td
{
	align:center;
	width:90%; 
	height:30px; 
	border-radius:1px;
	box-shadow:0px 0px 1px 1px #123456; 
	margin-top:10px;
	padding:20px;
	padding-left:20px;
	border:1px;
	margin-bottom:20px;
	}
	</style>
</html>
<?php
include_once('DBconnection.php');
if(isset($_POST['search'])){
	$q = $_POST['skill_input'];
	//$sql="SELECT Date FROM `stock`"; 

$result = mysqli_query($db,"SELECT * FROM stock WHERE M_name='$q'") 
or die("Cannot execute query."); 

//$numrow = mysqli_num_rows($result); 
if ($result->num_rows > 0) {
        echo "<table><tr><th>Id</th><th>Date</th><th>Description</th><th>Received</th><th>Rate</th><th>Cost</th><th>M_name</th><th>Invoice_number</th><th>San_proceed</th><th>MH_no</th><th>Location</th><th>Remark</th><th> EQSR page_no </th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Id"]."</td><td>".$row["Date"]."</td><td>".$row["Description"]."</td><td>".$row["Received"]." </td><td>".$row["Rate"]."</td><td>".$row["Cost"]."</td><td>".$row["M_name"]."</td><td>".$row["Invoice_number"]."</td><td>".$row["San_proceed"]."</td><td>".$row["MH_no"]."</td><td>".$row["Location"]."</td><td>".$row["Remark"]."</td><td>" .$row["EQSR_pgno"]. "</td></tr>";
        }
        echo "</table>";
    }
} 
 
?>