<?php
    echo time();
?>
<br>
<?php
    echo mktime(0, 0, 0, 3,1, 2025);
?>
<br>
<?php
    echo mktime(0, 0, 0, 12, 31);
?>
<br>
<?php
    $now = time();
    echo $now - mktime(13, 12, 59, 3, 15, 2000);
?>
<br>
<?php
    $now = time();
    $date = mktime(7, 23, 48);
    $hour = floor(($now -$date) / 60 / 60);
    echo $hour;
?>
<br>
<?php
    echo date('Y-m-d H-i-s');
?>
<br>
<?php
    echo date('Y-m-d') . '<br>';
    echo date('d.m.Y') . '<br>';
    echo date('d.m.y') . '<br>';
    echo date('H:i:s');
?>
<br>
<?php
    echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
?>
<br>
<?php
    $week = ['sn', 'mn', 'tu', 'wd', 'th', 'fr', 'st'];
    echo $week[date('w', time())] . '<br>';
    echo $week[date('w', mktime(0, 0, 0, 6, 6, 2006))] . '<br>';
    echo $week[date('w', mktime(0, 0, 0, 9, 25, 2004))];
?>
<br>
<?php
    $month = [1 => 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
    echo $month[date('n', time())];
?>
<br>
<?php
    echo date('t', time());
?>
<br>
<?php
    echo date('d-m-Y', strtotime('2025-12-31'));
?>
<br>
<?php
    $date = date_create('2025-12-31');
    echo date_format(date_modify($date, '1 day'), 'Y-m-d');
    echo date_format(date_modify($date, '1 month 3 day'), 'Y-m-d');
    echo date_format(date_modify($date, '1 year'), 'Y-m-d');
    echo date_format(date_modify($date, '-3 day'), 'Y-m-d');
?>
<br>
<?php
    $now = time();
    $newYear = mktime(0, 0, 0, 12, 31);
    echo ($newYear - $now) / 60 / 60 / 24;
?>