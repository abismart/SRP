
<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<html lang="en"><head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="toast.css">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<title>Stock Inventory</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
sidebar .menu-collapse{
  cursor: pointer;
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
  input[type="text"],input[type="number"],input[type="date"],select {
  box-sizing: border-box;
  width: 100%;
  height: calc(3em + 2px);
  margin: 0 0 1em;
  padding: 0.5em;
  border: 2px solid #2f42bd;
  border-radius: 0.5em;
  background: #fff;
  resize: none;
  outline: none;
}
input[type="text"][required]:focus,input[type="date"][required]:focus,select:focus ,input[type="number"][required]:focus {
  border-color: #00bafa;
}
input[type="text"][required]:focus + label[placeholder]:before,input[type="date"][required]:focus + label[placeholder]:before ,input[type="number"][required]:focus + label[placeholder]:before {
  color: black;
  font-weight: bold;
}
input[type="text"][required]:focus + label[placeholder]:before,
input[type="text"][required]:valid + label[placeholder]:before,input[type="date"][required]:focus + label[placeholder]:before,input[type="date"][required]:valid + label[placeholder]:before,input[type="number"][required]:focus + label[placeholder]:before,input[type="number"][required]:valid + label[placeholder]:before {
  transition-duration: 0.2s;
  -webkit-transform: translate(0, -1.5em) scale(0.9, 0.9);
          transform: translate(0, -1.5em) scale(0.9, 0.9);
}
input[type="text"][required]:invalid + label[placeholder][alt]:before,input[type="date"][required]:invalid + label[placeholder][alt]:before,input[type="number"][required]:invalid + label[placeholder][alt]:before  {
  content: attr(alt);
}
input[type="text"][required] + label[placeholder] ,input[type="date"][required] + label[placeholder] ,input[type="number"][required] + label[placeholder] {
  display: block;
  pointer-events: none;
  line-height: 1.25em;
  margin-top: calc(-3em - 2px);
  margin-bottom: calc((3em - 1em) + 2px);
}
input[type="text"][required] + label[placeholder]:before,input[type="date"][required] + label[placeholder]:before ,input[type="number"][required] + label[placeholder]:before {
  content: attr(placeholder);
  display: inline-block;
  margin: 0 calc(1em + 2px);
  padding: 0 2px;
  color: #898989;
  white-space: nowrap;
  transition: 0.3s ease-in-out;
  background-image: linear-gradient(to bottom, #fff, #fff);
  background-size: 100% 5px;
  background-repeat: no-repeat;
  background-position: center;
}

/* Email setting */
input[type="email"] {
  box-sizing: border-box;
  width: 100%;
  height: calc(3em + 2px);
  margin: 0 0 1em;
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 0.5em;
  background: #fff;
  resize: none;
  outline: none;
}
input[type="email"][required]:focus {
  border-color: #00bafa;
}
input[type="email"][required]:focus + label[placeholder]:before {
  color: #00bafa;
}
input[type="email"][required]:focus + label[placeholder]:before,
input[type="email"][required]:valid + label[placeholder]:before {
  transition-duration: 0.2s;
  -webkit-transform: translate(0, -1.5em) scale(0.9, 0.9);
          transform: translate(0, -1.5em) scale(0.9, 0.9);
}
input[type="email"][required]:invalid + label[placeholder][alt]:before {
  content: attr(alt);
}
input[type="email"][required] + label[placeholder] {
  display: block;
  pointer-events: none;
  line-height: 1.25em;
  margin-top: calc(-3em - 2px);
  margin-bottom: calc((3em - 1em) + 2px);
}
input[type="email"][required] + label[placeholder]:before {
  content: attr(placeholder);
  display: inline-block;
  margin: 0 calc(1em + 2px);
  padding: 0 2px;
  color: #898989;
  white-space: nowrap;
  transition: 0.3s ease-in-out;
  background-image: linear-gradient(to bottom, #fff, #fff);
  background-size: 100% 5px;
  background-repeat: no-repeat;
  background-position: center;
}
input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
    text-align: center;
}
.frm{
   box-sizing:border-box;
  border-radius:20px;
  padding:20px;
   background-color:rgba(237, 239, 244, 0.49);
  margin: auto;
  width:60%;
}
form{
  display: flex;
  justify-content: center;
}
button{
background-image:  linear-gradient(to right, #060960, #162079, #233592, #2f4bac, #3a62c6, #3a62c6, #3a62c6, #3a62c6, #2f4bac, #233592, #162079, #060960);
width:25%;
}
  </style>

<style>

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
<?php
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
?>
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

<sidebar>
<div class="brand">
<a href="home.php" style="font-size:24px;font-weight:bold;text-transform:uppercase;"><i class="fa fa-circle" style="color:#34eb83;font-size:20px;margin:auto;"></i> <?php echo $_SESSION['uname']?></a>
</div>
<nav>
  <button style="font-size:18px;" class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#myContent" aria-expanded="false" aria-controls="collapseExample">
  <center><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></center>
</button>
<a href="addentry.php"><div  id="b1">
<div class="active" id="b">
  <button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#myContent" aria-expanded="false" aria-controls="collapseExample"><font color="white" size=4px">
 <i class="fa fa-plus"></i>
ADD ENTRY</font>
</button>
</div>
</a>
 <a href="edit.php"><div  id="b1">
<button  class="menu-collapse is-expanded collapsed"  type="button" data-toggle="collapse" data-target="#mainContent" aria-expanded="false" aria-controls="collapseExample">
 <font color="white" size="4px">
<i class="fa fa-edit"></i>
 EDIT</font>
</button>
</div></a>
<a href="search.php"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-search"></i>
 SEARCH</font>
</button>
</div>
</a>
<a href="issue.php"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-paper-plane"></i>
 ISSUE</font>
</button>
</div>
</a>

<a href="issuedlist.php"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-list"></i>
 ISSUED LIST</font>
</button>
</div>
</a>
<a href="transfer.php"><div  id="b1">
<div  id="b2">
<button  class="menu-collapse is-expanded collapsed" type="button" data-toggle="collapse" data-target="#fundNavigation" aria-expanded="false" aria-controls="collapseExample">
<font color="white" size="4px">
  <i class="fa fa-exchange"></i>
 TRANSFER</font>
</button>
</div>
</a>
<a href="surrender.php"><div  id="b1">
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
 <center>
  <div class="frm" style="">
    <h1>ADD ENTRY</h1>
<form class="form-row" name="addform" onsubmit="return rcheck()" method="post" action="addstock.php">
<div class="col-md-6">
<input  type="date" name="ad" id="addd" required>
<label placeholder="Date of Receipt"></label>
</div>

<div class="col-md-6">
<input  type="text" name="ades" id="adddes" required>
<label placeholder="Description of article"></label>
</div>

<div class="col-md-6">
<input required="" name="an" id="addn" type="number" onkeypress="myFunction()">
<label placeholder="Number of items received"></label>
</div>

<div class="col-md-6">
<input required="" name="ar" id="addr" type="number" onkeypress="myFunction()">
<label placeholder="Rate"></label>
</div>

<div class="col-md-6">
<input required="" name="ac" id="addc" type="number" readonly>
<label placeholder="Total Cost"></label>
</div>

<div class="col-md-6">
<input required="" name="at" id="addt" type="number" onkeypress="myFunction()">
<label placeholder="Tax percentage"></label>
</div>

<div class="col-md-6">
<input required="" name="aesr" id="addesr" type="number" onkeypress="myFunc()">
<label placeholder="ESR Number"></label>
</div>

<div class="col-md-6">
<input required="" name="as" id="adds" onkeypress="myFunc()" type="text">
<label placeholder="Supplier details"></label>
</div>

<div class="col-md-6">
<input required="" name="af" id="addf" onkeypress="myFunc()" type="text">
<label placeholder="Funding agency"></label>
</div>

<div class="col-md-6">
<input required="" name="asn" id="addsn" type="text" readonly>
<label id="addsnp" placeholder="Stock number"></label>
</div>

<!-- <div class="col-md-6">
<input required="" name="astate" id="addstate" type="text" onkeypress="myFunc()">
<label placeholder="State"></label>
</div>
 -->
<div class="col-md-6">
<select name="astate" id="addstate" onkeypress="myFunc()">
  <option value="active">Active</option>
  <option value="dead">Dead</option>
</select>
</div>

<div class="col-md-6">
<input required="" name="al" id="addl" type="text">
<label placeholder="Location"></label>
</div>

<div class="col-md-12">
<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> ADD</button>
</div>
</form>
</div>
</center>
<h1></h1>
<h1></h1>
<script type="text/javascript">
  $(document).ready(function(){
 var d = new Date();
var strDate = d.getFullYear() + "-" + (d.getMonth()+1)+ "-" +d.getDate() ;
document.getElementById("addd").value = strDate ;
});
 
</script>
<script type="text/javascript">
  
  document.getElementById("addc").addEventListener("focusin", myFunction);
  document.getElementById("addt").addEventListener("focusin", myFunction);

function myFunction() {
 var noi = document.getElementById("addn").value;
  var rate = document.getElementById("addr").value;
    $("#addc").val(noi*rate);
}
document.getElementById("addsn").addEventListener("focusin", myFunc);

function myFunc() {
 var sd = document.getElementById("adds").value;
  var fa = document.getElementById("addf").value;
    var esr = document.getElementById("addesr").value;
    var year = new Date().getFullYear();
    $("#addsn").val("DIST/"+fa+"/ESR-"+esr+"/"+year+"-"+(year+1));
    document.getElementById("addsnp").style.display="none";
}
</script>
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
    toastr["success"]("Stock Added Successfully!"," Added");
}
function myff(){
    toastr["error"]("Error in adding stock!, please try again","Error");
}
function rcheck() {
  if (document.getElementById('addd').value == 0 || document.getElementById('adddes').value == 0 || document.getElementById('addn').value == 0 || document.getElementById('addr').value == 0 || document.getElementById('addc').value == 0 || document.getElementById('addt').value == 0 || document.getElementById('adds').value == 0 || document.getElementById('addf').value == 0 || document.getElementById('addsn').value == 0 || document.getElementById('addesr').value == 0 || document.getElementById('addstate').value == 0 || document.getElementById('addl').value == 0 ) {
    toastr["error"]("Please fill all fields first!", "Error");
    return false;
  }
   else if(!(document.getElementById('se').value.match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$")))
  {
          toastr["error"]("Invaid email &emsp;&emsp;(Format:example@gmail.com)", "Error");
          return false;
  }

   else if( ! ((document.getElementById('sp').value ) == (document.getElementById('scp').value)) )
  {
          toastr["error"]("password and confirm password should be same", "Error");
          return false;
  }
  return true;
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
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    </body></html>
<?php
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
 ?>