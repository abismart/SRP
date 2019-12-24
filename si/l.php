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
<title>Stock Inventory</title>
<meta charset="UTF-8">

<style>
.tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  left: 90%;
  margin-left: -60px;
}

.info:hover .tooltiptext {
  visibility: visible;
}
    .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 2s ease-in-out;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
.form-modal{
    font-family: 'quicksand',Arial, sans-serif;
    box-sizing: border-box;
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
.form-modal{
    position:relative;
    width:450px;
    height:auto;
    margin-top:2em;
    left:50%;
    transform:translateX(-50%);
    background:#fff;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
    box-shadow:0 3px 20px 0px rgba(0, 0, 0, 0.1)
}

.form-modal button{
    cursor: pointer;
    position: relative;
    text-transform: capitalize;
    font-size:1em;
    z-index: 2;
    outline: none;
    background:#fff;
    transition:0.2s;
}

.form-modal .btn{
    border-radius: 20px;
    border:none;
    font-weight: bold;
    font-size:1.2em;
    padding:0.8em 1em 0.8em 1em!important;
    transition:0.5s;
    border:1px solid #ebebeb;
    margin-bottom:0.5em;
    margin-top:0.5em;
}

.form-modal .login , .form-modal .signup{
background-image: linear-gradient(to right, #060960, #162079, #233592, #2f4bac, #3a62c6, #3a62c6, #3a62c6, #3a62c6, #2f4bac, #233592, #162079, #060960);
    color:#fff;
}

.form-modal .login:hover , .form-modal .signup:hover{
background-image: linear-gradient(to right, #4981e9, #3e69cf, #3253b4, #273c9b, #1a2781, #1a2781, #1a2781, #1a2781, #273c9b, #3253b4, #3e69cf, #4981e9);
}

.form-toggle{
    position: relative;
    width:100%;
    height:auto;
}

.form-toggle button{
    width:50%;
    float:left;
    padding:1.5em;
    margin-bottom:1.5em;
    border:none;
    transition: 0.2s;
    font-size:1.1em;
    font-weight: bold;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}

.form-toggle button:nth-child(1){
    border-bottom-right-radius: 20px;
}

.form-toggle button:nth-child(2){
    border-bottom-left-radius: 20px;
}

#login-toggle{
    color:#ffff;
}

.form-modal form{
    position: relative;
    width:90%;
    height:auto;
    left:50%;
    transform:translateX(-50%);  
}

#login-form , #signup-form{
    position:relative;
    width:100%;
    height:auto;
    padding-bottom:1em;
}

#signup-form{
    display: none;
}


#login-form button , #signup-form button{
    width:100%;
    margin-top:0.5em;
    padding:0.6em;
}

.form-modal input{
    position: relative;
    width:100%;
    font-size:1em;
    padding:1.2em 1.7em 1.2em 1.7em;
    margin-top:0.6em;
    margin-bottom:0.6em;
    border-radius: 20px;
    border-color: #2f42bd;
    background:#ebebeb;
    outline:none;
    font-weight: bold;
    transition:0.4s;
}

.form-modal input:focus , .form-modal input:active{
    transform:scaleX(1.02);
}

.form-modal input::-webkit-input-placeholder{
    color:#222;
}


.form-modal p{
    font-size:16px;
    font-weight: bold;
}

.form-modal p a{
    color:blue;
    text-decoration: none;
    transition:0.2s;
}

.form-modal p a:hover{
    color:#222;
}


.form-modal i {
    position: absolute;
    left:10%;
    top:50%;
    transform:translateX(-10%) translateY(-50%); 
}

.-box-sd-effect:hover{
    box-shadow: 0 4px 8px hsla(210,2%,84%,.2);
}

@media only screen and (max-width:500px){
    .form-modal{
        width:100%;
    }
}

