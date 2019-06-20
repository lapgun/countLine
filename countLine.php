<?php
function sumLine($arr, $sum)
{

    for ($i = 0; $i = count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            $sum = $arr[$i][$j] + $arr[$i + 1][$j + 1] ;
        }
    }
    return $sum;
}
$arr = [
    [1,2],
    [2,3],
];
$sum = 0;
var_dump(sumLine($arr, $sum));


?>