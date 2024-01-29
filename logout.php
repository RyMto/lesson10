<?php 
session_start();

//セッション変数を全て解除する
$_SESSION = array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),"",time()-1800,"/"); //sessionID削除
}

session_destroy();
header("Location:login.php")


?>