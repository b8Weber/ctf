<?php
highlight_file(__FILE__);
error_reporting(0);
include "flag.php";
header("Content-type:text/html;charset=utf-8");
if(isset($_POST['huse'])&&isset($_POST['ctf'])){
  $b=$_POST['ctf'];
  $a=$_POST['huse'];
  if($_POST['huse']!=$_POST['ctf'] && md5($a)===md5($b)){
    if(isset($_COOKIE['cookie'])){
      if ($_COOKIE['cookie']=='bp'){
        if(isset($_GET['aaa']) && isset($_GET['bbb'])){
          $aaa=$_GET['aaa'];
          $bbb=$_GET['bbb'];
          if($aaa==114514 && $bbb==114514 && $aaa!=$bbb){
            $give = 'cancanwordflag';
            $get ='就这?';
            if(!isset($_GET['flag']) && !isset($_POST['flag'])){
              die($give);
            }
            if($_POST['flag'] === 'flag' || $_GET['flag'] === 'flag'){
              die($get);
            }
            foreach ($_POST as $key => $value) {
              $$key = $value;
            }
            foreach ($_GET as $key => $value) {
              $$key = $$value;
            }
            echo $flag;
          }else{
            echo "洗洗睡吧";
          }
        }else{
          echo "行不行啊细狗";
        }
      }
    }
    else {
      echo '菜狗';
    }
  }else{
    echo "就这???";
  }
}else{
  echo "别来沾边";
}
?>

