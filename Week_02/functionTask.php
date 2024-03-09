<?php

function ageCheck($age)
{
    if($age >=18)
    {
        return TRUE;
    }
        return FALSE;
    
};

print "Age 25" . ageCheck(25). "\n";