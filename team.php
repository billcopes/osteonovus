<?php include 'gzip.php'; // Compress Stuff ?>
<?php $page = "team"; ?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
	<style type="text/css">
	*, ::before, ::after{box-sizing:inherit;}html, *, :hover{transition:all 0.2s linear;}html{box-sizing:border-box;font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;}html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{margin:0px;padding:0px;border:0px;font-style:inherit;font-variant:inherit;font-weight:inherit;font-stretch:inherit;font-size:inherit;line-height:inherit;font-family:inherit;vertical-align:baseline;}html, body{background-color:rgb(246, 248, 251);}body{line-height:1;}.logomark{background-image:url("../images/logomark.svg");background-repeat:no-repeat;background-size:contain;background-position:-2rem -6rem;}.team.logomark, .contact.logomark{background-image:url("../images/logomark.svg");background-repeat:no-repeat;background-size:120%;background-attachment:fixed;background-position:0px -6rem;}.contact.logomark{background-position-y:-12rem;}article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section{display:block;}header{background-image:linear-gradient(to right, rgb(31, 29, 54), rgb(77, 77, 77));height:78px;width:100%;position:fixed;z-index:999;top:0px;transition:top 0.5s;}.headroom{will-change:transform;transition:transform 200ms linear;}a{font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;text-transform:uppercase;text-decoration:none;font-weight:300;cursor:pointer;transition:all 0.2s linear;color:rgb(127, 124, 187);}a.logo{display:inline-block;background:url("../images/logo-wordmark.svg") 0% 0% / cover no-repeat;font-size:0px;line-height:0px;width:212px;height:22px;position:absolute;left:4vw;top:27px;}header nav{position:absolute;right:5vw;top:31px;}header nav a, footer nav a{color:rgb(255, 255, 255);font-size:1rem;letter-spacing:0.07rem;margin-left:2rem;}a.active, a:hover, #attributes h3{color:rgb(121, 234, 185);}#intro{position:relative;padding:12vw 0px 8vw 12vw;}h1{font-family:Georgia;font-size:4.4vw;line-height:4.87vw;letter-spacing:-0.07rem;font-weight:normal;color:rgb(0, 0, 0);}#intro h1{white-space:nowrap;}strong{font-weight:500;}h1 strong{font-weight:bold;font-size:8.8vw;line-height:8vw;display:block;}.home #intro p, .contact #intro h2{position:relative;left:34vw;top:-6vh;max-width:42vw;font-weight:100;}.contact #intro h2{font-size:1.6rem;line-height:2.6rem;}.contact #intro h2 strong{font-size:2rem;font-weight:400;}.contact #intro h2 a{display:block;margin-top:1rem;font-size:80%;}.contact iframe{display:block;width:87%;height:50vw;margin:0px 0px 0px 13%;}
	</style>
</head>
<body class="<?php echo $page ?> logomark">
<?php include 'header.php'; // Renders navigation ?>
<section id="intro">
	<div class="text-container">
		<h1>We know <strong>BONE.</strong></h1>
		<p>Together our team has conducted over 90 years of research and more than 10,000 orthopedic surgeries.</p>
	</div>
