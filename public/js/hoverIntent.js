!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):jQuery&&!jQuery.fn.hoverIntent&&e(jQuery)}(function(s){"use strict";function a(e){o=e.pageX,u=e.pageY}var o,u,f={interval:100,sensitivity:6,timeout:0},d=0,c=function(e,t,n,i){if(Math.sqrt((n.pX-o)*(n.pX-o)+(n.pY-u)*(n.pY-u))<i.sensitivity)return t.off(n.event,a),delete n.timeoutId,n.isActive=!0,e.pageX=o,e.pageY=u,delete n.pX,delete n.pY,i.over.apply(t[0],[e]);n.pX=o,n.pY=u,n.timeoutId=setTimeout(function(){c(e,t,n,i)},i.interval)};s.fn.hoverIntent=function(e,t,n){var r=d++,v=s.extend({},f);s.isPlainObject(e)?(v=s.extend(v,e),s.isFunction(v.out)||(v.out=v.over)):v=s.isFunction(t)?s.extend(v,{over:e,out:t,selector:n}):s.extend(v,{over:e,out:e,selector:t});function i(e){var t=s.extend({},e),n=s(this),i=n.data("hoverIntent");i||n.data("hoverIntent",i={});var o=i[r];o||(i[r]=o={id:r}),o.timeoutId&&(o.timeoutId=clearTimeout(o.timeoutId));var u=o.event="mousemove.hoverIntent.hoverIntent"+r;if("mouseenter"===e.type){if(o.isActive)return;o.pX=t.pageX,o.pY=t.pageY,n.off(u,a).on(u,a),o.timeoutId=setTimeout(function(){c(t,n,o,v)},v.interval)}else{if(!o.isActive)return;n.off(u,a),o.timeoutId=setTimeout(function(){!function(e,t,n,i){delete t.data("hoverIntent")[n.id],i.apply(t[0],[e])}(t,n,o,v.out)},v.timeout)}}return this.on({"mouseenter.hoverIntent":i,"mouseleave.hoverIntent":i},v.selector)}});