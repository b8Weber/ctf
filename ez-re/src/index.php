<?php
//这么简单的题目，你不会写不出来吧
//不会以为是upload吧
error_reporting(0);
include("upload.php");
highlight_file(__FILE__);
if(isset($_GET['x'])){
    $x = $_GET['x'];
    if($x==="4476"){
        die("bye!");
    }
    if(intval($x,0)===4476){
        echo 'good,continue go!';
    }
    else{
        die('byebye!!!');
    }
}
if(isset($_POST['bp'])){
    $key = (String)$_POST['bp'];

    if(preg_match('/.+?iLoveISE/is', $key)){
        die('bp说你是个没爱的人');
    }
    if(stripos($key,'520iLoveISE') === FALSE){
        die('你原来不爱ISE');
    }

    echo $flag;

}
?>