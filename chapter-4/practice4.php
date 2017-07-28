<?php

//(1)配列への情報の格納方法
//(2)少数の要素を持つ配列を作成するサンプルコード

//a.クラスの学生の成績とID番号
//生徒名がキーであり値が成績とID番号である連想配列
//この連想配列はそれぞれ成績とID番号に関するキーと値のペアを持つ
$students = ['James D. McCawley' => ['grade' => 'A+', 'id' => 271231],
	'Buwei Yang Chao' => ['grade' => 'A', 'id' => 818211]];

//b.店の在庫の各商品の数
//商品名がキーであり、在庫数が値である連想配列
$stock = ['milk' => 4, 'coffee' => 6, 'orange' => 5, 'tea_pack' => 10];


//c.１週間の給食：食事内容（前菜、副菜、飲み物など）と１日分の給食費
/*キーが曜日であり、値が食事を表す連想配列である連想配列。
この連想配列は費用に関するキーと値のペアと
食事内容に関するキーと値のペアを持つ。*/

$lunches = ['Monday' => ['cost' => 5.50,
	                   'entree' => 'Seafood curry',
	                   'side' => 'Green salad',
	                   'drink' => 'Ice_cold Tea'],
	       'Tuesday' => ['cost' => 6.0,
		                  'entree' => 'Hamburger',
		                  'side' => 'French Fry',
		                  'drink' => 'Diet Coke'],
	       'Wednesday' => ['cost' => 7.0,
		                  'entree' => 'Ramen Ziro',
		                  'side' => 'Garlic',
		                  'drink' => 'Green Tea'],
	       'Thursday' => ['cost' => 4.35,
		'entree' => 'Fried Chicken',
		'side' => 'Green salad',
		'drink' => 'Soda'],
	'Friday' => ['cost' => 5.25,
		'entree' => 'Fish and Tips',
		'side' => 'Boiled Green Beans',
		'drink' => 'Beer']];


//d.あなたの家族の名前
//家族名のみで構成されたインデックス配列
$family = ['Gomez', 'Morticia', 'Fester', 'Grandmama', 'Wednesday', 'Pugsley'];


//e.あなたの家族の名前、年齢、続柄
//家族名がキーであり値が年齢と続柄である連想配列
//この連想配列はそれぞれ年齢と続柄に関するキーと値のペアを持つ
$family = ['Gomez' => ['age' => 40, 'relation' => 'father'],
	'Morticia' => ['age' => 200, 'relation' => 'mother'],
	'Fester' => ['age' => 45, 'relation' => 'uncle'],
	'Grandmama' => ['age' => 400, 'relation' => 'grandmother'],
	'Wednesday' => ['age' => 10, 'relation' => 'sister'],
	'Pugsley' => ['age' => 8, 'relation' => 'brother']];
