<html lang="en"><head>
<meta charset="UTF-8">
<style>
.button {
  --y: -25;
  --x: 0;
  --rotation: 0;
  --speed: 2;
  --txt: "Show me attention";
  --padding: 1rem 1.25rem;
  cursor: pointer;
  padding: var(--padding);
  color: transparent;
  font-weight: bold;
  font-size: 1.25rem;
  transition: background 0.1s ease;
  background: hsl(var(--hue), 100%, 50%);
  outline-color: hsl(var(--hue), 100%, 80%);
  -webkit-animation-name: flow-and-shake;
          animation-name: flow-and-shake;
  -webkit-animation-duration: calc(var(--speed) * 1s);
          animation-duration: calc(var(--speed) * 1s);
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
}
.button:after {
  content: var(--txt);
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--padding);
  color: #fff;
}
.button:hover {
  background: hsl(var(--hue), 100%, 40%);
  --speed: 0.1;
  --rotation: -1;
  --y: -1;
  --x: 1;
  --txt: "Click me!";
}
.button:active {
  --speed: 4;
  --x: 0;
  --y: 5;
  --rotation: 0;
  --txt: "Ahhhh...";
  background: hsl(var(--hue), 100%, 30%);
}
.button__wrap {
  position: relative;
}
.button__shadow {
  position: absolute;
  border-radius: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: #af9d9d;
  -webkit-animation: shadow 2s infinite ease-in-out;
          animation: shadow 2s infinite ease-in-out;
  z-index: -1;
}
@-webkit-keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@-webkit-keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
  }
}
@keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
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
<body translate="no">
<div class="button__wrap">
<button class="button" style="--hue: 210.12264394663168;">Show me attention</button>
<div class="button__shadow"></div>
</div>


</body></html>