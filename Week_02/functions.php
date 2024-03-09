<?php

function myFunction()
{
    printLine ("Hello World"); 

}

// myFunction();

// function helloPerson($name)
// {
//     print"Hello $name#";
// }
// helloPerson("Naveed");

function doubleNumber($number){
    if(is_numeric($number)){
        return 2*$number;
    }
    return 0;
}
function printLine($line)
{
    print $line. "\n";
}

print doubleNumber(5);

print doubleNumber("ss");
 myFunction();
