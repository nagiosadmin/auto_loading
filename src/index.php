<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Controllers\Calculation;

$calc = new Calculation;
$result = $calc->sum(1, 2);
echo "soma 1 + 2 = $result\n";
