<?php
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
	
	foreach ($arr as $key => $elem) {
		echo $key.'-'.$elem . '<br>'; 
	}
?>
<br>
<?php
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
	
	foreach ($arr as $key => $elem) {
		echo $key.'возраст -'.$elem . '<br>'; 
	}
?>
<br>
