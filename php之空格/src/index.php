<?php
error_reporting(0);
include("flag.php");
highlight_file(__FILE__);
$hu_se = md5($flag);
$url = $_SERVER['QUERY_STRING'];

//特殊字符检测
function waf($url){
    if(preg_match('/\`|\~|\!|\@|\#|\^|\*|\(|\)|\\$|\_|\-|\+|\{|\;|\:|\[|\]|\}|\'|\"|\<|\,|\>|\.|\\\|\//', $url)){
        return true;
    }else{
        return false;
    }
}

if(waf($url)){
    die("就这？菜狗！");
}else{
    extract($_GET);
}

if($hu_se==='iloveweb'){
    echo $flag;
}
