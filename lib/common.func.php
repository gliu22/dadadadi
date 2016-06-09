<?php
function alertMes($mes,$url){
	echo "<script>alert('{$mes}');</script>";
	echo "<script>window.location='{$url}';</script>";
}

function PreventInje($array)
{
	foreach($array as $key=>$value){
     $array[$key] = mysql_real_escape_string($array[$key]);
 }

}

?>
