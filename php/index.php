<?php
function pg_us($u2,$k3){
$f2=file_exists("php/us/$u2/index.php");
if($f2){
include "php/us/$u2/index.php"; 
include "php/us/$u2/st.php";
if($u2==$i && $k3==$k){
if($e==1){
echo "<p> Debes asociar tu correo para utilizar las fichas:</p>";
include "html/em.html";
exit();
}
$s000=round($s,3);
echo "
<div>
<p class='ess'> <span> ID:$i
<img src='img/log.jpg' alt='ESS' width='30' height='30'> $s000 </span>
<a href='php/cs.php'>
Cerrar
</a> </p> 
<p>$e</p>
<hr>";
include 'html/bet.html';
echo "<hr>";
include 'html/null.html';
echo "<hr>";
include 'html/transfer.html';
echo "</div>";
echo "<div>
<table>
<tr><td>
<a href='index.php?ac=luk'>
Sorteos </a>
</td>
<td>
<a href='index.php?ac=aw'>
Premios </a>
</td>
<td>
<a href='index.php?ac=ju'>
Saltos </a>
</td>
<td>
<a href='index.php?ac=ac'>
Bolsas </a>
</td>
</tr>
</table>
<br>";
if(isset($_GET["ac"])){
$ac=$_GET["ac"];
  
if($ac=='luk'){
include "php/luk.php";
}
if($ac=='aw'){
include "html/rec/hi.html";
}
if($ac=='ju'){
include "php/null2.php";
}
if($ac=='ac'){
include "php/accounts.php";
}
}
echo "</div>";
echo "<div>";
include "html/m.html";
echo "</div>";
exit();
}else{
echo"
<div>
<p> Id o clave incorrecta </p>
<p>
<a href='index.php?ac=uk'>
Actualizar clave </a>
</p>
<br>
<p>
<a href='php/cs.php'>
Cancelar </a>
</p>
</div>
";
exit();
}}}
?>