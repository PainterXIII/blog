"use strict";!(function(e,t,a){function r(){for(var e=0;e<i.length;e++){i[e].alpha<=0?(t.body.removeChild(i[e].el),i.splice(e,1)):(i[e].y--,(i[e].scale+=0.004),(i[e].alpha-=0.013),(i[e].el.style.cssText="left:"+i[e].x+"px;top:"+i[e].y+"px;opacity:"+i[e].alpha+";transform:scale("+i[e].scale+","+i[e].scale+") rotate(45deg);background:"+i[e].color+";z-index:5201314"))}requestAnimationFrame(r)}function n(e){var a=t.createElement("div");(a.className="heart"),i.push({el:a,x:e.clientX-5,y:e.clientY-5,scale:1,alpha:1,color:o()}),t.body.appendChild(a)}function o(){return"rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"}var i=[];(e.requestAnimationFrame=e.requestAnimationFrame||e.webkitRequestAnimationFrame||e.mozRequestAnimationFrame||e.oRequestAnimationFrame||e.msRequestAnimationFrame||function(e){setTimeout(e,1000/60)}),(function(e){var a=t.createElement("style");a.type="text/css";try{a.appendChild(t.createTextNode(e))}catch(t){a.styleSheet.cssText=e}t.getElementsByTagName("head")[0].appendChild(a)})(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),(function(){var t="function"==typeof e.onclick&&e.onclick;e.onclick=function(e){t&&t(),n(e)}})(),r()})(window,document);