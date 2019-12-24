<?php
session_start();
if(isset($_SESSION['username']))
{
  
?>
<html lang="en"><head>
<title>Stock Inventory</title>
<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="toast.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link rel="stylesheet" type="text/css" href="home.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
* {
  margin: 0;
}
.headline{
    font-family: 'Segoe UI',Arial, sans-serif;
    box-sizing: border-box;
}
    .active {
         background-color: #003b69;
      }
      a{
        text-decoration: none!important;
        color:white;
      }
      a:hover{color:lightblue;
      }
      #nof{
         width: 400px;
        padding: 10px 30px;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: 0 0 16px white;
        transition: all 200ms ease-out;
      }
      #nof:hover {
      box-shadow: 0 0 16px yellow;
      }

#noff{width: 400px;
        padding: 10px 30px;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: 0 0 16px white;
        transition: all 200ms ease-out;
      }
      #noff:hover {
      box-shadow: 0 0 16px yellow;
      }
thead:hover,tr:hover{
color: yellow;
}
.table-bordered{
  color:white;
  background: rgb(255, 255, 255) transparent;
}
body{
    margin: 0;
    background:#fff;
background-image: linear-gradient(to right, #0b0d43, #1a205f, #27347d, #334a9c, #3e61bc, #3e61bc, #3e61bc, #3e61bc, #334a9c, #27347d, #1a205f, #0b0d43);
}
#tab{
  overflow: scroll;
  overflow-y: hidden;
}
/* width */
#tab::-webkit-scrollbar {
  width: 14px;
}
/* Track */
#tab::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px blue; 
  border-radius: 10px;
}
 
/* Handle */
#tab::-webkit-scrollbar-thumb {
background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
  height: 10px;
  border-radius: 10px;
}
/* Handle on hover */
#tab::-webkit-scrollbar-thumb:hover {
background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
}
/* width */
body::-webkit-scrollbar {
  width: 14px;
}
/* Track */
body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px blue; 
  border-radius: 10px;
}
 
/* Handle */
body::-webkit-scrollbar-thumb {
background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
  height: 10px;
  border-radius: 10px;
}
/* Handle on hover */
body::-webkit-scrollbar-thumb:hover {
background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
}
.headline{
background-image: linear-gradient(to right, #0b0d43, #1a205f, #27347d, #334a9c, #3e61bc, #3e61bc, #3e61bc, #3e61bc, #334a9c, #27347d, #1a205f, #0b0d43);
  color:#fff; 
}

#o{
  display: none;
}
html {
  font-size: 18px;
}

form.example input[type=text],input[type=date],input[type=number]{
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button{
  outline: none;
  float: left;
  width: 20%;
  height: 46px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.exampl button{
  outline: none;
  float: left;
  width: 20%;
  height: 46px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}
#is{
  outline: none;
  width: 20%;
  height: 46px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border-left: none;
  width:120px;
  border-radius: 10px;
  border: 2px solid #337ab7;

  cursor:not-allowed;
  opacity:0.6;
}
#iss{
  outline: none;
  height: 46px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border-left: none;
  width:140px;
  border-radius: 10px;
  border: 2px solid #337ab7;
}
#cs,#ds{
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  outline: none;
  height: 92px;
  margin-top: -46px;
}
#ser,#skill_input,#skill_id,#skill_location,#d1,#d2,#c1,#c2{
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  outline: none;
}
#s{
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  outline: none;
}
form.example button:hover ,#is:hover,#iss:hover{
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

form.exampl button:hover {
  background: #0b7dda;
}

form.exampl::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>
<body translate="no">
  <!-- header -->
