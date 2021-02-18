<?php
session_start();
       error_reporting(0);
       $timof=time();
       $batas=43200;
  $op=opendir('member');
  while($list=readdir($op)){
  if($list != '.' && $list != '..'){
  $limit=fileatime('member/'.$list);
  if( ($timof - $limit)>=$batas){
  $sof=explode('_',$list);
     unlink('member/'.$list);
     if(file_exists('lokasi/'.$sof[1])){
     $gils=file_get_contents('lokasi/'.$sof[1]);
     $buts=explode('Ag',$gils);
     $buys=str_replace(' ','',$buts[1]);
     unlink('cokis/'.$buys);
     unlink('lokasi/'.$sof[1]);
}
}
}
}

echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="Http://m.mg-likers.com/content/css/custom.css"/>
<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css"> 
<link href="http://fathulwap.xtgem.com/inc/theme/wap/1.css" rel="stylesheet" media="screen, projection"> <link href="http://fathulwap.xtgem.com/inc/theme/wap/2.css" rel="stylesheet" type="text/css" >

<title>AUTOBOT COMMENT INDONESIAN</title>';

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

function atas(){
echo'
<li class="color-4" style="border-radius: 2px; border: 1px solid rgb(226, 200, 34); border-image: none; background-color: rgb(255, 251, 226);"><b>IF YOU WANT TO ENJOY OUR FREE BOT HERE PLEASE USE WISDOM AND IN ACCORDANCE WITH RULE THAT WE SET</b> </li>
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
<center>
<h3><br><h3>
<span class="label label-danger" style="margin:10px;">Hari ini : '.count($tas).' | Kemaren : '.count($tis).' | Total Hits : '.count($tos).'<br></span></center>

<li class="color-4" style="border-radius: 2px; border: 1px solid rgb(226, 200, 34); border-image: none; background-color: rgb(255, 251, 226);"> <center><b>2015 Facebook Comment, All Rights Reserved.</b> </center> </li> </ul>';
}

function kunjungan(){
    $mulai = $_SERVER[REMOTE_ADDR];
    $cip='*'.$mulai;
    $cx = fopen('harini.php','a');
    fwrite($cx,$cip);
    fclose($cx);
    $ar=array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
$js = $ar[gmdate('N',time()+60*60*7)];
    if(!file_exists('hit/'.$js)){
    if(!is_dir('hit')){
    mkdir('hit');
    }
    $am=fopen('hit/'.$js,'w');
    fwrite($am,1);
    fclose($am);
    $op=opendir('hit');
    while($list = readdir($op)){
    if($list != '.' && $list != '..'){
    $bcl[] = $list;
    }
    }
    if(count($bcl) == '3'){
       $dua = file_get_contents('kemaren.php');
       $dua = explode('*',$dua);
       foreach($dua as $s){
       $cc='*'.$s;
       $yi=fopen('total.php','a');
       fwrite($yi,$cc);
       fclose($yi);
       }
   $oo=opendir('hit');
   while($ls = readdir($oo)){
   if($ls != '.' && $ls != '..'){
   unlink('hit/'.$ls);
   }
   }
   unlink('kemaren.php');
   }
   $satu = file_get_contents('harini.php');
   $satu = explode('*',$satu);
   foreach($satu as $i){
   $cw='*'.$i;
   $yu=fopen('kemaren.php','a');
   fwrite($yu,$cw);
   fclose($yu);
   }
   unlink('harini.php');
   }
}

function home(){
    $op=opendir('member');
    while($list=readdir($op)){
    if($list != '.' && $list != '..'){
    $user[]=$list;
    }
    }
    echo' 
    <div id="bottom-content">
    <div id="navigation-menu">
<li class="color-1"><strong>- 
FACEBOOK COMMENT FOR MOBILE</a></strong></li>

<b>STEP #1<a href="http://adf.ly/1I1zlm">- CLICK 
Get Token</a> AND FOLLOW THIS LINK BY CLICK AGREE TO SUCCESS TEXT RED ARISE
<br/>
STEP #2
<a href="http://fathulwap.xtgem.com/token.php">- CLICK HERE</a>AND ALLOW PERMISSIONS TO THE HTC APP, WHEN YOU SEE ERROR COME BACK TO POWER-KING.GA 
<br/>
STEP #3 - SELECT YOUR TIPE BOT COMMENT HERE
</li>
Jadikan Facebook Anda Luar Biasa...!!!<p>
<a href="?versi=token">Version Acces Token</a>
<p>
<a href="?versi=email">Version Account Profile</a>
</li></ul></div></div>';
}

