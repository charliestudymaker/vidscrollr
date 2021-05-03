<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Background video - fullPage.js</title>
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
<body>

<select id="demosMenu">
  <option selected>Choose Demo</option>
  <option id="jquery-adapter">jQuery adapter</option>
  <option id="active-slide">Active section and slide</option>
  <option id="auto-height">Auto height</option>
  <option id="autoplay-video-and-audio">Autoplay Video and Audio</option>
  <option id="backgrounds">Background images</option>
  <option id="backgrounds-fixed">Fixed fullscreen backgrounds</option>
  <option id="background-video">Background video</option>
  <option id="callbacks-v2-compatible">Callbacks version 2</option>
  <option id="callbacks-v3">Callbacks version 3</option>
  <option id="continuous-horizontal">Continuous horizontal</option>
  <option id="continuous-vertical">Continuous vertical</option>
  <option id="parallax">Parallax</option>
  <option id="css3">CSS3</option>
  <option id="drag-and-move">Drag And Move</option>
  <option id="easing">Easing</option>
  <option id="fading-effect">Fading Effect</option>
  <option id="fixed-headers">Fixed headers</option>
  <option id="gradient-backgrounds">Gradient backgrounds</option>
  <option id="interlocked-slides">Interlocked Slides</option>
  <option id="looping">Looping</option>
  <option id="methods">Methods</option>
  <option id="navigation-vertical">Vertical navigation dots</option>
  <option id="navigation-horizontal">Horizontal navigation dots</option>
  <option id="navigation-tooltips">Navigation tooltips</option>
  <option id="no-anchor">No anchor links</option>
  <option id="normal-scroll">Normal scrolling</option>
  <option id="normalScrollElements">Normal scroll elements</option>
  <option id="offset-sections">Offset sections</option>
  <option id="one-section">One single section</option>
  <option id="reset-sliders">Reset sliders</option>
  <option id="responsive-auto-height">Responsive Auto Height</option>
  <option id="responsive-height">Responsive Height</option>
  <option id="responsive-width">Responsive Width</option>
  <option id="responsive-slides">Responsive Slides</option>
  <option id="scrollBar">Scroll bar enabled</option>
  <option id="scroll-horizontally">Scroll horizontally</option>
  <option id="scrollOverflow">Scroll inside sections and slides</option>
  <option id="scrollOverflow-reset">ScrollOverflow Reset</option>
  <option id="lazy-load">Lazy load</option>
  <option id="scrolling-speed">Scrolling speed</option>
  <option id="trigger-animations">Trigger animations</option>
  <option id="vue-fullpage">Vue-fullpage component</option>
</select>

<div id="fullpage">
	<div class="section " id="section0">

	  <video onclick="UnMuteVid(1)" class=vidFull id="myVideo1" data-autoplay muted loop>
    			<source src="IMG_5415.MOV" type="video/mp4">
	  </video>

	  <div id=vctrl1 class=layer style='display:block;'><h1>Click for Sound</h1></div>
	  
	</div>
	<div class="section" id="section1">
	  <video class=vidFull id="myVideo2"  data-autoplay loop muted  onclick="UnMuteVid(2)">
    			<source src="IMG_5410.MOV" type="video/mp4">
	  </video>

  	  <div id=vctrl2 class=layer style='display:block;'><h1>Click for Sound</h1></div>


	</div>
	<div class="section" id="section2">
	  <video class=vidFull id="myVideo3"  data-autoplay loop muted onclick="UnMuteVid(3)">
	        			<source src="IMG_5384.MOV" type="video/mp4">

	  </video>

   	  <div id=vctrl3 class=layer style='display:block;'><h1>Click for Sound</h1></div>


	</div>
	
</div>

<script type="text/javascript" src="dist/fullpage.js"></script>
<script type="text/javascript" src="examples.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: true,
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE']
    });


//  setTimeout('UnMuteVid()',5000);

  function UnMuteVid(n)
  {
      document.getElementById('myVideo'+n).muted=!document.getElementById('myVideo'+n).muted;
      document.getElementById('vctrl'+n).style.display='none';
  }

  
</script>

</body>
</html>
