<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Planet Earth</title>
    <link href="style.less" rel="stylesheet/less" type="text/css">
    
    <script>var less=less||{};less.env='development';</script>
    <script src="scripts/less-1.3.0.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="scripts/jquery-1.8.2.min.js"></script>
    <script src="scripts/jquery.tools.min.js"></script>
    <script src="scripts/modernizr.custom.js"></script>
    <script src="scripts/jquery.isotope.min.js"></script>
    <script src="scripts/jquery.dlmenu.js"></script>
    <script src="scripts/gmap3.min.js"></script>
	<script>
        jQuery(function($) {
            $( '.dropdown-menu' ).dlmenu();
			
			$('.loading').ajaxStart(function() {
				$(this).show();
			}).ajaxStop(function() {
				$(this).hide();
			});
			
        });
    </script>
</head>

<body>
	<div class="loading"></div>
	<header>
    	<div class="logo">
        	<h1><a href="http://royalworkshop.com/planetearth/"><img src="images/logo_earthday.png" width="196" height="45" alt="Planet Earth"></a></h1>
        </div>
        <nav id="main-nav">
        	<div class="layers">
            	<div id="dd-main-menu" class="dropdown-menu dl-menuwrapper">