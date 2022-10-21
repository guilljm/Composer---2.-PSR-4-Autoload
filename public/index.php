<?php

require '../src/Hello.php';

use App\Hello;

$hello = new Hello();

echo $hello->talk() . PHP_EOL;
