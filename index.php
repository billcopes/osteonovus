<?php include 'gzip.php'; // Compress Stuff ?>
<?php $page = "home"; ?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
	<style type=-"text/css">
	*, ::before, ::after{box-sizing:inherit;}html, *, :hover{transition:all 0.2s linear;}html{box-sizing:border-box;font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;}html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{margin:0px;padding:0px;border:0px;font-style:inherit;font-variant:inherit;font-weight:inherit;font-stretch:inherit;font-size:inherit;line-height:inherit;font-family:inherit;vertical-align:baseline;}html, body{background-color:rgb(246, 248, 251);}body{line-height:1;}article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section{display:block;}header{background-image:linear-gradient(to right, rgb(31, 29, 54), rgb(77, 77, 77));height:78px;width:100%;position:fixed;z-index:999;top:0px;transition:top 0.5s;}.headroom{will-change:transform;transition:transform 200ms linear;}a{font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;text-transform:uppercase;text-decoration:none;font-weight:300;cursor:pointer;transition:all 0.2s linear;color:rgb(127, 124, 187);}a.logo{display:inline-block;background:url("../images/logo-wordmark.svg") 0% 0% / cover no-repeat;font-size:0px;line-height:0px;width:212px;height:22px;position:absolute;left:4vw;top:27px;}header nav{position:absolute;right:5vw;top:31px;}header nav a, footer nav a{color:rgb(255, 255, 255);font-size:1rem;letter-spacing:0.07rem;margin-left:2rem;}a.active, a:hover, #attributes h3{color:rgb(121, 234, 185);}.logomark{background-image:url("../images/logomark.svg");background-repeat:no-repeat;background-size:contain;background-position:-2rem -6rem;}#intro{position:relative;padding:12vw 0px 8vw 12vw;}h1{font-family:Georgia;font-size:4.4vw;line-height:4.87vw;letter-spacing:-0.07rem;font-weight:normal;color:rgb(0, 0, 0);}#intro h1{white-space:nowrap;}strong{font-weight:500;}h1 strong{font-weight:bold;font-size:8.8vw;line-height:8vw;display:block;}p{font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-size:1.4rem;font-weight:100;font-style:normal;font-stretch:normal;line-height:1.67;letter-spacing:0.6px;color:rgb(0, 0, 0);}#intro p{font-size:1.4rem;}.home #intro p, .contact #intro h2{position:relative;left:34vw;top:-6vh;max-width:42vw;font-weight:100;}#novogro, #zoom{position:relative;width:100%;overflow:hidden;}.novogro{position:absolute;top:6vw;left:8vw;font-size:0px;line-height:0px;display:inline-block;background:url("../images/novogro.svg") 0% 0% / contain no-repeat;width:38%;height:24%;z-index:99;}.video-gradient{height:12vw;width:100%;z-index:95;position:absolute;background:linear-gradient(rgb(246, 248, 251) 0%, rgba(246, 248, 251, 0) 100%);}#putty{position:relative;}video{width:100%;margin-bottom:-1vh;position:relative;background:rgb(255, 255, 255);}#injectable{display:none;}progress{display:block;margin:0px auto 0px -38vw;position:absolute;bottom:18%;width:76vw;left:50%;background:rgb(216, 228, 238);height:6px;z-index:96;border:0.5px solid rgb(255, 255, 255);}ol, ul{list-style:none;}.vid-nav{bottom:4vw;position:absolute;left:50%;margin-left:-45%;display:flex;justify-content:space-around;width:90%;}#injectable .vid-nav{width:70%;margin-left:-35%;}ul li{display:inline-block;}.vid-nav li{position:relative;text-align:left;white-space:nowrap;max-width:92px;}.vid-nav li a{text-align:left;display:block;color:rgb(0, 0, 0);font-size:1.2rem;line-height:1.6rem;letter-spacing:0.025rem;}.vid-nav li a.playing{animation:pulse-vid-nav 1s ease-in-out infinite alternate;}.vid-nav li:last-child{margin:0px;}#ct{display:none;}.zoom-text-container{position:absolute;left:19vw;top:26vw;max-width:300px;}.zoom-text{position:absolute;top:0px;width:300px;}.visible{opacity:1;transform:scale(1);}
	.zoom-text-container h2{font-size:5.4rem;font-weight:200;}.zoom-text-container h2 span{font-size:1.5rem;display:block;}.zoom-text-container p{font-size:22px;line-height:2.6rem;margin:4rem 0px;}.hidden{opacity:0;transform:scale(0);}.zoom-image-container{position:relative;float:right;width:50vw;height:50vw;margin-right:-3vw;border-radius:100%;background:linear-gradient(to right, rgb(127, 124, 187) 0%, rgb(127, 206, 234) 50%, rgb(137, 205, 168) 100%);}#ct .zoom-image-container{background:linear-gradient(to right, rgb(127, 124, 187) -10%, rgb(127, 206, 234) 60%, rgb(137, 205, 168) 120%);}.zoom-nav{position:absolute;}.zoom-nav li{position:absolute;display:block;border-radius:100%;border:10px solid rgb(255, 255, 255);padding:3px;background:linear-gradient(to right, rgb(127, 124, 187) 0%, rgb(127, 206, 234) 50%, rgb(137, 205, 168) 100%);}.zoom-nav li.selected, .zoom-nav li.selected:hover{transform:scale(1.5);position:relative;z-index:888;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 4px;}.zoom-nav li.selected{animation-name:pulse;animation-duration:1s;animation-direction:alternate;animation-timing-function:ease;animation-iteration-count:infinite;}.zoom-nav li.first{top:8vw;left:2vw;}.zoom-nav li a{display:block;width:3.25vw;height:3.25vw;border-radius:100%;color:rgb(0, 0, 0);background:rgb(255, 255, 255);text-align:center;padding-top:1.25vw;font-size:1vw;}.zoom-nav li.selected a{animation-name:pulse-text;animation-duration:1s;animation-direction:alternate;animation-timing-function:ease;animation-iteration-count:infinite;}.zoom-nav li.second{top:22.5vw;left:-2vw;}.zoom-nav li.third{top:37vw;left:2vw;}.zoom-image-container .images{background:rgb(255, 255, 255);width:38vw;height:38vw;border-radius:100%;margin:0px auto;position:relative;top:6vw;}.zoom-image-container .images .image{width:34vw;height:34vw;margin:0px auto;border:3px solid rgb(136, 205, 175);border-radius:100%;position:absolute;top:2vw;left:2vw;overflow:hidden;background-position:center center;background-size:112%;}#ct .images .first{background-color:rgb(127, 124, 187);}#ct .images .second{background-color:rgb(127, 206, 234);}#ct .images .third{background-color:rgb(137, 205, 168);}
	</style>
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
		<li><a href="#" class="active" data-toggle="#putty">Putty</a></li>
		<li><a href="#" class="" data-toggle="#injectable">Injectable</a></li>
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
		<video id="injectable-vid" preload="auto" poster="images/injectable.jpg" autoplay loop muted></video>
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
			<div class="zoom-text first visible">
				<h2>1.25x<span>Histology</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
				</ul>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
			<div class="zoom-text second hidden">
				<h2>10x<span>Histology</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
				</ul>
				<p>Need a statement about the new marrow or some such.</p>
			</div>
			<div class="zoom-text third hidden">
				<h2>20x<span>Histology</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
				</ul>
				<p>Robust new bone formation in the center of the defect.</p>
			</div>
			<div class="zoom-text fourth hidden">
				<h2>40x<span>Histology</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
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
				<div class="image first six visible"></div>
				<div class="image second six hidden"></div>
				<div class="image third six hidden"></div>
				<div class="image fourth six hidden"></div>
			</div>
		</div>
	</article>
	<article id="ct">
		<div class="zoom-text-container">
			<div id="" class="zoom-text first visible">
				<h2>Axial<span>44&mu;M</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
				</ul>
				<p>NovoGro Putty in a Rabbit Distal Femoral Condyle at 6 weeks post-op.</p>
			</div>
			<div id="" class="zoom-text second hidden">
				<h2>Sagittal<span>44&mu;M</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
				</ul>
				<p>Ipsum dolor sit amet consecteeteur</p>
			</div>
			<div id="" class="zoom-text third hidden">
				<h2>Coronal<span>44&mu;M</span></h2>
				<ul>
					<li class="six"><a href="#" class="active">Six Weeks</a></li>
					<li class="twelve" ><a href="#">Twelve Weeks</a></li>
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