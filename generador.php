
<?php

function generatePassword($length)
{
    $key = "";
    $pattern = "123456789abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}
if (isset($_POST['submitChars'])) {
    $chars= '8';
    $cont = 0 ;
    while ($cont < 1){
        $length = (int)$_POST['chars'];
        echo '<div"> Password generada : '.generatePassword($length).'</div>';
        $cont = $cont + 1 ;
    }
    
}    

?>