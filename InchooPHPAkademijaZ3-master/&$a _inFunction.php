<?php

function add($num) { $num++; }

$number = 0;
add($number);
echo $number; //result : 0

function add1(&$num1) { $num1++; }

$a = 0;
add1($a);
echo $a; //result : 1 //uzima se u obzir unutarnja vrijednost $num++;