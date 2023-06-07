<p>Sorteos:</p>
<?php
$f=0;
while($f<=10):
$f2=file_exists("php/rec/$f.php");
if($f2){include "php/rec/$f.php";
if($state=='jugando'){
echo "
Con +$aim ganas $prize ESS más <br><br>";
}}
$f++;
endwhile;
?>