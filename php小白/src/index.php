<?php

error_reporting(0);
highlight_file(__FILE__);
include("flag.php");
if(isset($_POST['bp'])){
    $bp = $_POST['bp'];

    if(preg_match('/.+?Huse/is', $bp)){
        die('bye!');
    }
    if(stripos($bp, 'Huse') === FALSE){
        die('bye!!');
    }

    echo $flag;

}