<div class="headline">
  <table align="center" width="100%" style="margin-top:-15px;">
    <tr>
      <td style="margin-right:0px;width:25%" align="center">
        <img style="width:120px;height:120px;" src="AU.png" class="image">
      </td>
      <td style="width:50%;"><h1 style="color:white;font-weight:400;font-size:2vw;" ><center>DEPARTMENT OF INFORMATION SCIENCE AND TECHNOLOGY</center></h1>
        <div ><p ><center style="font-size:1.8vw; color: white; ">Anna University, Chennai-600025</center></p></div>
        <div ><p ><center style="font-size:2vw; color: white; ">STOCK INVENTORY MANAGEMENT</center></p></div>
      </td>
      <td style="width:25%;" align="center"><img src="CEG.png" style="width:120px;height:120px;" class="image"></td>
    </tr>
  </table>
  </div>

<hr style="color:white;border: 1px dashed" >
  
<sidebar>
<div class="brand">
<a href="home.php" style="font-size:24px;font-weight:bold;text-transform:uppercase;"><i class="fa fa-circle" style="color:#34eb83;font-size:20px;margin:auto;"></i>  <?php echo $_SESSION['uname']?></a>
</div>
<nav>
  <button style="font-size:18px;" class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#myContent" aria-expanded="false" aria-controls="collapseExample">
  <center><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></center>
</button>
<a href="addentry.php" id="rem"><div  id="b1">
<div  id="b">
  <button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#myContent" aria-expanded="false" aria-controls="collapseExample"><font color="white" size=4px">
 <i class="fa fa-plus"></i>
ADD ENTRY</font>
</button>
</div>
</a>
 <a href="edit.php">
  <div class="active" >
<button  class="menu-collapse is-expanded collapsed"  type="button" data-toggle="collapse" data-target="#mainContent" aria-expanded="false" aria-controls="collapseExample">
 <font color="white" size="4px">
<div id="o"><i class="fa fa-eye"></i> VIEW STOCK</div>
<div id="no"><i class="fa fa-edit"></i> EDIT</div>
</font>
</button>
</div></a>
<a href="search.php"><div >
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-search"></i>
 SEARCH</font>
</button>
</div>
</a>
<a href="issue.php" id="rem"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-paper-plane"></i>
 ISSUE</font>
</button>
</div>
</a>

<a href="issuedlist.php"><div >
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-list"></i>
 ISSUED LIST</font>
</button>
</div>
</a>
<a href="transfer.php" id="rem"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-exchange"></i>
 TRANSFER</font>
</button>
</div>
</a>
<a href="surrender.php" id="rem"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-undo"></i>
 SURRENDER</font>
</button>
</div>
</a>
<div id="approve" style="display:none;">
 <a href="approvals.php"><div  id="b1">
<button  class="menu-collapse is-expanded collapsed"  type="button" data-toggle="collapse" data-target="#mainContent" aria-expanded="false" aria-controls="collapseExample">
 <font color="white" size="4px">
<i class="fa fa-edit"></i>
 APPROVALS</font>
</button>
</div>
</a>
</div>
</nav>
</sidebar>
<?php
 if ($_SESSION['username'] == "hod@gmail.com") {
    ?>
    <script>
$(document).ready(function(){
  document.getElementById("approve").style="display:block;";
});
</script>
    <?php
  }
  ?>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
