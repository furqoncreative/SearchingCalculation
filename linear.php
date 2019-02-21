<?php

if (isset($_POST['find']))
{
$batas=$_POST['batas'];
$people = range(1,$batas);

$val=$_POST['cari'];

$time_start = microtime(true);
if (in_array($val, $people)){
$time_end = microtime(true);
$time = $time_end - $time_start;	
 echo $val." dari ".$batas." angka ditemukan dalam waktu $time milisecond.";
 	}
	else
 	{
 echo $val." dari ".$batas." tidak ditemkuan";
 }
}
?>