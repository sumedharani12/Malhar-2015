<!DOCTYPE HTML>

<html>
	<head>
		<title>Malhar'15 - A Chronicle</title>
		<meta charset="utf-8" />
		<meta name="description" content="Every year, for 37 years now, Malhar has showcased talents of the best in arts, dramatics, literature and general madness.">
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
		<link rel="alternate" media="only screen and (max-width: 640px)"
      href="http://m.malharfest.org" >
	  <meta name="keywords" content="malhar, malhar fest, college, fest, malhar mumbai, malhar a chronicle, malhar 2015, st. xavier's college, xavier's fest, puddles, amnight, jobin">
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
	<link rel="stylesheet" href="css/loadmain.css">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64601178-1', 'auto');
  ga('send', 'pageview');

</script>
	<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/init.js"></script>
			
			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>
			
			<noscript><p>Please enable JavaScript in your browser for better use of the website.</p></noscript>
			<style>
			body{
	overflow:hidden;
	color:#000;
	font-weight:bold;
	}
	#foot>ul>li{float:left;margin:3%;}
	#foot>ul>li:nth-child(1){margin-left:10%;}
	</style>
	
<script>
$(document).ready(function(){
    
    $("#conclave").click(function(){
        $("#concdiv").show();
		$("#concdiv").css( {position:"absolute", top:event.pageY, left: event.pageX});
		$("#abtdiv").hide();
		$("#condiv").hide();
		$("#evdiv").hide();
    });
	$("#events").click(function(){
        $("#evdiv").show();
		var percent = (event.pageY / $(window).height()+35);    
		$("#evdiv").css( {position:"absolute", left: event.pageX});
		$("#evdiv").css('top',percent + '%');
		$("#abtdiv").hide();
		$("#condiv").hide();
		$("#concdiv").hide();
    });
	$("#contact").click(function(){
        $("#condiv").show();
        var percent = (event.pageY / $(window).height()+37); 
		$("#condiv").css( {position:"absolute", left: event.pageX});
		$("#condiv").css('top',percent + '%');
		$("#abtdiv").hide();
		$("#concdiv").hide();
		$("#evdiv").hide();
    });
	$("#abt").click(function(){
        $("#abtdiv").show();
		var percent = (event.pageY / $(window).height()+37);    
		
		$("#abtdiv").css( {position:"absolute", right: ($(window).width()-event.pageX)});
		$("#abtdiv").css('top',percent + '%');
		$("#condiv").hide();
		$("#concdiv").hide();
		$("#evdiv").hide();
    });
	$(".close").click(function(){
        $("#abtdiv").hide();
		$("#condiv").hide();
		$("#concdiv").hide();
		$("#evdiv").hide();
    });
});
</script>
	</head>
	<body>
	<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
		<div id="content">
		<div id="bg">
				<div class="12u">
					<ul id="scene" class="scene">
						
						<li class="layer" id="l2" data-depth="0.30"><img src="images/layer2.png" style="width:100%;
	height:90%;"></li>
						<li class="layer" id="l1" data-depth="0.90"><img src="images/layer1.png" style="width:120%;
	height:110%;"></li>
						<li class="layer" id ="me" data-depth="0.00"><img src="images/menu.png" usemap="#banner" border=0 ></li>
											
					</ul>
					
<map name="banner">
  <area shape="rect" coords="60,90,158,175" id="conclave" alt="" title="" style="cursor:pointer;">
  <area shape="rect" coords="130,284,214,369" id="events" alt="" title="" style="cursor:pointer;">
  <area shape="rect" coords="292,362,397,453" href="pdf/RnR.pdf" id="rnr" target="_blank" alt="" title="">
  <area shape="rect" coords="380,60,450,145" href="http://blog.malharfest.org/" id="blog" target="_blank" alt="" title="">
  <area shape="rect" coords="360,588,448,693" id="contact" alt="" title="" style="cursor:pointer;">
  <area shape="rect" coords="830,65,915,147" href="sponsors/index.php" id="spon"alt="" title="">
  <area shape="rect" coords="850,304,960,389" href="social/index.php" id="soc" alt="" title="">
  <area shape="rect" coords="1100,301,1215,386" id="abt" alt="" title="" style="cursor:pointer;">
  <area shape="rect" coords="1147,595,1222,680" href="index.html" id="hm" alt="" title="">
  <area shape="rect" coords="85,515,193,590" href="registration/index.php" id="soc" alt="" title="">
  <area shape="rect" coords="1075,118,1145,200" href="press/index.html" id="press" alt="" title="">
  <area shape="rect" coords="995,448,1110,505" href="departments/index.php" id="workforce" alt="" title="">
  <area shape="rect" coords="845,565,930,627" href="schedule/index.php" id="sched"alt="" title="">
  <area shape="rect" coords="60,389,135,463" id="epass" href="registration/register.php" alt="" title="" style="cursor:pointer;">
  <area shape="rect" coords="1190,30,1250,130" href="app/" id="app" target="_blank" alt="" title="">
  <area shape="rect" coords="610,35,680,95" href="results/" id="results" alt="" title="">
  <area shape="rect" coords="292,222,397,273" href="updates/" id="updates" alt="" title="">
