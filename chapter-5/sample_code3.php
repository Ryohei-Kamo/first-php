<?php

//変数スコープについてのサンプルコード
function countdown($top){
    while ($top > 0){
        echo "$top..";
        $top--;
    }
    echo "boom!\n";
}

$counter = 5;
countdown($counter);

echo "Now, counter is $counter";