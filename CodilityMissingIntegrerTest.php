<?php
This solution is written in PHP 7.3 and therefore works only for PHP >=7.3
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
  
    sort($A);
    $b = array_filter($A, function($number) {
        return $number > 0;
    });
    $N = count($b);
    if($N==0){
        return 1;
    }
    elseif($N==1){
        if($b[$N-1]>1){
            return $b[$N-1]-1;
        }
        else{
            return $b[$N-1]+1;
        }
    }
    elseif($N>1){
        $f_key = array_key_first($b);
        $l_key = array_key_last($b);
        for($i=$b[$f_key]; $i<=$b[$l_key]; $i++){
            if(!in_array($i, $b)==true){
                return $i; break;
            }
            if($N-($b[$l_key]-$b[$f_key])==1){
                return $b[$l_key]+1;
            }
            
        }
    }
    else{
        return null;
    }
}
// TEST CASES. REMOVE THESE WHEN TESTING ON CODILITY
$test1 = array(-10, -1000, -101, -10, -1);  //-VE VALUES
$test2 = array(-1100, -12, 22, 1);          //+VE & -VE VALUES
$test3 = array(1200, 10, 12, 92);           //+VE SKIPPING VALUES
$test4 = array(1, 2, 3, 5, 4);              //+VE NON-SKIPPING VALUES
$test5 = array(10000, 12000, 900);          //LARGE +VE VALUES
$test6 = array(100,101,102,103);            //+VE NON-SKIPPING VALUES
print_r(solution($test6));                  //PRINT VALUES
