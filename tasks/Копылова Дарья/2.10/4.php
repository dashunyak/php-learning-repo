<?php
    $num = 6;
    $rest = $num % 3;
    if ($rest === 0) {
        echo "делится нацело";
    }   else {
        echo "делится с отстатком" . $rest;
    }
?>
