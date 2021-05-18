<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>VidScrollR</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen background videos." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,video,full-screen" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="dist/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
		overflow: hidden;
	}

	.vidFull{
	    position: absolute;
		right: 0;
		bottom: 0;
		top:0;
		width: 100%;
		height: 100%;
		background-size: 100% 100%;
 		background-color: black; /* in case the video doesn't fit the whole page*/
  		background-image: /* our video */;
  		background-position: center center;
  		background-size: contain;
   		object-fit: cover; /*cover video background */
   		z-index:3;
	}



	/* Layer with position absolute in order to have it over the video
	* --------------------------------------- */
	 .layer{
		position: absolute;
		z-index: 4;
		width: 100%;
		left: 0;
		top: 43%;

		/*
		* Preventing flicker on some browsers
		* See http://stackoverflow.com/a/36671466/1081396  or issue #183
		*/
		-webkit-transform: translate3d(0,0,0);
		-ms-transform: translate3d(0,0,0);
		transform: translate3d(0,0,0);
	}

	/*solves problem with overflowing video in Mac with Chrome */
	#section0{
		overflow: hidden;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}


	/* Hiding video controls
	* See: https://css-tricks.com/custom-controls-in-html5-video-full-screen/
	* --------------------------------------- */
	video::-webkit-media-controls {
	  display:none !important;
	}

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
</head>

