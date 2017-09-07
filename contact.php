<?php include 'gzip.php'; // Compress Stuff ?>
<?php $page = "contact"; ?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
</head>
<body class="<?php echo $page ?>">
<?php include 'header.php'; // Renders navigation ?>
<div class="logomark">
	<section id="intro">
		<div class="text-container">
			<h1>Made in the <strong>USA.</strong></h1>
			<h2><strong>OsteoNovus</strong><br>Nitschke UT Commercialization Complex<br>2801 W Bancroft Street<br>Toledo, Ohio, USA<br><a href="mailto:&#115;&#105;&#120;&#119;&#101;&#101;&#107;&#115;&#064;&#111;&#115;&#116;&#101;&#111;&#110;&#111;&#118;&#117;&#115;&#046;&#099;&#111;&#109;">hello@osteonovus.com</a>
			</h2>
		</div>
	</section>
	<section id="<?php echo $page ?>">
		<!--iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4Bomr1gxPzKqkjgCnEVbaUjud-zovBak&q=The+University+of+Toledo,Toledo+Ohio"  frameborder="0" style="border:0"></iframe-->
	</section>
</div>
<?php include 'footer.php'; // Renders page footer ?>
</body>
</html>

