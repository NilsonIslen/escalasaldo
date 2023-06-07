<p>Saltos:</p>
<?php
$fi=-200;
while($fi<=200):
$f2=file_exists("php/us/$u2/n$fi.php");
if($f2){include "php/us/$u2/n$fi.php";
if($fi==$n){
echo "<p>$n</p>";
}}
$fi++;
endwhile;
?>