<?php

namespace classes;

use Exception;

require '../vendor/autoload.php';

require 'Aquarium.php';

$a=4;
$b=3;
if($a+$b==5) {
    echo 'ok';
} else {
    throw new Exception('blad');
}