<?php

//それぞれの品目の値段
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;

//チップと消費税のレート
$tip_rate = 0.16;
$tax_rate = 0.075;

//商品のみの値段
$meal = (2 * $hamburger) + $shake + $cola;

echo 'The cost of the only meal is $' . $meal ."\n";

//チップと消費税で支払う金額
$tip = $meal * $tip_rate;
$tax = $meal * $tax_rate;

$mealWithTax = $meal + $tax;

echo 'The cost of the meal with tax is $' . $mealWithTax ."\n";

//合計
$total = $meal + $tip + $tax;

echo 'The total cost of the meal is $' . $total ."\n";