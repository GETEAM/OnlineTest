/*!
* TableSorter 2.17.8 min - Client-side table sorting with ease!
* Copyright (c) 2007 Christian Bach
*/
!function(h){h.extend({tablesorter:new function(){function d(){var b=arguments[0],a=1<arguments.length?Array.prototype.slice.call(arguments):b;if("undefined"!==typeof console&&"undefined"!==typeof console.log)console[/error/i.test(b)?"error":/warn/i.test(b)?"warn":"log"](a);else alert(a)}function q(b,a){d(b+" ("+((new Date).getTime()-a.getTime())+"ms)")}function p(b){for(var a in b)return!1;return!0}function r(b,a,c){if(!a)return"";var f,e=b.config,l=e.textExtraction||"",d="",d="basic"===l?h(a).attr(e.textAttribute)|| a.textContent||a.innerText||h(a).text()||"":"function"===typeof l?l(a,b,c):"function"===typeof(f=g.getColumnData(b,l,c))?f(a,b,c):a.textContent||a.innerText||h(a).text()||"";return h.trim(d)}function v(b){var a,c,f=b.config,e=f.$tbodies=f.$table.children("tbody:not(."+f.cssInfoBlock+")"),l,x,k,h,m,B,u,s,t,p=0,v="",w=e.length;if(0===w)return f.debug?d("Warning: *Empty table!* Not building a parser cache"):"";f.debug&&(t=new Date,d("Detecting parsers for each column"));a=[];for(c=[];p<w;){l=e[p].rows; if(l[p])for(x=f.columns,k=0;k<x;k++){h=f.$headers.filter('[data-column="'+k+'"]:last');m=g.getColumnData(b,f.headers,k);s=g.getParserById(g.getData(h,m,"extractor"));u=g.getParserById(g.getData(h,m,"sorter"));B="false"===g.getData(h,m,"parser");f.empties[k]=(g.getData(h,m,"empty")||f.emptyTo||(f.emptyToBottom?"bottom":"top")).toLowerCase();f.strings[k]=(g.getData(h,m,"string")||f.stringTo||"max").toLowerCase();B&&(u=g.getParserById("no-parser"));s||(s=!1);if(!u)a:{h=b;m=l;B=-1;u=k;for(var A=void 0, K=g.parsers.length,G=!1,z="",A=!0;""===z&&A;)B++,m[B]?(G=m[B].cells[u],z=r(h,G,u),h.config.debug&&d("Checking if value was empty on row "+B+", column: "+u+': "'+z+'"')):A=!1;for(;0<=--K;)if((A=g.parsers[K])&&"text"!==A.id&&A.is&&A.is(z,h,G)){u=A;break a}u=g.getParserById("text")}f.debug&&(v+="column:"+k+"; extractor:"+s.id+"; parser:"+u.id+"; string:"+f.strings[k]+"; empty: "+f.empties[k]+"\n");c[k]=u;a[k]=s}p+=c.length?w:1}f.debug&&(d(v?v:"No parsers detected"),q("Completed detecting parsers",t)); f.parsers=c;f.extractors=a}function w(b){var a,c,f,e,l,x,k,n,m,p,u,s=b.config,t=s.$table.children("tbody"),v=s.extractors,w=s.parsers;s.cache={};s.totalRows=0;if(!w)return s.debug?d("Warning: *Empty table!* Not building a cache"):"";s.debug&&(n=new Date);s.showProcessing&&g.isProcessing(b,!0);for(l=0;l<t.length;l++)if(u=[],a=s.cache[l]={normalized:[]},!t.eq(l).hasClass(s.cssInfoBlock)){m=t[l]&&t[l].rows.length||0;for(f=0;f<m;++f)if(p={child:[]},x=h(t[l].rows[f]),k=[],x.hasClass(s.cssChildRow)&&0!== f)c=a.normalized.length-1,a.normalized[c][s.columns].$row=a.normalized[c][s.columns].$row.add(x),x.prev().hasClass(s.cssChildRow)||x.prev().addClass(g.css.cssHasChild),p.child[c]=h.trim(x[0].textContent||x[0].innerText||x.text()||"");else{p.$row=x;p.order=f;for(e=0;e<s.columns;++e)"undefined"===typeof w[e]?s.debug&&d("No parser found for cell:",x[0].cells[e],"does it have a header?"):(c=r(b,x[0].cells[e],e),c="undefined"===typeof v[e].id?c:v[e].format(c,b,x[0].cells[e],e),c="no-parser"===w[e].id? "":w[e].format(c,b,x[0].cells[e],e),k.push(s.ignoreCase&&"string"===typeof c?c.toLowerCase():c),"numeric"===(w[e].type||"").toLowerCase()&&(u[e]=Math.max(Math.abs(c)||0,u[e]||0)));k[s.columns]=p;a.normalized.push(k)}a.colMax=u;s.totalRows+=a.normalized.length}s.showProcessing&&g.isProcessing(b);s.debug&&q("Building cache for "+m+" rows",n)}function z(b,a){var c=b.config,f=c.widgetOptions,e=b.tBodies,l=[],d=c.cache,k,n,m,r,u,s;if(p(d))return c.appender?c.appender(b,l):b.isUpdating?c.$table.trigger("updateComplete", b):"";c.debug&&(s=new Date);for(u=0;u<e.length;u++)if(k=h(e[u]),k.length&&!k.hasClass(c.cssInfoBlock)){m=g.processTbody(b,k,!0);k=d[u].normalized;n=k.length;for(r=0;r<n;r++)l.push(k[r][c.columns].$row),c.appender&&(!c.pager||c.pager.removeRows&&f.pager_removeRows||c.pager.ajax)||m.append(k[r][c.columns].$row);g.processTbody(b,m,!1)}c.appender&&c.appender(b,l);c.debug&&q("Rebuilt table",s);a||c.appender||g.applyWidget(b);b.isUpdating&&c.$table.trigger("updateComplete",b)}function D(b){return/^d/i.test(b)|| 1===b}function E(b){var a,c,f,e,l,x,k,n=b.config;n.headerList=[];n.headerContent=[];n.debug&&(k=new Date);n.columns=g.computeColumnIndex(n.$table.children("thead, tfoot").children("tr"));e=n.cssIcon?'<i class="'+(n.cssIcon===g.css.icon?g.css.icon:n.cssIcon+" "+g.css.icon)+'"></i>':"";n.$headers=h(b).find(n.selectorHeaders).each(function(k){c=h(this);a=g.getColumnData(b,n.headers,k,!0);n.headerContent[k]=h(this).html();""!==n.headerTemplate&&(l=n.headerTemplate.replace(/\{content\}/g,h(this).html()).replace(/\{icon\}/g, e),n.onRenderTemplate&&(f=n.onRenderTemplate.apply(c,[k,l]))&&"string"===typeof f&&(l=f),h(this).html('<div class="'+g.css.headerIn+'">'+l+"</div>"));n.onRenderHeader&&n.onRenderHeader.apply(c,[k]);this.column=parseInt(h(this).attr("data-column"),10);this.order=D(g.getData(c,a,"sortInitialOrder")||n.sortInitialOrder)?[1,0,2]:[0,1,2];this.count=-1;this.lockedOrder=!1;x=g.getData(c,a,"lockedOrder")||!1;"undefined"!==typeof x&&!1!==x&&(this.order=this.lockedOrder=D(x)?[1,1,1]:[0,0,0]);c.addClass(g.css.header+ " "+n.cssHeader);n.headerList[k]=this;c.parent().addClass(g.css.headerRow+" "+n.cssHeaderRow).attr("role","row");n.tabIndex&&c.attr("tabindex",0)}).attr({scope:"col",role:"columnheader"});H(b);n.debug&&(q("Built headers:",k),d(n.$headers))}function C(b,a,c){var f=b.config;f.$table.find(f.selectorRemove).remove();v(b);w(b);I(f.$table,a,c)}function H(b){var a,c,f,e=b.config;e.$headers.each(function(l,d){c=h(d);f=g.getColumnData(b,e.headers,l,!0);a="false"===g.getData(d,f,"sorter")||"false"===g.getData(d, f,"parser");d.sortDisabled=a;c[a?"addClass":"removeClass"]("sorter-false").attr("aria-disabled",""+a);b.id&&(a?c.removeAttr("aria-controls"):c.attr("aria-controls",b.id))})}function F(b){var a,c,f=b.config,e=f.sortList,l=e.length,d=g.css.sortNone+" "+f.cssNone,k=[g.css.sortAsc+" "+f.cssAsc,g.css.sortDesc+" "+f.cssDesc],n=["ascending","descending"],m=h(b).find("tfoot tr").children().add(f.$extraHeaders).removeClass(k.join(" "));f.$headers.removeClass(k.join(" ")).addClass(d).attr("aria-sort","none"); for(a=0;a<l;a++)if(2!==e[a][1]&&(b=f.$headers.not(".sorter-false").filter('[data-column="'+e[a][0]+'"]'+(1===l?":last":"")),b.length)){for(c=0;c<b.length;c++)b[c].sortDisabled||b.eq(c).removeClass(d).addClass(k[e[a][1]]).attr("aria-sort",n[e[a][1]]);m.length&&m.filter('[data-column="'+e[a][0]+'"]').removeClass(d).addClass(k[e[a][1]])}f.$headers.not(".sorter-false").each(function(){var b=h(this),a=this.order[(this.count+1)%(f.sortReset?3:2)],a=b.text()+": "+g.language[b.hasClass(g.css.sortAsc)?"sortAsc": b.hasClass(g.css.sortDesc)?"sortDesc":"sortNone"]+g.language[0===a?"nextAsc":1===a?"nextDesc":"nextNone"];b.attr("aria-label",a)})}function O(b){var a,c,f=b.config;f.widthFixed&&0===f.$table.find("colgroup").length&&(a=h("<colgroup>"),c=h(b).width(),h(b.tBodies).not("."+f.cssInfoBlock).find("tr:first").children(":visible").each(function(){a.append(h("<col>").css("width",parseInt(h(this).width()/c*1E3,10)/10+"%"))}),f.$table.prepend(a))}function P(b,a){var c,f,e,l,g,k=b.config,d=a||k.sortList;k.sortList= [];h.each(d,function(b,a){l=parseInt(a[0],10);if(e=k.$headers.filter('[data-column="'+l+'"]:last')[0]){f=(f=(""+a[1]).match(/^(1|d|s|o|n)/))?f[0]:"";switch(f){case "1":case "d":f=1;break;case "s":f=g||0;break;case "o":c=e.order[(g||0)%(k.sortReset?3:2)];f=0===c?1:1===c?0:2;break;case "n":e.count+=1;f=e.order[e.count%(k.sortReset?3:2)];break;default:f=0}g=0===b?f:g;c=[l,parseInt(f,10)||0];k.sortList.push(c);f=h.inArray(c[1],e.order);e.count=0<=f?f:c[1]%(k.sortReset?3:2)}})}function Q(b,a){return b&& b[a]?b[a].type||"":""}function L(b,a,c){if(b.isUpdating)return setTimeout(function(){L(b,a,c)},50);var f,e,l,d,k=b.config,n=!c[k.sortMultiSortKey],m=k.$table;m.trigger("sortStart",b);a.count=c[k.sortResetKey]?2:(a.count+1)%(k.sortReset?3:2);k.sortRestart&&(e=a,k.$headers.each(function(){this===e||!n&&h(this).is("."+g.css.sortDesc+",."+g.css.sortAsc)||(this.count=-1)}));e=a.column;if(n){k.sortList=[];if(null!==k.sortForce)for(f=k.sortForce,l=0;l<f.length;l++)f[l][0]!==e&&k.sortList.push(f[l]);f=a.order[a.count]; if(2>f&&(k.sortList.push([e,f]),1<a.colSpan))for(l=1;l<a.colSpan;l++)k.sortList.push([e+l,f])}else{if(k.sortAppend&&1<k.sortList.length)for(l=0;l<k.sortAppend.length;l++)d=g.isValueInArray(k.sortAppend[l][0],k.sortList),0<=d&&k.sortList.splice(d,1);if(0<=g.isValueInArray(e,k.sortList))for(l=0;l<k.sortList.length;l++)d=k.sortList[l],f=k.$headers.filter('[data-column="'+d[0]+'"]:last')[0],d[0]===e&&(d[1]=f.order[a.count],2===d[1]&&(k.sortList.splice(l,1),f.count=-1));else if(f=a.order[a.count],2>f&& (k.sortList.push([e,f]),1<a.colSpan))for(l=1;l<a.colSpan;l++)k.sortList.push([e+l,f])}if(null!==k.sortAppend)for(f=k.sortAppend,l=0;l<f.length;l++)f[l][0]!==e&&k.sortList.push(f[l]);m.trigger("sortBegin",b);setTimeout(function(){F(b);J(b);z(b);m.trigger("sortEnd",b)},1)}function J(b){var a,c,f,e,l,d,k,h,m,r,u,s=0,t=b.config,v=t.textSorter||"",w=t.sortList,y=w.length,z=b.tBodies.length;if(!t.serverSideSorting&&!p(t.cache)){t.debug&&(l=new Date);for(c=0;c<z;c++)d=t.cache[c].colMax,k=t.cache[c].normalized, k.sort(function(c,l){for(a=0;a<y;a++){e=w[a][0];h=w[a][1];s=0===h;if(t.sortStable&&c[e]===l[e]&&1===y)break;(f=/n/i.test(Q(t.parsers,e)))&&t.strings[e]?(f="boolean"===typeof t.string[t.strings[e]]?(s?1:-1)*(t.string[t.strings[e]]?-1:1):t.strings[e]?t.string[t.strings[e]]||0:0,m=t.numberSorter?t.numberSorter(c[e],l[e],s,d[e],b):g["sortNumeric"+(s?"Asc":"Desc")](c[e],l[e],f,d[e],e,b)):(r=s?c:l,u=s?l:c,m="function"===typeof v?v(r[e],u[e],s,e,b):"object"===typeof v&&v.hasOwnProperty(e)?v[e](r[e],u[e], s,e,b):g["sortNatural"+(s?"Asc":"Desc")](c[e],l[e],e,b,t));if(m)return m}return c[t.columns].order-l[t.columns].order});t.debug&&q("Sorting on "+w.toString()+" and dir "+h+" time",l)}}function M(b,a){var c=b[0];c.isUpdating&&b.trigger("updateComplete",c);h.isFunction(a)&&a(b[0])}function I(b,a,c){var f=b[0].config.sortList;!1!==a&&!b[0].isProcessing&&f.length?b.trigger("sorton",[f,function(){M(b,c)},!0]):(M(b,c),g.applyWidget(b[0],!1))}function N(b){var a=b.config,c=a.$table;c.unbind("sortReset update updateRows updateCell updateAll addRows updateComplete sorton appendCache updateCache applyWidgetId applyWidgets refreshWidgets destroy mouseup mouseleave ".split(" ").join(a.namespace+ " ")).bind("sortReset"+a.namespace,function(f,e){f.stopPropagation();a.sortList=[];F(b);J(b);z(b);h.isFunction(e)&&e(b)}).bind("updateAll"+a.namespace,function(f,e,c){f.stopPropagation();b.isUpdating=!0;g.refreshWidgets(b,!0,!0);g.restoreHeaders(b);E(b);g.bindEvents(b,a.$headers,!0);N(b);C(b,e,c)}).bind("update"+a.namespace+" updateRows"+a.namespace,function(a,e,c){a.stopPropagation();b.isUpdating=!0;H(b);C(b,e,c)}).bind("updateCell"+a.namespace,function(f,e,l,g){f.stopPropagation();b.isUpdating= !0;c.find(a.selectorRemove).remove();var d,n,m;n=c.find("tbody");m=h(e);f=n.index(h.fn.closest?m.closest("tbody"):m.parents("tbody").filter(":first"));d=h.fn.closest?m.closest("tr"):m.parents("tr").filter(":first");e=m[0];n.length&&0<=f&&(n=n.eq(f).find("tr").index(d),m=m.index(),a.cache[f].normalized[n][a.columns].$row=d,d="undefined"===typeof a.extractors[m].id?r(b,e,m):a.extractors[m].format(r(b,e,m),b,e,m),e="no-parser"===a.parsers[m].id?"":a.parsers[m].format(d,b,e,m),a.cache[f].normalized[n][m]= a.ignoreCase&&"string"===typeof e?e.toLowerCase():e,"numeric"===(a.parsers[m].type||"").toLowerCase()&&(a.cache[f].colMax[m]=Math.max(Math.abs(e)||0,a.cache[f].colMax[m]||0)),I(c,l,g))}).bind("addRows"+a.namespace,function(f,e,l,g){f.stopPropagation();b.isUpdating=!0;if(p(a.cache))H(b),C(b,l,g);else{e=h(e).attr("role","row");var d,n,m,q,u,s=e.filter("tr").length,t=c.find("tbody").index(e.parents("tbody").filter(":first"));a.parsers&&a.parsers.length||v(b);for(f=0;f<s;f++){n=e[f].cells.length;u=[]; q={child:[],$row:e.eq(f),order:a.cache[t].normalized.length};for(d=0;d<n;d++)m="undefined"===typeof a.extractors[d].id?r(b,e[f].cells[d],d):a.extractors[d].format(r(b,e[f].cells[d],d),b,e[f].cells[d],d),m="no-parser"===a.parsers[d].id?"":a.parsers[d].format(m,b,e[f].cells[d],d),u[d]=a.ignoreCase&&"string"===typeof m?m.toLowerCase():m,"numeric"===(a.parsers[d].type||"").toLowerCase()&&(a.cache[t].colMax[d]=Math.max(Math.abs(u[d])||0,a.cache[t].colMax[d]||0));u.push(q);a.cache[t].normalized.push(u)}I(c, l,g)}}).bind("updateComplete"+a.namespace,function(){b.isUpdating=!1}).bind("sorton"+a.namespace,function(a,e,d,x){var k=b.config;a.stopPropagation();c.trigger("sortStart",this);P(b,e);F(b);k.delayInit&&p(k.cache)&&w(b);c.trigger("sortBegin",this);J(b);z(b,x);c.trigger("sortEnd",this);g.applyWidget(b);h.isFunction(d)&&d(b)}).bind("appendCache"+a.namespace,function(a,e,c){a.stopPropagation();z(b,c);h.isFunction(e)&&e(b)}).bind("updateCache"+a.namespace,function(c,e){a.parsers&&a.parsers.length||v(b); w(b);h.isFunction(e)&&e(b)}).bind("applyWidgetId"+a.namespace,function(c,e){c.stopPropagation();g.getWidgetById(e).format(b,a,a.widgetOptions)}).bind("applyWidgets"+a.namespace,function(a,c){a.stopPropagation();g.applyWidget(b,c)}).bind("refreshWidgets"+a.namespace,function(a,c,d){a.stopPropagation();g.refreshWidgets(b,c,d)}).bind("destroy"+a.namespace,function(a,c,d){a.stopPropagation();g.destroy(b,c,d)}).bind("resetToLoadState"+a.namespace,function(){g.refreshWidgets(b,!0,!0);a=h.extend(!0,g.defaults, a.originalSettings);b.hasInitialized=!1;g.setup(b,a)})}var g=this;g.version="2.17.8";g.parsers=[];g.widgets=[];g.defaults={theme:"default",widthFixed:!1,showProcessing:!1,headerTemplate:"{content}",onRenderTemplate:null,onRenderHeader:null,cancelSelection:!0,tabIndex:!0,dateFormat:"mmddyyyy",sortMultiSortKey:"shiftKey",sortResetKey:"ctrlKey",usNumberFormat:!0,delayInit:!1,serverSideSorting:!1,headers:{},ignoreCase:!0,sortForce:null,sortList:[],sortAppend:null,sortStable:!1,sortInitialOrder:"asc", sortLocaleCompare:!1,sortReset:!1,sortRestart:!1,emptyTo:"bottom",stringTo:"max",textExtraction:"basic",textAttribute:"data-text",textSorter:null,numberSorter:null,widgets:[],widgetOptions:{zebra:["even","odd"]},initWidgets:!0,initialized:null,tableClass:"",cssAsc:"",cssDesc:"",cssNone:"",cssHeader:"",cssHeaderRow:"",cssProcessing:"",cssChildRow:"tablesorter-childRow",cssIcon:"tablesorter-icon",cssInfoBlock:"tablesorter-infoOnly",selectorHeaders:"> thead th, > thead td",selectorSort:"th, td",selectorRemove:".remove-me", debug:!1,headerList:[],empties:{},strings:{},parsers:[]};g.css={table:"tablesorter",cssHasChild:"tablesorter-hasChildRow",childRow:"tablesorter-childRow",header:"tablesorter-header",headerRow:"tablesorter-headerRow",headerIn:"tablesorter-header-inner",icon:"tablesorter-icon",info:"tablesorter-infoOnly",processing:"tablesorter-processing",sortAsc:"tablesorter-headerAsc",sortDesc:"tablesorter-headerDesc",sortNone:"tablesorter-headerUnSorted"};g.language={sortAsc:"Ascending sort applied, ",sortDesc:"Descending sort applied, ", sortNone:"No sort applied, ",nextAsc:"activate to apply an ascending sort",nextDesc:"activate to apply a descending sort",nextNone:"activate to remove the sort"};g.log=d;g.benchmark=q;g.construct=function(b){return this.each(function(){var a=h.extend(!0,{},g.defaults,b);a.originalSettings=b;!this.hasInitialized&&g.buildTable&&"TABLE"!==this.tagName?g.buildTable(this,a):g.setup(this,a)})};g.setup=function(b,a){if(!b||!b.tHead||0===b.tBodies.length||!0===b.hasInitialized)return a.debug?d("ERROR: stopping initialization! No table, thead, tbody or tablesorter has already been initialized"): "";var c="",f=h(b),e=h.metadata;b.hasInitialized=!1;b.isProcessing=!0;b.config=a;h.data(b,"tablesorter",a);a.debug&&h.data(b,"startoveralltimer",new Date);a.supportsDataObject=function(a){a[0]=parseInt(a[0],10);return 1<a[0]||1===a[0]&&4<=parseInt(a[1],10)}(h.fn.jquery.split("."));a.string={max:1,min:-1,emptymin:1,emptymax:-1,zero:0,none:0,"null":0,top:!0,bottom:!1};a.emptyTo=a.emptyTo.toLowerCase();a.stringTo=a.stringTo.toLowerCase();/tablesorter\-/.test(f.attr("class"))||(c=""!==a.theme?" tablesorter-"+ a.theme:"");a.table=b;a.$table=f.addClass(g.css.table+" "+a.tableClass+c).attr("role","grid");a.$headers=f.find(a.selectorHeaders);a.namespace=a.namespace?"."+a.namespace.replace(/\W/g,""):".tablesorter"+Math.random().toString(16).slice(2);a.$table.children().children("tr").attr("role","row");a.$tbodies=f.children("tbody:not(."+a.cssInfoBlock+")").attr({"aria-live":"polite","aria-relevant":"all"});a.$table.find("caption").length&&a.$table.attr("aria-labelledby","theCaption");a.widgetInit={};a.textExtraction= a.$table.attr("data-text-extraction")||a.textExtraction||"basic";E(b);O(b);v(b);a.totalRows=0;a.delayInit||w(b);g.bindEvents(b,a.$headers,!0);N(b);a.supportsDataObject&&"undefined"!==typeof f.data().sortlist?a.sortList=f.data().sortlist:e&&f.metadata()&&f.metadata().sortlist&&(a.sortList=f.metadata().sortlist);g.applyWidget(b,!0);0<a.sortList.length?f.trigger("sorton",[a.sortList,{},!a.initWidgets,!0]):(F(b),a.initWidgets&&g.applyWidget(b,!1));a.showProcessing&&f.unbind("sortBegin"+a.namespace+" sortEnd"+ a.namespace).bind("sortBegin"+a.namespace+" sortEnd"+a.namespace,function(c){clearTimeout(a.processTimer);g.isProcessing(b);"sortBegin"===c.type&&(a.processTimer=setTimeout(function(){g.isProcessing(b,!0)},500))});b.hasInitialized=!0;b.isProcessing=!1;a.debug&&g.benchmark("Overall initialization time",h.data(b,"startoveralltimer"));f.trigger("tablesorter-initialized",b);"function"===typeof a.initialized&&a.initialized(b)};g.getColumnData=function(b,a,c,f){if("undefined"!==typeof a&&null!==a){b=h(b)[0]; var e,d=b.config;if(a[c])return f?a[c]:a[d.$headers.index(d.$headers.filter('[data-column="'+c+'"]:last'))];for(e in a)if("string"===typeof e&&(b=f?d.$headers.eq(c).filter(e):d.$headers.filter('[data-column="'+c+'"]:last').filter(e),b.length))return a[e]}};g.computeColumnIndex=function(b){var a=[],c=0,f,e,d,g,k,n,m,p,q,s;for(f=0;f<b.length;f++)for(k=b[f].cells,e=0;e<k.length;e++){d=k[e];g=h(d);n=d.parentNode.rowIndex;g.index();m=d.rowSpan||1;p=d.colSpan||1;"undefined"===typeof a[n]&&(a[n]=[]);for(d= 0;d<a[n].length+1;d++)if("undefined"===typeof a[n][d]){q=d;break}c=Math.max(q,c);g.attr({"data-column":q});for(d=n;d<n+m;d++)for("undefined"===typeof a[d]&&(a[d]=[]),s=a[d],g=q;g<q+p;g++)s[g]="x"}return c+1};g.isProcessing=function(b,a,c){b=h(b);var f=b[0].config,e=c||b.find("."+g.css.header);a?("undefined"!==typeof c&&0<f.sortList.length&&(e=e.filter(function(){return this.sortDisabled?!1:0<=g.isValueInArray(parseFloat(h(this).attr("data-column")),f.sortList)})),b.add(e).addClass(g.css.processing+ " "+f.cssProcessing)):b.add(e).removeClass(g.css.processing+" "+f.cssProcessing)};g.processTbody=function(b,a,c){b=h(b)[0];if(c)return b.isProcessing=!0,a.before('<span class="tablesorter-savemyplace"/>'),c=h.fn.detach?a.detach():a.remove();c=h(b).find("span.tablesorter-savemyplace");a.insertAfter(c);c.remove();b.isProcessing=!1};g.clearTableBody=function(b){h(b)[0].config.$tbodies.children().detach()};g.bindEvents=function(b,a,c){b=h(b)[0];var f,e=b.config;!0!==c&&(e.$extraHeaders=e.$extraHeaders? e.$extraHeaders.add(a):a);a.find(e.selectorSort).add(a.filter(e.selectorSort)).unbind(["mousedown","mouseup","sort","keyup",""].join(e.namespace+" ")).bind(["mousedown","mouseup","sort","keyup",""].join(e.namespace+" "),function(c,d){var g;g=c.type;if(!(1!==(c.which||c.button)&&!/sort|keyup/.test(g)||"keyup"===g&&13!==c.which||"mouseup"===g&&!0!==d&&250<(new Date).getTime()-f)){if("mousedown"===g)return f=(new Date).getTime(),/(input|select|button|textarea)/i.test(c.target.tagName)?"":!e.cancelSelection; e.delayInit&&p(e.cache)&&w(b);g=h.fn.closest?h(this).closest("th, td")[0]:/TH|TD/.test(this.tagName)?this:h(this).parents("th, td")[0];g=e.$headers[a.index(g)];g.sortDisabled||L(b,g,c)}});e.cancelSelection&&a.attr("unselectable","on").bind("selectstart",!1).css({"user-select":"none",MozUserSelect:"none"})};g.restoreHeaders=function(b){var a=h(b)[0].config;a.$table.find(a.selectorHeaders).each(function(b){h(this).find("."+g.css.headerIn).length&&h(this).html(a.headerContent[b])})};g.destroy=function(b, a,c){b=h(b)[0];if(b.hasInitialized){g.refreshWidgets(b,!0,!0);var f=h(b),e=b.config,d=f.find("thead:first"),q=d.find("tr."+g.css.headerRow).removeClass(g.css.headerRow+" "+e.cssHeaderRow),k=f.find("tfoot:first > tr").children("th, td");!1===a&&0<=h.inArray("uitheme",e.widgets)&&(f.trigger("applyWidgetId",["uitheme"]),f.trigger("applyWidgetId",["zebra"]));d.find("tr").not(q).remove();f.removeData("tablesorter").unbind("sortReset update updateAll updateRows updateCell addRows updateComplete sorton appendCache updateCache applyWidgetId applyWidgets refreshWidgets destroy mouseup mouseleave keypress sortBegin sortEnd resetToLoadState ".split(" ").join(e.namespace+ " "));e.$headers.add(k).removeClass([g.css.header,e.cssHeader,e.cssAsc,e.cssDesc,g.css.sortAsc,g.css.sortDesc,g.css.sortNone].join(" ")).removeAttr("data-column").removeAttr("aria-label").attr("aria-disabled","true");q.find(e.selectorSort).unbind(["mousedown","mouseup","keypress",""].join(e.namespace+" "));g.restoreHeaders(b);f.toggleClass(g.css.table+" "+e.tableClass+" tablesorter-"+e.theme,!1===a);b.hasInitialized=!1;delete b.config.cache;"function"===typeof c&&c(b)}};g.regex={chunk:/(^([+\-]?(?:0|[1-9]\d*)(?:\.\d*)?(?:[eE][+\-]?\d+)?)?$|^0x[0-9a-f]+$|\d+)/gi, chunks:/(^\\0|\\0$)/,hex:/^0x[0-9a-f]+$/i};g.sortNatural=function(b,a){if(b===a)return 0;var c,f,e,d,h,k;f=g.regex;if(f.hex.test(a)){c=parseInt(b.match(f.hex),16);e=parseInt(a.match(f.hex),16);if(c<e)return-1;if(c>e)return 1}c=b.replace(f.chunk,"\\0$1\\0").replace(f.chunks,"").split("\\0");f=a.replace(f.chunk,"\\0$1\\0").replace(f.chunks,"").split("\\0");k=Math.max(c.length,f.length);for(h=0;h<k;h++){e=isNaN(c[h])?c[h]||0:parseFloat(c[h])||0;d=isNaN(f[h])?f[h]||0:parseFloat(f[h])||0;if(isNaN(e)!== isNaN(d))return isNaN(e)?1:-1;typeof e!==typeof d&&(e+="",d+="");if(e<d)return-1;if(e>d)return 1}return 0};g.sortNaturalAsc=function(b,a,c,f,e){if(b===a)return 0;c=e.string[e.empties[c]||e.emptyTo];return""===b&&0!==c?"boolean"===typeof c?c?-1:1:-c||-1:""===a&&0!==c?"boolean"===typeof c?c?1:-1:c||1:g.sortNatural(b,a)};g.sortNaturalDesc=function(b,a,c,f,e){if(b===a)return 0;c=e.string[e.empties[c]||e.emptyTo];return""===b&&0!==c?"boolean"===typeof c?c?-1:1:c||1:""===a&&0!==c?"boolean"===typeof c?c? 1:-1:-c||-1:g.sortNatural(a,b)};g.sortText=function(b,a){return b>a?1:b<a?-1:0};g.getTextValue=function(b,a,c){if(c){var f=b?b.length:0,e=c+a;for(c=0;c<f;c++)e+=b.charCodeAt(c);return a*e}return 0};g.sortNumericAsc=function(b,a,c,f,e,d){if(b===a)return 0;d=d.config;e=d.string[d.empties[e]||d.emptyTo];if(""===b&&0!==e)return"boolean"===typeof e?e?-1:1:-e||-1;if(""===a&&0!==e)return"boolean"===typeof e?e?1:-1:e||1;isNaN(b)&&(b=g.getTextValue(b,c,f));isNaN(a)&&(a=g.getTextValue(a,c,f));return b-a};g.sortNumericDesc= function(b,a,c,f,e,d){if(b===a)return 0;d=d.config;e=d.string[d.empties[e]||d.emptyTo];if(""===b&&0!==e)return"boolean"===typeof e?e?-1:1:e||1;if(""===a&&0!==e)return"boolean"===typeof e?e?1:-1:-e||-1;isNaN(b)&&(b=g.getTextValue(b,c,f));isNaN(a)&&(a=g.getTextValue(a,c,f));return a-b};g.sortNumeric=function(b,a){return b-a};g.characterEquivalents={a:"\u00e1\u00e0\u00e2\u00e3\u00e4\u0105\u00e5",A:"\u00c1\u00c0\u00c2\u00c3\u00c4\u0104\u00c5",c:"\u00e7\u0107\u010d",C:"\u00c7\u0106\u010c",e:"\u00e9\u00e8\u00ea\u00eb\u011b\u0119", E:"\u00c9\u00c8\u00ca\u00cb\u011a\u0118",i:"\u00ed\u00ec\u0130\u00ee\u00ef\u0131",I:"\u00cd\u00cc\u0130\u00ce\u00cf",o:"\u00f3\u00f2\u00f4\u00f5\u00f6",O:"\u00d3\u00d2\u00d4\u00d5\u00d6",ss:"\u00df",SS:"\u1e9e",u:"\u00fa\u00f9\u00fb\u00fc\u016f",U:"\u00da\u00d9\u00db\u00dc\u016e"};g.replaceAccents=function(b){var a,c="[",d=g.characterEquivalents;if(!g.characterRegex){g.characterRegexArray={};for(a in d)"string"===typeof a&&(c+=d[a],g.characterRegexArray[a]=new RegExp("["+d[a]+"]","g"));g.characterRegex= new RegExp(c+"]")}if(g.characterRegex.test(b))for(a in d)"string"===typeof a&&(b=b.replace(g.characterRegexArray[a],a));return b};g.isValueInArray=function(b,a){var c,d=a.length;for(c=0;c<d;c++)if(a[c][0]===b)return c;return-1};g.addParser=function(b){var a,c=g.parsers.length,d=!0;for(a=0;a<c;a++)g.parsers[a].id.toLowerCase()===b.id.toLowerCase()&&(d=!1);d&&g.parsers.push(b)};g.getParserById=function(b){if("false"==b)return!1;var a,c=g.parsers.length;for(a=0;a<c;a++)if(g.parsers[a].id.toLowerCase()=== b.toString().toLowerCase())return g.parsers[a];return!1};g.addWidget=function(b){g.widgets.push(b)};g.hasWidget=function(b,a){b=h(b);return b.length&&b[0].config&&b[0].config.widgetInit[a]||!1};g.getWidgetById=function(b){var a,c,d=g.widgets.length;for(a=0;a<d;a++)if((c=g.widgets[a])&&c.hasOwnProperty("id")&&c.id.toLowerCase()===b.toLowerCase())return c};g.applyWidget=function(b,a){b=h(b)[0];var c=b.config,d=c.widgetOptions,e=[],l,p,k;!1!==a&&b.hasInitialized&&(b.isApplyingWidgets||b.isUpdating)|| (c.debug&&(l=new Date),c.widgets.length&&(b.isApplyingWidgets=!0,c.widgets=h.grep(c.widgets,function(a,b){return h.inArray(a,c.widgets)===b}),h.each(c.widgets||[],function(a,b){(k=g.getWidgetById(b))&&k.id&&(k.priority||(k.priority=10),e[a]=k)}),e.sort(function(a,b){return a.priority<b.priority?-1:a.priority===b.priority?0:1}),h.each(e,function(e,g){if(g){if(a||!c.widgetInit[g.id])c.widgetInit[g.id]=!0,g.hasOwnProperty("options")&&(d=b.config.widgetOptions=h.extend(!0,{},g.options,d)),g.hasOwnProperty("init")&& g.init(b,g,c,d);!a&&g.hasOwnProperty("format")&&g.format(b,c,d,!1)}})),setTimeout(function(){b.isApplyingWidgets=!1},0),c.debug&&(p=c.widgets.length,q("Completed "+(!0===a?"initializing ":"applying ")+p+" widget"+(1!==p?"s":""),l)))};g.refreshWidgets=function(b,a,c){b=h(b)[0];var f,e=b.config,l=e.widgets,q=g.widgets,k=q.length;for(f=0;f<k;f++)q[f]&&q[f].id&&(a||0>h.inArray(q[f].id,l))&&(e.debug&&d('Refeshing widgets: Removing "'+q[f].id+'"'),q[f].hasOwnProperty("remove")&&e.widgetInit[q[f].id]&&(q[f].remove(b, e,e.widgetOptions),e.widgetInit[q[f].id]=!1));!0!==c&&g.applyWidget(b,a)};g.getData=function(b,a,c){var d="";b=h(b);var e,g;if(!b.length)return"";e=h.metadata?b.metadata():!1;g=" "+(b.attr("class")||"");"undefined"!==typeof b.data(c)||"undefined"!==typeof b.data(c.toLowerCase())?d+=b.data(c)||b.data(c.toLowerCase()):e&&"undefined"!==typeof e[c]?d+=e[c]:a&&"undefined"!==typeof a[c]?d+=a[c]:" "!==g&&g.match(" "+c+"-")&&(d=g.match(new RegExp("\\s"+c+"-([\\w-]+)"))[1]||"");return h.trim(d)};g.formatFloat= function(b,a){if("string"!==typeof b||""===b)return b;var c;b=(a&&a.config?!1!==a.config.usNumberFormat:"undefined"!==typeof a?a:1)?b.replace(/,/g,""):b.replace(/[\s|\.]/g,"").replace(/,/g,".");/^\s*\([.\d]+\)/.test(b)&&(b=b.replace(/^\s*\(([.\d]+)\)/,"-$1"));c=parseFloat(b);return isNaN(c)?h.trim(b):c};g.isDigit=function(b){return isNaN(b)?/^[\-+(]?\d+[)]?$/.test(b.toString().replace(/[,.'"\s]/g,"")):!0}}});var r=h.tablesorter;h.fn.extend({tablesorter:r.construct});r.addParser({id:"no-parser",is:function(){return!1}, format:function(){return""},type:"text"});r.addParser({id:"text",is:function(){return!0},format:function(d,q){var p=q.config;d&&(d=h.trim(p.ignoreCase?d.toLocaleLowerCase():d),d=p.sortLocaleCompare?r.replaceAccents(d):d);return d},type:"text"});r.addParser({id:"digit",is:function(d){return r.isDigit(d)},format:function(d,q){var p=r.formatFloat((d||"").replace(/[^\w,. \-()]/g,""),q);return d&&"number"===typeof p?p:d?h.trim(d&&q.config.ignoreCase?d.toLocaleLowerCase():d):d},type:"numeric"});r.addParser({id:"currency", is:function(d){return/^\(?\d+[\u00a3$\u20ac\u00a4\u00a5\u00a2?.]|[\u00a3$\u20ac\u00a4\u00a5\u00a2?.]\d+\)?$/.test((d||"").replace(/[+\-,. ]/g,""))},format:function(d,q){var p=r.formatFloat((d||"").replace(/[^\w,. \-()]/g,""),q);return d&&"number"===typeof p?p:d?h.trim(d&&q.config.ignoreCase?d.toLocaleLowerCase():d):d},type:"numeric"});r.addParser({id:"ipAddress",is:function(d){return/^\d{1,3}[\.]\d{1,3}[\.]\d{1,3}[\.]\d{1,3}$/.test(d)},format:function(d,h){var p,y=d?d.split("."):"",v="",w=y.length; for(p=0;p<w;p++)v+=("00"+y[p]).slice(-3);return d?r.formatFloat(v,h):d},type:"numeric"});r.addParser({id:"url",is:function(d){return/^(https?|ftp|file):\/\//.test(d)},format:function(d){return d?h.trim(d.replace(/(https?|ftp|file):\/\//,"")):d},parsed:!0,type:"text"});r.addParser({id:"isoDate",is:function(d){return/^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}/.test(d)},format:function(d,h){return d?r.formatFloat(""!==d?(new Date(d.replace(/-/g,"/"))).getTime()||d:"",h):d},type:"numeric"});r.addParser({id:"percent", is:function(d){return/(\d\s*?%|%\s*?\d)/.test(d)&&15>d.length},format:function(d,h){return d?r.formatFloat(d.replace(/%/g,""),h):d},type:"numeric"});r.addParser({id:"usLongDate",is:function(d){return/^[A-Z]{3,10}\.?\s+\d{1,2},?\s+(\d{4})(\s+\d{1,2}:\d{2}(:\d{2})?(\s+[AP]M)?)?$/i.test(d)||/^\d{1,2}\s+[A-Z]{3,10}\s+\d{4}/i.test(d)},format:function(d,h){return d?r.formatFloat((new Date(d.replace(/(\S)([AP]M)$/i,"$1 $2"))).getTime()||d,h):d},type:"numeric"});r.addParser({id:"shortDate",is:function(d){return/(^\d{1,2}[\/\s]\d{1,2}[\/\s]\d{4})|(^\d{4}[\/\s]\d{1,2}[\/\s]\d{1,2})/.test((d|| "").replace(/\s+/g," ").replace(/[\-.,]/g,"/"))},format:function(d,h,p,y){if(d){p=h.config;var v=p.$headers.filter("[data-column="+y+"]:last");y=v.length&&v[0].dateFormat||r.getData(v,r.getColumnData(h,p.headers,y),"dateFormat")||p.dateFormat;d=d.replace(/\s+/g," ").replace(/[\-.,]/g,"/");"mmddyyyy"===y?d=d.replace(/(\d{1,2})[\/\s](\d{1,2})[\/\s](\d{4})/,"$3/$1/$2"):"ddmmyyyy"===y?d=d.replace(/(\d{1,2})[\/\s](\d{1,2})[\/\s](\d{4})/,"$3/$2/$1"):"yyyymmdd"===y&&(d=d.replace(/(\d{4})[\/\s](\d{1,2})[\/\s](\d{1,2})/, "$1/$2/$3"))}return d?r.formatFloat((new Date(d)).getTime()||d,h):d},type:"numeric"});r.addParser({id:"time",is:function(d){return/^(([0-2]?\d:[0-5]\d)|([0-1]?\d:[0-5]\d\s?([AP]M)))$/i.test(d)},format:function(d,h){return d?r.formatFloat((new Date("2000/01/01 "+d.replace(/(\S)([AP]M)$/i,"$1 $2"))).getTime()||d,h):d},type:"numeric"});r.addParser({id:"metadata",is:function(){return!1},format:function(d,q,p){d=q.config;d=d.parserMetadataName?d.parserMetadataName:"sortValue";return h(p).metadata()[d]}, type:"numeric"});r.addWidget({id:"zebra",priority:90,format:function(d,q,p){var y,v,w,z,D,E=new RegExp(q.cssChildRow,"i"),C=q.$tbodies;q.debug&&(D=new Date);for(d=0;d<C.length;d++)w=0,y=C.eq(d),y=y.children("tr:visible").not(q.selectorRemove),y.each(function(){v=h(this);E.test(this.className)||w++;z=0===w%2;v.removeClass(p.zebra[z?1:0]).addClass(p.zebra[z?0:1])});q.debug&&r.benchmark("Applying Zebra widget",D)},remove:function(d,q,p){var r;q=q.$tbodies;var v=(p.zebra||["even","odd"]).join(" ");for(p= 0;p<q.length;p++)r=h.tablesorter.processTbody(d,q.eq(p),!0),r.children().removeClass(v),h.tablesorter.processTbody(d,r,!1)}})}(jQuery);

//就绪处理函数
$(function () {
    //使表格变成可排序
    $('#enabledTeachers').tablesorter({
        theme: 'blue',
        widgets: ['zebra', 'columns'],
        usNumberFormat: false,
        sortReset: true,
        sortRestart: true,
        sortList: [[0, 0], [1, 0]],
        headers: {
            0: {sorter: false},
            1: {sorter: false},
            5: {sorter: false}
        }
    });
    
    //实现全选或者全不选功能
    $("#checkAll").click(function () {
        if ($(this)[0].checked) {
            isCheckAll(true);
        } else {
            isCheckAll(false);
        }
    });
    $('#flash_message').fadeIn('slow');
    
    //设置flash message 显示时间
    setTimeout(
        function(){
            $('#flash_message').fadeOut('slow');
        },
        1000
        );

});


//删除教师确认
function delconfirm(username){			//定义函数
	if(window.confirm('您确定删除'+username+'吗?')==true){		//函数执行的操作
            $.ajax({
                type: 'POST',
                url: '/admin/delete_teacher/'+username,
                data: {
                    del_username: username
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("删除成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("删除失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
	}
}

//删除选中到教师
function deleteSelectedTeachers(){
    var checkedValues = selectedValues();
    //console.log(JSON.stringify(checkedValues));
    if(!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定删除选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_selectedTeachers',
                data: {
                    selectTeachers: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选删除成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选删除失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        }
    }
    
}


//失效选中的教师
function deactiveSelectedTeachers(){
    var checkedValues = selectedValues();
    //console.log(JSON.stringify(checkedValues));
    if (!jQuery.isEmptyObject(checkedValues)) {
        if (window.confirm('您确定失效选中项吗?') == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/deactive_selectedTeachers',
                data: {
                    selectTeachers: checkedValues
                },
                dataType: 'json',
                timeout: 5000,
                async: true,
                success: function (data) {
                    if (data.success) {
                        //console.log("勾选项激活成功！正在更新显示...", 2000, 'TIP');
                        window.location.reload(true);
                    } else {
                        //console.log("勾选项激活失败!");
                        window.location.reload(true);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    //console.log("error " + textStatus);
                    //console.log("网络或服务器异常！" + 'ERROR');
                }
            });
        }
    }
    
}