</section>
<section id="<?php echo $page ?>">
	<ul class="team-members">
		<li>
			<picture>
			  <img src="images/team/anand_small.jpg" alt="Anand Agarwal, MD">
			</picture>
			<div class="text-container">
				<h3>Anand Agarwal, MD</h3>
				<h4>President &amp; CEO, Co-founder</h4>
				<p>Orthopedic spine surgeon. Research Professor, University of Toledo. German Medical Council, Orthopaedic and Spine Surgery. Formerly KOL for Kyphon, Medtronic.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/vijay_small.jpg" alt="Vijay Goel, PhD">
			</picture>
			<div class="text-container">
				<h3>Vijay Goel, PhD</h3>
				<h4>Board Member, Co-founder</h4>
				<p>World Congress of Biomechanics Lifetime Achievement Award. Endowed Chair and McMaster-Gardner professor. Co-director of the Engineering Center for Orthopedic Research Excellence. Yale.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/sarit_small.jpg" alt="Sarit Bhaduri, PhD">
			</picture>
			<div class="text-container">
				<h3>Sarit Bhaduri, PhD</h3>
				<h4>Advisor, Co-founder</h4>
				<p>Internationally reputed researcher in calcium phosphates and other biomaterials. Distinguished University Professor at The University of Toledo. Fellow of The American Ceramic Society (ACerS), The American Institute of Medical &amp; Biological Engineering (AIMBE), and The National Academy of Inventors (NAI). Author of 175 peer reviewed papers, and approximately 35 US/foreign patents granted/applied for in structural materials, and biomaterials.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/brian_small.jpg" alt="Brian Schlossberg, PhD">
			</picture>
			<div class="text-container">
				<h3>Brian Schlossberg, PhD</h3>
				<h4>Director, R&amp;D</h4>
				<p>Brian brings over 10 years of industry experience leading bone regeneration research teams. He developed Pioneer Surgical's highest revenue product. Former engineer for RTI Surgical and Angstrom Medica. Brian earned his PhD for the development of an advanced treatment for augmentation of vertebral compression fractures under the supervision of Professor William R. Walsh at UNSW.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/anand_small.jpg" alt="Steven Nemes, CPA">
			</picture>
			<div class="text-container">
				<h3>Steven Nemes, CPA</h3>
				<h4>Director of Finance</h4>
				<p>Steven has built his accounting career with clients ranging from small businesses to international manufacturing companies. He brings a passion for learning and loves to lend his computational skills to assist the team with manufacturing decisions, strategic planning and analysis. Steven feels right at home working hand-in-hand with the sales, R&amp;D, and executive teams to help OsteoNovus deliver great products efficiently and effectively.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/blaine_small.jpg" alt="Blaine Best">
			</picture>
			<div class="text-container">
				<h3>Blaine Best</h3>
				<h4>Associate Director of Quality</h4>
				<p>Blaine brings over a decade of leadership and management experience to the team.  Years of experience as an engineer, researcher and aviation mechanic for the US National Guard provide him with a diverse and capable background.  He is well respected among his colleagues for his integrity, attention to detail and his diligence to lead from the trenches.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/anand_small.jpg" alt="Olivia Norman, MS">
			</picture>
			<div class="text-container">
				<h3>Olivia Norman, MS</h3>
				<h4>Lead Process Engineer</h4>
				<p>A graduate of the University of Toledo, Olivia Norman is a Process Engineer with a passion for orthopedics and the medical device field. As one of the pioneering members of the OsteoNovus team, Olivia works to design, implement and continuously improve OsteoNovus' manufacturing processes, as well as help to build the quality system. She's an inventor of the patented NovoGro process.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/aaron_small.jpg" alt="Aaron Gao, Phd">
			</picture>
			<div class="text-container">
				<h3>Aaron Gao, Phd</h3>
				<h4>Lead Scientist</h4>
				<p>Aaron is a material scientist who enjoys problem solving and finding the important facts hidden behind the trivial details. He earned his Ph.D.in chemistry from University of Toledo, and brings experience in inorganic synthesis and material characterization. He's motivated by exploring ways to make novel materials and searching for connections between their material structure and properties.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/arthur_small.jpg" alt="Arthur Karas, MBA">
			</picture>
			<div class="text-container">
				<h3>Arthur Karas, MBA</h3>
				<h4>Regional Sales Manager</h4>
				<p>Arthur is an accomplished sales, operations and management professional who brings over 10 years of experience building successful sales and marketing programs in competitive medical device markets. Former distributor for ETEX, Amedica, Innovision and others.</p>
			</div>
		</li>
		<li>
			<picture>
			  <img src="images/team/neha_small.jpg" alt="Neha Kumar">
			</picture>
			<div class="text-container">
				<h3>Neha Kumar</h3>
				<h4>Operations Administrator</h4>
				<p>Neha is the first (and happiest) face you'll see at OsteoNovus.  She leads the purchasing, billing and event planning activities. A Chicago native, Neha is a graduate of University of Illinois at Chicago. She brings start-up experience from DesiLit, where she managed finances, planned events, edited their quarterly publication and designed marketing materials.</p>
			</div>
		</li>
	</ul>
</section>
<?php include 'footer.php'; // Renders page footer ?>
</body>
</html>