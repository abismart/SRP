<?php
session_start();
if(isset($_SESSION['username']))
   { header('location:home.php');
}else{
?>
<html lang="en"><head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="toast.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Stock Inventory</title>
<meta charset="UTF-8">

<style>

#home {
  background-color: #1c2363; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius:20px;
    border: 2px solid #fdfdfd;
}

#home:hover {
  background-color: #008CBA;
  color: white;
}


.headline{
    font-family: 'Segoe UI',Arial, sans-serif;
    box-sizing: border-box;
}
body{
    margin: 0;
    background:#fff;
background-image: linear-gradient(to right, #0b0d43, #1a205f, #27347d, #334a9c, #3e61bc, #3e61bc, #3e61bc, #3e61bc, #334a9c, #27347d, #1a205f, #0b0d43);
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

#container
{
  position:absolute;
  background:#fff;
  height:350px;
  width:300px;
  left:50%;
  top:40%;
  margin-left:-150px;
  
    -webkit-box-shadow: 20px 20px 20px 2px;
  -moz-box-shadow: 0px 30px 150px;
  
  border-radius:15px;
  -webkit-border-radius:15px;
  -moz-border-radius:15px;
}
#header
{
  background-image:linear-gradient(to right, #0b0d43, #1a205f, #27347d, #334a9c, #3e61bc, #3e61bc, #3e61bc, #3e61bc, #334a9c, #27347d, #1a205f, #0b0d43);
  color:#fff; 
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:300px;
  position:absolute;
  top:0;
  color:white;
  margin-top:-2px;
  
  border-radius: 15px 15px 0px 0px;
  -webkit-border-radius: 15px 15px 0px 0px;
  -moz-border-radius: 15px 15px 0px 0px;
}
#footer.incorrect
{
  background-image: linear-gradient(to right, #0b0d43, #1a205f, #27347d, #334a9c, #3e61bc, #3e61bc, #3e61bc, #3e61bc, #334a9c, #27347d, #1a205f, #0b0d43);
  color:#fff; 
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:300px;
  position:absolute;
  bottom:0;
  color:white;
  margin-bottom:-2px;
  
  border-radius: 0px 0px 15px 15px;
  -webkit-border-radius: 0px 0px 15px 15px;
  -moz-border-radius: 0px 0px 15px 15px;
}
#footer.correct
{
  background-color:#26c03f;
  font-family: 'Francois One', sans-serif;
  height:75px;
  width:300px;
  position:absolute;
  bottom:0;
  color:white;
  cursor:pointer;
  margin-bottom:-2px;
  
  border-radius: 0px 0px 15px 15px;
  -webkit-border-radius: 0px 0px 15px 15px;
  -moz-border-radius: 0px 0px 15px 15px;
}
#form
{
  height:100px;
  position:absolute;
  top:50%;
  margin-top:-75px;
  width:75%;
  left:50%;
  margin-left:-37.5%;
}
input
{
  width:215px;
  margin:0;
  border:0;
  border-left:1px solid;
  border-right:1px solid;
  outline:none;
  height:50px;
  font-size:20px;
  padding-left:10px;
}

input#uname
{
  border-top:1px solid;
  border-radius:15px 15px 0px 0px;
  -webkit-border-radius:15px 15px 0px 0px;
  -moz-border-radius:15px 15px 0px 0px;
}
input#passOne
{
  border-top:1px solid;

}
input#passTwo
{
  border-bottom:1px solid;
  border-top:1px solid;
  
  border-radius:0px 0px 15px 15px;
  -webkit-border-radius:0px 0px 15px 15px;
  -moz-border-radius:0px 0px 15px 15px;
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
  
 <table align="center" width="100%">
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
<center><a href="l.php" style="text-decoration:none;outline:none;"><button class="button button2" id="home" style="outline:none;"><i class="fa fa-home" style="size:20px;color:white;"></i> Home</button></a></center>
<div id="container">
<div id="header">
<center><h1>Change Password</h1></center>
</div>
<form name="fp" id="ff">
<div id="form">
<input type="text" placeholder="Enter email id" name="un" id="uname" required="">
<input type="password" placeholder="New Password" name="pd" id="passOne" required="">
<input type="password" placeholder="Confirm Password" id="passTwo" required="">
</div>
<div id="footer" class="incorrect">
<button id="btn" style="cursor:not-allowed;background:#8a2be200;color:white;border:none;width:300px;outline:none;" type="submit"><center><h1 id="footerText">Fields don't match</h1></center></button>
</div>
</form>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script id="rendered-js">
      $(document).ready(function () {
  var passOne = $("#passOne").val();
  var passTwo = $("#passTwo").val();

  $("#footerText").html("Fields don't match");

  var checkAndChange = function ()
  {
    if (passOne.length < 1) {
      if ($("#footer").hasClass("correct")) {
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
      } else {
        $("#footerText").html("They don't match");
      }
    } else
    if ($("#footer").hasClass("incorrect"))
    {
      if (passOne == passTwo) {
        $("#footer").removeClass("incorrect").addClass("correct");
        $("#footerText").html("Continue");
        document.getElementById("btn").style= "cursor:pointer;background:#8a2be200;border:none;width:300px;color:white;outline:none;";
      }
    } else

    {
      if (passOne != passTwo) {
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
        document.getElementById("btn").style= "cursor:not-allowed;background:#8a2be200;border:none;width:300px;color:white;outline:none;";
      }
    }
  };



  $("input").keyup(function () {
    var newPassOne = $("#passOne").val();
    var newPassTwo = $("#passTwo").val();

    passOne = newPassOne;
    passTwo = newPassTwo;

    checkAndChange();
  });
});
      //# sourceURL=pen.js
    </script>
<script type="text/javascript">
  
// function myFunction() {
// var uname = document.getElementById("uname").value;
// var p = document.getElementById("passOne").value;
// var cp = document.getElementById("passTwo").value;
// console.log(p);
// console.log(cp);
// console.log(uname);
// // Returns successful data submission message when the entered information is stored in database.
// var dataString = 'name1 =' + uname +'&password=' + p;
// console.log(dataString);
// // AJAX code to submit form.
// $.ajax({
// type: "POST",
// url: "changepassword.php",
// data: dataString,
// success: function(html) {
// window.alert(html);
// }
// });
// return false;
// }

</script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
                $('#ff').on('submit', function(e){
                    //Stop the form from submitting itself to the server.
                    e.preventDefault();
                    var email = $('#uname').val();
                    var password = $('#passOne').val();
                    $.ajax({
                        type: "POST",
                        url: 'changepassword.php',
                        data: {email: email,password: password},
                        success: function(data){
                          //  alert(data);
                          console.log(data);
                          // if(data == "change success")
                          // {
                          //   //header('location:l.php?psuccess=msg');              
                          // }
                           var result = $.trim(data);
                                                     console.log(result);
                          if(result==="change success"){
                          location.replace("l.php?psuccess=msg");
                          }
                          else if(result==="change failed")
                          {
                          location.replace("l.php?pfailure=msg");
                          }
                          else if(result==="failed")
                          {
                          location.replace("l.php?ufailure=msg");                            
                          }
                        }
                    });
                });
            });
</script>

<!-- $("#btn").on('click',function(){
   $.ajax({
            type: 'POST',
            url: 'changepassword.php',
            data: $('form').serialize(),
            success: function () {
              header('location:l.php?psuccess=msg');
            }
          });
  });
 -->
</body></html>
<?php
}
?>