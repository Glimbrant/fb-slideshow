<?php
	/* ob_start to fix session cookies warning */
	ob_start();

	/* facebook php sdk */
	require ('./extras/facebook.php');
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="sv-se"> <![endif]-->
<!--[if IE 7 ]>   <html class="ie ie7 no-js" lang="sv-se"> <![endif]-->
<!--[if IE 8 ]>   <html class="ie ie8 no-js" lang="sv-se"> <![endif]-->
<!--[if IE 9 ]>   <html class="ie ie9 no-js" lang="sv-se"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="sv-se"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Steak Rådhuset öppnar 20 Februari 2014</title>
<!-- modernizr -->
<script type="text/javascript" src="./extras/modernizr.custom.86080.js"></script>
<!-- reset-css -->
<link rel="stylesheet" href="./extras/reset.css" />
<!-- fb-slideshow css -->
<link rel="stylesheet" href="./fb-slideshow.css" />
</head>

<body style="background-color:black;">
<!-- fb-slideshow php -->
<?php
	include ('./fb-slideshow.php');
?>
</body>
</html>