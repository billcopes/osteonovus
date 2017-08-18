<?php include 'gzip.php'; // Compress Stuff ?>
<?php $page = "home"; ?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
	
</head>
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
		<li><a href="#" id="putty-toggle" class="active" data-toggle="#putty">Putty</a></li>
		<li><a href="#" id="injectable-toggle" class="" data-toggle="#injectable">Injectable</a></li>
	</ul>
	<div class="video-gradient"></div>
	<article id="putty">
		<progress id='p' max='100' value='0'></progress>
		<video id="putty-vid" preload="auto" poster="images/putty.jpg" autoplay loop muted></video>
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
		<video id="injectable-vid" preload="auto" poster="images/injectable.jpg" loop muted></video>
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
		<li id="weeks">NEW BONE IN 6 WEEKS</li>
	</ul>
</section>
<section id="zoom">
	<ul class="toggle">
		<li><a href="#" class="active" id="hist-toggle" data-toggle="#histology">Histology</a></li>
		<li><a href="#" class="" id="ct-toggle" data-toggle="#ct">&mu;CT</a></li>
	</ul>
	<article id="histology">
		<div class="zoom-text-container">
			<div class="zoom-text first visible">
				<h2>1.25x<span>Histology</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle, post-op.</p>
			</div>
			<div class="zoom-text second hidden">
				<h2>10x<span>Histology</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>Need a statement about the new marrow or some such.</p>
			</div>
			<div class="zoom-text third hidden">
				<h2>20x<span>Histology</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>Robust new bone formation in the center of the defect.</p>
			</div>
			<div class="zoom-text fourth hidden">
				<h2>40x<span>Histology</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>Robust new bone formation in the center of the defect.</p>
			</div>
		</div>
		<div class="zoom-image-container">
			<ul class="zoom-nav">
				<li class="first selected"><a href="#">1.25x</a></li>
				<li class="second"><a href="#">10x</a></li>
				<li class="third"><a href="#">20x</a></li>
				<li class="fourth"><a href="#">40x</a></li>
			</ul>
			<div class="images">
				<div class="image first six visible">
					<a class="node implant"></a>
					<a class="node newbone"></a>
					<a class="node marrow"></a>
				</div>
				<div class="image second six hidden">
					<a class="node implant"></a>
					<a class="node newbone"></a>
					<a class="node marrow"></a>
				</div>
				<div class="image third six hidden">
					<a class="node implant"></a>
					<a class="node newbone"></a>
					<a class="node marrow"></a>
				</div>
				<div class="image fourth six hidden">
					<a class="node implant"></a>
					<a class="node newbone"></a>
					<a class="node marrow"></a>
				</div>
			</div>
		</div>
	</article>
	<article id="ct">
		<div class="zoom-text-container">
			<div id="" class="zoom-text first visible">
				<h2>Axial<span>44&mu;M</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle, post-op.</p>
			</div>
			<div id="" class="zoom-text second hidden">
				<h2>Sagittal<span>44&mu;M</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>Ipsum dolor sit amet consecteeteur</p>
			</div>
			<div id="" class="zoom-text third hidden">
				<h2>Coronal<span>44&mu;M</span></h2>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
				<p>Robust new bone formation in the center of the defect.</p>
			</div>
		</div>
		<div class="zoom-image-container">
			<ul class="zoom-nav">
				<li class="first selected">
					<a href="#">
				  	  <div class="cube" id="axial">
				  	    <figure class="axial"></figure>
				  		<figure class="coronal"></figure>
				  	    <figure class="sagittal"></figure>
				  	  </div>
					</a>
				</li>
				<li class="second">
					<a href="#">
				  	  <div class="cube" id="sagittal">
				  	    <figure class="axial"></figure>
				  		<figure class="coronal"></figure>
				  	    <figure class="sagittal"></figure>
				  	  </div>
					</a>
				</li>
				<li class="third">
					<a href="#">
				  	  <div class="cube" id="coronal">
				  	    <figure class="axial"></figure>
				  		<figure class="coronal"></figure>
				  	    <figure class="sagittal"></figure>
				  	  </div>
					</a>
				</li>
			</ul>
			<div class="images">
				<div class="image first six visible"></div>
				<div class="image second six hidden"></div>
				<div class="image third six hidden"></div>
			</div>
		</div>
	</article>
</section>
<?php include 'footer.php'; // Renders page footer ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>