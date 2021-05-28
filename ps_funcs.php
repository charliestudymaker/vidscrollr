<?php

function GenStackElement($etype,$src)
{
 global $ELEMENT_CNT;

     if (!$ELEMENT_CNT)
        $ELEMENT_CNT = 1;
     else
        $ELEMENT_CNT++;     
	
	echo '<div onclick=UnMuteVid(' . $ELEMENT_CNT . '); class="section " id="section' . $ELEMENT_CNT . '">';

//	echo $ELEMENT_CNT;
	
	if ($etype=="vid")
	   {
	   echo '<video  class=vidFull id="myVideo' . $ELEMENT_CNT . '" data-autoplay muted loop playsinline >';
    	   echo '<source src="' . $src . '" type="video/mp4">';   // e.g. IMG_5415.MOV
	  echo '</video>';
	  echo '<div id=vctrl' . $ELEMENT_CNT . ' class=layer style="display:block;""><h1>Click for Sound</h1></div>';
	  }
      
        if ($etype=="img")
	   {
	   echo '<img class=vidFull src=' . $src . '>';
	   }
	


        echo '</div>';  // end of section div

}

function ShowUploadedImages()
  {
   $files = scandir("./images");


   //
   // LOOP OVER files and for image files (.jpg) , create Viewer Link
   //
   foreach($files as $file) 
	       {
	       if (stristr($file,".jpg"))
	               GenStackElement("img","images/" . $file);
	       if (stristr($file,".MOV"))
		       GenStackElement("vid","images/" . $file);
	       	       //echo $file . "<br>";
	       }
   

   }

?>
