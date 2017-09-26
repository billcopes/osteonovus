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
		<h1 class="fadeout" id="introMessage">NEW BONE IN <strong>SIX WEEKS</strong></h1>
	</div>
</section>
<section id="novogro">
	<h2 class="novogro fadein">Novgro <span>Moldable Bone Substitute</span></h2>
	<ul class="toggle fadein">
		<li><a href="#" id="putty-toggle" class="active" data-toggle="#putty">Putty</a></li>
		<li><a href="#" id="injectable-toggle" data-toggle="#injectable">Injectable</a></li>
	</ul>
	<div class="video-gradient fadein"></div>
	
	<article id="putty" class="fadein fast">
		<p class="product-note fadein">FDA Cleared</p>
		<progress id='p' max='100' value='0' class="fadein"></progress>
		<video id="putty-vid" preload="auto" poster="images/putty.jpg" class="fadein" autoplay loop muted></video>
		<div class="bar fadein"></div>
			<ul class="vid-nav putty fadein">
				<li><a href="#" id="vid1-1">Moldable <br/>and cohesive</a></li>
				<li><a href="#" id="vid1-2">Will not <br/>Wash Out</a></li>
				<li><a href="#" id="vid1-3">Conforms to <br/>Graft Site</a></li>
				<li><a href="#" id="vid1-4">Resists <br/>Compression</a></li>
				<li><a href="#" id="vid1-5">Sticks to <br/>Wet Bone</a></li>
				<li><a href="#" id="vid1-6">No-mess <br/>Removal</a></li>
			</ul>
			<div class="video-gradient video-gradient-bottom fadein"></div>
	</article>
	<article id="injectable" class="fadein fast">
		<p class="product-note fadein fast">Currently In development</p>
		<progress id='i' max='100' value='0' class="fadein"></progress>
		<video id="injectable-vid" preload="auto" poster="images/injectable.jpg" class="fadein" loop muted></video>
		<div class="bar fadein"></div>
			<ul class="vid-nav injectable fadein">
				<li><a href="#" id="vid2-1">Injectable <br/>for 10 minutes</a></li>
				<li><a href="#" id="vid2-2">Will not <br/>Wash Out</a></li>
				<li><a href="#" id="vid2-3">Conforms<br/>to Bone</a></li>
				<li><a href="#" id="vid2-4">Sets hard in <br/>20 minutes</a></li>
			</ul>
			<div class="video-gradient video-gradient-bottom fadein"></div>
	</article>
</section>
<section class="attributes fadein">
	<span class="scrolldown">LEARN MORE</span>
	<h2>BIOACTIVE.</h2>
	<div class="flex-container">
		<div class="text">
			<p>The surface of NovoGro, shown at 10,000x, grows biomimetic apatite crystals after seven days in simulated body fluid.</p>
		</div>
		<div class="day zero">Day 0</div>
		<div class="day seven">Day 7</div>
	</div>
	<div class="product"></div>
</section>
<section id="zoom" class="fadein">
		<h2>NovoGro is remodeled <br/>and replaced by bone.</h2>
		<p>NovoGro Putty was implanted into bilateral critically sized (6x10 mm) defects in the rabbit distal 
	femoral condyle. The amounts of new bone and residual graft were quantified at 
	6 and 12 weeks post-operatively using histology and micro CT.</p>
	<ul class="toggle">
		<li><a href="#" class="active" id="hist-toggle" data-toggle="#histology">Histology</a></li>
		<li><a href="#" class="" id="ct-toggle" data-toggle="#ct">micro CT</a></li>
	</ul>
	<article id="histology">
		<div class="zoom-text-container fadein fast">
			<div class="zoom-text first visible">
				<h3>1.25x<span>Objective Lens Magnification</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<div class="zoom-text second hidden">
				<h3>10x<span>Objective Lens Magnification</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<div class="zoom-text third hidden">
				<h3>20x<span>Objective Lens Magnification</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<div class="zoom-text fourth hidden">
				<h3>40x<span>Objective Lens Magnification</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<p class="detail">Extensive new trabecular bone formations were observed from the margins through the center of the NovoGro treated defects in just six weeks post-op. NovoGro continued to remodel and was replaced by significantly more bone at twelve weeks.</p>
		</div>
		<div class="zoom-image-container fadein fast">
			<ul class="zoom-nav">
				<li class="first selected"><a href="#">1.25x</a></li>
				<li class="second"><a href="#">10x</a></li>
				<li class="third"><a href="#">20x</a></li>
				<li class="fourth"><a href="#">40x</a></li>
			</ul>
			<div class="images six">
				<div class="image first six visible">
					<a class="node implant" onclick=""></a>
					<a class="node newbone" onclick=""></a>
					<a class="node marrow" onclick=""></a>
				</div>
				<div class="image second six hidden">
					<a class="node implant" onclick=""></a>
					<a class="node newbone" onclick=""></a>
					<a class="node marrow" onclick=""></a>
				</div>
				<div class="image third six hidden">
					<a class="node implant" onclick=""></a>
					<a class="node newbone" onclick=""></a>
					<a class="node marrow" onclick=""></a>
				</div>
				<div class="image fourth six hidden">
					<a class="node implant" onclick=""></a>
					<a class="node newbone" onclick=""></a>
					<a class="node marrow" onclick=""></a>
				</div>
			</div>
		</div>
	</article>
	<article id="ct">
		<div class="zoom-text-container fadein fast">
			<div id="" class="zoom-text first visible">
				<h3>Axial<span>44&mu;M</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<div id="" class="zoom-text second hidden">
				<h3>Sagittal<span>44&mu;M</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<div id="" class="zoom-text third hidden">
				<h3>Coronal<span>44&mu;M</span></h3>
				<ul>
					<li class="six active"><a href="#">6 Weeks</a></li>
					<li class="twelve" ><a href="#">12 Weeks</a></li>
				</ul>
			</div>
			<p class="detail">A progression in healing of the NovoGro treated defects was observed radiographically by the change in trabecular density and thickness from 6 to 12 weeks. NovoGro appeared more radiolucent at 12 weeks, and the distinct spherical shape, size and porosity of the 
particles changed as the graft remodeled. </p>
		</div>
		<div class="zoom-image-container fadein fast">
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