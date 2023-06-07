<?php
function transfer($u2,$k3,$ps,$a,$d,$min){
include 'php/global.php';
$usdts=$essusdt*$a;
$usdts0=round($usdts,5);
$cops=$esscop*$a;
$cops0=round($cops,2);

include "php/us/$u2/index.php";
include "php/us/$u2/st.php";
$date=date("d-m-Y H:i:s");
if($k3<>$k){exit();}
if($a>$s or $a<1){
echo "<p> Saldo no disponible para esta transferencia. </p>";
exit();
}
$e3=$e;
$s3=$s-$a;
include "php/class_user.php";
update_user($u2,$e3,$s3,$k);

$f2=file_exists("php/us/$d/index.php");
if($f2){
include "php/us/$d/index.php";
include "php/us/$d/st.php";
if($s<>0){
$s2=$s+$a;
update_user($d,$e,$s2,$k);
echo "<div>";
echo"<p>Transferencia exitosa:</p>";
echo"<p>Cuenta origen: $u2 </p>";
echo"<p>Cuenta destino: $d </p>";
echo"<p>Cantidad:$a </p>";
echo"<p>Equivalentes $date :</p>";
echo"<p>ESS $a </p>";
echo"<p>USDT $usdts0 </p>";
echo"<p>COP $cops0 </p>";
echo "<p><a href='index.php'> Aceptar
</a></p>
</div>";

$to = "$e3";
$subject = "Transferencia esscala";
$message = "Enviaste $a fichas a la cuenta $d: 
\n
Equivalentes $date :
\n
ESS $a
\n
USDT $usdts0
\n
COP $cops0
\n
https://esscala.space
\n";
mail($to, $subject, $message);

$to = "$e";
$subject = "Transferencia esscala";
$message = "Recibiste $a fichas de la cuenta $u2.
\n
Equivalentes $date :
\n
ESS $a
\n
USDT $usdts0
\n
COP $cops0
\n
https://esscala.space
\n";
mail($to, $subject, $message);
exit();
}
}
  
$dir="/php/us/$d";
if (!file_exists($dir)){
mkdir($dir,0777,true);
include 'php/a_w.php';
$w=rand(1,22);
$w2=$ws[$w];
$k2=rand(100000,999999);
$k3=md5("$w2$k2");
$k4="$w2$k2";
update_user($d,1,$a,$k3);
echo "<div>";
echo"<p>Transferencia exitosa:</p>";
echo"<p>Cuenta origen: $u2 </p>";
echo"<p>Id nueva cuenta: $d </p>";
echo"<p>Cantidad:$a </p>";
echo"<p>Equivalentes $date :</p>";
echo"<p>ESS $a </p>";
echo"<p>USDT $usdts0 </p>";
echo"<p>COP $cops0 </p>";
echo "<p><a href='index.php'> Aceptar
</a>
</p>
</div>";
$to = "$e3";
$subject = "Transferencia esscala";
$message = "Enviaste $a ESS:
\n
Nueva cuenta
\n
Id: $d Clave: $k4
\n
Equivalentes $date
\n
ESS $a
\n
USDT $usdts0
\n
COP $cops0
\n
https://esscala.space
\n ";
mail($to, $subject, $message);
  
exit();
}
}


?>