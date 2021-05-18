<?php

include "ps_head.php";
include "ps_funcs.php";

include "ps_uploadhandler.php";

?>

<script>
   function ShowUp()
   	    {
	    document.getElementById('uploadDiv').style.display='block';
	    }

   function SendPic()
   	    {
	    document.UpLForm.submit();
	    }
</script>

<body>


<div class=section>
<form name=UpLForm enctype='multipart/form-data' action=picstack.php method='POST'>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" >

   <a href=# onclick=document.getElementById('camerastart').click(); style='font-size:42px;' >Add Picture</a> 
   <input onchange=ShowUp();  id=camerastart style='display:none;' type="file"  name=uploadedfile accept="image/*" capture="camera">

   <div id=uploadDiv style='display:none;' >
	<input    type=button onclick=SendPic();  value='UPLOAD Picture'>
   </div>
</form>
</div>



<div id="fullpage">


<?php
GenStackElement("vid","IMG_5415.MOV");
GenStackElement("img","https://webedc-files.s3.amazonaws.com/dev/prototype/imagewall/-10-il_1588xN.2376894700_2rqu.jpg");

GenStackElement("vid","IMG_5415.MOV");
GenStackElement("img","https://webedc-files.s3.amazonaws.com/dev/prototype/imagewall/-10-il_1588xN.2376894700_2rqu.jpg");

?>


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


