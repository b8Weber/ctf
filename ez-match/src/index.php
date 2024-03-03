<?php
highlight_file(__FILE__);
include 'ff11aagg.php';
if  ("POST" == $_SERVER['REQUEST_METHOD'])
{
    $secret = $_POST['secret'];
    if (0 >= preg_match('/^[[:graph:]]{12,}$/', $secret))
    {
        echo '杂鱼，多练练';
        exit;
    }
    while (TRUE)
    {
        $reg = '/([[:punct:]]+|[[:digit:]]+|[[:upper:]]+|[[:lower:]]+)/';
        if (6 > preg_match_all($reg, $secret, $arr))
            break;
        $c = 0;
        $ps = array('punct', 'digit', 'upper', 'lower');
        foreach ($ps as $pt)
        {
            if (preg_match("/[[:$pt:]]+/", $secret))
            $c += 1;
        }
        if ($c < 3) break;
        if ("82" == $secret) echo $flag;
        else echo 'Wrong secret';
        exit;
    }
}

?>
