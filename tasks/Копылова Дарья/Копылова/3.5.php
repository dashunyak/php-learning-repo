<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
    foreach ($arr as $elem) {
        echo $elem . '<br>';
    }
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }

    echo $res;
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $aaa = 9;
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    echo $res / $aaa;
?>