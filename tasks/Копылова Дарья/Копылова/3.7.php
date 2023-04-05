<?php
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem % 2 == 1) {
			echo $elem;
		}
	}
?>
<br>
<?php
	$arr = [2, 5, 9, 15, 1, 4];
	
	foreach ($arr as $elem) {
		if ($elem >= 3 and $elem <= 10) {
			echo $elem;
		}
	}
?>
<br>
<?php
	$arr = [2, -5, 9, 15, -1, 4];
    $res = 0;
	
	foreach ($arr as $elem) {
		if ($elem >= 0) {
			$res += $elem;
		}
	}
    echo $res;
?>
<br>
<?php
	$arr = [10, 20, 30, 50, 235, 3000];
	
    foreach($arr as $elem){
        $start=($elem/10**(strlen($elem)-1))%10;
        if($start==1 or $start==2 or $start==5){
           echo $elem;
        }
    }
?>
<br>
<?php
	$arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
	
	foreach ($arr as $elem) {
		if ($elem == "суббота" or $elem == "воскресенье") {
			echo "<b>$elem</b>". '<br>';
		}   else{
            echo $elem . '<br>';
        }
	}
?>
<br>
<?php
	$arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
	$day = 2;
	foreach ($arr as $elem) {
		if ($elem == "вторник") {
			echo "<i>$elem</i>". '<br>';
		}   else{
            echo $elem . '<br>';
        }
	}
?>
<br>