/* skel.js | (c) n33 | n33.co | MIT licensed */
skel.registerPlugin("layers",function(e){function un(e,r,i){var o,u;this.id=e,this.index=i,this[n]={breakpoints:L,states:L,position:L,side:L,animation:Rt,orientation:Xt,width:0,height:0,zIndex:this.index,html:"",hidden:H,exclusive:Nt,resetScroll:Nt,resetForms:Nt,swipeToClose:Nt,clickToClose:H},t._.extend(this[n],r),this[z]=t._.newDiv(this[n].html),this[z].id=e,this[z]._layer=this,this[s]=L,this[et]=L,this[vt]=L,this[It]=H,u=t._.cacheElement(this.id,this[z],Y,1),u.onAttach=function(){var e=this.object._layer;e[G]()||e.init(),e.resume()},u.onDetach=function(){var e=this.object._layer;e.suspend()},this[n].states?(o=t._[rn](this[n].states),t._[Bt](o,function(e){t._.addCachedElementToState(t._.sd+o[e],u)})):(this[n].breakpoints?o=t._[rn](this[n].breakpoints):o=t._.breakpointList,t._[Bt](o,function(e){t._.addCachedElementToBreakpoint(o[e],u)}))}var t,n="config",r="_skel_layers_translateOrigin",i="cache",s="$element",o="_skel_layers_translate",u="_skel_layers_resetForms",f="_skel_layers_resume",l="_skel_layers_promote",c="activeWrapper",h="exclusiveLayer",p="moveToInactiveWrapper",d="_skel_layers_demote",v="moveToActiveWrapper",m="setTimeout",g="right",y="bottom",b="width",w="scrollTop",E="css",S="useActive",x="center",T="_skel_layers_suspend",N="position",C="prototype",k="left",L=null,A="deactivate",O="wrapper",M="skel-layers-layer-z-index",_="children",D="_skel_layers_init",P="length",H=!1,B="inactiveWrapper",j="deviceType",F="top",I="touchstart.lock click.lock scroll.lock",q="height",R="window",U="transform",z="element",W="recalcW",X="stopPropagation",V="resetForms",$="overflow-x",J="preventDefault",K="-webkit-",Q="padding-bottom",G="isInitialized",Y="skel_layers_inactiveWrapper",Z="-webkit-tap-highlight-color",et="touchPosX",tt="originalEvent",nt="skel-layers-layer-position",rt="z-index",it="skel-layers-layer-index",st="unlockView",ot="animations",ut='<div id="skel-layers-tmp-',at="hidden",ft="_skel_layers_initializeCell",lt="find",ct="resize.lock scroll.lock",ht="registerLocation",pt="orientationchange.lock",dt="speed",vt="touchPosY",mt="positions",gt="animation",yt="_skel_layers_expandCell",bt="-moz-",wt="attr",Et="_skel_layers_hasParent",St="append",xt="#skel-layers-tmp-",Tt="lockView",Nt=!0,Ct="-ms-",kt="isTouch",Lt="_skel_layers_scrollPos",At="auto",Ot="transformBreakpoints",Mt="_skel_layers_xcss",_t="-o-",Dt="visible",Pt="recalcH",Ht="rgba(0,0,0,0)",Bt="iterate",jt="cell-size",Ft="px",It="active",qt="string",Rt="none",Ut="activate",zt="appendTo",Wt="vars",Xt="vertical",Vt="click",$t="-",Jt="touches",Kt="body",Qt="side",Gt="overflow-",Yt="layers",Zt="relative",en="#",tn="pointer",nn="android",rn="getArray",sn="transformTest",on="*";return typeof e=="undefined"?H:(e.fn[Et]=function(){return e(this).parents()[P]>0},e.fn[l]=function(r){var i,s,o;if(this[P]>1){for(i=0;i<this[P];i++)e(this[i])[l](r);return e(this)}return s=e(this),isNaN(o=parseInt(s.data(it)))&&(o=0),s.data(M,s[E](rt))[E](rt,t[n].baseZIndex+o+(r?r:1)),s},e.fn[d]=function(){var t,n;if(this[P]>1){for(t=0;t<this[P];t++)e(this[t])[d]();return e(this)}return n=e(this),n[E](rt,n.data(M)).data(M,""),n},e.fn._skel_layers_xcssValue=function(t,n){return e(this)[E](t,n)[E](t,bt+n)[E](t,K+n)[E](t,_t+n)[E](t,Ct+n)},e.fn._skel_layers_xcssProperty=function(t,n){return e(this)[E](t,n)[E](bt+t,n)[E](K+t,n)[E](_t+t,n)[E](Ct+t,n)},e.fn[Mt]=function(t,n){return e(this)[E](t,n)[E](bt+t,bt+n)[E](K+t,K+n)[E](_t+t,_t+n)[E](Ct+t,Ct+n)},e.fn[u]=function(){var t=e(this);return e(this)[lt]("form").each(function(){this.reset()}),t},e.fn[ft]=function(){var t=e(this);t[wt]("class").match(/(\s+|^)([0-9]+)u(\s+|$)/)&&t.data(jt,parseInt(RegExp.$2))},e.fn[yt]=function(){var t=e(this),n=t.parent(),r=12;n[_]().each(function(){var t=e(this),n=t[wt]("class");n&&n.match(/(\s+|^)([0-9]+)u(\s+|$)/)&&(r-=parseInt(RegExp.$2))}),r>0&&(t[ft](),t[E](b,(t.data(jt)+r)/12*100+"%"))},un[C][mt]={"top-left":{v:F,h:k,side:k},"top-right":{v:F,h:g,side:g},top:{v:F,h:x,side:F},"top-center":{v:F,h:x,side:F},"bottom-left":{v:y,h:k,side:k},"bottom-right":{v:y,h:g,side:g},bottom:{v:y,h:x,side:y},"bottom-center":{v:y,h:x,side:y},left:{v:x,h:k,side:k},"center-left":{v:x,h:k,side:k},right:{v:x,h:g,side:g},"center-right":{v:x,h:g,side:g}},un[C][ot]={none:{activate:function(e){var t=e[n],r=e[s];r[w](0)[l](t.zIndex).show(),t[V]&&r[u](),e[v]()},deactivate:function(e){var t=e[n],r=e[s];r.hide()[d](),e[p]()}},overlayX:{activate:function(e){var r=e[n],i=e[s];i[w](0)[l](r.zIndex)[E](r[Qt],$t+t[W](t._[S](r[b]))+Ft).show(),r[V]&&i[u](),t[Tt]("x"),e[v](),window[m](function(){i[o]((r[Qt]==g?$t:"")+t[W](t._[S](r[b])),0)},50)},deactivate:function(e){var i=e[n],o=e[s];o[lt](on).blur(),o[r](),window[m](function(){t[st]("x"),e[p](),o[d]().hide()},t[n][dt]+50)}},overlayY:{activate:function(e){var r=e[n],i=e[s];i[w](0)[l](r.zIndex)[E](r[Qt],$t+t[W](t._[S](r[q]))+Ft).show(),r[V]&&i[u](),t[Tt]("y"),e[v](),window[m](function(){i[o](0,(r[Qt]==y?$t:"")+t[W](t._[S](r[q])))},50)},deactivate:function(e){var i=e[n],o=e[s];o[lt](on).blur(),o[r](),window[m](function(){t[st]("y"),e[p](),o[d]().hide()},t[n][dt]+50)}},pushX:{activate:function(e){var r=e[n],a=e[s],f=t[i][O].add(t[i][c][_]());a[w](0)[E](r[Qt],$t+t[W](t._[S](r[b]))+Ft).show(),r[V]&&a[u](),f[l](),t[Tt]("x"),e[v](),window[m](function(){a.add(f)[o]((r[Qt]==g?$t:"")+t[W](t._[S](r[b])),0)},50)},deactivate:function(e){var o=e[n],u=e[s],a=t[i][O].add(t[i][c][_]());u[lt](on).blur(),u.add(a)[r](),window[m](function(){t[st]("x"),u.hide(),e[p](),a[d]()},t[n][dt]+50)}},pushY:{activate:function(e){var r=e[n],a=e[s],f=t[i][O].add(t[i][c][_]());a[w](0)[E](r[Qt],$t+t[Pt](t._[S](r[q]))+Ft).show(),r[V]&&a[u](),t[Tt]("y"),e[v](),window[m](function(){a.add(f)[o](0,(r[Qt]==y?$t:"")+t[Pt](t._[S](r[q])))},50)},deactivate:function(e){var o=e[n],u=e[s],a=t[i][O].add(t[i][c][_]());u[lt](on).blur(),u.add(a)[r](),window[m](function(){t[st]("y"),u.hide(),e[p]()},t[n][dt]+50)}},revealX:{activate:function(e){var r=e[n],a=e[s],f=t[i][O].add(t[i][c][_]());a[w](0).show(),r[V]&&a[u](),f[l](),t[Tt]("x"),e[v](),window[m](function(){f[o]((r[Qt]==g?$t:"")+t[W](t._[S](r[b])),0)},50)},deactivate:function(e){var o=e[n],u=e[s],a=t[i][O].add(t[i][c][_]());u[lt](on).blur(),a[r](),window[m](function(){t[st]("x"),u.hide(),a[d](),e[p]()},t[n][dt]+50)}}},un[C][v]=function(){t[i][c][St](this[s])},un[C][p]=function(){if(!this[s][Et]())return;t[i][B][St](this[s])},un[C][A]=function(){var e,r;if(!this[It]){t[i][B][St](this[z]);return}e=this[n],r=this[n][gt],r in this[ot]||(r=Rt),this[ot][r][A](this),e[at]&&e.exclusive&&t[i][h]===this&&(t[i][h]=L),this[It]=H},un[C][Ut]=function(){var e,r,o;if(this[It]){t[i][c][St](this[z]);return}e=this[n],r=this[s],t._[Wt][j]=="ios"&&e[at]?r[E](b,t[W](t._[S](e[b]))+Ft)[E](q,t[Pt](t._[S](e[q]))+Ft):r[E](q,t._[S](e[q]))[E](b,t._[S](e[b])),o=this[mt][e[N]],r.addClass("skel-layer-"+e[N]).data(nt,e[N]);switch(o.v){case F:r[E](F,0);break;case y:r[E](y,0);break;case x:r[E](F,"50%")[E]("margin-top",$t+t.getHalf(e[q]))}switch(o.h){case k:r[E](k,0);break;case g:r[E](g,0);break;case x:r[E](k,"50%")[E]("margin-left",$t+t.getHalf(e[b]))}this[ot][e[gt]][Ut](this),e[at]&&e.exclusive&&(t[i][h]=this),this[It]=Nt},un[C][G]=function(){return this[s]!==L},un[C].isVisible=function(){return this[s].is(":visible")},un[C].resume=function(r){if(!this[G]())return;this[s][lt](on).each(function(){t.parseResume(e(this))}),this[n][at]||this[Ut](r)},un[C].suspend=function(){if(!this[G]())return;this[s][r](),this[s][lt](on).each(function(){t.parseSuspend(e(this))}),this[It]&&this[A]()},un[C].init=function(){var r=this[n],o=e(this[z]),u=this;o[D](),o[lt](on).each(function(){t.parseInit(e(this))}),o.addClass("skel-layer").data(it,this.index)[E](rt,t[n].baseZIndex)[E](N,"fixed")[E]("-ms-overflow-style","-ms-autohiding-scrollbar")[E]("-webkit-overflow-scrolling","touch").hide();switch(r.orientation){case Xt:o[E]("overflow-y",At);break;case"horizontal":o[E]($,At)}if(!r[N]||!(r[N]in this[mt]))r[N]="top-left";r[Qt]||(r[Qt]=this[mt][r[N]][Qt]);if(!r[gt]||!(r[gt]in this[ot]))r[gt]=Rt;r.clickToClose&&o[lt]("a")[E](Z,Ht).on("click.skel-layers",function(r){var i,s,o=e(this);if(o.hasClass("skel-layers-ignore"))return;r[J](),r[X](),u[A]();if(o.hasClass("skel-layers-ignoreHref"))return;i=o[wt]("href"),s=o[wt]("target"),window[m](function(){s=="_blank"&&t._[Wt][j]!="wp"?window.open(i):window.location.href=i},t[n][dt]+10)}),t._[Wt][j]=="ios"&&o[lt]("input,select,textarea").on("focus",function(n){var r=e(this);n[J](),n[X](),window[m](function(){var e=t[i][R][Lt],n=t[i][R][w]()-e;t[i][R][w](e),o[w](o[w]()+n),r.hide(),window[m](function(){r.show()},0)},100)}),t._[Wt][kt]&&o.on("touchstart",function(e){u[et]=e[tt][Jt][0].pageX,u[vt]=e[tt][Jt][0].pageY}).on("touchmove",function(e){var t,n,i,s,a,f,l;if(u[et]===L||u[vt]===L)return;t=u[et]-e[tt][Jt][0].pageX,n=u[vt]-e[tt][Jt][0].pageY,i=o.outerHeight(),s=o.get(0).scrollHeight-o[w]();if(r.swipeToClose){a=H,f=20,l=50;switch(r[Qt]){case k:a=n<f&&n>-1*f&&t>l;break;case g:a=n<f&&n>-1*f&&t<-1*l;break;case F:a=t<f&&t>-1*f&&n>l;break;case y:a=t<f&&t>-1*f&&n<-1*l}if(a)return u[et]=L,u[vt]=L,u[A](),H}if(o[w]()==0&&n<0||s>i-2&&s<i+2&&n>0)return H}),this[s]=o},t={config:{baseZIndex:1e4,transform:Nt,transformBreakpoints:L,transformTest:L,speed:250,layers:{}},cache:{layers:{},body:L,window:L,wrapper:L,inactiveWrapper:L,activeWrapper:L,exclusiveLayer:L},eventType:Vt,recalcW:function(t){var n=parseInt(t);return typeof t==qt&&t.charAt(t[P]-1)=="%"&&(n=Math.floor(e(window)[b]()*(n/100))),n},recalcH:function(t){var n=parseInt(t);return typeof t==qt&&t.charAt(t[P]-1)=="%"&&(n=Math.floor(e(window)[q]()*(n/100))),n},getHalf:function(e){var t=parseInt(e);return typeof e==qt&&e.charAt(e[P]-1)=="%"?Math.floor(t/2)+"%":Math.floor(t/2)+Ft},parseSuspend:function(e){var t=e.get(0);t[T]&&t[T]()},parseResume:function(e){var t=e.get(0);t[f]&&t[f]()},parseInit:function(n){var r,s,o=n.get(0),u=n[wt]("data-action"),a=n[wt]("data-args"),l,c;u&&a&&(a=a.split(","));switch(u){case"toggleLayer":case"layerToggle":n[E](Z,Ht)[E]("cursor",tn),r=function(n){n[J](),n[X]();if(t[i][h])return t[i][h][A](),H;var r=e(this),s=t[i][Yt][a[0]];s.isVisible()?s[A]():s[Ut]()},t._[Wt][j]==nn||t._[Wt][j]=="wp"?n.on(Vt,r):n.on(t.eventType,r);break;case"navList":l=e(en+a[0]),r=l[lt]("a"),s=[],r.each(function(){var t=e(this),n;n=Math.max(0,t.parents("li")[P]-1),s.push('<a class="link depth-'+n+'" href="'+t[wt]("href")+'"><span class="indent-'+n+'"></span>'+t.text()+"</a>")}),s[P]>0&&n.html("<nav>"+s.join("")+"</nav>"),n[lt](".link")[E]("cursor",tn)[E]("display","block");break;case"copyText":l=e(en+a[0]),n.html(l.text());break;case"copyHTML":l=e(en+a[0]),n.html(l.html());break;case"moveElementContents":l=e(en+a[0]),o[f]=function(){l[_]().each(function(){n[St](e(this))})},o[T]=function(){n[_]().each(function(){l[St](e(this))})},o[f]();break;case"moveElement":l=e(en+a[0]),o[f]=function(){e(ut+l[wt]("id")+'" />').insertBefore(l),n[St](l)},o[T]=function(){e(xt+l[wt]("id")).replaceWith(l)},o[f]();break;case"moveCell":l=e(en+a[0]),c=e(en+a[1]),o[f]=function(){e(ut+l[wt]("id")+'" />').insertBefore(l),n[St](l),l[E](b,At),c&&c[yt]()},o[T]=function(){e(xt+l[wt]("id")).replaceWith(l),l[E](b,""),c&&c[E](b,"")},o[f]();break;default:}},lockView:function(e){t[i][R][Lt]=t[i][R][w](),t._[Wt][kt]&&t[i][Kt][E](Gt+e,at),t[i][O].on(I,function(e){e[J](),e[X](),t[i][h]&&t[i][h][A]()}),t[i][R].on(pt,function(e){t[i][h]&&t[i][h][A]()}),t._[Wt][kt]||t[i][R].on(ct,function(e){t[i][h]&&t[i][h][A]()})},unlockView:function(e){t._[Wt][kt]&&t[i][Kt][E](Gt+e,Dt),t[i][O].off(I),t[i][R].off(pt),t._[Wt][kt]||t[i][R].off(ct)},initLayers:function(){var r,s,o,u=1;t._[Bt](t[n][Yt],function(r){var s;if(!t[n][Yt][r].html&&(s=e(en+r))[P]==0)return;o=new un(r,t[n][Yt][r],u++),t[i][Yt][r]=o,s&&(s[_]()[zt](o[z]),s.remove())})},initTransforms:function(){if(t[n][U])e.fn[r]=function(){return e(this)[o](0,0)},e.fn[o]=function(t,n){return e(this)[E](U,"translate("+t+"px, "+n+"px)")},e.fn[D]=function(){return e(this)[E]("backface-visibility",at)[E]("perspective","500")[Mt]("transition","transform "+t[n][dt]/1e3+"s ease-in-out")};else{var s,u=[];t[i][R].resize(function(){if(t[n][dt]!=0){var e=t[n][dt];t[n][dt]=0,window[m](function(){t[n][dt]=e,u=[]},e)}}),e.fn[r]=function(){for(var r=0;r<this[P];r++){var s=this[r],o=e(s);u[s.id]&&o.animate(u[s.id],t[n][dt],"swing",function(){t._[Bt](u[s.id],function(e){o[E](e,u[s.id][e])}),t[i][Kt][E]($,Dt),t[i][O][E](b,At)[E](Q,0)})}return e(this)},e.fn[o]=function(r,s){var o,f,l,c;r=parseInt(r),s=parseInt(s),r!=0?(t[i][Kt][E]($,at),t[i][O][E](b,t[i][R][b]())):l=function(){t[i][Kt][E]($,Dt),t[i][O][E](b,At)},s<0?t[i][O][E](Q,Math.abs(s)):c=function(){t[i][O][E](Q,0)};for(o=0;o<this[P];o++){var h=this[o],p=e(h),d;if(!u[h.id])if(d=un[C][mt][p.data(nt)]){u[h.id]={};switch(d.v){case x:case F:u[h.id][F]=parseInt(p[E](F));break;case y:u[h.id][y]=parseInt(p[E](y))}switch(d.h){case x:case k:u[h.id][k]=parseInt(p[E](k));break;case g:u[h.id][g]=parseInt(p[E](g))}}else d=p[N](),u[h.id]={top:d[F],left:d[k]};a={},t._[Bt](u[h.id],function(e){var n;switch(e){case F:n=t[Pt](u[h.id][e])+s;break;case y:n=t[Pt](u[h.id][e])-s;break;case k:n=t[W](u[h.id][e])+r;break;case g:n=t[W](u[h.id][e])-r}a[e]=n}),p.animate(a,t[n][dt],"swing",function(){l&&l(),c&&c()})}return e(this)},e.fn[D]=function(){return e(this)[E](N,"absolute")}}},initObjects:function(){t[i][R]=e(window),t[i][R].load(function(){t[i][R][w]()==0&&window.scrollTo(0,1)}),t._.DOMReady(function(){t[i][Kt]=e(Kt),t[i][Kt].wrapInner('<div id="skel-layers-wrapper" />'),t[i][O]=e("#skel-layers-wrapper"),t[i][O][E](N,Zt)[E](k,"0")[E](g,"0")[E](F,"0")[D](),t[i][B]=e('<div id="skel-layers-inactiveWrapper" />')[zt](t[i][Kt]),t[i][B][E](q,"100%"),t[i][c]=e('<div id="skel-layers-activeWrapper" />')[zt](t[i][Kt]),t[i][c][E](N,Zt),t._[ht](Y,t[i][B][0]),t._[ht]("skel_layers_activeWrapper",t[i][c][0]),t._[ht]("skel_layers_wrapper",t[i][O][0]),e("[autofocus]").focus()})},initIncludes:function(){e(".skel-layers-include").each(function(){t.parseInit(e(this))})},init:function(){t[n][sn]&&(t[n][U]=t[n][sn]());if(t[n][U]){if(t._[Wt][j]==nn&&t._[Wt].deviceVersion<4||t._[Wt][j]=="wp")t[n][U]=H;t._[Wt].IEVersion<10&&(t[n][U]=H),t[n][Ot]&&!t._.hasActive(t._[rn](t[n][Ot]))&&(t[n][U]=H)}t.eventType=t._[Wt][kt]?"touchend":Vt,t.initObjects(),t.initTransforms(),t._.DOMReady(function(){t.initLayers(),t.initIncludes(),t._.updateState(),t.refresh()})},refresh:function(){e(".skel-layers-fixed")[D]()[zt](t[i][c])}},t)}(jQuery));
skel.init({
	reset: 'full',
	breakpoints: {
		global:		{ range: '*', href: '../css/style.css', containers: 1400, grid: { gutters: 50 } },
		wide:		{ range: '-1680', href: '../css/style-wide.css', containers: 1200, grid: { gutters: 40 } },
		normal:		{ range: '-1400', href: '../css/style-normal.css', containers: 960, lockViewport: true },
		narrow:		{ range: '-1200', href: '../css/style-narrow.css', containers: '95%', grid: { gutters: 30 } },
		narrower:	{ range: '-1000', href: '../css/style-narrower.css', grid: { collapse: 1 } },
		mobile:		{ range: '-640', href: '../css/style-mobile.css', containers: '100%', grid: { gutters: 15, collapse: 2 } }
	}
}, {
	layers: {
		
		// Transform test.
			transformTest: function() {

				// Only use CSS transforms with touch devices.
					return (skel.vars.isTouch);
			
			},

		// Layers.
		// Probably shouldn't mess with these (at least until I've finished the skel-layers documentation).
			layers: {
				topPanel: {
					states: 'global wide normal narrow narrower mobile',
					position: 'top-center',
					side: 'top',
					hidden: true,
					animation: 'pushY',
					width: '100%',
					height: '75%',
					html: '<nav data-action="navList" data-args="nav"></nav>',
					clickToClose: true,
					swipeToClose: false
				},
				topButton: {
					states: 'global wide normal narrow narrower mobile',
					position: 'top-center',
					width: 120,
					height: 50,
					html: '<span class="toggle" data-action="toggleLayer" data-args="topPanel"></span>'
				},
				sidePanel: {
					states: 'global wide normal narrow narrower',
					position: 'top-left',
					side: 'left',
					hidden: true,
					animation: 'revealX',
					width: 250,
					height: '100%',
					html: '<nav data-action="navList" data-args="nav"></nav>',
					clickToClose: true
				},
				sideButton: {
					states: 'global wide normal narrow narrower',
					position: 'top-left',
					width: 100,
					height: 60,
					html: '<span class="toggle" data-action="toggleLayer" data-args="sidePanel"></span>'
				}
			}
	}
});

