
<?php
function update_user($us,$em,$st,$ke){
$dir="php/us/$us";
if (!file_exists($dir)){
mkdir($dir,0777,true);
}
$ee=md5($em);
$m2=date('i');
$fp=fopen("php/us/$us/index.php","w");
fputs($fp, "<?php \n");
fputs($fp, "$"."i=$us; \n");
fputs($fp, "$"."e='$em'; \n");
fputs($fp, "$"."ee='$ee'; \n");
fputs($fp, "$"."k='$ke'; \n");
fputs($fp, "?> \n");
fclose($fp);

$fp=fopen("php/us/$us/st.php","w");
fputs($fp, "<?php \n");
fputs($fp, "$"."s=$st; \n");
fputs($fp, "?> \n");
fclose($fp);
}
?>