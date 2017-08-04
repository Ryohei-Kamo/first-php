<?php

//変数スコープについてのサンプルコード
$a = 1;
$b = 2;

function Sum() 
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;