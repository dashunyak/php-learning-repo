<?php
function x ($y) {
    function y ($z) {
        return ($z*2);
    }

    return($y+3);
}

$y = 4;
$y = x($y)*y($y);
echo $y;
?>