<?php
function total(float $fArg, float $sArg, float $tArg = 0): float
{
	return $fArg * $sArg + $tArg;
}
 
 /*$basket_total= total(1, 0.1);
 $basket_total= total(1, 0.2,  $basket_total);
 echo"\nPrice of order is $basket_total\n";
 $basket_total= total(3, 1.4,  $basket_total);
 echo"\nPrice of order is $basket_total\n";*/
