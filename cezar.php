<!DOCTYPE HTML>
<meta charset = "utf-8">

<?php
    $shift = $_POST['num'];
    $n = 26;        //number of alphabet characters
    $ascii = 97;    //ascii of first character of the alphabet

    $alf = array();
    for ($i=0; $i<$n; $i++) {
	    $alf[] = chr($i + $ascii);
    }

    $str = $_POST['textin'];
    $str = str_split($str);

    foreach ($str as $char){
        if (preg_match('/[A-Z]/i', $char)){
            $key = array_search(strtolower($char),$alf);
            if (isset($_POST['cezar'])){
                getKeyOfEncryptSymbol(); 
            }
            else getKeyOfDecryptSymbol();
                if (ctype_upper($char)){
                    $xKey = $alf[$xKey];
                    echo mb_strtoupper($xKey);
                }
                else echo $alf[$xKey];
        }
        else echo $char;
    }

    function getKeyOfEncryptSymbol(){
        global $shift,$key,$n,$xKey;
        return $xKey = ($key + $shift) % $n;
    }

    function getKeyOfDecryptSymbol(){
        global $shift,$key,$n,$xKey;
        return $xKey = ($key - $shift + $n) % $n;
    }
?>
<p><a href="index.html"><< back</a></p>