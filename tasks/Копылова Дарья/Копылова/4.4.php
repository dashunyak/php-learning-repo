<?php
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
    foreach ($products as $product) {
        echo $product['name'] . ':' . '<br>' . $product['price'] . 'рублей' . '<br>' . $product['amount'] . 'киллограмм' . '<br>'; 
    }
?>
<br>
<?php
	$users[] = [
		'name'   => 'name4',
		'age'    => 34,
		'salary' => 4000,
	];
    foreach ($users as $user) {
        echo $user['name'] . ':' . '<br>' . $user['age'] . 'лет' . '<br>' . $user['salary'] . 'рублей' . '<br>'; 
    }
?>