(function($) {

	/* scrolly v0.1 | (c) n33 | n33.co @n33co | MIT */
		(function(e){var t="click.scrolly";e.fn.scrolly=function(r,i){r||(r=1e3),i||(i=0),e(this).off(t).on(t,function(t){var n,s,o,u=e(this),a=u.attr("href");a.charAt(0)=="#"&&a.length>1&&(n=e(a)).length>0&&(s=n.offset().top,u.hasClass("scrolly-centered")?o=s-(e(window).height()-n.outerHeight())/2:(o=Math.max(s,0),i&&(typeof i=="function"?o-=i():o-=i)),t.preventDefault(),e("body,html").stop().animate({scrollTop:o},r,"swing"))})}})(jQuery);

	$(function() {

		var $body = $('body'),
			$window = $(window),
			$header = $('#header'),
			$banner = $('#banner');

		// Re-enable animations until we're done loading everything.
			$window.load(function() {
				$body.removeClass('loading');
			});

		// Placeholder fix (IE<10).
		// If IE<10, use formerize to add support for the "placeholder" attribute.
			if (skel.vars.IEVersion < 10) {
				
				// formerize v1.0 | (c) n33 | n33.co @n33co | MIT
					$.fn.formerize=function(){var _fakes=new Array(),_form = $(this);_form.find('input[type=text],textarea').each(function() { var e = $(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = $(this); var x = $($('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = $(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = $(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { $(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); $(this).find('select').val($('option:first').val()); $(this).find('input,textarea').each(function() { var e = $(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
				
				// Apply formerize all forms.
					$('form').formerize();
			
			}

		// Scrolly links.
			$('.scrolly').scrolly(1000, -10);

		// Dropdowns.
			$('#nav > ul').dropotron({
				offsetY: -13,
				mode: 'fade',
				noOpenerFade: true,
				expandMode: (skel.vars.isTouch ? 'click' : 'hover')
			});

		// Header.
		// If the header is using "alt" styling and #banner is present, use scrollwatch
		// to revert it back to normal styling once the user scrolls past the banner.
		// Note: This is disabled on touch devices and whenever the 'normal' breakpoint is
		// active (effectively disabling it on 'narrow', 'narrower', and 'mobile' as well).
			if (!skel.vars.isTouch
			&&	$header.hasClass('alt')
			&&	$banner.length > 0) {

				$window.on('load', function() {

					// scrollgress v0.2 | (c) n33 | n33.co @n33co | MIT
						(function(){var e="scrollwatch",t="length",n="top",r=null,i="scrollgress",s="data",o="scrollwatch-state",u="range",a="anchor",f="unscrollwatch",l="unscrollgress",c="removeData",h="element",p="-id",d="scroll.",v="height",m="scrollTop",g="center",y="bottom",b=$(window),w=$(document),E=1e3;$.fn[e]=function(f){var l,c,h,p;if(this[t]>1){for(l=0;l<this[t];l++)$(this[l])[e](f);return this}return c=$.extend({range:.5,anchor:n,init:r,on:r,off:r,delay:0},f),h=$(this),c.init&&c.init(h),h[s](o,-1)[i](function(e){window.clearTimeout(p),p=window.setTimeout(function(){var t=parseInt(h[s](o));if(t==0||t==-1)if(e>=-1*c[u]&&e<=c[u]){h[s](o,1),c.on&&c.on(h);return}if(t==1||t==-1)if(e<-1*c[u]||e>=c[u]){h[s](o,0),c.off&&c.off(h);return}},c.delay)},{anchor:c[a]},e),h},$.fn[f]=function(){var n,r;if(this[t]>1){for(n=0;n<this[t];n++)$(this[n])[f]();return this}return r=$(this),r[c](o,0)[l](e),r},$.fn[i]=function(e,r,o){var u,f,l,c,S;if(this[t]>1){for(u=0;u<this[t];u++)$(this[u])[i](e,r,o);return this}return o||(o=i),f=$.extend({anchor:n,direction:"both",scope:h,easing:0},r),l=$(this),l[s](o+p)||l[s](o+p,E++),c=l[s](o+p),S=d+o+"-"+c,b.off(S).on(S,function(){var t,r=l.offset()[n],i=l.outerHeight(),s=w[v]();switch(f.scope){default:case h:switch(f[a]){default:case n:t=(r-b[m]())/i*-1;break;case g:t=(r-b[m]()-(b[v]()-i)/2)/i*-1;break;case y:t=(r-b[m]()-(b[v]()-i))/i*-1}break;case"window":switch(f[a]){default:case n:t=(r-b[m]())/b[v]()*-1;break;case g:t=(r-b[m]()-(b[v]()-i)/2)/b[v]()*-1;break;case y:t=(r-b[m]()-(b[v]()-i))/b[v]()*-1}}f.direction=="forwards"?t=Math.max(0,t):f.direction=="backwards"&&(t=Math.min(0,t)),t>0?t=Math.max(0,t-f.easing/100):t<0&&(t=Math.min(0,t+f.easing/100)),e(t,l)}).trigger("scroll"),l},$.fn[l]=function(e){var n,r,o,u;if(this[t]>1){for(n=0;n<this[t];n++)$(this[n])[l](e);return this}return e||(e=i),r=$(this),r[s](e+p)?(o=r[s](e+p),u=d+e+"-"+o,b.off(u),r[c](e+p),r):r}})();

					// Apply scrollgress to banner.
						$banner.scrollwatch({
							delay:		0,
							range:		1,
							anchor:		'top',
							on:			function() { $header.addClass('alt reveal'); },
							off:		function() { $header.removeClass('alt'); }
						});

				});
			
			}
			
	});

})(jQuery);