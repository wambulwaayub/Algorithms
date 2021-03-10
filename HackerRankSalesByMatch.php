<?php
//HackerRank Sales by Match PHP Solution
function sockMerchant($n, $ar) {
    $n = count($ar);
    $new_arr=array_count_values($ar);
    $k=0;
    $k1=0;
    foreach($new_arr as $key=>$value){
        if($value == 2){
            $k += 1;
        }
        if($value>2){
            $k1 +=intdiv($value,2);
        }
    }
    return $k+$k1;
}
//Delete Below Code before running. It is for testing purposes
// 
echo sockMerchant(11,[1,2,1,3,4,5,6,7,2,9,0]);
