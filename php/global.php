<?php
$f=0;
$us=0;
$s2=0;
while($f<=100):
$f2=file_exists("php/us/$f/st.php");
if($f2){
  include "php/us/$f/st.php";
  if($s>=1){$us++;}
  $s4=$s4+$s;
}
$f++;
endwhile;
$usdt=45;
$cop=200000;
$essusdt=$usdt/$s4;
$esscop=$cop/$s4;
$s4000=round($s4,3);
$usdt000=round($usdt,5);
$essusdt_3=round($essusdt,5);
$esscop_0=round($esscop,2);
