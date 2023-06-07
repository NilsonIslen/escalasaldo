<?php
function nnull($ido,$idd,$null){
$fp=fopen("php/us/$idd/n$null.php","w");
fputs($fp, "<?php \n");
fputs($fp, "$"."n=$null; \n");
fputs($fp, "?> \n");
fclose($fp);

include "php/us/$ido/st.php";
$s2=$s-10;
$fp=fopen("php/us/$ido/st.php","w");
fputs($fp, "<?php \n");
fputs($fp, "$"."s=$s2; \n");
fputs($fp, "?> \n");
fclose($fp);

echo "
<div>
<p>
Nuevo salto creado con exito, se descontarán 10 ESS de tu cuenta.
</p>
<a  href='index.php'>
Aceptar </a>
<br>
<br>
</div>";
exit();
}
?>