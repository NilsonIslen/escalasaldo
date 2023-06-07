<?php
function bet($u2,$ke,$am,$min){
include "php/us/$u2/index.php";
include "php/us/$u2/st.php";
if($k==$ke){
$s000=round($s,3);
if($am>$s or $am<1){
echo "<p> Saldo no disponible para esta apuesta. </p>";
exit();
}
if($am>=1 && $am<=$s){
echo "
<div>
<br>
$e
<a href='php/cs.php'>
Cerrar
</a>
<hr>
<p class='ess'>
<img src='img/log.jpg' alt='ESS' width='30' height='30'> <span> $s000 </span> </p>
<hr>
<p> Al apostar el sistema generará un numero aleatorio entre <b> -$am y +$am</b> </p>";
echo "<p> Ganarás o perderás tantas fichas como el sistema lo indique </p>";
echo "<p> las probabilidades son de 50/50 </p>";
echo "
<table>
<tr>
<td>
<p>
<a href='index.php?ac=bet2&am=$am'>
Continuar
</a>
</p>
</td>
<td>
<p>
<a href='index.php'>
Declinar
</a>
</p>
</td>
</tr>
</table>
";
echo "</div>";
exit();
}}}

function bet2($u2,$ke,$am,$min){
 include "php/us/$u2/index.php";
 include "php/us/$u2/st.php";
 if($k==$ke){
  $ln=rand(0,$am);
  $lp=rand($am,0);
  $l=$ln-$lp;
  $s3=$s+($l);
  $date=date('d-m-Y H:i:s');

$f2=file_exists("php/us/$u2/n$l.php");
if($f2){include "php/us/$u2/n$l.php";
if($l==$n){
unlink("php/us/$u2/n$l.php");
echo "
<div>
<p>
El $l lo tienes como salto, no ganas ni pierdes fichas.
</p>
<a  href='index.php'> Aceptar </a>";
echo "</div>";
exit();
}}
   
include "php/class_user.php";
update_user($u2,$e,$s3,$ke);
echo "
<div>
<br>
$e
<a href='php/cs.php'>
Cerrar
</a>
<hr>
<p class='ess'>
<img src='img/log.jpg' alt='ESS' width='30' height='30'> <span> $s000 </span> </p>
<hr>";
   
if($l<0){
echo "<div class='lose'>";
echo "<h1> $l </h1>";
}
if($l>0){
echo "<div class='win'>";
echo "<h1> +$l </h1>";
$f=0;
while($f<=10):
$f2=file_exists("php/rec/$f.php");
if($f2){include "php/rec/$f.php";
if($l==$aim && $state=='jugando'){
$fp=fopen("html/rec/hi.html","a");
fputs($fp, "\n <div> <p>$date el usuario $u2 con +$l \n");
fputs($fp, "\n gana $prize fichas.</p></div>\n");
fclose($fp);
  
$fp=fopen("php/rec/$event.php","w");
fputs($fp, "<?php \n");
fputs($fp, "$"."event=1; \n");
fputs($fp, "$"."aim=$aim; \n");
fputs($fp, "$"."prize=$prize; \n");
fputs($fp, "$"."state='finalizado'; \n");
fputs($fp, "?> \n");
fclose($fp);
echo "<div><p> Felicidades, acabas de ganar $prize fichas adicionales, en un plazo de 24 horas las estaremos transfiriendo.</p></div>";
}}
$f++;
endwhile;
}
if($l==0){
echo "<div>";
echo "<h1> $l </h1>";
}
echo "
<a  href='index.php'> Aceptar </a>";
echo "</div>";
echo "</div>";
exit();
}}



?>