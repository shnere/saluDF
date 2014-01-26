<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  	
	<title><?= $SYS_metaTitle; ?></title>
	<meta name="author" 		content="@shnere @0w3w">
	<meta name="keywords" 		content="<?= $SYS_metaKeyWords; ?>">
	<meta name="description" 	content="<?= $SYS_metaDescription; ?>">
  	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo base_url();?>/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>/apple-touch-icon.png">
	
	<!-- CSS: implied media="all" -->
	<link rel="stylesheet" href="<?php echo base_url().FOLDER_CSS; ?>style.css?v=2">
	<link rel="stylesheet" href="<?php echo base_url().FOLDER_CSS; ?>facebox.css">

	<!-- Load Head JS -->
	<script src="<?php echo base_url().FOLDER_JS; ?>head.min.js"></script>
	
	<!-- Load all scripts by Head JS -->
	<script>
		head.js("<?php echo base_url().FOLDER_JSLIB; ?>modernizr-1.7.min.js",
				"https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js",
				"<?php echo base_url().FOLDER_JSLIB; ?>facebox.js",
				"<?php echo base_url().FOLDER_JSMYLIB; ?>library.js",
				"<?php echo base_url().FOLDER_JS; ?>plugins.js"
				);
	</script>
	
</head>

<body>
	<div id="container">
	    <header>

	    </header>
	    <div id="main" role="main">