include_once('DBconnection.php');
if(isset($_POST['isearch'])){
  $q = $_POST['skill_id'];
  //$sql="SELECT Date FROM `stock`"; 

$result = mysqli_query($db,"SELECT * FROM equipments WHERE STATE = 'active' AND NO_ITEMS_RECEIVED > 0 AND DESCRIPTION LIKE '".$q."%'   ORDER BY DESCRIPTION ASC ") 
or die("Cannot execute query."); 
$e=mysqli_num_rows($result);
//$numrow = mysqli_num_rows($result); 
if ($result->num_rows > 0) {
  echo "<center><h1 style='margin-left:25px;color:white'>Stock List <font style='color:white;font-size:x-large;'>(";echo $e; echo" stocks)</font></h1></center>
<form  class='example' method='post' action='edit.php' style='margin-left:200px;float:left;margin-top:-50px;max-width:300px;'>
  <input id='skill_id' type='text'  name='skill_id' placeholder='Stock Name' required=''>
  <button id='s' type='submit' name='isearch'><i class='fa fa-search'></i></button>
  </form>
  <div id='all' style='display: none;'> 
<a href='edit.php'><button id='iss' style='margin-left:200px;float:left;'' value='Refresh Page'>View All</button></a><br><br><br>
</div><div id='tab' style='margin-left:200px;color:white'><table id='t' class='table  table-bordered' style='max-width:50%;'>
    <thead>
      <tr>
        <th id='ed'>EDIT</th>
        <th id='dd'>DELETE</th>
        <th>SLNO</th>
        <th>DATE_OF_RECEIPT</th>
        <th>DESCRIPTION</th>
        <th>NO_ITEMS_RECEIVED</th>
        <th>RATE</th>
        <th>TOTAL_COST</th>
        <th>TAX_PERCENTAGE</th>
        <th>SUPPLIER_DETAILS</th>
        <th>FUNDING_AGENCY</th>
        <th>STOCK_NO</th>
        <th>STATE</th>
        <th>LOCATION</th>
      </tr>
    </thead>
    <tbody>
";$i=1;
?>
<?php
        while($row = $result->fetch_assoc()) {
      echo "<tr><td id='edd'><a style='text-decoration:none;' href='update.php?SLNO=".$row["SLNO"]."'><center><i  class='fa fa-edit'></i></center></a></td><td id='ddd'><a style='text-decoration:none;' href='delete.php?SLNO=".$row["SLNO"]."'><center><i  class='fa fa-trash'></i></center></a></td><td>" . $row["SLNO"]. " </td><td>" . $row["DATE_OF_RECEIPT"]. "</td><td> " . $row["DESCRIPTION"]. "</td><td>" . $row["NO_ITEMS_RECEIVED"]. "</td><td>" .$row["RATE"]. "</td><td>" .$row["TOTAL_COST"]. "</td><td>".$row["TAX_PERCENTAGE"]."</td><td>" .$row["SUPPLIER_DETAILS"]. "</td><td>" .$row["FUNDING_AGENCY"]. "</td><td>" .$row["STOCK_NO"]. "</td><td><div id='".$i."'>" .$row["STATE"]. "</div></td><td>" .$row["LOCATION"]. "</td></tr>" ;
        if( $row["STATE"] == "active"){
      ?>
        <script type="text/javascript">
          var i = <?php echo $i;?>;
      document.getElementById(i).style ="box-sizing:border-box;background: #1cd443;padding: 0.2em 0.5em;border-radius:10px; ";
</script>
        <?php
      }
        else
        {
          ?>
        <script type="text/javascript">
          var i = <?php echo $i;?>;
      document.getElementById(i).style ="box-sizing:border-box;background: red;padding: 0.2em 0.5em;border-radius:10px; ";
</script>
        <?php
        }
        $i = $i+1;
        if ($_SESSION['username'] == "office@gmail.com") {
    ?>
    <script>
$(document).ready(function(){
    $("#ed").remove();
    $("#dd").remove();
    $("#edd").remove();
    $("#ddd").remove();
    $("#rem").remove();
    $("#no").remove();
});
document.getElementById("o").style.display="block";
</script>
    <?php
  }
  
        }
    echo "</tbody></table></div>";
    ?>
<script type="text/javascript">
  $(function() {
    document.getElementById("all").style = "display:block";
 });
</script>
    <?php
    }

    else{
       ?>
<center><h1 style='margin-left:25px;color:white'>Stock List <font style='color:white;font-size:x-large;'>(0 stocks)</font></h1></center>
<form  class='example' method='post' action='edit.php' style='margin-left:200px;float:left;margin-top:-50px;max-width:300px;'>
  <input id='skill_id' type='text'  name='skill_id' placeholder='Stock Name' required=''>
  <button id='s' type='submit' name='isearch'><i class='fa fa-search'></i></button>
  </form>
  <div id='all' style='display: none;'> 
<a href='edit.php'><button id='iss' style='margin-left:200px;float:left;'' value='Refresh Page'>View All</button></a><br><br><br>
</div>
       <br>
       
<script type="text/javascript">
  $(function() {
    document.getElementById("all").style = "display:block";
 });
</script>
    <center><div id="noff"><h1 ><font color="white">No matching records found </font>
    </h1></div></center>

<?php

  }
  ?>
  <script type="text/javascript">
  document.getElementById("skill_id").value="<?php echo $_POST['skill_id'];?>";
</script>
  <?php
}else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stockinventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SLNO,DATE_OF_RECEIPT,DESCRIPTION,NO_ITEMS_RECEIVED,RATE,TOTAL_COST,TAX_PERCENTAGE,SUPPLIER_DETAILS,FUNDING_AGENCY,STOCK_NO,STATE,LOCATION FROM equipments";
$result = mysqli_query($conn, $sql);
$r=mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
  echo "<center><h1 style='margin-left:25px;color:white'>Stock List <font style='color:white;font-size:x-large;'>(";echo $r; echo" stocks)</font></h1></center>
