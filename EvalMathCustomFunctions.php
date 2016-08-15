<?php
/////////////////////////////////////////////////
// HELPERS
/////////////////////////////////////////////////

function csc($in){ return 1/sin($in); }
function sec($in){ return 1/cos($in); }
function sgn($in){ return ($in>0)?1:(($in<0)?-1:0); }

function modulo($n,$i)
{
    if(is_null($i) || $i==0)
        return 0;
    return (int)$n % (int)$i;
}

function isprime($n)
{
    $i=2;

    /* Checks */
    if($n<2)
        return 0;
    if($n==2)
        return 1;

    $sqrtN=sqrt($n);
    while($i<=$sqrtN)
    {
        if($n%$i==0)
            return 0;
        $i++;
    }
    return 1;
}