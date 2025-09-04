<?php
function soma($numA, $numB){
    return $numA + $numB;
}

function subtracaoComRetornoPositivo($numA, $numB) {
    return ($numA > $numB) ? $numA - $numB : $numB - $numA;
}

function multiplica(int $numA, int $numB): int {
    return $numA * $numB;
}

function divide(int $numA, int $numB) : float {
    return $numA / $numB;
}