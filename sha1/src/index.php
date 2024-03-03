<?php
highlight_file(__FILE__);
$bp1 = $_GET['bp1'];
$bp2 = $_GET['bp2'];
$huse1 = $_GET['huse1'];
$huse2 = $_GET['huse2'];
$ise_player =$_GET['ise_player'];
if ($bp1 !== $bp2 && md5($bp1) === md5($bp2)) {
    if ($huse1 != $huse2 && sha1($huse1) === sha1($huse2)) {
        if (file_get_contents($ise_player) === "Welcome to ISELAB!!!") {
            echo "恭喜你呀，菜狗！！！";
            echo "接下来该怎么办？<br/>";
            @eval($_POST['BP']);
        }else{
            echo "你知道data协议秘籍嘛?";
        }
    } else {
        echo "sha1又如何相等呢";
    }
} else {
    echo "如何让md5值相等呢¿";
}
