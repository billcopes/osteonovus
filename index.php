<?php $page = "home"; ?>
<!doctype html>
<html lang="en">
<?php include 'document-head.php'; // Renders HEAD elements of page?>
<body class="<?php echo $page ?>">
<?php include 'header.php'; // Renders navigation ?>
<section id="intro" class="logomark">
	<div class="text-container">
		<h1>Do you really need <strong>BMP?</strong></h1>
		<p>Introducing <strong>NovoGro<sup>&reg;</sup></strong>, a breakthrough bone regeneration biomaterial that grows robust bone, with excellent handling properties, in just six weeks. Only from Osteonovus.</p>
	</div>
</section>
<section id="novogro">
	<h2 class="novogro">Novgro <span>Moldable Bone Substitute</span></h2>
	<ul class="toggle">
		<li><a href="#" class="active" data-toggle="#putty">Putty</a></li>
		<li><a href="#" class="" data-toggle="#injectable">Injectable</a></li>
	</ul>
	<div class="video-gradient"></div>
	<article id="putty">
		<progress id='p' max='100' value='0'></progress>
		<video id="putty-vid" autoplay preload="auto" loop muted>
			 <source src="vid/putty.mp4" type="video/mp4">
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
		<video id="injectable-vid" autoplay preload="auto" loop muted>
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
		<li><a href="#" class="active" data-toggle="#histology">Histology</a></li>
		<li><a href="#" class=""data-toggle="#ct">&mu;CT</a></li>
	</ul>
	<article id="histology">
		<div class="zoom-text-container">
			<div id="ten" class="zoom-text first visible">
				<h2>10x<span>Histology</span></h2>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
			<div id="twenty-five" class="zoom-text second hidden">
				<h2>25x<span>Histology</span></h2>
				<p>Need a statement about the new marrow or some such.</p>
			</div>
			<div id="fourty" class="zoom-text third hidden">
				<h2>40x<span>Histology</span></h2>
				<p>Robust new bone formation in the center of the defect.</p>
			</div>
		</div>
		<div class="zoom-image-container">
			<ul class="zoom-nav">
				<li class="first selected"><a href="#">10x</a></li>
				<li class="second"><a href="#">25x</a></li>
				<li class="third"><a href="#">40x</a></li>
			</ul>
			<div class="images">
				<ul class="key">
					<li class="residual"><span>Residual implant</span></li>
					<li class="new-bone"><span>New Bone</span></li>
					<li class="new-marrow"><span>New Marrow</span></li>
				</ul>
				<div class="image first visible"></div>
				<div class="image second hidden"></div>
				<div class="image third hidden"></div-->
			</div>
		</div>
	</article>
	<article id="ct">
		<div class="zoom-text-container">
			<div id="" class="zoom-text first visible">
				<h2>555x<span>Lorem</span></h2>
				<p>Ipsum dolor sit amet consecteeteur</p>
			</div>
			<div id="" class="zoom-text second hidden">
				<h2>666x<span>Lorem</span></h2>
				<p>Ipsum dolor sit amet consecteeteur</p>
			</div>
			<div id="" class="zoom-text third hidden">
				<h2>777x<span>Lorem</span></h2>
				<p>Ipsum dolor sit amet consecteeteur</p>
			</div>
		</div>
		<div class="zoom-image-container">
			<ul class="zoom-nav">
				<li class="first selected"><a href="#">A</a></li>
				<li class="second"><a href="#">B</a></li>
				<li class="third"><a href="#">C</a></li>
			</ul>
			<div class="images">
				<div class="image first visible"></div>
				<div class="image second hidden"></div>
				<div class="image third hidden"></div-->
			</div>
		</div>
	</article>
</section>
<?php include 'footer.php'; // Renders page footer ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>