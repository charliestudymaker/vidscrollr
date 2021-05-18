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
<body>


<div id="fullpage">
	<div class="section " id="section0">

	  <video onclick="UnMuteVid(1)" class=vidFull id="myVideo1" data-autoplay muted loop playsinline >
    			<source src="IMG_5415.MOV" type="video/mp4">
	  </video>

	  <div id=vctrl1 class=layer style='display:block;'><h1>Click for Sound</h1></div>
	  
	</div>
	<div class="section" id="section1">
	  <video class=vidFull id="myVideo2"  data-autoplay loop muted  playsinline  onclick="UnMuteVid(2)">
    			<source src="IMG_5410.MOV" type="video/mp4">
	  </video>

  	  <div id=vctrl2 class=layer style='display:block;'><h1>Click for Sound</h1></div>


	</div>
	
	<div class="section" id="section2">
	  <video class=vidFull id="myVideo3"  data-autoplay loop muted playsinline  onclick="UnMuteVid(3)">
	        			<source src="IMG_5384.MOV" type="video/mp4">

	  </video>

   	  <div id=vctrl3 class=layer style='display:block;'><h1>Click for Sound</h1></div>
	</div>


	<div class="section" id="section3">

	  <img class=vidFull src=https://webedc-files.s3.amazonaws.com/dev/prototype/imagewall/-10-il_1588xN.2376894700_2rqu.jpg>	  
	  
	</div>
	


	
</div>

<script type="text/javascript" src="dist/fullpage.js"></script>


<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: true,
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE']
    });


//  setTimeout('UnMuteVid()',5000);

  function UnMuteVid(n)
  {
      document.getElementById('myVideo'+n).muted=!document.getElementById('myVideo'+n).muted;
      if (document.getElementById('myVideo'+n).muted)
	  document.getElementById('vctrl'+n).style.display='block';
      else
	  document.getElementById('vctrl'+n).style.display='none';
  }

  
</script>

</body>
</html>
