<?php
session_start();
if(isset($_POST["u"])){
$u2=$_POST["u"];
$k2=$_POST["k"];
$_SESSION["u"]=$u2;
$_SESSION["k"]=$k2;
}
include 'html/head.html';
include 'php/global.php';
$min=date('i');
$date=date("d-m-Y H:i:s");
$p000=round($p,3);
$ps=100;
echo "
<div>
<table>
<tr>
<td>
💰
$us
</td>
<td>
<img src='img/log.jpg' alt='Esscala' width='25' height='25'> 
$s4000
</td>
<td>
💲USD $usdt000
</td>
</tr>
</table>
<hr>
<table>
<tr>
<td>
<img class='par' src='img/log.jpg' alt='Escalon' width='25' height='25'>
<img class='par' src='img/usdt.png' alt='Theter' width='25' height='25'>
</td>
<td>
ESS/USDT  
</td>
<td>
$essusdt_3
</td>
</tr>
<tr>
<td>
<img class='par' src='img/log.jpg' alt='Escalon' width='25' height='25'>
<img class='par' src='img/cop.jpg' alt='Peso_col' width='25' height='25'>
</td>
<td>
ESS/COP
</td>
<td>
$esscop_0
</td>
</table>
</div>
";

if(isset($_GET["ac"])){
$ac=$_GET["ac"];
  
if($ac=='uk'){
include "html/rk.html";
exit();}
  
if($ac=='gk'){
$e2=$_GET['e'];
include 'php/gk.php';
gk($e2);
exit();
}

if($ac=='uem'){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
$em2=$_GET["uem"];
  
include "php/us/$u2/st.php";
include "php/class_user.php";
update_user($u2,$em2,$s,$k3);
}

if($ac=='bet'){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
$am=$_GET['am'];
$f2=file_exists("php/us/$u2/index.php");
if($f2){
include "php/us/$u2/index.php";
include "php/us/$u2/st.php";
if($k==$k3){
include 'php/bet.php';
bet($u2,$k3,$am,$min);
}}}

if($ac=='bet2'){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
$am=$_GET['am'];
include 'php/bet.php';
bet2($u2,$k3,$am,$min);
}
if($ac=='n'){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
$null=$_GET['null'];
$idd=$_GET['idd'];
include 'php/null.php';
nnull($u2,$idd,$null);
}
if($ac=='t'){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
$a=$_GET["a"];
$d=$_GET["d"];
include 'php/transfer.php';
transfer($u2,$k3,$ps,$a,$d,$min);
}
}
if(isset($_SESSION['u'])){
session_start();
$u2=$_SESSION['u'];
$k2=$_SESSION['k'];
$k3=md5($k2);
include 'php/index.php';
pg_us($u2,$k3);
}
echo "<div>";
include "html/index.html";
echo "</div>";

echo "<div>";
include "html/m.html";
echo "</div>";
echo "
<div>
<p>
Al hacer uso de esta plataforma, entendemos que ley&oacute; la informaci&oacute;n del men&uacute;  anterior y est&aacute; de acuerdo con ella.
</p>
</div>";
?>
</body>
</html>   