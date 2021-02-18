<?php

function getRandom($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
$space=array(
"nomer","kocak","motivasi","konyol","pintar","lucu","ramadhan",
);
$step=$space[rand(0,count($space)-1)];

switch($step){
case nomer:
getNomer($token,$gue,$gueid,$id,$name,$typ,$time,$mot,$sam,$pow);
break;

case kocak:
getKocak($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case motivasi:
getMotivasi($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case konyol:
getKonyol($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case lucu:
getLucu($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case ramadhan:
getPuasa($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case pintar:
getPintar($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;
}
}

function getLucu($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('lucu.php');

$text=$text[rand(0,count($text)-1)];

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getPintar($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('nyambung.php');

foreach($pintar as $pilih){
if(preg_match($pilih[0][0],$mess)){
$man=$pilih[1][rand(0,count($pilih[1])-1)];
break;
}
}
if($man){
$text=$man;
}else{
$text=$mess;
}

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getPuasa($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('ramadhan.php');

$text=$text[rand(0,count($text)-1)];

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getKocak($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('kocak.php');

$text=$text[rand(0,count($text)-1)];

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getKonyol($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('konyol.php');

$text=$text[rand(0,count($text)-1)];

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getMotivasi($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow){
include('motivasi.php');

$text=$text[rand(0,count($text)-1)];

if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getResponLike($token,$gueid,$gue,$username){
   $me=getUrl('/me/notifications',$token,array(
'fields' => 'id,from,link,application',
   'limit' => 15,
       ));

for($i=0;$i<=count($me);$i++){
       $name=$me[$i][from][name];
          $frm=$me[$i][from][id];
            $link=$me[$i][link];
            $cek=$me[$i][application][name];

   if($cek=='Likes'){
if(preg_match('/photo/',$link)){
$hd=strstr($link,$gueid);
if($hd==false){
$hot=explode('fbid=',$link);
$hok=explode('&',$hot[1]);
$id=$hok[0];
  $jos=getUrl('/'.$id.'/comments',$token,array(
'fields' => 'message',
   'limit' => 50,
       ));
if( (count($jos))>=20 ){}else{
$json=json_encode($jos);
$str=strpos($json,'[['.$frm.']]...[['.$gueid.']]');
if($str==false){

$kata=getKal($gue,$name,$frm,$gueid);

if(file_exists('lokasi/'.$gueid)){
$datas=file_get_contents('lokasi/'.$gueid);
$life=explode('»',$datas);
$plm=str_replace(' ','',$life[1]);

$xox=getUrl('/'.$id,$token,array(
'fields' => 'from',
));
$jadi=$xox[from][id].'_'.$id;

getKomek($jadi,$plm,$kata,$gueid);
}else{
getUrl('/'.$id.'/comments',$token,array(
        'message' => urlencode($kata),
            'method' => 'post',
          ));
}
}
}
}
}else{
if(preg_match('/posts/',$link)){
$hos=strstr($link,$username);
if($hos==false){
$hot=explode('posts/',$link);
$hok=explode('?',$hot[1]);
$id=$hok[0];
}
}else{
$hos=strstr($link,$gueid);
if($hos==false){
$hot=explode('fbid=',$link);
$hok=explode('&',$hot[1]);
$id=$hok[0];
}
}
if($id){
$kata=getKal($gue,$name,$frm,$gueid);

  $jos=getUrl('/'.$id.'/comments',$token,array(
'fields' => 'message',
   'limit' => 50,
       ));
if( (count($jos))>=20 ){}else{
$json=json_encode($jos);
$str=strpos($json,'[['.$frm.']]...[['.$gueid.']]');
if($str==false){

if(file_exists('lokasi/'.$gueid)){
$datas=file_get_contents('lokasi/'.$gueid);
$life=explode('»',$datas);
$plm=str_replace(' ','',$life[1]);

$xox=getUrl('/'.$id,$token,array(
'fields' => 'from',
));
$jadi=$xox[from][id].'_'.$id;

getKomek($jadi,$plm,$kata,$gueid);
}else{
getUrl('/'.$id.'/comments',$token,array(
        'message' => urlencode($kata),
            'method' => 'post',
          ));
}
}
}
}
}
}
}
}

function getKal($lol,$pix,$pux,$aku){
$kata=array(
'Ciyeee...ciyee....<name> ngelike komentar <me> rasanya gimanaaaaa Gituu',
'Salam kenal yah <name>... Ditunggu tunggu dari tadi akhirnya komentar <me> di like juga.. Makasih',
'Pasti <name> orangya gak pelit, buktinya komentar <me> aja di like, Ini baru namanya teman facebook , hehehe',
'Hey <name> , halooo <name>, kamu anak baik pasti, sampai-sampai komentar <me> di Like, thanks',
'Askum..... <me> datang lagi mau ngucapin Terimakasih buat <name> karena udah nge-Like komentar <me> disini',
'Tok...tok...tok.... Robot respon likenya <me> nongol lagi, mau bilang makasih buat <name> udah mau Like komentar <me> di atas',
'Tadi di pemberitahuan ada notif kalo <name> menyukai komentar <me>, jadi <me> langsung kesini ngucapin terimakasih buat <name>, hehe',
'Satu jempol di komentar <me> sangat berarti, jadi wajar <me> ngucapin makasih banyak buat <name>, makasih ya <name>',
'Jarang banget ada yg Like komentar seperti <name>, tandanya <name> tuh gak pelit pasti, soalnya komentar <me> saja di Like, makasih yah <name>',
'Taraaaa... <me> dataaaaannnggg ngucapin makasih! Buat <name> yang baik hati udah Like komentarnya <me>, hehehe',
);
$me=$kata[rand(0,count($kata)-1)];

return getMaho($me,$lol,$pix,$pux,$aku);
}

function getMaho($string,$me,$you,$youid,$meid){
$awal=array(
'<me>',
'<name>',
);
$rubah=array(
$me,
$you,
);
    $wajah=array(
      urldecode('%F0%9F%8C%B8'),
urldecode('%F0%9F%8C%B9'),
urldecode('%F0%9F%8C%B7'),
urldecode('%F0%9F%8C%BB'),
urldecode('%F0%9F%8C%BA'),
urldecode('%F0%9F%8C%B1'),
urldecode('%F0%9F%92%90'),
urldecode('%F0%9F%92%90'),
urldecode('%F0%9F%8E%84'),
urldecode('%F0%9F%8C%B4'),
urldecode('%F0%9F%8C%B4'),
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
                  );
                          $kiri=urldecode('%F0%9F%91%88');
$kanan=urldecode('%F0%9F%91%89');
$kanann=urldecode('%CB%9C%E2%80%9D%2A%C2%B0%E2%80%A2.%CB%9C%E2%80%9D%2A%C2%B0+%E2%80%A2+%F0%9F%91%AE+King-Bot+%F0%9F%91%AE+%E2%80%A2%C2%B0%2A%E2%80%9D%CB%9C.%E2%80%A2%C2%B0%2A%E2%80%9D%CB%9C');

$on1=$wajah[rand(0,count($wajah)-1)];
$on2=$wajah[rand(0,count($wajah)-1)];
$on3=str_replace($awal,$rubah,$string);

$pesan='[['.$youid.']] ―――――――キタ（'.$kiri.''.$on1.''.$kanan.'） 
°o.O🌷°o.O🌻.•´¸.•´¨¤❤.•´¸.•´¨¤ 
(¯•😍»»'.$on3.'««😍¯•) 
˜”*°•.˜”*° • 👮 King-Bot 👮 •°*”˜.•°*”˜ ';

return $pesan;
}

function getPower($nm,$gue,$tm){
$by=array(
'Bot beranda by',
       'Robot like by',
             'Bot otomatis by',
                   'Robot automatic by',
);
$punyu=array(
                   'Cuma telat',
                 'Wew.. Selisih',
               'Mantap cuma telat',
            'Asik selisih',
          'Gila komen telat',
        'Botnya telat',
      'Lagi lagi selisih',
   'Tu kan cuma telat',
'Robot telat kurang lebih',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.' '.$d.' detik 💤';
}else{
$ups=$text.' '.$m.' menit 🔰 '.$d.' detik 🎄 ';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gue;
$sit='';
$site='Minat Bot Gini Inbox Saya';

$true='
'.urldecode('%F0%9F%8C%B8').''.$ups.'
'.urldecode('%F0%9F%8C%B9').''.$ips.'
'.urldecode('%F0%9F%91%AE+%CE%BD%CE%B9%CF%81+%CE%B1%C2%A2%C2%A2%CF%83%CF%85%CE%B7%D1%82+%CF%81%D1%8F%CF%83%C6%92%CE%B9%C4%BB%D1%94+%D0%BA%CE%B9%CE%B7g-%D0%B2%CF%83%D1%82+%F0%9F%91%AE').''.$sit.'
'.urldecode('%F0%9F%8C%B7').''.$site;


return $true;
}

function getEmos(){
$emo=array(
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
),
array(
urldecode('%F0%9F%8C%B5'),
urldecode('%F0%9F%8D%80'),
urldecode('%F0%9F%8D%81'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%82'),
urldecode('%F0%9F%8D%83'),
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
));
$random=array(
'0','1','2','3','4','5','6','7','8','9',
);
$rol=$random[rand(0,count($random)-1)];
foreach($emo[$rol] as $omo){
$true.=$omo.' ';
}
return $true;
}

function getSambut($user,$true=null){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'Selamat Malam',
'Selamat Malam',
'Selamat Begadang',
'Selamat Begadang',
'Selamat Begadang',
'Selamat Pagi',
'Selamat Pagi',
'Selamat Pagi',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Siang',
'Selamat Sore',
'Selamat Senja',
'Selamat Malam',
'Selamat Malam',
'Selamat Malam',
'Selamat Malam',
'Selamat Malam',
'Selamat Malam',
);

$foto=array(
'Fotonya Keren',
'Gambarnya Bagus',
'Top Image',
'Gokil Pic nya',
'Fotonya Lucu',
'Gambar siapa tuh',
'Lukisan seperti Foto',
);
$status=array(
'Statusnya Keren',
'Bagus Statusnya',
'Top Statuses',
'Gokil kata-katanya',
'Statusnya Lucu',
'Status siapa nih',
'Status Seperti Puisi',
);

$emo=array(
urldecode('%F0%9F%8D%93'),
urldecode('%F0%9F%8D%8A'),
urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%94'),
urldecode('%F0%9F%8D%BA'),
urldecode('%F0%9F%8D%B8'),
);
$kiri=urldecode('%F0%9F%91%88');
$kanann=urldecode('%CB%9C%E2%80%9D%2A%C2%B0%E2%80%A2.%CB%9C%E2%80%9D%2A%C2%B0+%E2%80%A2+%F0%9F%91%AE+King-Bot+%F0%9F%91%AE+%E2%80%A2%C2%B0%2A%E2%80%9D%CB%9C.%E2%80%A2%C2%B0%2A%E2%80%9D%CB%9C');$kanan=urldecode('%F0%9F%91%89');
if($true){
$hal=$foto[rand(0,count($foto)-1)];
}else{
$hal=$status[rand(0,count($status)-1)];
}
$ucapan=str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

$text=$emo[rand(0,count($emo)-1)].''.$kanan.' »»» '.$ucapan.' 
---== 💛 💓 💗 💝 💝 💖 ==---
'.$user.''.$kiri.''.$emo[rand(0,count($emo)-1)].''.$kanan.'
'.$kiri.''.$fathul2.''.$kanan.''.$hal;

return $text;
}

function getNomer($token,$gue,$gueid,$id,$name,$typ,$time,$mot,$sam,$pow){
$for=getUrl('/'.$id.'/comments',$token,array(
'fields' => 'from',
));
if($for[0]){
if(count($for)==2){
$data=file('nomer-tiga.php');
$text=$data[rand(0,count($data)-1)];
}else{
if(count($for)==1){
$data=file('nomer-dua.php');
$text=$data[rand(0,count($data)-1)];
}else{
$data=file('nomer-telat.php');
$text=$data[rand(0,count($data)-1)];
}
}
}else{
$data=file('nomer-satu.php');
$text=$data[rand(0,count($data)-1)];
}
if($sam=='on'){
if($typ=='photo'){
$sambut=getSambut($name,'foto');
}else{
$sambut=getSambut($name);
}
}
if($mot=='on'){
$emot=getEmos();
$emos=getEmos();
}
if($pow=='on'){
$power=getPower($name,$gue,$time);
}

return getKirim($token,$id,$gue,$gueid,$name,$text,$sambut,$emot,$emos,$power);
}

function getKirim($tok,$id,$me,$gueid,$dia,$text,$sambut=null,$emot=null,$emos=null,$power=null){
$love=array(
'<me>',
'<name>',
);
$putus=array(
$me,
$dia,
);

$pesan=str_replace($love,$putus,$text);

$final=$sambut.'
'.$pesan.' 
'.$emot.' 
*°•.˜”*° • 👮 King-Bot 👮 •°*”˜.•°* 
'.$kanann.' 
'.$power;

if(file_exists('lokasi/'.$gueid)){
$data=file_get_contents('lokasi/'.$gueid);
$life=explode('»',$data);
$plm=str_replace(' ','',$life[1]);
getKomek($id,$plm,$final,$gueid);
}else{
getUrl('/'.$id.'/likes',$tok,array(
'method' => 'post',
));
getUrl('/'.$id.'/comments',$tok,array(
'message' => urlencode($final),
'method' => 'post',
));
}
}

function getKomek($id,$cokis,$message,$gueid){
$mut=explode('_',$id);

$go=getPols('https://m.facebook.com/story.php?story_fbid='.$mut[1].'&id='.$mut[0],$cokis);

$sg=substr($go,strpos($go,'dtsg" value="')+13);
$dtsg=explode('"',$sg);

$sub=substr($go,strpos($go,'/a/like.php'));
$link=explode('"',$sub);
$give=substr($link[0],strpos($link[0],'gfid=')+5);
$gfid=explode('&',$give);

getPols('https://m.facebook.com/a/like.php?perm&ifab&ft_ent_identifier='.$mut[1].'&gfid='.$gfid[0].'&ref_component=mbasic_photo_permalink_actionbar&ref_page=%2Fwap%2Fstory.php',$cokis);

$komen=array(
'fb_dtsg' => $dtsg[0],
'comment_text' => $message,
);

$rel='https://m.facebook.com/a/comment.php?fs=8&actionsource=2&redirectosoftpermalink&ft_ent_identifier='.$mut[1].'&gfid='.$gfid[0].'&av='.$gueid;

$curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $rel);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS, $komen);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
   curl_setopt($curl, CURLOPT_ENCODING, '');
   curl_setopt($curl, CURLOPT_COOKIEFILE,'cokis/'.$cokis);
  $c_data = curl_exec($curl);
  curl_close($curl);

}

function getPols($url,$cokis=null){
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL,$url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($curl, CURLOPT_COOKIEFILE,'cokis/'.$cokis);
  $ch = curl_exec($curl);
  curl_close($curl);
  return($ch);
}

function getStart($token,$gueid,$gue,$username,$opsi,$mot,$sam,$pow,$rp){
$me=getUrl('/me/home',$token,array(
'fields' => 'id,name,from,message,type,created_time',
'limit' => 7,
));
for($i=1;$i<=count($me);$i++){
$id=$me[$i-1][id];
$typ=$me[$i-1][type];
$cem=$me[$i-1][from][id];
$name=$me[$i-1][from][name];
$mess=$me[$i-1][message];
$time=$me[$i-1][created_time];
if($cem==$gueid){
}else{
$cek=getUrl('/'.$id.'/likes',$token,array(
'fields' => 'id',
'limit' => 50,
));
if( (count($cek))>=50){}else{
$json=json_encode($cek);
$sales=strpos($json,$gueid);
if($sales==false){

switch($opsi){
case nomer:
getNomer($token,$gue,$gueid,$id,$name,$typ,$time,$mot,$sam,$pow);
break;

case kocak:
getKocak($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case motivasi:
getMotivasi($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case konyol:
getKonyol($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case lucu:
getLucu($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case ramadhan:
getPuasa($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case pintar:
getPintar($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;

case random:
getRandom($token,$gue,$gueid,$id,$name,$typ,$mess,$time,$mot,$sam,$pow);
break;
}

if($rp=='on'){
getResponLike($token,$gueid,$gue,$username);
}

}}}}}

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

$op=opendir('member');
while($isi=readdir($op)){
if($isi != '.' && $isi != '..'){
$token=explode('_',$isi);
$file=file_get_contents('member/'.$isi);
$redy=explode('*',$file);

$me=getUrl('/me',$token[0]);
if($me[id]){
getStart($token[0],$me[id],$me[name],$me[username],$redy[0],$redy[1],$redy[2],$redy[3],$redy[4]);
}else{

if(file_exists('lokasi/'.$token[1])){
$far=file_get_contents('lokasi/'.$token[1]);
$fir=explode('»',$far);
$cokis=str_replace(' ','',$fir[1]);
$step1=array(
'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v',
'w','x','y','z','.','@',);
$step2=array(
'3*5','8*6','4*9','4*2','1*6','3*9','3*4','3*1','9*1','1*8','4*1','7*0',
'8*1','6*0','8*2',
'2*4','2*3','7*5','2*8','2*7','2*2','0*0','0*1','0*9','0*4','0*3','7*3',
'8*0',);
$cros=str_replace($step2,$step1,$fir[0]);
$boy=str_replace($step2,$step1,$fir[1]);
$login=array(
'email' => $cros,
'pass' => $boy,
'login' => 'Log in',
);
getToken($login,'https://m.facebook.com/login.php',$cokis);
$files=file_get_contents('cokis/'.$cokis);
if(preg_match('/c_user/',$files)){

$true=getToken('https://m.facebook.com/dialog/oauth?client_id=41158896424&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cfriends_subscriptions%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9',$cokis);

$tokex=substr($true,strpos($true,'token=')+6,(strpos($true,'&expires')-(strpos($true,'token=')+6)));

$mek=getUrl('/me',$tokex);
if($mek[id]){
$awal='member/'.$isi;
$rubah='member/'.$tokex.'_'.$mek[id];
rename($awal,$rubah);
getStart($tokex,$mek[id],$mek[name],$mek[username],$redy[0],$redy[1],$redy[2],$redy[3],$redy[4]);
}
}else{
unlink('member/'.$isi);
unlink('lokasi/'.$token[1]);
unlink('cokis/'.$cokis);
}
}else{
unlink('member/'.$isi);
}
}
}
}

?>
