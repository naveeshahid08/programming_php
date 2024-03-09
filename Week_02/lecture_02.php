<?php
/* $cars =['BMW','Tesla','Skoda'];
print $cars[1]."\n"; //Concationation to print it to the new line.
$cars[1]='Ford';
print var_dump($cars); */


// $words =[];
// $words[13] ="Business";
// $words[14] ="College";
// unset ($words[13]);
// print var_dump($words);

// print $words[0];

$customer_ages = [2,4,8,12,65,34];
$sorted_customers=$customer_ages;
sort($sorted_customers);
// print var_dump($sorted_customers);
// print var_dump (end($sorted_customers));

print "Youngest is $sorted_customers[0] year old." ."\n";
print "Oldest is " . (end($sorted_customers)). " year old.";