@media only screen and (max-width:400px){
    i{
        display: none!important;
    }
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
  myfunction();
});
  </script>
  <?php
}
elseif (@$_GET["failure"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  myfunctiony();
});
  </script>
  <?php  
}
elseif (@$_GET["lfailure"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  myfunctionl();
});
  </script>
  <?php  
}
elseif (@$_GET["loginf"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  loginf();
});
  </script>
  <?php  
}elseif (@$_GET["logoutf"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  logoutf();
});
  </script>
  <?php  
}
elseif (@$_GET["psuccess"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  ps();
});
  </script>
  <?php  
}elseif (@$_GET["pfailure"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  pf();
});
  </script>
  <?php  
}elseif (@$_GET["ufailure"] == "msg") {
?>
<script type="text/javascript">
  $(document).ready(function() {
  uf();
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
<!-- form -->
<a href="#popup1" class="info" style="cursor:pointer;"><img src="info.png" style="width:50px;height:50px;float:right;padding-right:30px;">
  <span class="tooltiptext">Information?</span>
</a>
<div id="popup1" class="overlay">
<div class="popup">
<h2>Need help?</h2>
<a class="close" href="#">×</a>
<div class="content" style="font-size:20px;">
If you are new user then <font style="color:blue;font-size:20px;font-weight:bold;"><a style="text-decoration:none" onclick="toggleSignup()" href="#">SIGN UP</a></font>.
Else <font style="color:green;font-size:20px;font-weight:bold;"><a  style="text-decoration:none" onclick="toggleLogin()" href="#">LOGIN</a></font>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
  $(".info").click(function(){
    $(".form-modal").css("opacity", "0.1");
  });
    $(".close").click(function(){
    $(".form-modal").css("opacity", "1");
  });
    
});
</script>
<div class="form-modal" id="fm">
<div class="form-toggle">
<button id="login-toggle" onclick="toggleLogin()" style="background-image: linear-gradient(to right, #060960, #162079, #233592, #2f4bac, #3a62c6, #3a62c6, #3a62c6, #3a62c6, #2f4bac, #233592, #162079, #060960);color: rgb(255, 255, 255);">log in</button>
<button id="signup-toggle" onclick="toggleSignup()" style="background-color: rgb(255, 255, 255);color: rgb(34, 34, 34);">sign up</button>
</div>
<script>
$(document).ready(function(){
  $("#lu").keypress(function(){
    $("#lee").slideDown();
  });
  $("#lp").keypress(function(){
    $("#lpp").slideDown();
  });
});
</script>
<div id="login-form" style="display: block;">
<form  name="lin" method="post" onsubmit="return check()" action="login.php">
<center><h3 style="display: none;margin:auto;" id="lee">Email id</h3></center>
<input type="text" name="username" id="lu" placeholder="Email id">
<center><h3 style="display: none;margin:auto;" id="lpp">Password</h3></center>
<input type="password" name="password" id="lp" placeholder="Password">
<a style="text-decoration:none;outline:none;margin:auto;padding-left:10px;" href="forgetpassword.php">Forgot Password ?</a>
<button type="submit" class="btn login" >login</button>
</form>
</div>

<script>
$(document).ready(function(){
  $("#si").keypress(function(){
    $("#sii").show(500);
  });
  $("#se").keypress(function(){
    $("#see").slideDown();
  });
  $("#su").keypress(function(){
    $("#suu").slideDown();
  });
  $("#sp").keypress(function(){
    $("#spp").slideDown();
  });
  $("#scp").keypress(function(){
    $("#scpp").slideDown();
  });
});
</script>
<div id="signup-form" style="display: none;">
<form name="siup" method="post" onsubmit="return rcheck()" action="register.php">
<center><h3 style="display: none;margin:auto;" id="sii">Staff id</h3></center>
<input  type="number" name="staffid" id="si" placeholder="Staff id">
<center><h3 style="display: none;margin:auto;" id="see">Email id</h3></center>
<input  name="mailid" id="se" placeholder="Email id">
<center><h3 style="display: none;margin:auto;" id="suu">Username</h3></center>
<input type="text" name="uname" id="su" placeholder="Username">
<center><h3 style="display: none;margin:auto;" id="spp">Password</h3></center>
<input type="password" name="password" id="sp" placeholder="Password">
<center><h3 style="display: none;margin:auto;" id="scpp">Confirm Password</h3></center>
<input type="password" name="cpassword" id="scp" placeholder="Confirm password">
<button  type="submit" class="btn signup">create account</button>
</form>
</div>
</div>
<script id="rendered-js">
      function toggleSignup() {
  document.getElementById("login-toggle").style= "background-image: linear-gradient(ffff);";
  document.getElementById("login-toggle").style.color = "#222";
  document.getElementById("signup-toggle").style="background-image: linear-gradient(to right, #060960, #162079, #233592, #2f4bac, #3a62c6, #3a62c6, #3a62c6, #3a62c6, #2f4bac, #233592, #162079, #060960);";
  document.getElementById("signup-toggle").style.color = "#fff";
  document.getElementById("login-form").style.display = "none";
  document.getElementById("signup-form").style.display = "block";
  document.getElementById("fm").style.opacity = "1";
}
function toggleLogin() {
  document.getElementById("login-toggle").style="background-image: linear-gradient(to right, #060960, #162079, #233592, #2f4bac, #3a62c6, #3a62c6, #3a62c6, #3a62c6, #2f4bac, #233592, #162079, #060960);";
  document.getElementById("login-toggle").style.color = "#fff";
  document.getElementById("signup-toggle").style= "background-image: linear-gradient(ffff);";
  document.getElementById("signup-toggle").style.color = "#222";
  document.getElementById("signup-form").style.display = "none";
  document.getElementById("login-form").style.display = "block";
  document.getElementById("fm").style.opacity = "1";
}
      //# sourceURL=pen.js
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
function ps(){
    toastr["success"]("Password changed Successfully!");
}
function pf(){
    toastr["error"]("Password cannot be changed!,try again");
}
function uf(){
    toastr["error"]("Invalid Username!,try again");
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
          toastr["error"]("Invalid email &emsp;&emsp;(Format:example@gmail.com)", "Error");
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
?>