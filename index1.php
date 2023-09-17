<?php

// $youtubeurl = "https://youtu.be/V7C18tD8WD4?si=0Kme44A9YCVFfIE5";
// $Explodeurl = explode("?",$youtubeurl );
// $FukingExplode = explode("/",$Explodeurl[0]);
// $Videoid = end($FukingExplode);

// echo "<pre>";
// print_r($Videoid);
// echo "</pre>";

function Thumbnail($youtubeurl){ 
   
    $Explodeurl = explode("?",$youtubeurl );
    $FukingExplode = explode("/",$Explodeurl[0]);
    $Videoid = end($FukingExplode);
    echo "<img src='https://i.ytimg.com/vi/$Videoid/hq720.jpg'>";
}


Thumbnail("https://youtu.be/V7C18tD8WD4?si=0Kme44A9YCVFfIE5");
echo "<br>";
Thumbnail("https://youtu.be/rJFYm_55wDU?t=33");
echo "<br>";
Thumbnail("https://youtu.be/K2bsycZjxYA?t=8");

