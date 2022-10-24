<?php
/**
 * Created by VSCode.
 */
require_once './vendor/autoload.php';

use DC\Batman\Batman;
use DC\Superman\Superman;

$Batman = new Batman();
$Superman = new Superman();

echo $Batman->desc();
echo "\n";
echo $Superman->desc();