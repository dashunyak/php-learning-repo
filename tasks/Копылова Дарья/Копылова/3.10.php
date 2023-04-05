<?php
	$arr = [1, 2, 3, 0, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			echo 'есть';
			break; 
		}
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 0, 5, -4, 6, -8];
    $res = 0;
	
	foreach ($arr as $elem) {
            $res += $elem;
            if ($elem == -8) {
            $res -= $elem;
            break;
		}
	}
    echo $res;
?>
<br>
<?php
    $total = 0;
    $count = 1;
    while($total < 100) {
        $total += $count;
        $count++;
    }
    echo $count;
?>
<br>