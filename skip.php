<?php
session_start();
error_reporting(0);
   if($_POST[simpan]){
   $a=$_POST['simpan'];
   if(preg_match('/token/',$a)){
$token=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
   }else{
   $sub=explode('&',$a);
   $token=$sub[0];
   }
   $me=getUrl('/me',$token);
   if($me[id]){
   $_SESSION[skip]=$token;
   header('Location: skip2.php');
   }else{
   atas();
   invalid();
       bwh();
       }
       }else{
       header('Location: index.php');
       }
echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Bot Kornologi</title><link rel="stylesheet" type="text/css" href="tema.css" media="all,handheld"/><link rel="shortcut icon" href="">';
  function invalid(){
  $op=opendir('member');
  while($list=readdir($op)){
  if($list != '.' && $list != '..'){
  $user[]=$list;
  }
  }
  echo' 
  <div id="bottom-content">
  <div id="navigation-menu">
  <h3><a name="navigation-menu" class="no-link">Token Salah / expired</a></h3>
  <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com/?konten=facebook&menu=Get+Token+Permanen&class=menu">Menu Tools</a> | user = <b>'.count($user).'</b>
  </li><li>
  Token yang Anda masukan Salah atau Expired
  </li><li>
  Silahkan Coba kembali
  </li><li>
  <a href="?home=Back">Login Kembali</a>
  </li></ul></div></div>';
      unset($_SESSION[user]);
      unset($_SESSION[bot]);
      unset($_SESSION[skip]);
}

function atas(){
  echo'
  <div id="header">
<a name="top" href="http://kotabaruku.heck.in/"><img
src="http://kotabaruku.heck.in/files/
kotabarukuheckin.png" alt="Kotabaru Mobile Blog"
style="width: 299px; height: 25px;"/></a>
<h2 class="description">Bot Beranda | Bot Kornologi | Bot Otomatis</h2>
  </div>';
}

function bwh(){
  $load = sys_getloadavg();
  $satu = file_get_contents('harini.php');
  $tas = explode('*',$satu);

  $dua=file_get_contents('kemaren.php');
  $tis = explode('*',$dua);

  $tiga=file_get_contents('total.php');
  $tos = explode('*',$tiga);
  echo' 
  <div id="footer">

  CPU LOAD : '.$load[0].'<br>
Hari ini : '.count($tas).' | Kemaren : '.count($tis).' | Total Hits : '.count($tos).'<br>
  <h6 id="powered-by">
Edited by - <a href="http://my-info.heck.in">Fathul Mr-Error</a></h6>';
}

function getFb($ah,$uh){
   $um=array(
   'graph',
   'fb',
   'me',
   );
   $go='https://'.implode('.',$um);
   return $go.$ah.$uh;
}

function getUrl($string,$token,$as=null){
            $plin=array(
            'access_token' => $token,
            );
            if($as){
            $mer=array_merge($plin,$as);
            }else{
            $mer=$plin;
            }
   foreach($mer as $k => $o){
   $jek[]=$k.'='.$o;
   }
   $im='?'.implode('&',$jek);
   $im=getFb($string,$im);
$im=json_decode(auto($im),true);
if($im[data]){
return $im[data];
}else{
return $im;
}
}

function auto($url){
 $ch=curl_init();
 curl_setopt_array($ch,array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_CONNECTTIMEOUT => 5,
  ));
  $cx=curl_exec($ch);
  curl_close($ch);
  return $cx;
}

?>