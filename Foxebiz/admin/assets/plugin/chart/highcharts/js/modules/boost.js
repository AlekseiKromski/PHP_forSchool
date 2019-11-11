/*
 Highcharts JS v5.0.2 (2016-10-26)
 Boost module

 (c) 2010-2016 Highsoft AS
 Author: Torstein Honsi

 License: www.highcharts.com/license
*/
(function(p){"object"===typeof module&&module.exports?module.exports=p:p(Highcharts)})(function(p){(function(f){function p(a,b,c,e,h){h=h||0;e=e||5E4;for(var k=h+e,f=!0;f&&h<k&&h<a.length;)f=b(a[h],h),h+=1;f&&(h<a.length?setTimeout(function(){p(a,b,c,e,h)}):c&&c())}var x=f.win.document,U=function(){},V=f.Color,n=f.Series,d=f.seriesTypes,q=f.each,y=f.extend,W=f.addEvent,X=f.fireEvent,z=f.grep,u=f.isNumber,Y=f.merge,Z=f.pick,l=f.wrap,v=f.getOptions().plotOptions,F;q(["area","arearange","column","line",
"scatter"],function(a){v[a]&&(v[a].boostThreshold=5E3)});q(["translate","generatePoints","drawTracker","drawPoints","render"],function(a){function b(b){var c=this.options.stacking&&("translate"===a||"generatePoints"===a);if((this.processedXData||this.options.data).length<(this.options.boostThreshold||Number.MAX_VALUE)||c)"render"===a&&this.image&&(this.image.attr({href:""}),this.animate=null),b.call(this);else if(this[a+"Canvas"])this[a+"Canvas"]()}l(n.prototype,a,b);"translate"===a&&(d.column&&l(d.column.prototype,
a,b),d.arearange&&l(d.arearange.prototype,a,b))});l(n.prototype,"getExtremes",function(a){this.hasExtremes()||a.apply(this,Array.prototype.slice.call(arguments,1))});l(n.prototype,"setData",function(a){this.hasExtremes(!0)||a.apply(this,Array.prototype.slice.call(arguments,1))});l(n.prototype,"processData",function(a){this.hasExtremes(!0)||a.apply(this,Array.prototype.slice.call(arguments,1))});f.extend(n.prototype,{pointRange:0,allowDG:!1,hasExtremes:function(a){var b=this.options,c=this.xAxis&&
this.xAxis.options,e=this.yAxis&&this.yAxis.options;return b.data.length>(b.boostThreshold||Number.MAX_VALUE)&&u(e.min)&&u(e.max)&&(!a||u(c.min)&&u(c.max))},destroyGraphics:function(){var a=this,b=this.points,c,e;if(b)for(e=0;e<b.length;e+=1)(c=b[e])&&c.graphic&&(c.graphic=c.graphic.destroy());q(["graph","area","tracker"],function(b){a[b]&&(a[b]=a[b].destroy())})},getContext:function(){var a=this.chart,b=a.plotWidth,c=a.plotHeight,e=this.ctx,h=function(a,b,c,e,h,f,d){a.call(this,c,b,e,h,f,d)};this.canvas?
e.clearRect(0,0,b,c):(this.canvas=x.createElement("canvas"),this.image=a.renderer.image("",0,0,b,c).add(this.group),this.ctx=e=this.canvas.getContext("2d"),a.inverted&&q(["moveTo","lineTo","rect","arc"],function(a){l(e,a,h)}));this.canvas.width=b;this.canvas.height=c;this.image.attr({width:b,height:c});return e},canvasToSVG:function(){this.image.attr({href:this.canvas.toDataURL("image/png")})},cvsLineTo:function(a,b,c){a.lineTo(b,c)},renderCanvas:function(){var a=this,b=a.options,c=a.chart,e=this.xAxis,
h=this.yAxis,k,d=0,l=a.processedXData,n=a.processedYData,q=b.data,m=e.getExtremes(),v=m.min,x=m.max,m=h.getExtremes(),z=m.min,aa=m.max,G={},A,ba=!!a.sampling,H,I=b.marker&&b.marker.radius,J=this.cvsDrawPoint,B=b.lineWidth?this.cvsLineTo:!1,K=1>=I?this.cvsMarkerSquare:this.cvsMarkerCircle,ca=!1!==b.enableMouseTracking,L,m=b.threshold,r=h.getThreshold(m),M=u(m),N=r,da=this.fill,O=a.pointArrayMap&&"low,high"===a.pointArrayMap.join(","),P=!!b.stacking,ea=a.cropStart||0,m=c.options.loading,fa=a.requireSorting,
Q,ga=b.connectNulls,R=!l,C,D,t,w,ha=a.fillOpacity?(new V(a.color)).setOpacity(Z(b.fillOpacity,.75)).get():a.color,S=function(){da?(k.fillStyle=ha,k.fill()):(k.strokeStyle=a.color,k.lineWidth=b.lineWidth,k.stroke())},T=function(a,b,c){0===d&&(k.beginPath(),B&&(k.lineJoin="round"));Q?k.moveTo(a,b):J?J(k,a,b,c,L):B?B(k,a,b):K&&K(k,a,b,I);d+=1;1E3===d&&(S(),d=0);L={clientX:a,plotY:b,yBottom:c}},E=function(a,b,f){ca&&!G[a+","+b]&&(G[a+","+b]=!0,c.inverted&&(a=e.len-a,b=h.len-b),H.push({clientX:a,plotX:a,
plotY:b,i:ea+f}))};(this.points||this.graph)&&this.destroyGraphics();a.plotGroup("group","series",a.visible?"visible":"hidden",b.zIndex,c.seriesGroup);a.markerGroup=a.group;W(a,"destroy",function(){a.markerGroup=null});H=this.points=[];k=this.getContext();a.buildKDTree=U;99999<q.length&&(c.options.loading=Y(m,{labelStyle:{backgroundColor:f.color("#ffffff").setOpacity(.75).get(),padding:"1em",borderRadius:"0.5em"},style:{backgroundColor:"none",opacity:1}}),clearTimeout(F),c.showLoading("Drawing..."),
c.options.loading=m);p(P?a.data:l||q,function(b,f){var d,g,k,l="undefined"===typeof c.index,m=!0;if(!l){R?(d=b[0],g=b[1]):(d=b,g=n[f]);O?(R&&(g=b.slice(1,3)),k=g[0],g=g[1]):P&&(d=b.x,g=b.stackY,k=g-b.y);b=null===g;fa||(m=g>=z&&g<=aa);if(!b&&d>=v&&d<=x&&m)if(d=Math.round(e.toPixels(d,!0)),ba){if(void 0===t||d===A){O||(k=g);if(void 0===w||g>D)D=g,w=f;if(void 0===t||k<C)C=k,t=f}d!==A&&(void 0!==t&&(g=h.toPixels(D,!0),r=h.toPixels(C,!0),T(d,M?Math.min(g,N):g,M?Math.max(r,N):r),E(d,g,w),r!==g&&E(d,r,t)),
t=w=void 0,A=d)}else g=Math.round(h.toPixels(g,!0)),T(d,g,r),E(d,g,f);Q=b&&!ga;0===f%5E4&&a.canvasToSVG()}return!l},function(){var b=c.loadingDiv,e=c.loadingShown;S();a.canvasToSVG();X(a,"renderedCanvas");e&&(y(b.style,{transition:"opacity 250ms",opacity:0}),c.loadingShown=!1,F=setTimeout(function(){b.parentNode&&b.parentNode.removeChild(b);c.loadingDiv=c.loadingSpan=null},250));a.directTouch=!1;a.options.stickyTracking=!0;delete a.buildKDTree;a.buildKDTree()},c.renderer.forExport?Number.MAX_VALUE:
void 0)}});d.scatter.prototype.cvsMarkerCircle=function(a,b,c,e){a.moveTo(b,c);a.arc(b,c,e,0,2*Math.PI,!1)};d.scatter.prototype.cvsMarkerSquare=function(a,b,c,e){a.rect(b-e,c-e,2*e,2*e)};d.scatter.prototype.fill=!0;y(d.area.prototype,{cvsDrawPoint:function(a,b,c,e,d){d&&b!==d.clientX&&(a.moveTo(d.clientX,d.yBottom),a.lineTo(d.clientX,d.plotY),a.lineTo(b,c),a.lineTo(b,e))},fill:!0,fillOpacity:!0,sampling:!0});y(d.column.prototype,{cvsDrawPoint:function(a,b,c,d){a.rect(b-1,c,1,d-c)},fill:!0,sampling:!0});
n.prototype.getPoint=function(a){var b=a;!a||a instanceof this.pointClass||(b=(new this.pointClass).init(this,this.options.data[a.i]),b.category=b.x,b.dist=a.dist,b.distX=a.distX,b.plotX=a.plotX,b.plotY=a.plotY);return b};l(n.prototype,"destroy",function(a){var b=this,c=b.chart;c.hoverPoints&&(c.hoverPoints=z(c.hoverPoints,function(a){return a.series===b}));c.hoverPoint&&c.hoverPoint.series===b&&(c.hoverPoint=null);a.call(this)});l(n.prototype,"searchPoint",function(a){return this.getPoint(a.apply(this,
[].slice.call(arguments,1)))})})(p)});
