<?php

function boolToString($bool)
{
    if ($bool){
        return 'true';
    }
    
    return 'false';
}


print "Age 25 " . boolToString(25). "\n";