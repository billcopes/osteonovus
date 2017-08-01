<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OsteoNovus. Breakthrough bone regeneration.</title>
	<meta name="description" content="">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6967512/641324/css/fonts.css" />
	<link rel="stylesheet" href="css/style.css?v=1.0">
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
</head>
<body class="home">
<header>
	<a href="index.php" class="logo">>OsteoNovus</a>
	<nav>
		<a href="#" class="active">Novogro<sup>&reg;</sup></a>
		<a href="#">Team</a>
		<a href="#">Contact</a>
	</nav>
</header>
<section id="intro" class="logomark">
	<div class="text-container">
		<h1>Do you really need <strong>BMP?</strong></h1>
		<p>Introducing <strong>NovoGro<sup>&reg;</sup></strong>, a breakthrough bone regeneration biomaterial that grows robust bone, with excellent handling properties, in just six weeks. Only from Osteonovus.</p>
	</div>
</section>
<section id="novogro">
	<h2 class="novogro">Novgro <span>Moldable Bone Substitute</span></h2>
	<ul class="toggle">
		<li><a href="#" class="" data-toggle="#putty">Putty</a></li>
		<li><a href="#" class="" data-toggle="#injectable">Injectable</a></li>
	</ul>
	<div class="video-gradient"></div>
	<article id="putty">
		<progress id='p' max='100' value='0'></progress>
		<video id="putty-vid" autoplay preload="auto" loop>
			 <source src="vid/putty.mp4" type="video/mp4">  <!-- poster="/images/putty.jpg"-->
			 <!--source src="vid/putty-mobile.mp4#t=1" type="video/mp4" media="all and (max-width: 768px)"--> 
		</video>
			<ul class="vid-nav putty">
				<li><a href="#" id="vid1-1">Moldable <br/>and cohesive</a></li>
				<li><a href="#" id="vid1-2">Will not <br/>Wash Out</a></li>
				<li><a href="#" id="vid1-3">Conforms to <br/>Graft Site</a></li>
				<li><a href="#" id="vid1-4">Resists <br/>Compression</a></li>
				<li><a href="#" id="vid1-5">Sticks to <br/>Wet Bone</a></li>
				<li><a href="#" id="vid1-6">No-mess <br/>Removal</a></li>
			</ul>
	</article>
	<article id="injectable">
		<progress id='i' max='100' value='0'></progress>
		<video id="injectable-vid" autoplay preload="auto" loop>
			 <source src="vid/injectable.mp4" type="video/mp4">  <!-- poster="/images/putty.jpg"-->
			 <!--source src="vid/injectable-mobile.mp4#t=1" type="video/mp4" media="all and (max-width: 768px)"--> 
		</video>
			<ul class="vid-nav injectable">
				<li><a href="#" id="vid2-1">Injectable <br/>for 10 minutes</a></li>
				<li><a href="#" id="vid2-2">Will not <br/>Wash Out</a></li>
				<li><a href="#" id="vid2-3">Conforms<br/>to Bone</a></li>
				<li><a href="#" id="vid2-4">Sets hard in <br/>20 minutes</a></li>
			</ul>
	</article>
</section>
<section id="attributes">
	<h3>Let's put a statement here  that says what these bullets are</h3>
	<ul>
		<li id="zero-exotherm">zero exotherm</li>
		<li id="ph-neutral">PH NEUTRAL</li>
		<li id="weeks">GROWS IN 6 WEEKS</li>
	</ul>
</section>
<section id="zoom">
	<ul class="toggle">
		<li><a href="#" class="active">Histology</a></li>
		<li><a href="#" class="">&mu;CT</a></li>
	</ul>
	<article id="histology">
		<div class="zoom-text-container">
			<div id="ten" class="zoom-text">
				<h2>10x<span>Histology</span></h2>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
			<div id="twenty-five" class="zoom-text">
				<h2>25x<span>Histology</span></h2>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
			<div id="fourty" class="zoom-text">
				<h2>40x<span>Histology</span></h2>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
		</div>
		<div class="zoom-image-container">
			<ul class="zoom-nav">
				<li class="first selected"><a href="#">10x</a></li>
				<li class="second"><a href="#">25x</a></li>
				<li class="third"><a href="#">40x</a></li>
			</ul>
			<div class="images">
				<div class="image first"></div>
				<!--div class="image second">
					<img src="images/" alt=""/>
				</div>
				<div class="image third">
					<img src="images/" alt=""/>
				</div-->
			</div>
		</div>
	</article>
	<article id="ct">
		
	</article>
</section>
<footer>
	<div>
		<h4>Want to know more?</h4>
		<p>Quisque fringilla diam a magna imperdiet, sed aliquet arcu molestie.<p>
		<a href="mailto:hello@osteonovus.com">hello@osteonovus.com</a>
		<p>* only available by prescription</p>	
	</div>
	<div></div>
</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		$( ".vid-nav a" ).click(function( event ) {
			event.preventDefault();
		});	
		
		$("#novogro a[data-toggle]").on("click", function(e) {
		  e.preventDefault();  // prevent navigating
		  var selector = $(this).data("toggle");  // get corresponding selector from data-toggle
		  $("#novogro article").hide();
		  $(selector).show();
		});
		
		/*$("a[data-toggle]").click(function(){
		    $("a[data-toggle]").toggleClass("active");
		});*/
	</script>
</body>
</html>