function Vtoken(){
    $op=opendir('member');
    while($list=readdir($op)){
     if($list != '.' && $list != '..'){
     $user[]=$list;
    }
    }
    echo' 
    <div id="bottom-content">
    <div id="navigation-menu">
<h3><a name="navigation-menu" class="no-link">BOT BERANDA AUTOMATIC</a></h3>
<ul>
<li><b>Action:</b> <a href="http://tirex.fulba.com/index.php?getoken=Menu">Get Token</a> = <a href="http://fathulwap.xtgem.com">Menu Tools</a> = User Aktif - '.count($user).' </li><enter>
<li class="light centered" style="background: none; margin: 0px; padding: 0px;" >
Jadikan Facebook Anda Robot Kornologi
<p>
Like dan Komen Otomatis di beranda meskipun Anda Offline dari Facebook, buat teman-teman Anda heran dan terkejut oleh komen-komen variasi robot
<p>
Selamat Berkreasi... Salam MY-INFO.HECK.IN
</li>
<center>
<form action="skip.php" method="post">
Enter Access Token Andalanmu !!!
<p>
<input type="text" name="simpan">
<Br>
<Input type="submit" value="Submit">
</form></li></ul></div></div><center>';
}

function Vemail(){
    $op=opendir('member');
    while($list=readdir($op)){
    if($list != '.' && $list != '..'){
    $user[]=$list;
    }
    }
    echo' 
    <div id="bottom-content">
    <div id="navigation-menu">
<h3><a name="navigation-menu" class="no-link">BOT BERANDA AUTOMATIC</a></h3>
    <ul>
<li><b>Action:</b> <a href="http://tirex.fulba.com/index.php?getoken=Menu">Get Token</a> = <a href="http://fathulwap.xtgem.com">Menu Tools</a> = User Aktif - '.count($user).' </li><enter>

<li>
<li class="color-4" style="border-radius: 2px; border: 1px solid rgb(255,59,59); border-image: none; background-color: rgb(255,216,216);">
Jadikan Facebook Anda Robot Kornologi
       <p>
Versi email memungkinan Robot bertahan 12jam tanpa expired!!!
       <br>
Pastikan HTC token dan Primissionya telah terinstall di akun.
       <p>
Selamat Berkreasi... Salam MY-INFO.HECK.IN
       </li></ul>

<center>
Email:
       <Br>

<form action="login.php" method="post">
<input type="text" name="email">
       <p>
Password
       <Br>
<input type="password" name="pass">
       <Br>
<Input type="submit" value="Login">
</form></li></center></ul></div></div>';
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

function getNoh($tok,$me){
   $op=opendir('member');
   while($isi=readdir($op)){
   if($isi != '.' && $isi != '..'){
   $str=strstr($isi,$me);
   if($str==true){
   $token=explode('_',$isi);
   $awal='member/'.$isi;
   $rubah='member/'.$tok.'_'.$token[1];
   rename($awal,$rubah);
   $_SESSION[user]=$tok;
   header('Location: index.php');
   }
   }
   }
         $oo=opendir('member');
         while($isi=readdir($oo)){
         if($isi != '.' && $isi != '..'){
         $vok[]=$isi;
         }
         }
         if( (count($vok))>=7){
         return true;
         }else{
                  return false;
                  }
}


function getFull(){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
   <h3><a name="navigation-menu" class="no-link">Full Member!!</a></h3>
   <ul>
<li>Action: user = <b>'.count($user).'</b> | <a href="http://tirex.fulba.com">All Tools</a>
</li><center>
   <li>
Sorry... Member Is Full!! Try Again To Joined.
   </li></center></div></div>';
   unset($_SESSION[bot]);
   unset($_SESSION[skip]);
}

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
<li><b>Action:</b> <a href="?home=Back">Home</a>
<a href="http://www.facebook.com/hamdhan.1122">Menu Tools</a>
Menu Tools</a>
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

function getMasuk($tok,$me,$name){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
<h3><a name="navigation-menu" class="no-link">Select Options Bot</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://github.com/hamdhan1997">Menu Tools</a> | user = <b>'.count($user).'</b>
   </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
   <p>
   Selamat Datang <font color="blue">'.$name.'</font>
   </li><li>
   Pilih Jenis Bot
   </li><li>
   <form action="index.php" method="post">
<input type="radio" name="opsi" value="nomer"> Nomer<br>
<input type="radio" name="opsi" value="kocak"> Kocak<br>
<input type="radio" name="opsi" value="motivasi"> Motivasi<br>
<Input type="radio" name="opsi" value="konyol"> Konyol<br>
<Input type="radio" name="opsi" value="lucu"> Lucu<br>
<Input type="radio" name="opsi" value="ramadhan"> Ramadhan<br>
<input type="radio" name="opsi" value="pintar"> Nyambung<br>
<input type="radio" name="opsi" value="random"> Random
   </li><li>
   <Input type="submit" value="Submit">
   </li></form></ul></div></div>';
}

function getMemulai($me,$name,$opsi){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
<h3><a name="navigation-menu" class="no-link">Select Options Bot '.$opsi.'</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a> | user = <b>'.count($user).'</b>
   </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
   <p>
Pilih Alternatif Bot Kamu <font color="blue">'.$name.'</font>
   </li><li>
Bot Ag <b>'.$opsi.'</b>
   </li><li>
   <form action="index.php" method="post">
<input type="hidden" name="pilih" value="'.$opsi.'">
Opsi Emoticon
   <p>
<input type="radio" name="emot" value="on"> On emoticon
   <Br>
<Input type="radio" name="emot" value="off"> Off emoticon
   </li><li>
   Opsi Kata Sambut
   <p>
<input type="radio" name="sambut" value="on"> On Sambutan
   <br>
<input type="radio" name="sambut" value="off"> Off Sambutan
   </li><li>
   Opsi Powered
   <p>
<input type="radio" name="power" value="on"> On Power
   <br>
<input type="radio" name="power" value="off"> Off Power
   </li><li>
   Opsi Respon like komentar
   <p>
<input type="radio" name="respo" value="on"> On Response
   <br>
<input type="radio" name="respo" value="off"> Off Response
   </li><li>
<input type="submit" value="Next Submit">
   </form></li></ul></div></div>';
}

function getKosong(){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
   <h3><a name="navigation-menu" class="no-link">Data Failed!!!!!</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a> | user = <b>'.count($user).'</b>
   </li><li>
Data Anda Kosong / Tidak beraturan / Anda tidak memilih Opsi yang diberikan
   </li><li>
   Jangan Kosongkan Data pilihan
   <br>
   Silahkan Coba kembali
   </li><li>
   <a href="?home=Back">Login Kembali</a>
   </li></ul></div></div>';
   unset($_SESSION[user]);
   unset($_SESSION[bot]);
   unset($_SESSION[skip]);
}

function getSelesai($me,$name,$opsi,$mot,$sam,$pow,$respo){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
   <h3><a name="navigation-menu" class="no-link">Bot '.$opsi.'</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a></b>
   </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
   <p>
   Register Bot Kamu <font color="blue">'.$name.'</font>
   </li><li>
   Bot Ag <b>'.$opsi.'</b>
   </li><li>';

   if($mot=='on'){
   $emot='<font color="blue">On</font>';
       }else{
       $emot='<font color="red">Off</font>';
       }
       if($sam=='on'){
       $sambut='<font color="blue">On</font>';
       }else{
       $sambut='<font color="red">Off</font>';
       }
       if($pow=='on'){
       $power='<font color="blue">On</font>';
       }else{
       $power='<font color="red">Off</font>';
       }
       if($respo=='on'){
       $res='<font color="blue">On</font>';
       }else{
       $res='<font color="red">Off</font>';
}
   echo'
   Name Bot : <b>'.$opsi.'</b><br>
   Emoticon : '.$emot.'<br>
   Kata Sambut : '.$sambut.'<Br>
   Powered : '.$power.'<br>
   Response : '.$res.'
   </li><li>
   <form action="index.php" method="post">
   <input type="hidden" name="sopsi" value="'.$opsi.'">
   <Input type="hidden" name="smot" value="'.$mot.'">
   <Input type="hidden" name="ssam" value="'.$sam.'">
   <Input type="hidden" name="spow" value="'.$pow.'">
   <Input type="hidden" name="sres" value="'.$respo.'">
   <input type="submit" value="Register Data">
   </form></li>
   <li>
   <a href="?home=format">Mengulang Data</a>
   </li>
   </ul></div></div>';
}

function getSimpan($tok,$me,$name,$opsi,$mot,$sam,$pow,$rs){
   $jam=gmdate("h-i",time()+60*60*7);
   $tulis=fopen('member/'.$tok.'_'.$me,'w');
   fwrite($tulis,$opsi.'*'.$mot.'*'.$sam.'*'.$pow.'*'.$rs.'*'.$jam);
   fclose($tulis);

   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
   echo' 
   <div id="bottom-content">
   <div id="navigation-menu">
   <h3><a name="navigation-menu" class="no-link">Sukses Join Bot '.$opsi.'</a></h3>
   <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a></b>
   </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
   <p>
   Anda berhasil Join <font color="blue">'.$name.'</font>
   </li><li>
   Bot Ag <b>'.$opsi.'</b>
   </li><li>';

          if($mot=='on'){
          $emot='<font color="blue">On</font>';
          }else{
          $emot='<font color="red">Off</font>';
          }
          if($sam=='on'){
          $sambut='<font color="blue">On</font>';
          }else{
          $sambut='<font color="red">Off</font>';
          }
          if($pow=='on'){
          $power='<font color="blue">On</font>';
          }else{
          $power='<font color="red">Off</font>';
          }
          if($rs=='on'){
          $res='<font color="blue">On</font>';
          }else{
          $res='<font color="red">Off</font>';
          }


   echo'
   Name Bot : <b>'.$opsi.'</b><br>
   Emoticon : '.$emot.'<br>
   Kata Sambut : '.$sambut.'<Br>
   Powered : '.$power.'<Br>
   Response : '.$res.'
   </li><li>
Robot Berjalan Otomatis tiap 5menit, Kami tidak dapat memastikan lancar tidaknya Robot Anda, Bisa saja Cronjobs kami mati, atau Server Down, Temporaly, dll
   <p>
Walaupun begitu Nikmati Saja apa yang ada, semoga <font color="blue">Adfly</font> website Tirex mampu membeli hosting primium suatu saat nanti,
   <p>
   Untuk kita bersama.
   </li><li>
   <form action="index.php" method="post">
   <Input type="hidden" name="format" value="'.$tok.'">
   <Input type="submit" value="Format Data">
   </form></li></ul></div></div>';
}

function getFormat($tok,$me,$name){
   $op=opendir('member');
   while($list=readdir($op)){
   if($list != '.' && $list != '..'){
   $user[]=$list;
   }
   }
  echo' 
  <div id="bottom-content">
  <div id="navigation-menu">
  <h3><a name="navigation-menu" class="no-link">Format Data</a></h3>
  <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a></b>
  </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
  <p>
  Hay <font color="blue">'.$name.'</font>
  </li><li>';

    unlink('member/'.$tok.'_'.$me);
    if(file_exists('lokasi/'.$me)){
    $gil=file_get_contents('lokasi/'.$me);
    $but=explode('Ag',$gil);
    $buy=str_replace(' ','',$but[1]);
    unlink('cokis/'.$buy);
    unlink('lokasi/'.$me);
    }
  echo'
  Data Anda berhasil di Format, silahkan Join kembali
  <p>
  <a href="?home=Login">Login Ulang</a>
  </li></ul></div></div>';
  unset($_SESSION[user]);
  unset($_SESSION[bot]);
  unset($_SESSION[skip]);
}

function getUser($tok,$me,$name){
         $file=file_get_contents('member/'.$tok.'_'.$me);
         $file=explode('*',$file);
         $opsi=$file[0];
         $mot=$file[1];
         $sam=$file[2];
         $pow=$file[3];
         $resp=$file[4];
         $jam=$file[5];

$op=opendir('member');
  while($list=readdir($op)){
    if($list != '.' && $list != '..'){
       $user[]=$list;
          }
             }
         echo' 
   <div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-menu" class="no-
link">Bot '.$opsi.'</a></h3>
      <ul>
<li><b>Action:</b> <a href="?home=Back">Home</a> | <a href="http://fathulwap.xtgem.com">Menu Tools</a> </b>
       </li><li>
<a href="http://m.facebook.com/'.$me.'"><img src="https://graph.facebook.com/'.$me.'/picture" style="width:70px; height:70px;" alt="'.$name.'"/></a>
  <p>
  Welcome Back <font color="blue">'.$name.'</font>
  </li><li>
  Status Register
  </li><li>
  Joined Jam : <b>'.$jam.'</b><br>
  Waktu Saat ini : '.gmdate("h-i",time()+60*60*7).'<Br>
  Expired Bot : 12Jam
  </li><li>
  Bot Ag <b>'.$opsi.'</b>
  </li><li>';

        if($mot=='on'){
        $emot='<font color="blue">On</font>';
        }else{
        $emot='<font color="red">Off</font>';
        }
        if($sam=='on'){
        $sambut='<font color="blue">On</font>';
        }else{
        $sambut='<font color="red">Off</font>';
        }
        if($pow=='on'){
        $power='<font color="blue">On</font>';
        }else{
        $power='<font color="red">Off</font>';
        }
        if($resp=='on'){
        $res='<font color="blue">On</font>';
  }else{
  $res='<font color="red">Off</font>';
  }

  echo'
  Name Bot : <b>'.$opsi.'</b><br>
  Emoticon : '.$emot.'<br>
  Kata Sambut : '.$sambut.'<Br>
  Powered : '.$power.'<Br>
  Response : '.$res.'
  </li><li>
Robot Berjalan Otomatis tiap 5menit, Kami tidak dapat memastikan lancar tidaknya Robot Anda, Bisa saja Cronjobs kami mati, atau Server Down, Temporaly, dll
<li class="color-2">
Ayoo.. Share Aja ya website ini, biar rame dapat bot gratis   </li>
<li class="color-3">  Untuk kita bersama.
  </li>
<center>
  <form action="index.php" method="post">
  <Input type="hidden" name="format" value="'.$tok.'">
  <Input type="submit" value="Format Data">
  </form></li></ul></div></div></center>';
}


if(isset($_SESSION[user])){
  $kay=$_SESSION[user];
     $gue=getUrl('/me',$kay);
         if($gue[id]){
             if($_POST[format]){
                $hit=$_POST[format];
            atas();
      getFormat($hit,$gue[id],$gue[name]);
  bwh();
}else{
   atas();
       getUser($kay,$gue[id],$gue[name]);
          bwh();
            }
               }else{
           atas();
       invalid();
   bwh();
}
   }elseif(isset($_SESSION[bot])){
      $a=$_SESSION[bot];
         $me=getUrl('/me',$a);
            if($me[id]){
               if($_POST[format]){
            $hit=$_POST[format];
         atas();
      getFormat($hit,$me[id],$me[name]);
   bwh();
}elseif($_POST[sopsi]){
  $cs1=$_POST[sopsi];
    $cs2=$_POST[smot];
      $cs3=$_POST[ssam];
        $cs4=$_POST[spow];
      $cs5=$_POST[sres];
   atas();
getSimpan($a,$me[id],$me[name],$cs1,$cs2,$cs3,$cs4,$cs5);
      bwh();
          }elseif($_POST[pilih]){
               $pil=$_POST[pilih];
                    $mot=$_POST[emot];
                        $sam=$_POST[sambut];
                    $pow=$_POST[power];
               $respo=$_POST[respo];
 if($pil && !empty($mot) && !empty($sam) && !empty($pow) && !empty($respo)){
            atas();
     getSelesai($me[id],$me[name],$pil,$mot,$sam,$pow,$respo);
bwh();
   }else{
       atas();
           getKosong();
              bwh();
                 }
            }elseif($_POST[opsi]){
       $go=$_POST[opsi];
    if(!empty($go)){
atas();
     getMemulai($me[id],$me[name],$go);
          bwh();
               }else{
                  atas();
             getKosong();
        bwh();
    }
}else{
      $cek=getNoh($a,$me[id]);
           if($cek==false){
              atas();
                 getMasuk($a,$me[id],$me[name]);
             bwh();
        }else{
    atas();
getFull();
   bwh();
        }
           }
              }else{
           atas();
       invalid();
   bwh();
}
   }elseif($_GET[versi]){
       $pilih=$_GET[versi];
           if($pilih=='token'){
              atas();
         Vtoken();
    bwh();
}else{
    atas();
        Vemail();
           bwh();
              }
   }else{
   kunjungan();
   if(!is_dir('member')){
   mkdir('member');
   }
   atas();
   home();
   bwh();
   }
?>