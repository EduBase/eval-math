<?php
/////////////////////////////////////////////////
// HELPERS
/////////////////////////////////////////////////

/* Triginometric functions */
function csc($in){ return 1/sin($in); }
function sec($in){ return 1/cos($in); }
function sgn($in){ return ($in>0)?1:(($in<0)?-1:0); }

/* Divide and modulo */
function div($a,$b){ return floor($a/$b); }
function mod($n,$i){ return modulo($n,$i); }
function modulo($n,$i)
{
    if(is_null($i) || $i<=0)
        return 0;
    return ((int)$n) % ((int)$i);
}

/* Greatest common divisor */
function gcd($a,$b){ return $b?gcd($b,((int)$a)%((int)$b)):$a; }

/* Prime number? */
function isprime($n)
{
    /* Checks */
    if($n<2)
        return 0;
    if($n==2)
        return 1;

    /* Process */
    $i=2;
    $sqrtN=sqrt($n);
    while($i<=$sqrtN)
    {
        if($n%$i==0)
            return 0;
        $i++;
    }
    return 1;
}