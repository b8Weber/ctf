<?php 
include 'hint.php';
highlight_file(__FILE__);
error_reporting(0);
$bp = $_GET["bp"]; 
$secret = $_GET["secret"]; 
$password = $_GET["password"]; 
if(isset($bp)&&(file_get_contents($bp,'r')==="i am a noob"))
{ echo "sure!you are a noob!<br>"; 
 if(preg_match("/flag/",$secret))
 { 
     echo "bp说：菜逼，回去练练吧！！！"; 
     exit(); 
   }
   else{ 
   include($secret); 
   $password = unserialize($password); 
   echo $password; } 
   }
   else{ 
   echo "you are shit ! "; } 
?>