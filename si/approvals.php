<?php
session_start();
if(isset($_SESSION['username']))
{
   if (!($_SESSION['username'] == "hod@gmail.com")) {
header('location:home.php');
}
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
  @import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

table {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}

@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


.container {
  max-width: 1100px;
  height: 500px;
  margin-left: 200px;
  overflow: auto;
  overflow-x: hidden;
  display: block;
  text-align: center;
}
/* width */
.container::-webkit-scrollbar {
  width: 10px;
}
/* Track */
.container::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px lightblue; 
  border-radius: 10px;
}
 
/* Handle */
.container::-webkit-scrollbar-thumb {
  background: #ebf3f94a; 
  height: 10px;
  border-radius: 10px;
}
/* Handle on hover */
.container::-webkit-scrollbar-thumb:hover {
  background: #ebf3f94a; 
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
  <div>
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
 <a href="approvals.php"><div  class="active"  id="b1">
<button  class="menu-collapse is-expanded collapsed"  type="button" data-toggle="collapse" data-target="#mainContent" aria-expanded="false" aria-controls="collapseExample">
 <font color="white" size="4px">
<i class="fa fa-edit"></i>
 APPROVALS</font>
</button>
</div>
</a>
</nav>

</sidebar>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
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

$sql = "SELECT ID,DATEOFINSERT,TIMEOFINSERT,APPROVAL_FOR,USER FROM approval";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<center><h1 style='color:white'>APPROVAL LIST</h1></center><div class='container'>
<table class='rwd-table' style='width: 1100px;'>
<tbody>
<tr>
<th><center>APPROVE</center></th>
<th>DATE</th>
<th>TIME</th>
<th>APPROVAL FOR</th>
<th>USER</th>
</tr>
";
 $i=1;
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td><center><a href='approve.php?ID=".$row["ID"]."'><i class='fa fa-check-circle' style='font-size:36px;color:green;'></i></a></center></td><td data-th='date'>" . $row["DATEOFINSERT"]. " </td><td data-th='time'>" . $row["TIMEOFINSERT"]. "</td><td data-th='approvalfor'> " . $row["APPROVAL_FOR"]. "</td><td data-th='user'>" . $row["USER"]. "</td></tr>" ;
    }
    echo "</tbody></table></div><br>";

} else {
    ?>
    <center><div id="nof"><h1 ><font color="white">No Approvals pending </font>
   </h1></div></center>
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