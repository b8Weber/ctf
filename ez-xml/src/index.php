<?php
highlight_file(__FILE__);
class bN00b{
    function __construct()
    {
        die('小朋友404了哦，就这？？？');
    }
}
spl_autoload_register(
    function ($class){
        new bN00b();
    }
);
$classname = isset($_GET['huse']) ? $_GET['huse']:null;
$bp1 = isset($_GET['bp1']) ? $_GET['bp1'] : null;
$bp2 = isset($_GET['bp2']) ? $_GET['bp2'] : null;
if (class_exists($classname)){
    $newclass = new $classname($bp1,$bp2);
    var_dump($newclass);
    foreach ($newclass as $key=>$value)
        echo $key.'$value'.'<br>';
}















































//flag好像不在f111ag.php里面
?>







