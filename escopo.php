<?php

$x = 50;

function soma(){
    global $x;
    $y = $x + 60;
    return $y;
};

echo soma();