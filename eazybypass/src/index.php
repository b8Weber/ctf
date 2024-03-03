<?php
highlight_file(__FILE__);
include 'flag.php';
$huse = $_GET['huse'];
$ise = $_GET['ise'];
if(preg_match("/\'|\`|\\|\*|\n|\t|\xA0|\r|\{|\}|\(|\)|<|\&[^\d]|@|\||tail|bin|less|more|string|nl|pwd|cat|sh|flag|find|ls|grep|echo|w/is", $huse))
    $huse = "";
if(preg_match("/\'|\"|;|,|\`|\*|\\|\n|\t|\r|\xA0|\{|\}|\(|\)|<|\&[^\d]|@|\||ls|\||tail|more|cat|string|bin|less||tac|sh|flag|find|grep|echo|w/is", $ise))
    $ise = "";
$huse = '"' . $huse . '"';
$ise = '"' . $ise . '"';
$cmd = "file $huse $ise";
system($cmd);
?>