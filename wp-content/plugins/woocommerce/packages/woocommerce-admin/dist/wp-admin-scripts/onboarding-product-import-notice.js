this.wc=this.wc||{},this.wc.onboardingProductImportNotice=function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=457)}({13:function(t,e,n){"use strict";n.d(e,"a",(function(){return s})),n.d(e,"b",(function(){return d})),n.d(e,"c",(function(){return a})),n.d(e,"f",(function(){return l})),n.d(e,"g",(function(){return f})),n.d(e,"e",(function(){return p})),n.d(e,"d",(function(){return b}));var r=n(2);const o=["wcAdminSettings","preloadSettings"],c="object"==typeof wcSettings?wcSettings:{},u=Object.keys(c).reduce((t,e)=>(o.includes(e)||(t[e]=c[e]),t),{});Object.keys(c.admin||{}).forEach(t=>{o.includes(t)||(u[t]=c.admin[t])});const i=u.adminUrl,s=(u.countries,u.currency),d=u.locale,a=u.orderStatuses;u.siteTitle,u.wcAssetUrl;function l(t,e=!1,n=(t=>t)){if(o.includes(t))throw new Error(Object(r.__)("Mutable settings should be accessed via data store."));return n(u.hasOwnProperty(t)?u[t]:e,e)}function f(t,e,n=(t=>t)){if(o.includes(t))throw new Error(Object(r.__)("Mutable settings should be mutated via data store."));u[t]=n(e)}function p(t){return(i||"")+t}function b(t){return new Promise((e,n)=>{document.querySelector(`#${t.handle}-js`)&&e();const r=document.createElement("script");r.src=t.src,r.id=t.handle+"-js",r.async=!0,r.onload=e,r.onerror=n,document.body.appendChild(r)})}},2:function(t,e){t.exports=window.wp.i18n},457:function(t,e,n){"use strict";n.r(e);var r=n(2),o=n(51),c=n.n(o),u=n(13);c()(()=>{const t=document.querySelector(".wc-actions");if(t){const e=document.querySelector(".wc-actions .button-primary");e&&(e.classList.remove("button"),e.classList.remove("button-primary"));const n=document.createElement("a");n.classList.add("button"),n.classList.add("button-primary"),n.setAttribute("href",Object(u.e)("admin.php?page=wc-admin")),n.innerText=Object(r.__)("Continue setup",'woocommerce'),t.appendChild(n)}})},51:function(t,e){t.exports=window.wp.domReady}});