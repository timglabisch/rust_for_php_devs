<?php

function greet($who) {
    var_dump(xdebug_debug_zval($foo));
    echo $who;
    var_dump(xdebug_debug_zval($foo));
}

$foo = "bar";
var_dump(xdebug_debug_zval($foo));
greet($foo);
var_dump(xdebug_debug_zval($foo));
greet($foo);
var_dump(xdebug_debug_zval($foo));

