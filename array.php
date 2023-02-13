<?php

$numArray = array(-12,11,-13,-5,6,-7,5,-3,-6);
$positiveNum = array_filter($numArray,function($x){return $x > 0;});
$negativeNum = array_filter($numArray,function($x){return $x < 0;});

array_multisort($positiveNum,SORT_DESC,SORT_NUMERIC);

$sortedArray = array_merge($negativeNum,$positiveNum);
print_r($sortedArray);

// function sortArray ($x,$y){
//     return $x - $y;
// }

// usort($numArray,"sortArray");
// echo  print_r($numArray);


?>