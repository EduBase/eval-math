<?php
/////////////////////////////////////////////////
// HELPERS
/////////////////////////////////////////////////

/* Triginometric functions and aliases */
function csc($in){ return 1/sin($in); }
function sec($in){ return 1/cos($in); }
function cot($in){ return 1/tan($in); }
function coth($in){ return 1/tanh($in); }
function arcsin($in){ return asin($in); }
function arcsinh($in){ return asinh($in); }
function arsinh($in){ return asinh($in); }
function arsh($in){ return arsinh($in); }
function arccos($in){ return acos($in); }
function arccosh($in){ return acosh($in); }
function arcosh($in){ return acosh($in); }
function arch($in){ return arcosh($in); }
function arctan($in){ return atan($in); }
function arctanh($in){ return atanh($in); }
function artanh($in){ return atanh($in); }
function arccot($in){ return atan(1/($in)); }
function arcot($in){ return arccot($in); }
function acot($in){ return arccot($in); }
function arccoth($in){ return atanh(1/($in)); }
function arcoth($in){ return arccoth($in); }
function acoth($in){ return arccoth($in); }

/* Signum */
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

/* Roman numbers */
function roman2number($roman){ return ICE::roman_to_number($roman); }
function number2roman($arabic){ return ICE::number_to_roman($arabic); }