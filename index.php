<!-- <?php
 echo "<h1>Video ID </h1>";
 echo '<hr>';

$Yahoo_Baba= "https://youtu.be/vxD9LvB1eNA?si=PTbfx90978_WueYr";

$VidArray = explode('?', $Yahoo_Baba);
$Vidid = explode('/', $VidArray[0] );
echo '<pre>';
   print_r(end($Vidid));
echo '</pre>'; 
echo '<br>';
?>  



<?php
echo "<h2>Thumbnail ID</h2>";
echo "<hr>";

$Yahoo_Baba= "https://youtu.be/vxD9LvB1eNA?si=PTbfx90978_WueYr";

$VidArray = explode('?', $Yahoo_Baba);
$Vidid = explode('/', $VidArray[0] );
$thub_link = end($Vidid);
echo "https://youtu.be/vxD9LvB1eNA?si=PTbfx90978_WueYr";


