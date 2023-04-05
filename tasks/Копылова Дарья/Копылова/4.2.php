<?php
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    $sum =0;
    foreach ($arr as $sub) {
		foreach ($sub as $elem) {
            $sum = $sum + $elem;
		}
	}
    echo $sum;
?>
<br>
<?php
    $sum =0;
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
    foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				$sum = $sum + $elem;
			}
		}
	}
    echo $sum;
?>
<br>
<?php
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
    foreach ($arr as $key1 => $sub) {
		foreach ($sub as $key2 => $elem) {
			echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
		}
	}
?>
<br>
<?php
	$arr = [
		'group1'  => ['user11', 'user12', 'user13', 'user43'],
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
    foreach ($arr as $key1 => $sub) {
		foreach ($sub as $key2 => $elem) {
			echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
		}
	}
?>