<?php include 'gzip.php'; // Compress Stuff ?>
<?php $page = "contact"; ?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
	<style type="text/css">
	*, ::before, ::after{box-sizing:inherit;}html, *, :hover{transition:all 0.2s linear;}html{box-sizing:border-box;font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;}html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video{margin:0px;padding:0px;border:0px;font-style:inherit;font-variant:inherit;font-weight:inherit;font-stretch:inherit;font-size:inherit;line-height:inherit;font-family:inherit;vertical-align:baseline;}html, body{background-color:rgb(246, 248, 251);}body{line-height:1;}.logomark{background-image:url("../images/logomark.svg");background-repeat:no-repeat;background-size:contain;background-position:-2rem -6rem;}.team.logomark, .contact.logomark{background-image:url("../images/logomark.svg");background-repeat:no-repeat;background-size:120%;background-attachment:fixed;background-position:0px -6rem;}article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section{display:block;}header{background-image:linear-gradient(to right, rgb(31, 29, 54), rgb(77, 77, 77));height:78px;width:100%;position:fixed;z-index:999;top:0px;transition:top 0.5s;}.headroom{will-change:transform;transition:transform 200ms linear;}a{font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-style:normal;text-transform:uppercase;text-decoration:none;font-weight:300;cursor:pointer;transition:all 0.2s linear;color:rgb(127, 124, 187);}a.logo{display:inline-block;background:url("../images/logo-wordmark.svg") 0% 0% / cover no-repeat;font-size:0px;line-height:0px;width:212px;height:22px;position:absolute;left:4vw;top:27px;}header nav{position:absolute;right:5vw;top:31px;}header nav a, footer nav a{color:rgb(255, 255, 255);font-size:1rem;letter-spacing:0.07rem;margin-left:2rem;}a.active, a:hover, #attributes h3{color:rgb(121, 234, 185);}#intro{position:relative;padding:12vw 0px 8vw 12vw;}.team #intro{padding:14vw 0px 8vw 7vw;}h1{font-family:Georgia;font-size:4.4vw;line-height:4.87vw;letter-spacing:-0.07rem;font-weight:normal;color:rgb(0, 0, 0);}#intro h1{white-space:nowrap;}strong{font-weight:500;}h1 strong{font-weight:bold;font-size:8.8vw;line-height:8vw;display:block;}p{font-family:"Forza SSm A", "Forza SSm B", Forza, sans-serif;font-size:1.4rem;font-weight:100;font-style:normal;font-stretch:normal;line-height:1.67;letter-spacing:0.6px;color:rgb(0, 0, 0);}#intro p{font-size:1.4rem;}.team #intro p{width:32%;margin:3rem 0px 0px;}#team{position:relative;margin-top:-28vw;}ol, ul{list-style:none;}.team-members{padding-left:14vw;}ul li{display:inline-block;}.team-members li{display:inline-block;width:32.8%;vertical-align:top;margin:0px 0.1rem 6rem 0px;}.team-members li:first-child{margin-left:32%;}picture{display:block;background:rgb(127, 124, 187);width:100%;height:18vw;overflow:hidden;position:relative;}.team-members picture img{position:absolute;width:105%;left:-5%;}.team-members li .text-container{padding-right:4vw;}h3{font-size:1.4rem;line-height:2rem;margin:0px auto 4rem;font-weight:100;}.team h3{margin:0px;}.team-members li h3{margin:2rem 0px 1rem;font-size:2.4rem;}.team-members li h4{font-weight:600;margin:1.4rem 0px;font-size:1.2rem;}.team-members li p{font-size:1.4rem;}
	</style>
</head>
<body class="<?php echo $page ?> logomark">
<?php include 'header.php'; // Renders navigation ?>
<section id="intro">
	<div class="text-container">
		<h1>Made in the <strong>USA.</strong></h1>
		<h2><strong>OsteoNovus</strong><br>Nitschke UT Commercialization Complex<br>2801 W Bancroft Street<br>Toledo, Ohio, USA<br><a href="mailto:&#115;&#105;&#120;&#119;&#101;&#101;&#107;&#115;&#064;&#111;&#115;&#116;&#101;&#111;&#110;&#111;&#118;&#117;&#115;&#046;&#099;&#111;&#109;">hello@osteonovus.com</a>
		</h2>
	</div>
</section>
<section id="<?php echo $page ?>">
	<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4Bomr1gxPzKqkjgCnEVbaUjud-zovBak&q=The+University+of+Toledo,Toledo+Ohio"  frameborder="0" style="border:0"></iframe>
</section>
<?php include 'footer.php'; // Renders page footer ?>
</body>
</html>

