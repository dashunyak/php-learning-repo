<?php
    $num = 4;
    $rest = $num % 2;
    if ($rest === 0) {
        echo "делится нацело";
    }   else {
        echo "делится с отстатком" . $rest;
    }
?>
