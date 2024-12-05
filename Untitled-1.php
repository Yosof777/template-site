<?php

function factorial($number){
    if ($number == 0 || $number==1)
        return 1;
    return $number * factorial($number -1);
    }

    function factorialMemo($number){
        static $arr =[];

        if ($number == 0 || $number==1)
        return 1;
       
        if(!empty($arr[$number]))
            return $arr[$number];
    
            ////////
       $ret = $number * factorialMemo($number -1);

       $arr[$number] = $ret;
    
        return $ret;
        }
    
    $time = microtime(TRUE);
for ($num1=1;$num1<=1000;$num1++){
    for($num=1;$num<=170;$num++){
        echo factorialMemo($num);
        echo "<br/>";
    }    
}
echo microtime(TRUE)-$time;

