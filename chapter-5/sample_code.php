<?php

function test($tea, $green_tea, $coffee = 'black'){
    echo "tea is $tea \n";
    echo "green tea is $green_tea\n";
    echo "coffee is $coffee\n";
}

test('milk', 'non_suger');

<?php

function test($tea = null, $green_tea = null, $coffee = null){
    echo "tea is $tea \n";
    echo "green tea is $green_tea\n";
    echo "coffee is $coffee\n";
}

test('milk', 'non_suger', 'black');

<?php

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