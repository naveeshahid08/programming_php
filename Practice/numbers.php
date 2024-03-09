<?php
/* $number = "45";
print is_numeric($number);
print "\n";
print $number+1;
print "\n";
print (int)$number+10; */

$minutes = 100;
$hours = (int)($minutes/60);
$extra_minutes=$minutes%60;
print "$hours h $extra_minutes mins";