<form  class='example' method='post' action='edit.php' style='margin-left:200px;float:left;margin-top:-50px;max-width:300px;'>
  <input id='skill_id' type='text'  name='skill_id' placeholder='Stock Name' required=''>
  <button id='s' type='submit' name='isearch'><i class='fa fa-search'></i></button>
  </form>
  <div id='all' style='display: none;'> 
<a href='edit.php'><button id='iss' style='margin-left:200px;float:left;'' value='Refresh Page'>View All</button></a><br><br><br>
</div>
<div id='tab' style='margin-left:200px;color:white'><table id='t' class='table  table-bordered' style='max-width:50%;'>
    <thead>
      <tr>
        <th id='ed'>EDIT</th>
        <th id='dd'>DELETE</th>
        <th>SLNO</th>
        <th>DATE_OF_RECEIPT</th>
        <th>DESCRIPTION</th>
        <th>NO_ITEMS_RECEIVED</th>
        <th>RATE</th>
        <th>TOTAL_COST</th>
        <th>TAX_PERCENTAGE</th>
        <th>SUPPLIER_DETAILS</th>
        <th>FUNDING_AGENCY</th>
        <th>STOCK_NO</th>
        <th>STATE</th>
        <th>LOCATION</th>
      </tr>
    </thead>
    <tbody>
";
 $i=1;
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td id='edd'><a style='text-decoration:none;' href='update.php?SLNO=".$row["SLNO"]."'><center><i  class='fa fa-edit'></i></center></a></td><td id='ddd'><a style='text-decoration:none;' href='delete.php?SLNO=".$row["SLNO"]."'><center><i  class='fa fa-trash'></i></center></a></td><td>" . $row["SLNO"]. " </td><td>" . $row["DATE_OF_RECEIPT"]. "</td><td> " . $row["DESCRIPTION"]. "</td><td>" . $row["NO_ITEMS_RECEIVED"]. "</td><td>" .$row["RATE"]. "</td><td>" .$row["TOTAL_COST"]. "</td><td>".$row["TAX_PERCENTAGE"]."</td><td>" .$row["SUPPLIER_DETAILS"]. "</td><td>" .$row["FUNDING_AGENCY"]. "</td><td>" .$row["STOCK_NO"]. "</td><td><div id='".$i."'>" .$row["STATE"]. "</div></td><td>" .$row["LOCATION"]. "</td></tr>" ;
        if( $row["STATE"] == "active"){
      ?>
        <script type="text/javascript">
          var i = <?php echo $i;?>;
      document.getElementById(i).style ="box-sizing:border-box;background: #1cd443;padding: 0.2em 0.5em;border-radius:10px; ";
</script>
        <?php
      }
        else
        {
          ?>
        <script type="text/javascript">
          var i = <?php echo $i;?>;
      document.getElementById(i).style ="box-sizing:border-box;background: red;padding: 0.2em 0.5em;border-radius:10px; ";
</script>
        <?php
        }
        $i = $i+1;
        if ($_SESSION['username'] == "office@gmail.com") {
    ?>
    <script>
$(document).ready(function(){
    $("#ed").remove();
    $("#dd").remove();
    $("#edd").remove();
    $("#ddd").remove();
    $("#rem").remove();
    $("#no").remove();
});
document.getElementById("o").style.display="block";
</script>
    <?php
  }
  
    }
    echo "</tbody></table></div>";

} else {
    ?>
    <center><div id="nof"><h1 ><font color="white">No stocks available </font>
   <font style="font-weight: bold;font-size:30px;color:white;"><i  class='fa fa-hand-o-right'></i> <a href="addentry.php">ADD STOCK </a></font> 
   </h1></div></center>
    <?php
}

