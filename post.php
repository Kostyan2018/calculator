<?php

//initialize vars
$inputNum1 = 0;
$inputNum2 = 0;

//get data from input
if (isset( $_GET['inputNum1'] )) {
    $inputNum1 = (int) $_GET['inputNum1'];
}
if (isset( $_GET['inputNum2'] )) {
    $inputNum2 = (int) $_GET['inputNum2'];
}

//get result of math operation
if( check ($inputNum1, $inputNum2) ){

    if($_GET['operation'] == '*'){
        multiplication($inputNum1, $inputNum2);
    }

    if($_GET['operation'] == '+'){
        plus($inputNum1, $inputNum2);
    }

    if($_GET['operation'] == '-'){
        minus($inputNum1,$inputNum2);
    }

    if($_GET['operation'] == '/') {
        devision($inputNum1, $inputNum2);
    }
} else {
        echo "Форма працює лише з числами!!!";

}
