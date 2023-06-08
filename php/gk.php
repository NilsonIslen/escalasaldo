
<?php
function gk($id2){
$f2=file_exists("php/us/$id2/index.php");
if($f2){
include "php/us/$id2/index.php";
include 'php/a_w.php';
$w=rand(1,22);
$w2=$ws[$w];
$k2=rand(100000,999999);
$k3=md5("$w2$k2");
$k4="$w2$k2";
$s3=$s;
include "php/us/$id2/st.php";
include "php/class_user.php";
update_user($id2,$e,$s,$k3);
$to = "$e";
$subject = "Acceso escalasaldo ";
$message = "Utiliza los siguientes datos para ingresar a tu cuenta en esscala: 
\n
id: $id2 clave: $k4
\n
https://escalasaldo.com
";
mail($to, $subject, $message);

echo "<div>";
echo "<p> Por favor revisa el email $e </p>";
echo "<p>Hemos enviado los datos de ingreso. </p>";
echo "<p>Si no lo encuentras en la bandeja de entrada buscala en spam. </p>";
echo "
<p><br>
<a href='php/cs.php'> Aceptar </a></p>";
echo "</div>";
exit();
}}
?>