mysqli_close($conn);
}
if( @$_GET["success"] == "msg"){
?>
<script type="text/javascript">
  $(document).ready(function() {
  myfs();
});
  </script>
  <?php
}
elseif (@$_GET["failure"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  myff();
});
  </script>
  <?php  
}
elseif (@$_GET["stock"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  myfss();
});
  </script>
  <?php  
}

?>
  
<script id="rendered-js">
(function (define) {
  define(['jquery'], function ($) {
    return function () {
      var $container;
      var listener;
      var toastId = 0;
      var toastType = {
        error: 'error',
        info: 'info',
        success: 'success',
        warning: 'warning',
        classic: 'classic' };


      var toastr = {
        clear: clear,
        remove: remove,
        error: error,
        getContainer: getContainer,
        info: info,
        options: {},
        subscribe: subscribe,
        success: success,
        version: '2.1.2',
        warning: warning,
        classic: classic };


      var previousToast;

      return toastr;

      ////////////////

      function error(message, title, optionsOverride) {
        return notify({
          type: toastType.error,
          iconClass: getOptions().iconClasses.error,
          message: message,
          optionsOverride: optionsOverride,
          title: title });

      }

      function getContainer(options, create) {
        if (!options) {options = getOptions();}
        $container = $('#' + options.containerId);
        if ($container.length) {
          return $container;
        }
        if (create) {
          $container = createContainer(options);
        }
        return $container;
      }

      function info(message, title, optionsOverride) {
        return notify({
          type: toastType.info,
          iconClass: getOptions().iconClasses.info,
          message: message,
          optionsOverride: optionsOverride,
          title: title });

      }
      function classic(message, title, optionsOverride) {
        return notify({
          type: toastType.classic,
          iconClass: getOptions().iconClasses.classic,
          message: message,
          optionsOverride: optionsOverride,
          title: title });

      }

      function subscribe(callback) {
        listener = callback;
      }

      function success(message, title, optionsOverride) {
        return notify({
          type: toastType.success,
          iconClass: getOptions().iconClasses.success,
          message: message,
          optionsOverride: optionsOverride,
          title: title });

      }

      function warning(message, title, optionsOverride) {
        return notify({
          type: toastType.warning,
          iconClass: getOptions().iconClasses.warning,
          message: message,
          optionsOverride: optionsOverride,
          title: title });

      }

      function clear($toastElement, clearOptions) {
        var options = getOptions();
        if (!$container) {getContainer(options);}
        if (!clearToast($toastElement, options, clearOptions)) {
          clearContainer(options);
        }
      }

      function remove($toastElement) {
        var options = getOptions();
        if (!$container) {getContainer(options);}
        if ($toastElement && $(':focus', $toastElement).length === 0) {
          removeToast($toastElement);
          return;
        }
        if ($container.children().length) {
          $container.remove();
        }
      }

      // internal functions

      function clearContainer(options) {
        var toastsToClear = $container.children();
        for (var i = toastsToClear.length - 1; i >= 0; i--) {
          clearToast($(toastsToClear[i]), options);
        }
      }

      function clearToast($toastElement, options, clearOptions) {
        var force = clearOptions && clearOptions.force ? clearOptions.force : false;
        if ($toastElement && (force || $(':focus', $toastElement).length === 0)) {
          $toastElement[options.hideMethod]({
            duration: options.hideDuration,
            easing: options.hideEasing,
            complete: function () {removeToast($toastElement);} });

          return true;
        }
        return false;
      }

      function createContainer(options) {
        $container = $('<div/>').
        attr('id', options.containerId).
        addClass(options.positionClass).
        attr('aria-live', 'polite').
        attr('role', 'alert');

        $container.appendTo($(options.target));
        return $container;
      }

      function getDefaults() {
        return {
          tapToDismiss: true,
          toastClass: 'toast',
          containerId: 'toast-container',
          debug: false,

          showMethod: 'fadeIn', //fadeIn, slideDown, and show are built into jQuery
          showDuration: 600,
          showEasing: 'swing', //swing and linear are built into jQuery
          onShown: undefined,
          hideMethod: 'fadeOut',
          hideDuration: 1600,
          hideEasing: 'swing',
          onHidden: undefined,
          closeMethod: false,
          closeDuration: false,
          closeEasing: false,

          extendedTimeOut: 1600,
          iconClasses: {
            error: 'toast-error',
            info: 'toast-info',
            success: 'toast-success',
            warning: 'toast-warning',
            classic: 'toast-classic' },

          iconClass: 'toast-info',
          positionClass: 'toast-top-right',
          timeOut: 5000, // Set timeOut and extendedTimeOut to 0 to make it sticky
          titleClass: 'toast-title',
          messageClass: 'toast-message',
          escapeHtml: false,
          target: 'body',
          closeHtml: '<button type="button">&times;</button>',
          newestOnTop: true,
          preventDuplicates: false,
          progressBar: false };

      }

      function publish(args) {
        if (!listener) {return;}
        listener(args);
      }

      function notify(map) {
        var options = getOptions();
        var iconClass = map.iconClass || options.iconClass;

        if (typeof map.optionsOverride !== 'undefined') {
          options = $.extend(options, map.optionsOverride);
          iconClass = map.optionsOverride.iconClass || iconClass;
        }

        if (shouldExit(options, map)) {return;}

        toastId++;

        $container = getContainer(options, true);

        var intervalId = null;
        var $toastElement = $('<div/>');
        var $titleElement = $('<div/>');
        var $messageElement = $('<div/>');
        var $progressElement = $('<div/>');
        var $closeElement = $(options.closeHtml);
        var progressBar = {
          intervalId: null,
          hideEta: null,
          maxHideTime: null };

        var response = {
          toastId: toastId,
          state: 'visible',
          startTime: new Date(),
          options: options,
          map: map };


        personalizeToast();

        displayToast();

        handleEvents();

        publish(response);

        if (options.debug && console) {
          console.log(response);
        }

        return $toastElement;

        function escapeHtml(source) {
          if (source == null)
          source = "";

          return new String(source).
          replace(/&/g, '&amp;').
          replace(/"/g, '&quot;').
          replace(/'/g, '&#39;').
          replace(/</g, '&lt;').
          replace(/>/g, '&gt;');
        }

        function personalizeToast() {
          setIcon();
          setTitle();
          setMessage();
          setCloseButton();
          setProgressBar();
          setSequence();
        }

        function handleEvents() {
          $toastElement.hover(stickAround, delayedHideToast);
          if (!options.onclick && options.tapToDismiss) {
            $toastElement.click(hideToast);
          }

          if (options.closeButton && $closeElement) {
            $closeElement.click(function (event) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (event.cancelBubble !== undefined && event.cancelBubble !== true) {
                event.cancelBubble = true;
              }
              hideToast(true);
            });
          }

          if (options.onclick) {
            $toastElement.click(function (event) {
              options.onclick(event);
              hideToast();
            });
          }
        }

        function displayToast() {
          $toastElement.hide();

          $toastElement[options.showMethod](
          { duration: options.showDuration, easing: options.showEasing, complete: options.onShown });


          if (options.timeOut > 0) {
            intervalId = setTimeout(hideToast, options.timeOut);
            progressBar.maxHideTime = parseFloat(options.timeOut);
            progressBar.hideEta = new Date().getTime() + progressBar.maxHideTime;
            if (options.progressBar) {
              progressBar.intervalId = setInterval(updateProgress, 10);
            }
          }
        }

        function setIcon() {
          if (map.iconClass) {
            $toastElement.addClass(options.toastClass).addClass(iconClass);
          }
        }

        function setSequence() {
          if (options.newestOnTop) {
            $container.prepend($toastElement);
          } else {
            $container.append($toastElement);
          }
        }

        function setTitle() {
          if (map.title) {
            $titleElement.append(!options.escapeHtml ? map.title : escapeHtml(map.title)).addClass(options.titleClass);
            $toastElement.append($titleElement);
          }
        }

        function setMessage() {
          if (map.message) {
            $messageElement.append(!options.escapeHtml ? map.message : escapeHtml(map.message)).addClass(options.messageClass);
            $toastElement.append($messageElement);
          }
        }

        function setCloseButton() {
          if (options.closeButton) {
            $closeElement.addClass('toast-close-button').attr('role', 'button');
            $toastElement.prepend($closeElement);
          }
        }

        function setProgressBar() {
          if (options.progressBar) {
            $progressElement.addClass('toast-progress');
            $toastElement.prepend($progressElement);
          }
        }

        function shouldExit(options, map) {
          if (options.preventDuplicates) {
            if (map.message === previousToast) {
              return true;
            } else {
              previousToast = map.message;
            }
          }
          return false;
        }

        function hideToast(override) {
          var method = override && options.closeMethod !== false ? options.closeMethod : options.hideMethod;
          var duration = override && options.closeDuration !== false ?
          options.closeDuration : options.hideDuration;
          var easing = override && options.closeEasing !== false ? options.closeEasing : options.hideEasing;
          if ($(':focus', $toastElement).length && !override) {
            return;
          }
          clearTimeout(progressBar.intervalId);
          return $toastElement[method]({
            duration: duration,
            easing: easing,
            complete: function () {
              removeToast($toastElement);
              if (options.onHidden && response.state !== 'hidden') {
                options.onHidden();
              }
              response.state = 'hidden';
              response.endTime = new Date();
              publish(response);
            } });

        }

        function delayedHideToast() {
          if (options.timeOut > 0 || options.extendedTimeOut > 0) {
            intervalId = setTimeout(hideToast, options.extendedTimeOut);
            progressBar.maxHideTime = parseFloat(options.extendedTimeOut);
            progressBar.hideEta = new Date().getTime() + progressBar.maxHideTime;
          }
        }

        function stickAround() {
          clearTimeout(intervalId);
          progressBar.hideEta = 0;
          $toastElement.stop(true, true)[options.showMethod](
          { duration: options.showDuration, easing: options.showEasing });

        }

        function updateProgress() {
          var percentage = (progressBar.hideEta - new Date().getTime()) / progressBar.maxHideTime * 100;
          $progressElement.width(percentage + '%');
        }
      }

      function getOptions() {
        return $.extend({}, getDefaults(), toastr.options);
      }

      function removeToast($toastElement) {
        if (!$container) {$container = getContainer();}
        if ($toastElement.is(':visible')) {
          return;
        }
        $toastElement.remove();
        $toastElement = null;
        if ($container.children().length === 0) {
          $container.remove();
          previousToast = undefined;
        }
      }

    }();
  });
})(typeof define === 'function' && define.amd ? define : function (deps, factory) {
  if (typeof module !== 'undefined' && module.exports) {//Node
    module.exports = factory(require('jquery'));
  } else {
    window.toastr = factory(window.jQuery);
  }
});
function myfs(){
    toastr["success"]("Stock Deleted Successfully!");
}
function myfss(){
    toastr["success"]("Stock Added Successfully!");
}
function myff(){
    toastr["error"]("Error in Deleting stock!, please try again");
}
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "10000",
  "hideDuration": "10000",
  "timeOut": "10000",
  "extendedTimeOut": "10000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut" };
          //# sourceURL=pen.js
        </script>

</body></html>
<?php
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
 ?>