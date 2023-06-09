<p>Bolsas libres:</p>
<?php
$fi=0;
while($fi<=100):
$f2=file_exists("php/us/$fi/st.php");
if(!$f2){echo "<p>$fi</p>";}
if($f2){include "php/us/$fi/st.php";
if($s==0 or $s=="")
{echo "<p>$fi</p><hr>";}
}
$fi++;
endwhile;
?>