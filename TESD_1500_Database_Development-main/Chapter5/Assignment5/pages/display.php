<?php
    require 'header.php';
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    echo '<p>Answer: '.selectOperator($operator, $num1, $num2).'</p>';



function add($num1, $num2) {
    return $num1 + $num2;
}
function subtract($num1, $num2) {
    return $num1 - $num2;
}
function multiply($num1, $num2) {
    return $num1 * $num2;
}
function divide($num1, $num2) {
    return $num1 / $num2;
}

function selectOperator($operator, $num1, $num2) {
    switch($operator) {
        case 0:
            return add($num1, $num2);
        case 1:
            return subtract($num1, $num2);
        case 2:
            return multiply($num1, $num2);
        case 3:
            return divide($num1, $num2);
    }
}

require 'footer.php';
?>