</map>			
		</div></div>
		


								<div class="row">
								<div class="6u" id="abtdiv">
								<div class="outer">
								<div id="heading">
									<a href="#close" title="Close" class="close" style="float:right;">X</a>
									<h2>About Us</h2>
									<br/>
								</div>
								<div id="dbody">
								
									<p>
									The month of August heralds the onset of the relief from two worries which plague people- the heat and the mundaneness of everyday life. While the rains take care of the former, Malhar 2015 has been taking care of the latter for 36 years now! Featuring the oldest college fest in Asia which is organised by students, Malhar promises to take you on an epic journey this year with brand new events, talks and more!
									</p>
									<p>
									So what are you waiting for? The address is at the bottom of this page and the dates are above. All we need is you.
									</p>
									<h2>Malhar 2015</h2>
									What&apos;s in a word?<br/>
									An infinite scope of interpretation, a way of explaining ordinary things in an extraordinary manner.<br/> 
									What is that word? You ask.<br/>
									A Chronicle, we reply.<br/>
									</p>
									<p>
									This Malhar, we recognize the simple truth- The world has never had a dearth of stories to be shared, all it has lacked is the appropriate audience with the will to listen. With A Chronicle, we provide the right platform to share your stories be it via music, dance, creative writing, workshops or even comic books!
									</p>
									<p>
									With the theme entwining perfectly with all manner of events, d&eacute;cor and creative content- Malhar &apos;15-A Chronicle has just one hashtag to its name.
									</p>
									#EveryStoryMatters.<br/>
									&apos;Nuff said.<br/><br/><br/>
								</div>
								<div id="foot">
									<img src="images/about.svg" style="bottom:0;height:auto;width:100%;left:0;"> 
								</div>
								</div>	</div>	
				</div>
								
<div class="row">
								<div class="6u" id="concdiv">
								<div class="outer">
								<div id="heading">
						<a href="#close" title="Close" class="close">X</a>
																
										<h2>Conclave</h2>
										
									</div>
								<div id="dbody">
								
									<h3>Rewriting the Chronicle</h3><div class="row">
									<div class="4u">
									
									&nbsp;
									</div>
									<div class="4u">
									<button onclick="location.href='conclave/index.html'">See the Line-up here</button>
									</div>
									<div class="4u">
									&nbsp;
									</div>
									
									</div><br/><p><i>&quot;It&apos;s a healthy thing, now and then, to hang a question mark on the things you have long taken for granted&quot;<br/>                    -Bertrand Russell
									</p>
									<p>This year, Conclave will strive to expand the horizons of our cultural imaginary. A forum for debate and discussion, Malhar Conclave 2015 will chronicle the unspoken. We bring to you fresh perspectives in our attempt to depart from the conventional. We believe that everyone has a story, and every story is aching to be told. So come, attend Malhar Conclave 2015, as we challenge our convictions, as we battle with our beliefs, as we rewrite the chronicle.

</p></div>
								<div id="foot" >
									<img src="images/Conclave.png" style="bottom:-300%;height:auto;width:100%;left:0;">
								</div>
								</div>
									
								</div>
								</div>
								<div class="row">
								<div class="6u" id="evdiv">
								<div class="outer">
								<div id="heading">
								<a href="#close" title="Close" class="close">X</a>
								
										<h2>Events</h2>
									</div>
								<div id="dbody"><br/>
									<div class="row">
									<div class="4u">
									
									<button onclick="location.href='events/events.php'">Event List</button>
									</div>
									<div class="4u">
									<button onclick="location.href='events/amnight.php'">AmNight</button>
									</div>
									<div class="4u">
									<button onclick="location.href='events/management.php'">Management Guidelines</button>
									</div>
									
									</div><br/>
									<p>Malhar 2015 has promised to chronicle the best of the events of the previous Malhar&apos;s, while at the same time introducing a new chapter in the Malhar diary - Chapter 15. 
									</p><p>
This chapter marks a tryst which ranges from the Kathputli&apos;s of Rajasthan to the fusion between Odissi and Odyssey. From the Sartoria to the Rescripted. There is something for every kind of palate and believe me it only Improvs from there.</p><p>
This Malhar, come share your tale at our events. We await with rapt attention.
</p>	
</div>
								<div id="foot">
									<img src="images/event.png" style="bottom:-5%;;height:102%;width:100%;left:-30%;">
								</div>
								</div>						</div>
								</div>
								
								<div class="row">
								
								<div class="6u" id="condiv">
								<div class="outer">
								<div id="heading">
						<a href="#close" title="Close" class="close">X</a>
								
										<h2>Contact Us</h2>
								</div>
								<div id="dbody">
																	<p><br>
								<h3>Address</h3>
        Malhar Office,<br />
        St. Xavier&#39;s College (Autonoumous),<br />
        5, Mahapalika Marg,<br />
        Mumbai 400 001.<br /></p><br /><iframe src="map.html" frameborder="0" style="border:0" id="map"></iframe>
								<p>Malhar-Office:         (022) 2265 1006/7 Ext. 358 <br></p><br>

								<b>Association &amp; Marketing:</b><br>

								<a href="mailto:marketing@malharfest.org">marketing@malharfest.org</a><br>
								Joshua, HOD Marketing<br>
																<br/>



								<b>Public Relations &amp; Press:</b><br>

								<a href="mailto:pr@malharfest.org">pr@malharfest.org</a><br><br>



								<b>Email:</b><br>

								<a href="mailto:contactus@malharfest.org">contactus@malharfest.org</a><br><br>

								</p>								
									
</div>
								<div id="foot">
									<ul style="width:100%;float:left;">												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>
								</div>
								</div>
								</div>
								</div>
						</section>
						</div>
						
		
		
<!-- Scripts -->
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
});
</script>

	
	<script src="js/parallax.min.js"></script>
	<script>

	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
	</script>

</body>
</html>