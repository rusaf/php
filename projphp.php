<?php

$a = 10;
$b = 25;

//условный оператор
if ($a > 5 && $b > 20) {
	echo $b%$a;
} else {
	echo $a*$b;
}

//оператор множественного выбора
switch ($b) {
	case 'one':
		echo '$b = 1';
		break;
	case 'two':
		echo '$b = 2';
		break;
	
	default:
		echo '$b - это не one и не two';
		break;
}
//циклы с параметром
for ($i = 0; $i < 100; $i++) {
	echo "$i<br>";
}
// обход массива
$shoppingList = ['fish', 'bread', 'milk', 'button'];
foreach ($shoppingList as $i) {
	echo $i . '<br>';
}



?>