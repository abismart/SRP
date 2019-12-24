<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<html lang="en"><head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="toast.css">
<link rel="stylesheet" type="text/css" href="home.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Stock Inventory</title>
<meta charset="UTF-8">

<style>

@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
* {
  margin: 0;
}
.headline{
    font-family: 'Segoe UI',Arial, sans-serif;
    box-sizing: border-box;
}
#o{
  display: none;
}
#off{
  width:195px;
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
  <h1></h1>
<hr style="color:white;border: 1px dashed" >
 
<div style="float:left;padding-left:90px;">
  <h1 id="head">
    User Statistics
  </h1>
<div class="page">
<div class="container">
  o Last Login - <?php echo $_SESSION['lastlogin'] ?>
</div>
</div>
</div>
  <div style="margin-left:29%;">
  <h1 id="head">
    <i class="fa fa-circle" style="color:#34eb83;font-size:20px"></i> 
    <?php echo $_SESSION['uname']?> <font size="5px">- Manage Stocks</font>
      <a href="logout.php">
        <div class="box box4" style="float:right;height:15px;margin:auto;color:black">
        <i class="fa fa-sign-out" style="color:#241ba1"></i>
          <p style="color:#241ba1">Logout</p>
        </div>
      </a>
  </h1>

<div class="page">
<div class="container">
<a href="addentry.php">  
<div class="box box3" id="adds" style="width:195px;">
<i class="fa fa-plus"></i>
<p>Add entry</p>
</div></a>


<a href="edit.php">
<div class="box box3" id="off">
<div id="o"><i class="fa fa-eye"></i> VIEW STOCK</div>
<div id="no"><i class="fa fa-edit"></i> EDIT</div>
</div>
</a>

<a href="search.php">
<div class="box box3"  style="width:195px;">
<i class="fa fa-search"></i>
<p>Search</p>
</div>
</a>

<a href="issue.php">
<div class="box box3" id="is" style="width:195px;">
<i class="fa fa-paper-plane"></i>
<p>Issue</p>
</div>
</a>

<a href="issuedlist.php">
<div class="box box3" style="width:195px;">
<i class="fa fa-list"></i>
<p>Issued List</p>
</div>
</a>

<a href="transfer.php">
<div class="box box3" id="ts" style="width:195px;">
<i class="fa fa-exchange"></i>
<p>Transfer</p>
</div>
</a>

<a href="surrender.php">
<div class="box box3" id="sus" style="width:195px;">
<i class="fa fa-undo"></i>
<p>Surrender</p>
</div>
</a>
<div id="approve" style="display:none;">
<a href="approvals.php">
<div class="box box3" id="sus" style="width:195px;">
<i class="fa fa-check"></i>
<p>Approvals</p>
</div>
</a>
</div>
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
<?php
  if ($_SESSION['username'] == "office@gmail.com") {
    ?>
    <script>
$(document).ready(function(){
    $("#adds").remove();
    $("#is").remove();
    $("#ts").remove();
    $("#sus").remove();
    $("#no").remove();
});
document.getElementById("o").style.display="block";
document.getElementById("off").style ="width:227px;";

</script>
    <?php
  }
  ?>
  
</div>
</div>
</div>
<h1></h1>
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
function myfunction(){
    toastr["success"]("Registered Successfully!, please login");
}
function myfunctionl(){
    toastr["error"]("Incorrect Username/password!, please try again","Error");
}
function myfunctiony(){
    toastr["error"]("email already exists!,try again");
}
function loginf(){
    toastr["info"]("Login first!");
}
function logoutf(){
    toastr["success"]("Logged out Successfully!");
}
function check() {
  if (document.getElementById('lu').value == 0 || document.getElementById('lp').value == 0) {
    toastr["error"]("Please fill all fields first!", "Error");
    return false;
  }
   else if(!(document.getElementById('lu').value.match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$")))
  {
          toastr["error"]("Invaid email &emsp;&emsp;(Format:example@gmail.com)", "Error");
          return false;
  } 
  return true;
}
function rcheck() {
  if (document.getElementById('se').value == 0 || document.getElementById('su').value == 0 || document.getElementById('sp').value == 0 || document.getElementById('si').value == 0 || document.getElementById('scp').value == 0 ) {
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

</body></html>
<?php
}
else{
header('location:l.php?loginf=msg');
 exit();
 }
 ?>