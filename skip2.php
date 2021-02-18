<?php
session_start();
$me='http://adf.ly/1GXRis';
$cek=$_SERVER['HTTP_REFERER'];
$pos=strstr($cek,$me);
if($pos==false){
$_SESSION[bot]=$_SESSION[skip];
header('Location: index.php');
}else{
header('Location: http://adf.ly/1GXRis');
}
?>