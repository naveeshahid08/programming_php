<?php

$age =17;
$nationality = 'Finnish';

if($age < 18)
{
 print "Can not vote \n";
 print " ";
}
else
{
    if($nationality !== 'Finnish'){
        print "Can not vote \n";
    }
    else {
        print "Can vote \n";
    }
}

if ($age < 18)
{
    print "Child";
}
elseif ($age <35)
{
    print "Adult";
}
elseif ($age <65)
{
    print "Middle Aged";
}
else {
    print "Old";
}
