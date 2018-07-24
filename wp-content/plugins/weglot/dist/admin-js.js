!function(e){var t={};function o(l){if(t[l])return t[l].exports;var a=t[l]={i:l,l:!1,exports:{}};return e[l].call(a.exports,a,a.exports,o),a.l=!0,a.exports}o.m=e,o.c=t,o.d=function(e,t,l){o.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:l})},o.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/dist/",o(o.s=0)}([function(e,t,o){"use strict";o.r(t);var l=function(){const e=jQuery;let t;const o=()=>{e(".weglot-select-original").selectize({delimiter:"|",persist:!1,valueField:"code",labelField:"local",searchField:["code","english","local"],sortField:[{field:"code",direction:"asc"},{field:"english",direction:"asc"}],maxItems:1,plugins:["remove_button"],options:weglot_languages.available,onChange:e=>{e.length>0&&(t.data("selectize").clearOptions(),t.data("selectize").addOption(weglot_languages.available.filter(t=>t.code!==e)))}}),t=e(".weglot-select-destination").selectize({delimiter:"|",persist:!1,valueField:"code",labelField:"local",searchField:["code","english","local"],sortField:[{field:"code",direction:"asc"},{field:"english",direction:"asc"}],maxItems:weglot_languages.limit,plugins:["remove_button"],options:(()=>weglot_languages.available.filter(e=>e.code!==weglot_languages.original))(),render:{option:function(e,t){return'<div class="weglot__choice__language"><span class="weglot__choice__language--local">'+t(e.local)+'</span><span class="weglot__choice__language--english">'+t(e.english)+" ["+t(e.code)+"]</span></div>"}}})};document.addEventListener("DOMContentLoaded",()=>{o()})};var a=function(){const e=jQuery;document.addEventListener("DOMContentLoaded",()=>{e("#weglot-box-first-settings .weglot-btn-close").on("click",function(t){t.preventDefault(),e("#weglot-box-first-settings").hide()})})};var n=function(){jQuery;const e=()=>{const e=document.querySelector("#tpl-exclusion-url"),t=document.querySelector("#tpl-exclusion-block"),o=document.querySelector("#container-exclude_urls"),l=document.querySelector("#container-exclude_blocks");function a(e){e.preventDefault(),this.parentNode.remove()}document.querySelector("#js-add-exclude-url")&&document.querySelector("#js-add-exclude-url").addEventListener("click",t=>{t.preventDefault(),o.insertAdjacentHTML("beforeend",e.innerHTML),document.querySelector("#container-exclude_urls .item-exclude:last-child .js-btn-remove").addEventListener("click",a)}),document.querySelector("#js-add-exclude-block")&&document.querySelector("#js-add-exclude-block").addEventListener("click",e=>{e.preventDefault(),l.insertAdjacentHTML("beforeend",t.innerHTML),document.querySelector("#container-exclude_blocks .item-exclude:last-child .js-btn-remove-exclude").addEventListener("click",a)}),document.querySelectorAll(".js-btn-remove").forEach(e=>{e.addEventListener("click",a)})};document.addEventListener("DOMContentLoaded",()=>{e()})};var r=function(){const e=jQuery;document.addEventListener("DOMContentLoaded",()=>{0!==e(".weglot-preview").length&&(()=>{let t=e("#type_flags").val(),o=[];o.push(e(".country-selector label").data("code-language")),e(".country-selector li").each((t,l)=>{o.push(e(l).data("code-language"))});const l=weglot_languages.available.filter(e=>o.indexOf(e.code)>=0);e("#weglot-css-inline").text(weglot_css.inline),e("#is_dropdown").on("change",function(){e(".country-selector").toggleClass("weglot-inline"),e(".country-selector").toggleClass("weglot-dropdown")}),e("#with_flags").on("change",function(){e(".country-selector label, .country-selector li").toggleClass("weglot-flags")}),e("#type_flags").on("change",function(o){e(".country-selector label, .country-selector li").removeClass(`flag-${t}`);const l=o.target.value;e(".country-selector label, .country-selector li").addClass(`flag-${l}`),t=l});const a=()=>{const t=l.find(t=>t.code===e(".country-selector label").data("code-language"));e(".country-selector label a, .country-selector label span").text(t.local),e(".country-selector li").each((t,o)=>{const a=l.find(t=>t.code===e(o).data("code-language"));e(o).find("a").text(a.local)})};e("#with_name").on("change",function(t){t.target.checked?a():(e(".country-selector label a, .country-selector label span").text(""),e(".country-selector li a, .country-selector li span").each((t,o)=>{e(o).text("")}))}),e("#is_fullname").on("change",function(t){if(t.target.checked)a();else{const t=l.find(t=>t.code===e(".country-selector label").data("code-language"));e(".country-selector label a, .country-selector label span").text(t.code.toUpperCase()),e(".country-selector li").each((t,o)=>{const a=l.find(t=>t.code===e(o).data("code-language"));e(o).find("a").text(a.code.toUpperCase()),e(o).find("span").text(a.code.toUpperCase())})}}),e("#override_css").on("keyup",function(t){e("#weglot-css-inline").text(t.target.value)})})()})};var s=function(){const e=jQuery,t=()=>{e("#api_key").blur(function(){var t=e(this).val();if(0===t.length)return e(".weglot-keyres").remove(),e("#api_key").after('<span class="weglot-keyres weglot-nokkey"></span>'),void e("#wrap-weglot #submit").prop("disabled",!0);e.getJSON("https://weglot.com/api/user-info?api_key="+t,function(t){e(".weglot-keyres").remove(),e("#api_key").after('<span class="weglot-keyres weglot-okkey"></span>'),e("#wrap-weglot #submit").prop("disabled",!1)}).fail(function(){e(".weglot-keyres").remove(),e("#api_key").after('<span class="weglot-keyres weglot-nokkey"></span>'),e("#wrap-weglot #submit").prop("disabled",!0)})})};document.addEventListener("DOMContentLoaded",()=>{t()})};var c=function(){const e=jQuery;"undefined"!=typeof weglot_css&&e("#weglot-css-flag-css").text(weglot_css.flag_css);const t=()=>{e(".flag-style-openclose").on("click",function(){e(".flag-style-wrapper").toggle()}),e("select.flag-en-type, select.flag-es-type, select.flag-pt-type, select.flag-fr-type, select.flag-ar-type").on("change",function(){!function(){var t=new Array,o=new Array,l=new Array,a=new Array,n=new Array;t[1]=[3570,7841,48,2712],t[2]=[3720,449,3048,4440],t[3]=[3840,1281,2712,4224],t[4]=[3240,5217,1224,2112],t[5]=[4050,3585,1944,2496],t[6]=[2340,3457,2016,2016],o[1]=[4320,4641,3144,3552],o[2]=[3750,353,2880,4656],o[3]=[4200,1601,2568,3192],o[4]=[3990,5793,1032,2232],o[5]=[5460,897,4104,3120],o[6]=[3810,7905,216,3888],o[7]=[3630,8065,192,2376],o[8]=[3780,1473,2496,4104],o[9]=[6120,2145,4680,2568],o[10]=[4440,3009,3240,1176],o[11]=[5280,1825,3936,2976],o[12]=[4770,2081,3624,1008],o[13]=[4080,3201,2160,2544],o[14]=[4590,5761,3432,624],o[15]=[4350,2209,3360,2688],o[16]=[5610,5249,3168,528],o[17]=[5070,1729,3792,2952],o[18]=[6870,5953,96,3408],o[19]=[4020,5697,1056,1224],l[1]=[1740,5921,528,3504],a[1]=[2760,736,2856,4416],a[2]=[3840,1280,2712,4224],a[3]=[5700,7201,5016,2400],a[4]=[2220,4160,1632,1944],n[1]=[1830,129,3096,5664],n[2]=[5100,2177,3840,2904],n[3]=[4890,3425,3648,2136],n[4]=[1320,3681,1896,4080],n[5]=[1260,3841,1824,1200],n[6]=[1020,3969,1608,312],n[7]=[4800,4065,3600,72],n[8]=[4710,4865,3504,480],n[9]=[6720,5984,5112,3792],n[10]=[4500,7233,3288,1800],n[11]=[720,7522,384,3936],n[12]=[690,7745,336,1104],n[13]=[600,8225,120,1272],n[14]=[660,5569,840,576];var r=e("select.flag-en-type").val(),s=e("select.flag-es-type").val(),c=e("select.flag-pt-type").val(),i=e("select.flag-fr-type").val(),g=e("select.flag-ar-type").val(),f=r<=0?"":".weglot-flags.en a:before, .weglot-flags.en span:before { background-position: -"+t[r][0]+"px 0; } .weglot-flags.flag-1.en a:before, .weglot-flags.flag-1.en span:before { background-position: -"+t[r][1]+"px 0; } .weglot-flags.flag-2.en a:before, .weglot-flags.flag-2.en span:before { background-position: -"+t[r][2]+"px 0; } .weglot-flags.flag-3.en a:before, .weglot-flags.flag-3.en span:before { background-position: -"+t[r][3]+"px 0; } ",u=s<=0?"":".weglot-flags.es a:before, .weglot-flags.es span:before { background-position: -"+o[s][0]+"px 0; } .weglot-flags.flag-1.es a:before, .weglot-flags.flag-1.es span:before { background-position: -"+o[s][1]+"px 0; } .weglot-flags.flag-2.es a:before, .weglot-flags.flag-2.es span:before { background-position: -"+o[s][2]+"px 0; } .weglot-flags.flag-3.es a:before, .weglot-flags.flag-3.es span:before { background-position: -"+o[s][3]+"px 0; } ",d=c<=0?"":".weglot-flags.pt a:before, .weglot-flags.pt span:before { background-position: -"+l[c][0]+"px 0; } .weglot-flags.flag-1.pt a:before, .weglot-flags.flag-1.pt span:before { background-position: -"+l[c][1]+"px 0; } .weglot-flags.flag-2.pt a:before, .weglot-flags.flag-2.pt span:before { background-position: -"+l[c][2]+"px 0; } .weglot-flags.flag-3.pt a:before, .weglot-flags.flag-3.pt span:before { background-position: -"+l[c][3]+"px 0; } ",p=i<=0?"":".weglot-flags.fr a:before, .weglot-flags.fr span:before { background-position: -"+a[i][0]+"px 0; } .weglot-flags.flag-1.fr a:before, .weglot-flags.flag-1.fr span:before { background-position: -"+a[i][1]+"px 0; } .weglot-flags.flag-2.fr a:before, .weglot-flags.flag-2.fr span:before { background-position: -"+a[i][2]+"px 0; } .weglot-flags.flag-3.fr a:before, .weglot-flags.flag-3.fr span:before { background-position: -"+a[i][3]+"px 0; } ",b=g<=0?"":".weglot-flags.ar a:before, .weglot-flags.ar span:before { background-position: -"+n[g][0]+"px 0; } .weglot-flags.flag-1.ar a:before, .weglot-flags.flag-1.ar span:before { background-position: -"+n[g][1]+"px 0; } .weglot-flags.flag-2.ar a:before, .weglot-flags.flag-2.ar span:before { background-position: -"+n[g][2]+"px 0; } .weglot-flags.flag-3.ar a:before, .weglot-flags.flag-3.ar span:before { background-position: -"+n[g][3]+"px 0; } ";e("#flag_css, #weglot-css-flag-css").text(f+u+d+p+b)}()})};document.addEventListener("DOMContentLoaded",()=>{t()})};var i=function(){const e=jQuery;document.addEventListener("DOMContentLoaded",()=>{(()=>{let t=!1;e(document).on({change:()=>t=!0,keyup:()=>t=!0},"input[type='text'], select, textarea, input[type='checkbox']"),e("input[type='submit']").on("click",e=>{t=!1}),window.onbeforeunload=function(){if(t)return"You have made changes on this page that you have not yet confirmed. If you navigate away from this page you will lose your unsaved changes"}})()})};o(2),o(1);l(),n(),a(),r(),s(),c(),i()},function(e,t){Array.prototype.filter||(Array.prototype.filter=function(e,t){"use strict";if("Function"!=typeof e&&"function"!=typeof e||!this)throw new TypeError;var o=this.length>>>0,l=new Array(o),a=this,n=0,r=-1;if(void 0===t)for(;++r!==o;)r in this&&e(a[r],r,a)&&(l[n++]=a[r]);else for(;++r!==o;)r in this&&e.call(t,a[r],r,a)&&(l[n++]=a[r]);return l.length=n,l})},function(e,t){Array.prototype.find||Object.defineProperty(Array.prototype,"find",{value:function(e){if(null==this)throw new TypeError('"this" is null or not defined');var t=Object(this),o=t.length>>>0;if("function"!=typeof e)throw new TypeError("predicate must be a function");for(var l=arguments[1],a=0;a<o;){var n=t[a];if(e.call(l,n,a,t))return n;a++}},configurable:!0,writable:!0})}]);