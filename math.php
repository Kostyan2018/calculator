<?php

//check if input data is correct
function check($inputNum1, $inputNum2)
{
    if(
        $inputNum1 != null and
        $inputNum2 != null and
        is_numeric($inputNum1) and
        is_numeric($inputNum2)
    ){
        return true;
    }else{
        return false;
    }
}
// math operations
function plus($a, $b){
    echo $a + $b;
}

function minus($a, $b){
    echo $a - $b;
}

function multiplication($a, $b){
    echo $a * $b;
}

function devision($a, $b) {
    echo $a / $b;
}

